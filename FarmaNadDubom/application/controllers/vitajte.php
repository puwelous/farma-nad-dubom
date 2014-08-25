<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vitajte extends CI_Controller {

    public function index() {

        //$data['title'] = 'Vitajte'; -> directly in vitajte.php view template
        
        //$this->load->view('header');
        $this->load->view('vitajte');
        //$this->load->view('footer');
    }

}

/* End of file vitajte.php */
/* Location: ./application/controllers/vitajte.php */