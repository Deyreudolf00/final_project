<?php
 
class Upload extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
    }
 
    function index() {
        $this->load->view('form_view', array('error' => ' '));
    }
 
    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $name = $_FILES['userfile']['name']; // get file name from form
        //$fileNameParts = explode('.', $name); // explode file name to two part
        //$default_name = $fileNameParts[0]; // get raw name from client
        $config['file_name'] = $name; //constructing a new name
 
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
 
            $this->load->view('form_view', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
 
            $this->load->view('success_view', $data);
        }
    }
}
?>