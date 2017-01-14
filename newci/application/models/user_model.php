<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 10:35
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function checkname($name)
    {

        $query = $this->db->query("select * from user where uname='$name'");
        // $this->db->get_where('');
        return $query->row();
    }

    public function get_insert($name, $pass)
    {
        //$query=$this->db->query("insert into user(uid,uname,pass) values(null,'$name','$pass')");
        $arr = array(
            'uname' => $name,
            'pass' => $pass
        );
        return $query = $this->db->insert('user', $arr);
    }
    public function get_check(){

    }
        public function get_sel(){

    }

}

?>