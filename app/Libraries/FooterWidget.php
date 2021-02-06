<?php

namespace App\Libraries;

class FooterWidget
{
    private $data = array();
    public function __construct()
    {
    }

    public function footer()
    {
        //return 1;
        $option_model = model("OptionModel");
        $this->data['options'] = $option_model->get_options_in(array("company_name", 'email', "mo_ta", "dia_chi", "hot_line"));

        //$category_model->image($this->data['category']);
        //echo "<pre>";
        //print_r($this->data['options']);
        //die();
        return view("lib/footer/footer", $this->data);
    }

    public function chat()
    {
        //return 1;
        //$option_model = model("OptionModel");
        //$this->data['options'] = $option_model->get_options_in(array("fanpage"));

        //$category_model->image($this->data['category']);
        //echo "<pre>";
        //print_r($this->data['options']);
        //die();
        return view("lib/footer/chat", $this->data);
    }
    
    public function best_sale()
    {

        $product_model = model("ProductModel");
        $this->data['products'] = $product_model->get_product(8, null, 0, 5);
        $product_model->relation($this->data['products'], array("image"));
        return view("lib/footer/best_sale", $this->data);
    }
}
