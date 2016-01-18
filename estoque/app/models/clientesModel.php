<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 15/01/2016
 * Time: 22:04
 */
class clientesModel extends model
{

    public function get_clientes($p_id = null)
    {
        $where = null;
        if ($p_id) {
            $where = "id = $p_id";
        }
        return $this->read('clientes', array('*'), $where);
    }

    public function upd(array $data = NULL)
    {
        $where = "id = " . $data['id'];
        return parent::update('clientes', $data, $where);
    }

    public function del($id)
    {
        $where = 'id = ' . $id;
        return parent::delete('clientes', $where);
    }

    public function ins($arrDados){
        return parent::insert('clientes', $arrDados);
    }
}