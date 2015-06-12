<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Models_basic extends CI_model {
    /*
     * SamMarie Application V.1.0 Copyright 2014
     * Build Date : 17 Juli 2014
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
    
         
    function menu($position){
        //Conditional Menu
        $where['tb_status_menu'] = 1;
        $value = "";
        $query = $this->db->get_where
        if ($position == "atas"){
            
        }
        else{
            
        }
    }
}