<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/19/18
 * Time: 2:21 PM
 */

class HomeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
}