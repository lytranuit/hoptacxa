<?php

namespace App\Libraries;

class SidebarWidget
{
    private $data = array();
    public function __construct()
    {
    }

    function category()
    {
        $category_model = model("CategoryModel");
        $this->data['categories'] = $category_model->findAll();
        //echo "<pre>";
        //print_r($this->data['categories']);die();
        return view("lib/sidebar/category", $this->data);
    }
    public function best_sale()
    {

        $product_model = model("ProductModel");
        $this->data['products'] = $product_model->get_product(8, null, 0, 5);
        $product_model->relation($this->data['products'], array("image"));
        return view("lib/sidebar/best_sale", $this->data);
    }
    public function news()
    {
        $news_model = model("NewsModel");
        $this->data['news'] = $news_model->orderby("id", "DESC")->limit(5)->findAll();
        $news_model->image($this->data['news']);
        return view("lib/sidebar/news", $this->data);
    }
}
