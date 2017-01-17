<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/17
 * Time: 15:09
 */
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_model{
        public function get_insert($arr){
            $this->db->insert('t_users',$arr);
            return $this->db->affected_rows();
        }
        public function get_select($account,$pass){
            $arr=array(
                'ACCOUNT'=>$account,
                'PASSWORD'=>$pass,
                );
            $this->db->get_where('t_users',$arr);
            return $this->db->affected_rows();

        }
    }

?>