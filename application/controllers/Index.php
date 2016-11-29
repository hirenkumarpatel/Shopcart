<?php

/* 
 * Copyright 2016 Hiren Patel.
 * @author Hiren Patel
 */
class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        
        
    }
    public function index() {
        
        $this->load->view('template/headerscript');
        $this->load->view('template/header');
        $this->load->view('index');
        $this->load->view('template/footer');
    }

}
