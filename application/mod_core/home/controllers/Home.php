<?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

 class Home extends MX_Controller {
    /*
     * SumberNews Portal Application V.1.0 Copyright 2015
     * Build Date : 6 Juni 2015
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
  
    function __construct() {
         parent::__construct();
         $this->ip = $this->input->ip_address();
         $this->user_agent = $this->agent->agent_string();
         $this->platform = $this->agent->platform();
     }
     
     function index(){
         
     }
     
    
 }