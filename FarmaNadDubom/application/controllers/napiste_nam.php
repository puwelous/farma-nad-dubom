<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Napiste_nam extends CI_Controller {

    const NAPISTE_NAM_SUBJECT = 'Nad Dubom - Sprava zo sekcie "Napiste nam"';

    public function index() {
        $this->load->helper('form');
        $this->load->view('napiste_nam');
    }

    public function email() {
        $this->load->library('form_validation');
        $this->lang->load('form_validation', 'slovak');

        $this->form_validation->set_rules('name', 'Vaše meno', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Váš e-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Správa', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            //load email library
            $this->load->library('email');

            // set email settings
            $this->email->from(
                    $this->input->post('email'), $this->input->post('name'));
            
            // set receiver - farma nad dubom's email
            $this->email->to($this->config->item('farma_nad_dubom_email'));

            // set constant subject for automatic email
            $this->email->subject(self::NAPISTE_NAM_SUBJECT);
            
            // set user's message
            $this->email->message( $this->input->post('message') );

            //send email
            if( !$this->email->send() ){
                
                log_message('debug', $this->email->print_debugger() );
                $this->load->view('napiste_nam_neuspesne_odoslanie');
                return;
            };

            log_message('debug', $this->email->print_debugger() );
            
            // load view
            $this->load->view('napiste_nam_uspesne_odoslanie');
        }
    }

}

/* End of file napiste_nam.php */
/* Location: ./application/controllers/napiste_nam.php */