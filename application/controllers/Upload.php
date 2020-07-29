<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //load model admin
    $this->load->model('admin');
  }

  public function index()
  {
    if($this->admin->logged_id())
    {
      $this->load->view("Template/Header");
      $this->load->view("Template/Sidebar");
      $this->load->view("upload");


    }else{

      //jika session belum terdaftar, maka redirect ke halaman login
      redirect("dashboard");

    }
  }
  public function get_data_dosen(){
    $data['dosen'] = $this->db->get('namadosen')->result();
    // $data = "ada ada aja";
    return $data;
    // print_r($data);

  }
  public function kirim_data(){
    $dosen = $this->get_data_dosen();
    // print_r($dosen);
    $masuk_email = '';
    foreach ($dosen['dosen'] as $row) {
      // print_r($this->input->post("dosen_$row->nidn"));
      if($this->input->post("dosen_$row->nidn")){
        $email[$row->nidn] = $row->nidn;
        $masuk_email .= $row->nidn.";";
      }
    }
    // echo $masuk_email;
    $config['upload_path']          = './undangan/';
    $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_surat')) {
      $data = [
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'peserta_rapat' => $masuk_email,
        'file' => $this->upload->data("file_name")
      ];
      // print_r($data);
      $masuk_db = $this->db->insert('surat',$data);
      if($masuk_db){
        echo "<script>alert('data berhasil insert');window.location.href = '".base_url()."index.php/Upload';</script>";
        // redirect('Upload');
      }else{
        echo "<script>alert('data gagal insert');window.location.href = '".base_url()."index.php/Upload';</script>";
        // redirect('Upload');
      }

    }else{
      echo "ga bisa NIH PAK";
    }
  }
  public function sending_email(){
    $config = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_user' => 'codeuser.a@gmail.com',  // Email gmail
        'smtp_pass'   => 'Jung1234',  // Password gmail
        'smtp_crypto' => 'ssl',
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"
    ];
        $this->load->library('email', $config);

        $from = $this->config->item('smtp_user');


        $this->email->set_newline("\r\n");
        $this->email->from("codeuser.a@gmail.com");
        $this->email->to("moningka.naca@gmail.com");
        $this->email->subject("ini siapa");
        $this->email->message("yayayaya");
        $this->email->addAttachment('asasdsadasdds1.jpg');

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('dashboard');
  }

}
