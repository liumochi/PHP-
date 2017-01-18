<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function get_from(){
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->from('user');
			$where = "blog.uid=user.uid";
			$this->db->where($where);
			//$this->db->join('user');
			$query=$this->db->get();
			return $query->result();
		}
		
		public function get_both(){
			//$this->db->query('select * from blog,user where blog.uid=user.uid');
			
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->join('user', 'user.uid = blog.uid');
			$query = $this->db->get();
			
			return $query->result();
			
		}
	
		public function get_data(){
			$query=$this->db->get('blog');
			return $query->result();
		}
		
		public function fenye($startno,$pagenum){
			//$sql="select * from blog limit ".$startno.",".$pagenum;
			//echo $sql;
			//die();
			//$query=$this->db->query($sql);
			$query=$this->db->get('blog',$pagenum,$startno);
			return $query->result();
		}
		
		public function get_allrows(){
			//$query=$this->db->query("select count(*) as allrows from blog");
			$query=$this->db->count_all('blog');
			//var_dump($query);
			//die();
			return $query;
		}
		
		public function get_name($name){
			$query=$this->db->query("select * from user where uname='$name'");
			
			return $query->row();
		}
		
		public function get_insert($name,$pass){
			$query=$this->db->query("insert into user(uid,uname,pass) values(null,'$name','$pass')");
			return $query;
		}
		
		public function get_check($name){
			$query=$this->db->get_where('user',array('uname'=>$name));
			return $query->row();
		}
		
		public function get_sel($name,$pass){
			$arr=array(
				'uname'=>$name,
				'pass'=>$pass,
			);
			$query=$this->db->get_where('user',$arr);
			return $query->row();
		}
	}


?>