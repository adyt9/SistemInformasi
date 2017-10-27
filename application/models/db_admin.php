<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_admin extends CI_Model {

    public function getData($username, $password){
        return $this->db->get_where('admin',array('username'=>$username, 'password'=>$password));
    } 

}
