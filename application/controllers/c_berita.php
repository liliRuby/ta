<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_berita extends CI_Controller {



  protected $uri_segment_one = "c_berita";
  protected $folder = "berita";
  protected $title = "Berita";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_berita');
        $this->load->model('m_guru');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_berita->findAll()
        ];
    $this->load->view($this->folder.'/index',$data);
  }

    public function add()
    {   $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one ,
        'items'=>$this->m_guru->findAll()
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function edit($id)
    {   

        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'data'  => $this->m_berita->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_berita');
            $data = [
             'judul_berita' => $this->input->post('judul_berita'),
             'isi_berita' => $this->input->post('isi_berita'),
             'tanggal_berita' => $this->input->post('tanggal_berita'),
             'file_berita' => $this->input->post('tanggal_berita'),
             'id_guru' => $this->input->post('id_guru'),


        ];
            if ($id!='') 
            {
                $this->m_berita->model_update($data,$id);
            } else {
                $this->m_berita->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_berita->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
