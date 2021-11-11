<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['title'] =  "Trang chủ" . $this->data['title'];
        $option_model = model("OptionModel");
        $trangchu = $option_model->get_options_in(array("frame1", "frame2", "frame3", "frame4", "frame5", "frame6", "frame7"));
        //echo "<pre>";
        //print_r($tins);
        //die();
        $this->data['trangchu'] = $trangchu;
        //echo $this->data['title'];
        //die();  
        return view($this->data['content'], $this->data);
    }
    public function contact()
    {
        if (isset($_POST['dangtin'])) {
            $contact_model = model("ContactModel");
            $data = $this->request->getPost();
            $data['date'] = date("Y-m-d H:i:s");
            $obj = $contact_model->create_object($data);
            //echo "<pre>";
            //print_r($obj);
            //die();
            $contact_model->insert($obj);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
