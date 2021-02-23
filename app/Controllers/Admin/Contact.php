<?php

namespace App\Controllers\Admin;

use App\Models\FileModel;

class Contact extends BaseController
{

    public function index()
    {
        return view($this->data['content'], $this->data);
    }

    public function remove($id)
    { /////// trang ca nhan
        $Contact_model = model("ContactModel");
        $Contact_model->delete($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    public function table()
    {
        $Contact_model = model("ContactModel");
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $page = ($start / $limit) + 1;
        $where = $Contact_model;

        $totalData = $where->countAllResults();
        //echo "<pre>";
        //print_r($totalData);
        //die();
        $totalFiltered = $totalData;

        $where = $Contact_model;
        $posts = $where->asObject()->orderby("id", "DESC")->paginate($limit, '', $page);
        //echo "<pre>";
        //print_r($posts);
        //die();
        $data = array();
        if (!empty($posts)) {
            foreach ($posts as $post) {
                $nestedData['id'] = $post->id;
                $nestedData['name'] = $post->name;
                $nestedData['address'] = $post->address;
                $nestedData['email'] = $post->email;
                $nestedData['notes'] = $post->notes;
                $nestedData['date'] =  date("d/m/Y", strtotime($post->date));
                $nestedData['action'] =  '<a href="' . base_url("admin/contact/remove/" . $post->id) . '" class="btn btn-danger btn-sm" data-type="confirm" title="remove">'
                    . '<i class="far fa-trash-alt">'
                    . '</i>'
                    . '</a>';

                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($this->request->getVar('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }
}
