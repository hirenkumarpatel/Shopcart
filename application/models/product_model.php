<?php

/* 
 * Copyright 2016 Hiren Patel.
 * @author Hiren Patel
 */
class Product_model extends CI_Model {

    function __construct() {
        $this->load->database();
        
    }
    public function list_product()
    {
        echo "inside list_proucts method inside product model";
    }

}
