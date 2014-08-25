<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Foto extends CI_Controller {

    public function daniel() {
        
        $data['title'] = 'Foto - daniel';
        $data['description'] = 'Nase fotky pre zver: daniel';
        
        $this->load->view('templates/header', $data);
        $this->load->view('foto/foto_daniel');
        $this->load->view('templates/footer');
    }

    public function muflon() {
        
        $data['title'] = 'Foto - muflon';
        $data['description'] = 'Nase fotky pre zver: muflon';
        
        $this->load->view('templates/header', $data);
        $this->load->view('foto/foto_muflon');
        $this->load->view('templates/footer');
    }

    public function highland() {
        
        $data['title'] = 'Foto - highland';
        $data['description'] = 'Nase fotky pre: highland';
        
        $this->load->view('templates/header', $data);
        $this->load->view('foto/foto_highland');
        $this->load->view('templates/footer');
    }

    public function okolie() {
        
        $data['title'] = 'Foto - Borov a okolie';
        $data['description'] = 'Fotky dediny Borov a jej okolia';
        
        $this->load->view('templates/header', $data);
        $this->load->view('foto/foto_okolie');
        $this->load->view('templates/footer');
    }

}

/* End of file foto.php */
/* Location: ./application/controllers/foto.php */