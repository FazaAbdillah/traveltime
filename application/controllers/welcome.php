<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function tampil(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function input(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
 
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level,
			);
		$this->m_data->input_data($data,'user');
		redirect('Welcome/tampil');
	}

	function tlogin(){
		$this->load->view('login');
	}



	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$fullname = $this->input->post('fullname');
	$level = $this->input->post('level');
 
	$data = array(
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'level' => $level
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('Welcome/tampil');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('Welcome/tampil');
	}
	function login(){
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$where =  array(
					'username'=>$username,
					'password'=>$password
				);
		$cek = $this->m_data -> cek_login("user",$where)->num_rows();
		if ($cek > 0){
			$data_session = array(
				'name'=>$username,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);

			redirect('index.php/tlogin');
		}else{
			echo "username dan password salah !";
			echo anchor('login','back');
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect('Welcome/logout');
	}

}