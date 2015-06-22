<?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

 class News_load extends MX_Controller {
    /*
     * SumberNews Portal Application V.1.0 Copyright 2015
     * Build Date : 6 Juni 2015
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
     
     function index(){
         $a['news'] = $this->models_basic->news();
         $this->load->view("news",$a);
     }
 }