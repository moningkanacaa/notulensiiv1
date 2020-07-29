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
      $data ['nomor_surat'] = $this->M_Notulensi->getNomorsurat()->result();
      $this->load->view("Template/Header");
      $this->load->view("Template/Sidebar");
      $this->load->view("notulensi", $data );
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
    "nama" => "Notulensi",
        )
    );

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "catatan-rapat.pdf";
    $this->pdf->load_view('test', $data);

  }


}
