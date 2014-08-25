<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Napiste_nam extends CI_Controller {

    const NAPISTE_NAM_SUBJECT = 'Nad Dubom - Sprava zo sekcie "Napiste nam"';

    public function index() {

        $data['title'] = 'Napiste nam';
        $data['description'] = 'Formular pre kontaktovanie spravcu farmy Nad dubom';

        $this->load->helper('form');

        $this->load->view('templates/header', $data);
        $this->load->view('napiste_nam');
        $this->load->view('templates/footer');
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
            $this->_sendEmail();
        }
    }

    private function _sendEmail() {
        //load email library
        $this->load->library('email');

        // set email settings
        $this->email->from(
                $this->input->post('email'), $this->input->post('name'));

        // set receiver - farma nad dubom's email
        $this->email->to($this->config->item('farma_nad_dubom_email'));
        log_message('debug', 'Loaded recipient email: ' . $this->config->item('farma_nad_dubom_email'));

        // set constant subject for automatic email
        $this->email->subject(self::NAPISTE_NAM_SUBJECT);

        // set user's message
        $this->email->message($this->input->post('message'));

        //send email
        if (!$this->email->send()) {

            log_message('debug', $this->email->print_debugger());

            $data['title'] = 'Neuspesne odoslanie';

            $this->load->view('templates/header', $data);
            $this->load->view('napiste_nam_neuspesne_odoslanie');
            $this->load->view('templates/footer');

            return;
        };

        $data['title'] = 'Uspesne odoslanie';

        // load view
        $this->load->view('templates/header', $data);
        $this->load->view('napiste_nam_uspesne_odoslanie');
        $this->load->view('templates/footer');
    }

}

/* End of file napiste_nam.php */
/* Location: ./application/controllers/napiste_nam.php */