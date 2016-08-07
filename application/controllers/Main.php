<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $error = array('error' => '');

        $this->load->view('main/brandform',$error);
    }

    public function add(){


        $config['upload_path']          = './uploads/';
       $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 3024;
        $config['max_height']           = 2768;

        $this->load->library('upload', $config);

        if (  !$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('main/brandform', $error);
        }
        else {
            $tit= $this->input->post('title');
            $des= $this->input->post('desc');
            $im= $this->upload->data('file_name');
            $data=array(
                'title'=>$tit,
                'description'=>$des,
                'image'=>$im,
            );
            $this->db->insert('brands',$data);

            $error = array('error' => 'success');

           $this->load->view('main/brandform', $error);

        }
    }
    public function get(){
        $this->db->select('title,description,image')->from('brands');
        $a=$this->db->get()->result_array();
        echo json_encode($a);
    }
}
