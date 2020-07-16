<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notulensi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Admin");
    $this->load->model("M_Notulensi");
  }

  public function index()
  {
    if($this->Admin->logged_id())
    {
      $this->load->view("Template/Header");
      $this->load->view("Template/Sidebar");
      $this->load->view("notulensi");
    }else{

      //jika session belum terdaftar, maka redirect ke halaman login
      redirect("dashboard");

    }
  }

  public function add()
  {
    $notulensiv1 = $this->M_Notulensi->save();
    redirect('notulensi');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('dashboard');
  }
  public function generate_pdf()
  {
    $data = array(
      "dataku" => array(
        "nama" => "Petani Kode",
        "url" => "http://petanikode.com"
      )
    );

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('test', $data);

  }

}
