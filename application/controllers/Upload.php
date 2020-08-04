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

    for ($i=0; $i < count($this->input->post("dosen")); $i++) {
      if (count($this->input->post("dosen")) -1 == $i) {
        $koma = "";
      }else{
        $koma = ";";

      }
      $masuk_email .= $this->input->post("dosen")[$i].$koma;
      $this->db->where('nidn', $this->input->post("dosen")[$i]);
      $emailnya[$i] = $this->db->get('namadosen')->row_array()['email'];
    }


    //


    // $this->db->where('nidn', $masuk_email);
    // $data = $this->db->get('namadosen')->row_array();

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

            foreach ($emailnya as $z) {
              // code...
              $this->email->set_newline("\r\n");
              $this->email->from("codeuser.a@gmail.com");
              $this->email->to($z);
              $this->email->subject("Suat undangan TU");
              $this->email->message("EMAIL UNTUK KAMU");
              $this->email->attach('./undangan/'.$this->upload->data("file_name"));
              $this->email->send();
            }


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
        $this->email->to("maulanazakaria.danu@gmail.com");
        $this->email->subject("Suat undangan TU");
        $this->email->message("EMAIL UNTUK KAMU");
        $this->email->attach('./undangan/asasdsadasdds.jpg');

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
