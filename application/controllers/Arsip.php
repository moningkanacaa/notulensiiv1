<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('m_data');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $data['datamasuk'] = $this->m_data->tampil_data();
            $this->load->view("Template/Header");
            $this->load->view("Template/Sidebar");
            $this->load->view("arsip",$data);
            // $this->db->get('datamasuk');


        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("arsip");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
