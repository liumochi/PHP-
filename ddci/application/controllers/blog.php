<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/17
 * Time: 15:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');
    class Blog extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->load->view('index_logined.php');
        }
        public function unloginindex(){
            $this->load->view('index.php');

        }

    }
?>