<?php

namespace App\Models;

class CarsModel extends Query{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getVehiculos($estado)
    {
        $sql = "SELECT v.*, m.marca, t.tipo FROM vehiculos v INNER JOIN marcas m ON v.id_marca = m.id INNER JOIN tipos t ON v.id_tipo = t.id WHERE v.estado != $estado";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function getVehiculo($id)
    {
        $sql = "SELECT v.*, m.marca, t.tipo FROM vehiculos v INNER JOIN marcas m ON v.id_marca = m.id INNER JOIN tipos t ON v.id_tipo = t.id WHERE v.id = $id";
        $data = $this->select($sql);
        return $data;
    }
}