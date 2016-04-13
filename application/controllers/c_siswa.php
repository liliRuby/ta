<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_siswa extends CI_Controller {



  protected $uri_segment_one = "c_siswa";
  protected $folder = "siswa";
  protected $title = "Siswa";

  public function __construct() {
    parent::__construct();
     if(!$this->session->userdata('logged_in')){
        if(!$this->session->userdata('user_grup')=='guru'){
      redirect('login');}
    redirect('login');

    }   $this->load->helper('text');
        $this->load->model('m_siswa');
        $this->load->helper('form','url');
  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_siswa->findAll()
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
        'data'  => $this->m_siswa->findOne($id),
        ];
        $this->load->view($this->folder.'/form',$data);
    }

    public function save()
    {
       // $id = $this->input->post('yang hidden');
        $id = $this->input->post('hidde');
        $config ['upload_path'] = './assets/img/siswa/';
        $this->load->library('upload', $config);
        // $poto = 'foto_siswa';
        if ($this->upload->do_upload('foto_siswa'))
          {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);

                }
                else
                {
                        $file = array('upload_data' => $this->upload->data());
                      print_r($file);

                }
        $filename = $file['upload_data']['file_name'];
        //$id = $this->input->post('id_siswa');
            $data = [
             'nama_siswa' => $this->input->post('nama_siswa'),
             'kelas_siswa' => $this->input->post('kelas_siswa'),
             'alamat_siswa' => $this->input->post('alamat_siswa'),
             'telp_siswa' => $this->input->post('telp_siswa'),
             'lahir_siswa' => $this->input->post('lahir_siswa'),
             'jk_siswa' => $this->input->post('jk_siswa'),
             'foto_siswa' => $this->input->post('foto_siswa'),
             'status_siswa' => $this->input->post('status_siswa'),
             'foto_siswa' => $filename
        
        ];
            if ($id!='') 
            {
                $this->m_siswa->model_update($data,$id);
            } else {
                $this->m_siswa->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    

    public function delete($id)
    {
        $this->m_siswa->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
