<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Foto extends CI_Controller {

    public function daniel() {
        $this->load->view('templates/header');
        $this->load->view('foto/foto_daniel');
        $this->load->view('templates/footer');
    }

    public function muflon() {
        $this->load->view('templates/header');
        $this->load->view('foto/foto_muflon');
        $this->load->view('templates/footer');
    }

    public function highland() {
        $this->load->view('templates/header');
        $this->load->view('foto/foto_highland');
        $this->load->view('templates/footer');
    }

    public function okolie() {
        $this->load->view('templates/header');
        $this->load->view('foto/foto_okolie');
        $this->load->view('templates/footer');
    }

}

/* End of file foto.php */
/* Location: ./application/controllers/foto.php */