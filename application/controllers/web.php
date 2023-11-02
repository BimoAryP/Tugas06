<?php
defined('BASEPATH') OR exit('No direct scrip access allowed');

class web extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    public function user()
    {
        //$data['user']= $this->m_data->ambil_data()->result();
        $data = array(
            'user' => $this->m_data->ambil_data()->result(),
            'judul' => "Daftar"
        );
        $this->load->view('v_header',$data);
        $this->load->view('v_user',$data);
        $this->load->view('v_footer',$data);
    }
    public function index()
    {
        $data['judul']='home';
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function blog()
    {
        $data['judul'] = "blog";
        $this->load->view('v_header', $data);
        $this->load->view('v_blog', $data);
        $this->load->view('v_footer', $data);
    }

    public function about() 
    {
        $data['judul'] ="about";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }  
}