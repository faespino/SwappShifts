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
        $data['L_All_Shifts'] = $this->shifts_model->get_shifts_by_id();
        $data['title'] = 'News archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('shifts/index', $data);
        $this->load->view('templates/footer');
    }

}