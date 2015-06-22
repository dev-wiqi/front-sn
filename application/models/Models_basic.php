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
        $where['tb_location_menu'] = $position;
        $value = "";
        $query = $this->db->get_where("wq_menu",$where);
        foreach ($query->result() as $a){
        if ($position == "atas"){
            if ($a->tb_parent_menu == 0){
                $whr['tb_parent_menu'] = $a->tb_id_menu;
                $quesub = $this->db->get_where("wq_menu",$whr);
                if($quesub->num_rows() == 0){
                   $value .= '<li><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a></li>';
                }
                else{
                    $value .= '<li class="submenu"><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a>';
                    $value .= '<ul>';
                    foreach($quesub->result() as $b){
                    $value .= '<li><a href="'.base_url().$b->tb_page_menu.'/'.$b->tb_link_menu.'" title="'.$b->tb_name_menu.'">'.$b->tb_name_menu.'</a></li>';
                    }
                    $value .= '</ul></li>';
                }
            }
        }
        else{
            if ($a->tb_parent_menu == 0){
                $whr['tb_parent_menu'] = $a->tb_id_menu;
                $quesub = $this->db->get_where("wq_menu",$whr);
                if($quesub->num_rows() == 0){
                   $value .= '<li><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a></li>';
                }
                else{
                    $value .= '<li class="submenu"><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a>';
                    $value .= '<ul>';
                    foreach($quesub->result() as $b){
                    $value .= '<li><a href="'.base_url().$b->tb_page_menu.'/'.$b->tb_link_menu.'" title="'.$b->tb_name_menu.'">'.$b->tb_name_menu.'</a></li>';
                    }
                    $value .= '</ul></li>';
                }
            }
        }
        }
        return $value;
    }
    
    function mega_menu(){
        //Conditional Menu
        $where['tb_status_menu'] = 1;
        $where['tb_location_menu'] = $position;
        $value = "";
        $query = $this->db->get_where("wq_menu",$where);
        foreach ($query->result() as $a){
        if ($position == "atas"){
            if ($a->tb_parent_menu == 0){
                $whr['tb_parent_menu'] = $a->tb_id_menu;
                $quesub = $this->db->get_where("wq_menu",$whr);
                if($quesub->num_rows() == 0){
                   $value .= '<li><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a></li>';
                }
                else{
                    $value .= '<li class="submenu"><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a>';
                    $value .= '<ul>';
                    foreach($quesub->result() as $b){
                    $value .= '<li><a href="'.base_url().$b->tb_page_menu.'/'.$b->tb_link_menu.'" title="'.$b->tb_name_menu.'">'.$b->tb_name_menu.'</a></li>';
                    }
                    $value .= '</ul></li>';
                }
            }
        }
        else{
            if ($a->tb_parent_menu == 0){
                $whr['tb_parent_menu'] = $a->tb_id_menu;
                $quesub = $this->db->get_where("wq_menu",$whr);
                if($quesub->num_rows() == 0){
                   $value .= '<li><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a></li>';
                }
                else{
                    $value .= '<li class="submenu"><a href="'.base_url().$a->tb_page_menu.'/'.$a->tb_link_menu.'" title="'.$a->tb_name_menu.'">'.$a->tb_name_menu.'</a>';
                    $value .= '<ul>';
                    foreach($quesub->result() as $b){
                    $value .= '<li><a href="'.base_url().$b->tb_page_menu.'/'.$b->tb_link_menu.'" title="'.$b->tb_name_menu.'">'.$b->tb_name_menu.'</a></li>';
                    }
                    $value .= '</ul></li>';
                }
            }
        }
        }
        return $value;
    }
    
    function news(){
        $where['tb_status_news'] = 1;
        $query = $this->db->order_by("tb_id_news","DESC")->get_where("wq_news",$where);
        $value = "";
        foreach($query->result() as $a){
            $value .= 'TITLE : '.$a->tb_name_news.'Source:'.$a->tb_source_news.'<br/>';
        }
        return $value;
    }
    
}