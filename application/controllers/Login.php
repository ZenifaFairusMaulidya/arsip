<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
  }

  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('arsip'); // Redirect ke page welcome
    $this->load->view('login/index'); // Load view login.php
  }
  
  public function proses_login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->Login_model->get($username); // Panggil fungsi get yang ada di Login_model.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
      redirect('login/index'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,  // Buat session username
          'nama_user'=>$user->nama // Buat session authenticated
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('arsip'); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect('login'); // Redirect ke halaman login
      }
    }
  }
  
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('login'); // Redirect ke halaman login
  }
}