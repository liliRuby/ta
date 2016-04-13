<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mapel extends CI_Controller {



  protected $uri_segment_one = "c_mapel";
  protected $folder = "mapel";
  protected $title = "Mata Pelajaran";

  public function __construct() {
    parent::__construct();
        $this->load->model('m_mapel');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_mapel->findAll()
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
        'data'  => $this->m_mapel->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('id_mapel');
            $data = [
             'nama_mapel' => $this->input->post('nama_mapel'),
             // 'namafieldtabel2' => $this->input->post('namafieldform2'),
             // 'namafieldtabel3' => $this->input->post('namafieldform3'),
             // 'namafieldtabel4' => $this->input->post('namafieldform4')
        ];
            if ($id!='') 
            {
                $this->m_mapel->model_update($data,$id);
            } else {
                $this->m_mapel->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_mapel->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
