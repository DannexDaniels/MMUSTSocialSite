<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/21/18
 * Time: 9:54 AM
 */

class AuthenticationModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getPasswordEmail($email){
        $query = $this->db->get_where('authentication',array('recovery_email' => $email));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getPasswordPhone($phone){
        $query = $this->db->get_where('authentication',array('recovery_phone' => $phone));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getPasswordNumber($no){
        $query = $this->db->get_where('authentication',array('user' => $no));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

}