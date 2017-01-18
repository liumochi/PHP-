<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		// public function __construct(){
			// //$this->load->helper('url');
		// }
		public function __construct(){
			parent::__construct();
			$this->load->library('pagination');
		}
		
		public function aa(){
			$this->load->model('user_model');
			$rs=$this->user_model->get_both();
			
			echo "<pre>";
			var_dump($rs);
			echo "</pre>";
		}
		
		public function bb(){
			$this->load->model('user_model');
			$rs=$this->user_model->get_from();
			var_dump($rs);
		}
		
		
		public function index(){
			//echo 1234;
			//$this->load->model('user_model');
			//$rs=$this->user_model->get_data();
			$this->load->model('user_model');
			$rows=$this->user_model->get_allrows();
			
			//var_dump($rows);
			//die();
			
			//$allrows=$rows->allrows;
			//echo $allrows;
			//die();
			$site=site_url('user/index');
			//echo $site;
			//die();
			$config['base_url'] = "$site";
			$config['total_rows'] = $rows;
			$config['per_page'] = 2;
			//$config['first_link'] = '首页';
			//$config['last_link'] = '末页';

			$this->pagination->initialize($config);
			
			$startno=$this->uri->segment(3)==null?0:$this->uri->segment(3);
			$rs=$this->user_model->fenye($startno,$config['per_page']);
			$arr['bloglist']=$rs;
			$this->load->view('index.php',$arr);
			
			//1:数据总条目、每页显示数据数--->总共显示页数
			//2:limit 开始索引,每页显示数据数 select * from Blog
			//3:需要在view下把一堆a标签画出来 并且href要进行一个get提交
			
			
		}
		
		public function reg(){
			$this->load->view('reg.php');
		}
		public function do_reg(){
			$name=$this->input->post('name');
			$pass=$this->input->post('pass');
			
			//加载user_model类 调用model类下的get_name()
			$this->load->model('user_model');
			$rs=$this->user_model->get_name($name);
			if($rs){
				//echo "<script>alert('用户名已存在')</script>";
				redirect('user/reg');
			}else{
				//redirect('user/login');
				$query=$this->user_model->get_insert($name,$pass);
				if($query){
					redirect('user/login');
				}
				
			}
			//echo $name."---".$pass;
		}
		
		public function login(){
			$this->load->view('login.php');
		}
		
		public function do_login(){
			$name=$this->input->post('uname');
			$pass=$this->input->post('pass');
			
			$this->load->model('user_model');
			$rs=$this->user_model->get_sel($name,$pass);
			
			
			if($rs){
				//$aa=$rs->uid;
				//die();
				//$this->session->id=$aa;
				//var_dump($rs->uname);
				//die();
				
				
				//set_cookie('id',$rs->uid);
				
				//$_SESSION['id']=$rs->uid;
				//$_SESSION['name']=$rs->uname;
 				
				$arr=array(
					'id'=>$rs->uid,
					'name'=>$rs->uname,
				);
				
				//var_dump($arr);
				//die();
				//$this->session->id=
				$this->session->set_userdata($arr);
				//echo $_SESSION['name'];
				//die();
				redirect('user/index');
			}
		}
		
		public function checkname(){
			header("Access-Control-Allow-Origin:*");
			$name=$this->input->post('uname');
			//echo $name;
			$this->load->model('user_model');
			$rs=$this->user_model->get_check($name);
			
			//echo "success";
			if($rs){
				echo "success";
			}
			
			/*
			$name=$this->input->post('name');
			$pass=$this->input->post('pass');
			$jsonarr=array('uname'=>$name,'pass'=>$pass);
			$jsonobj=json_encode($jsonarr);
			echo $jsonobj;*/
			//echo $name."--".$pass;
			//$str="{'name':'$name','pass':'$pass'}";
			//echo $str;
			
			
			//echo "success";
			//header("Access-Control-Allow-Origin:*");
			//$name=$this->input->post('name');
			//$pass=$this->input->post('pass');
			//$jsonarr=array('username'=>$name,'pass'=>$pass);
			//$jsonobj=json_encode($jsonarr);
			//echo $jsonobj;
			/*
			if($name=='sword' and $pass='12345'){
				echo "success";
			}else{
				echo "error";
			}*/
			/*
			header("Access-Control-Allow-Origin:*");
			$name=$this->input->post('name');
			$this->load->model('user_model');
			$rs=$this->user_model->get_name($name);
			if($rs){
				echo "success";
				
			}else{
				echo "error";
			}*/
		}
	}

?>