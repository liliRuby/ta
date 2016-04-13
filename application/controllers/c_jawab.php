<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_jawab extends CI_Controller {



  protected $uri_segment_one = "c_jawab";
  protected $folder = "jawab";
  protected $title = "Jawab siswa";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_jawab');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_jawab->findAll()
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
        'data'  => $this->m_jawab->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_jawab');
            $data = [
             'id_siswa' => $this->input->post('nama_soal'),
             'id_soal' => $this->input->post('nama_soal'),
             'jawab_jawaban' => $this->input->post('jawab_jawaban')

        ];
            if ($id!='') 
            {
                $this->m_jawab->model_update($data,$id);
            } else {
                $this->m_jawab->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_jawab->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
