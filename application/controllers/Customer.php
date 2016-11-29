<?php

/* 
 * Copyright 2016 Hiren Patel.
 * @author Hiren Patel
 */
class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // load customer model to work with database
        $this->load->model('customer_model');
        $this->load->helper('url_helper');
        
            
    }
    public function new_customer() {
        
        
    }

}
