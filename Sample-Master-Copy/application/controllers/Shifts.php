<?php
class Shifts extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('shifts_model');
        $this->load->helper('url_helper');
    }
    

     public function index()
    {
        $data['User_Have_Shifts'] = $this->shifts_model->get_have_shifts_by_uid(1);
        $data['title'] = 'News archive';
 
 		print_r($data);

        /*$this->load->view('templates/header', $data);
        $this->load->view('shifts/index', $data);
        $this->load->view('templates/footer');*/
    }


    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a news item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('shifts/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }

}