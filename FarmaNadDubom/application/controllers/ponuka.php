<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ponuka extends CI_Controller {

    public function index() {
        
        $data['title'] = 'Nasa ponuka';
        $data['description'] = 'Ponuka nami chovanych danielov, muflonov a highlandov';
        
        $this->load->view('templates/header', $data);
        $this->load->view('ponuka');
        $this->load->view('templates/footer');
    }

}

/* End of file ponuka.php */
/* Location: ./application/controllers/ponuka.php */