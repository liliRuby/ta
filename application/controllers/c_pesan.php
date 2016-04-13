<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pesan extends CI_Controller {



  protected $uri_segment_one = "c_pesan";
  protected $folder = "pesan";
  protected $title = "Pesan";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_pesan');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_pesan->findAll()
        ];
    $this->load->view($this->folder.'/index',$data);
  }

    public function add()
    {   $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one        
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function edit($id)
    {   

        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'data'  => $this->m_pesan->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_pesan');
            $data = [
             'id_siswa' => $this->input->post('nama_siswa'),
             'id_guru' => $this->input->post('nama_guru'),
             'tanggal_pesan' => $this->input->post('tanggal_pesan'),
             'subjek_pesan' => $this->input->post('subjek_pesan'),
             'isi_pesan' => $this->input->post('isi_pesan'),
             'tujuan_pesan' => $this->input->post('tujuan_pesan')


        ];
            if ($id!='') 
            {
                $this->m_pesan->model_update($data,$id);
            } else {
                $this->m_pesan->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_berita->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
