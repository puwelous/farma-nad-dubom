<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chov extends CI_Controller {

    public function daniel() {
        
        $data['title'] = 'Chov danielov';
        $data['description'] = 'Nase skusenosti s chovom danielov';
        
        $this->load->view('templates/header', $data);
        $this->load->view('chov/chov_daniel');
        $this->load->view('templates/footer');
    }

    public function muflon() {
        
        $data['title'] = 'Chov muflonov';
        $data['description'] = 'Nase skusenosti s chovom muflonov';
        
        $this->load->view('templates/header', $data);
        $this->load->view('chov/chov_muflon');
        $this->load->view('templates/footer');        
    }

    public function highland() {
        
        $data['title'] = 'Chov highlandov';
        $data['description'] = 'Nase skusenosti s chovom highlandov';
        
        $this->load->view('templates/header', $data);
        $this->load->view('chov/chov_highland');
        $this->load->view('templates/footer');        
    }

}

/* End of file chov.php */
/* Location: ./application/controllers/chov.php */