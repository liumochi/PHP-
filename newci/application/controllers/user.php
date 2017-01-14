<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 9:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->view('reg.php');
    }
//            public function index(){
//
//            }
    public function reg()
    {
        //把view中reg.php在浏览器展示;
         $this->load->view('reg.php');
    }

    public function do_reg()
    {
        $name = $this->input->post('name');
        $pass = $this->input->post('pass');

        $this->load->model('user_model');
        $rs = $this->user_model->checkname($name);

        if ($rs) {
            redirect('user/reg');
            //$this->reg();
        } else {
            $this->load->model('user_model');
            $rs = $this->user_model->get_insert($name, $pass);

            if ($rs) {
                // $this->login();
                redirect('user/login');
            }else{
                echo 123;
            }
        }

    }

    public function check()
    {
        $this->input->post('uname');

    }

    public function login()
    {

        $this->load->view('login.php');
    }
    public function checkname(){
        $name=$this->input->post('uname');
        $this->load->model('user_model');
        $rs=$this->user_model->get_check($name);
        if($rs){
            echo "success";
        }
    }
//    public function do_login(){
//        $name=$this->input->post('uname');
//        $pass=$this->input->post('pass');
//        $this->load->model('user_model');
//        $this->user_model->get_sel($name,$pass);
//        $rs = $this->user_model->get_insert($name,$pass);
//
//    }
}

?>