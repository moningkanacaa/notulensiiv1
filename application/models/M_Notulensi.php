<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Notulensi extends CI_Model
{
    private $_table = "datamasuk";

    public $id;
    public $agenda_r;
    public $waktu;
    public $lokasi_r;
    public $jumlahorg;
    public $nomors;
    public $pembahasan;
    public $hasilrapat;
    public $keterangan;

    public function save()
    {
        $data = [
            'id' => $this->input->post('id'),
            'agenda_r' => $this->input->post('agenda_r'),
            'Waktu' => $this->input->post('waktu'),
            'lokasi_r' => $this->input->post('lokasi_r'),
            // 'jumlahorg' => $this->input->post('jumlahorg'),
            // 'nomor_s' => $this->input->post('nomor_s'),
            'pembahasan' => $this->input->post('pembahasan'),
            'hasilrapat' => $this->input->post('hasilrapat'),
            'keterangan' => $this->input->post('keterangan'),
      ];
      $input = $this->db->insert($this->_table,$data);
      return $input;
    }

    public function getNomorsurat()
    {
      return $this->db->get('surat');
    }
  }
