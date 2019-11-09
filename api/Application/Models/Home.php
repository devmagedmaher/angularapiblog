<?php

use MVC\Model;

class ModelsHome extends Model {

    public function getAllUser() 
    {
        return $this->db->query("SELECT * FROM users")->rows;
    }
}
