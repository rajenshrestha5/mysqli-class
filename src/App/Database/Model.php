<?php

//Abstract Class: Can extend but cannot make instance

namespace App\Database;

abstract class Model
{
    private $db;

    protected $table;

    protected $attributes = [];

    protected $timestamps = true;

    public function __construct()
    {
        $this->db = new Db();
    }

    private function all()
    {
        
    }

    public function find($id)
    {
        
    }

    public function where($columnName, $operator, $value)
    {
        
    }

    public function get()
    {
        
    }

    public function create(array $data)
    {
        $allData = [];

        foreach ($this->attributes as $field){
            $allData[$field] = isset($data[$field]) ? $data[$field] : null;
        }

        if($this->timestamps){
            $allData['created_at'] = date('Y-m-d H:i:s');
            $allData['updated_at'] = date('Y-m-d H:i:s');
        }

        $this->db->insert($this->table, $allData);
    }

    public function update(array $data)
    {

    }

    public function delete()
    {

    }
}