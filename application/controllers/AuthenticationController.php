<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/21/18
 * Time: 9:31 AM
 */

class AuthenticationController extends CI_Controller
{
    public function signUp()
    {
        $this->load->view('template/header');
        $this->load->view('template/sign_up_navbar');
        $this->load->view('authentication/sign_up');
        $this->load->view('template/footer');
    }

    public function signIn()
    {
        $submit = $this->input->post('submit');
        if (isset($submit)) {
            $user = $this->input->post('user');
            $pass = $this->input->post('password');

            $this->load->view('template/header');
            $this->load->view('template/sign_in_navbar');
            $this->load->view('authentication/sign_in');
            $this->load->view('template/footer');
            if ($this->authenticationModel->getPasswordEmail($user) != null){
                print_r("entered is Email");
                $password = $this->authenticationModel->getPasswordEmail($user);
            }else if ($this->authenticationModel->getPasswordPhone($user) != null){
                print_r("entered is Phone");
                $password = $this->authenticationModel->getPasswordPhone($user);
            }else if ($this->authenticationModel->getPasswordNumber($user) != null){
                print_r("entered is Reg or Work Number");
                $password = $this->authenticationModel->getPasswordNumber($user);
            }else{
                print_r("NOT FOUND");
            }

            if ($password === $pass){
                print_r("authentication successfull");
            }else{
                print_r("authentication failed");
            }

        }else{
            $this->load->view('template/header');
            $this->load->view('template/sign_in_navbar');
            $this->load->view('authentication/sign_in');
            $this->load->view('template/footer');
        }
    }
}