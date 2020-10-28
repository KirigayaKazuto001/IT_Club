<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('profile');
        $this->load->view('template/footer');
    }
<<<<<<< Updated upstream
=======

    public function organisasi() 
    {
        $this->load->view('template/header');
        $this->load->view('organisasi');
        $this->load->view('template/footer');
    }

    public function visimisi() 
    {
        $this->load->view('template/header');
        $this->load->view('visimisi');
        $this->load->view('template/footer');
    }

    public function fasilitas() 
    {
        $this->load->view('template/header');
        $this->load->view('fasilitas');
        $this->load->view('template/footer');
    }
>>>>>>> Stashed changes
}