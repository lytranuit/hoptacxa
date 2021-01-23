<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'htx_category';
    protected $primaryKey = 'id';

    protected $returnType     = 'App\Entities\Category';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name_vi', 'name_en', 'name_jp', 'description_vi', 'description_en', 'description_jp', 'date', 'user_id', 'image_id'];



    public function image(&$data)
    {
        $type = gettype($data);
        if ($type == "array" && !isset($data['id'])) {
            foreach ($data as &$row) {
                if (gettype($row) == "object") {
                    $image_id = $row->image_id;
                    $builder = $this->db->table('htx_file');
                    $row->image = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow();
                } else {
                    $image_id = $row['image_id'];
                    $builder = $this->db->table('htx_file');
                    $row['image'] = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow("array");
                }
            }
        } elseif ($type == "array" && isset($data['id'])) {
            $image_id = $data['image_id'];
            $builder = $this->db->table('htx_file');
            $data['image'] = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow('array');
        } else {
            $image_id = $data->image_id;
            $builder = $this->db->table('htx_file');
            $data->image = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow();
        }
        return $data;
    }
    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = true;
}
