<?php

namespace App\Libraries;

class HomeWidget
{
    private $data = array();
    public function __construct()
    {
    }
    public function slider()
    {
        $slider_model = model("SliderModel");
        $this->data['sliders'] = $slider_model->orderby("order", "Asc")->findAll();
        $slider_model->image($this->data['sliders']);
        return view("lib/home/slider", $this->data);
    }

    public function page()
    {
        $slider_model = model("PageModel");
        $this->data['pages'] = $slider_model->where("is_home", 1)->orderby("id", "DESC")->findAll();
        $slider_model->image($this->data['pages']);

        //echo "<pre>";
        //print_r($this->data['pages']);
        //die();
        return view("lib/home/page", $this->data);
    }

    public function product()
    {
        $Product_model = model("ProductModel");
        $this->data['products'] = $Product_model->orderby("date", "DESC")->limit(10)->findAll();
        $Product_model->image($this->data['products']);

        //echo "<pre>";
        //print_r($this->data['pages']);
        //die();
        return view("lib/home/product", $this->data);
    }

    public function news()
    {
        $news_model = model("NewsModel");
        $this->data['news'] = $news_model->orderby("id", "DESC")->limit(10)->findAll();

        $news_model->image($this->data['news']);
        //echo "<pre>";
        //print_r($this->data['news']);
        //die();
        return view("lib/home/news", $this->data);
    }

    public function news1()
    {
        $news_model = model("NewsModel");
        $this->data['news'] = $news_model->get_news(4, null, 0, 3);
        $news_model->relation($this->data['news'], array("image"));
        //echo "<pre>";
        //print_r($this->data['news']);
        //die();
        return view("lib/home/news1", $this->data);
    }



    public function category()
    {
        //return 1;
        $category_model = model("CategoryModel");
        $this->data['category'] = $category_model->orderby("id", "ASC")->limit(7)->findAll();

        $category_model->image($this->data['category']);
        //echo "<pre>";
        //print_r($this->data['category']);
        //die();
        return view("lib/home/category", $this->data);
    }
    public function member()
    {
        $user_model = model("UserModel");
        $this->data['users'] = $user_model->orderby("id", "DESC")->limit(10)->findAll();

        $user_model->relation($this->data['users'], array("image"));
        //echo "<pre>";
        //print_r($this->data['news']);
        //die();
        return view("lib/home/member", $this->data);
    }
}
