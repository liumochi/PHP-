<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/17
 * Time: 10:20
 */
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');

        }
        public function index(){

        }
        public function login(){
            $this->load->view('login.php');
        }
        public function do_login(){
            $account=$this->input->post('email');
            $pass=$this->input->post('pwd');
            $rs=$this->user_model->get_select($account,$pass);
            if($rs){
                $arr=array(
                    'id'=>$rs->USER_ID,
                    'name'=>$rs->NAME
                );
                $this->session->set_userdata($arr);
                redirect('user/login');
            }else{
                redirect('blog/index');
            }

        }

        public function reg(){
            $this->load->view('reg.php');
        }
        public function do_reg(){
            $account=$this->input->post('email');
            $name=$this->input->post('name');
            $pass=$this->input->post('pwd');
            $gender=$this->input->post('gender');
            if($gender=='1'){
                $gname='男';
            }else{
                $gname='女';
            }
            $arr=array(
                'ACCOUNT'=>$account,
                'PASSWORD'=>$pass,
                'NAME'=>$name,
                'GENDER'=>$gname
            );

            $rs=$this->user_model->get_insert($arr);
            if($rs){
                redirect("user/login?address=heida.php");
            }else{
                redirect('user/reg');
            }

        }

    }
?>