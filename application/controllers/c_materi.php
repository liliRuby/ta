<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_materi extends CI_Controller {



  protected $uri_segment_one = "c_materi";
  protected $folder = "materi";
  protected $title = "Materi yang tersedia";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_materi');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_materi->findAll()
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
        'data'  => $this->m_guru->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_guru');
            $data = [
             'judul_materi' => $this->input->post('judul_materi'),
             'sub_materi' => $this->input->post('sub_materi'),
             'tanggal_materi' => $this->input->post('tanggal_materi'),
             'isi_materi' => $this->input->post('isi_materi'),
             'referensi_materi' => $this->input->post('referensi_materi'),
             'lahir_guru' => $this->input->post('lahir_guru'),
             'file_materi' => $this->input->post('file_materi'),
             'kelas_materi' => $this->input->post('kelas_materi'),
             'id_guru' => $this->input->post('id_guru'),


        ];
            if ($id!='') 
            {
                $this->m_materi->model_update($data,$id);
            } else {
                $this->m_materi->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_materi->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
