<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Auth_Login_Model');
	}

	public function index()
	{
		$data["judul"] ="Halaman Login";
		$this->load->view("login/form",$data);
	}

	public function logout()
	{
		$data->session->session_destroy();
		$this->load->view('index'); 
	}

	// function filter($word)
	// {
	// 	$char = array('-','/','\\',',','.','#',':',';','\','"',"'",'[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
	// 	$word = str_replace($char, '', trim($word));
	// 	$word = stripslashes(trim($word));
	// 	$word = mysql_real_escape_string($word);
	// 	$word = htmlentities($word);
	// 	$word =nl2br($word);
	// 	return $word;
	// }
	public function cek_login(){
		$data =  array('user_username'=>htmlentities($_POST['user_username']),
						'user_password'=>md5(addslashes($_POST['user_password']))
		);
	$hasil = $this->Auth_Login_Model->cek_user($data);
	if($hasil->num_rows()==1){
		foreach ($hasil->result()as $sess) {
			$sess_data['logged_in'] ='Sudah Login';
			$sess_data['id_user'] = $sess->id_user;
			$sess_data['user_username'] =$sess->user_username;
			$sess_data['user_grup'] = $sess->user_grup;
			$this->session->set_userdata($sess_data);
		}
		if ($this->session->userdata('user_grup')=='guru') {
			redirect('c_guru');
		}
			elseif ($this->session->userdata('user_grup')=='siswa'){
				redirect('c_siswa');
			}
			else{
				$this->load->view("login/form");
			}
		}
	}
	
	}
				