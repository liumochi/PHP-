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
        $query=$this->db->query("insert into user(uid,uname,pass) values(null,'$name','$pass')");
//        $arr = array(
//            'uname' => $name,
//            'pass' => $pass
//        );
        return $query;
    }
    public function get_check($name){
    $query=$this->db->get_where('user',array('uname'=>$name));
    return $query->row();
    }
        public function get_sel($name,$pass){
        $arr=array(
            'uname'=>$name,
            'pass'=>$pass
        );
        $query=$this->db->get_where('user',$arr);
        return $query->row();
    }
    public function get_data(){
            $query=$this->db->get('blog');
            return $query->result();

    }


    public function fenye($startno,$pagenum){
            $query=$this->db->get('blog',$pagenum,$startno);
            return $query->result();

    }


    public function get_allrows(){
       // $query=$this->db->query("select count(*) as allrows from blog");
        $query=$this->db->count_all('blog');
        return $query;
    }

}

?>