<?php

namespace App\Libraries;

class HeaderWidget
{
    private $data = array();
    public function __construct()
    {
    }

    public function navbar()
    {
        $menu_model = model("MenuModel");
        $list = $menu_model->where("parent_id", 0)->orderby("order", "asc")->findAll();
        foreach ($list as &$row) {
            $row->child = $menu_model->where("parent_id", $row->id)->orderby("order", "asc")->findAll();
        }
        //$parent = array_filter($list,function($item){
        //    return $item[]
        //});
        $this->data['menus'] = $list;
        //echo "<pre>";
        //print_r($list);
        //die();
        return view("lib/header/navbar", $this->data);
    }
    public function navbarMobile()
    {
        $menu_model = model("MenuModel");
        $list = $menu_model->where("parent_id", 0)->orderby("order", "asc")->findAll();
        foreach ($list as &$row) {
            $row->child = $menu_model->where("parent_id", $row->id)->orderby("order", "asc")->findAll();
        }
        //$parent = array_filter($list,function($item){
        //    return $item[]
        //});
        $this->data['menus'] = $list;
        //echo "<pre>";
        //print_r($list);
        //die();
        return view("lib/header/navbarMobile", $this->data);
    }
}
