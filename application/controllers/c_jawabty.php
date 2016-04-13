<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_jawabty extends CI_Controller {



  protected $uri_segment_one = "c_jawabty";
  protected $folder = "jawabty";
  protected $title = "Jawab tryout siswa";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_jawabty');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_jawabty->findAll()
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
        'data'  => $this->m_jawabty->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_jawabty');
            $data = [
             'id_siswa' => $this->input->post('nama_soal'),
             'id_soalty' => $this->input->post('nama_soal'),
             'jawabty' => $this->input->post('jawabty'),
             'nilai' => $this->input->post('nilai'),
             'waktu' => $this->input->post('waktu')


        ];
            if ($id!='') 
            {
                $this->m_jawabty->model_update($data,$id);
            } else {
                $this->m_jawabty->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_jawabty->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
