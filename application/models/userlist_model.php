<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlist_model extends CI_Model {
    var $name = "";
    var $password = "";
    var $auth = "";

    function get_list() {
        $query = $this->db->query("SELECT * FROM User");
        return $query->result();
    }

    function add_user() {
        $this->name     = $_POST['name'];
        $this->password = $_POST['password'];
        $this->auth     = $_POST['auth'];
        $this->db->insert('User', $this);
    }

}
