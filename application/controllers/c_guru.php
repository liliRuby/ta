<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_guru extends CI_Controller {



  protected $uri_segment_one = "c_guru";
  protected $folder = "guru";
  protected $title = "Pengampu Matapelajaran";



  public function __construct() {
    parent::__construct();
     if(!$this->session->userdata('logged_in')){
        if(!$this->session->userdata('user_grup')=='guru'){
      redirect('login');}
    redirect('login');

    }   $this->load->helper('text');
        $this->load->model('m_guru');
        $this->load->helper('form','url');

  }

  public function index()
  {
        $data=[
        'title' => $this->title,
        'uri_segment_one'=>$this->uri_segment_one,
        'items' => $this->m_guru->findAll()
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
          $id = $this->input->post('id_guru');
                 $config['upload_path']          = './assets/images/teacher';
                //$config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto_guru'))
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
            $data = [
             'nip_guru' => $this->input->post('nip_guru'),
             'nama_guru' => $this->input->post('nama_guru'),
             'kelas_guru' => $this->input->post('kelas_guru'),
             'alamat_guru' => $this->input->post('alamat_guru'),
             'telp_guru' => $this->input->post('telp_guru'),
             'lahir_guru' => $this->input->post('lahir_guru'),
             'jk_guru' => $this->input->post('jk_guru'),
             'foto_guru' => $filename

        ];  
            if ($id!='') 
            {
                $this->m_guru->model_update($data,$id);
            } else {
                $this->m_guru->model_save($data);
            }
            
            redirect($this->uri_segment_one);
    }

    public function delete($id)
    {
        $this->m_guru->model_delete($id);
        redirect($this->uri_segment_one);
    }
}
