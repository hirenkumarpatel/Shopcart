<?php

/* 
 * Copyright 2016 Hiren Patel.
 * @author Hiren Patel
 */
class Product extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        //loading product model
        
        $this->load->model('product_model');
            
    }
    public function index()
    {
        $this->product_model->list_product();
    }

}
