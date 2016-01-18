<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 15/01/2016
 * Time: 22:04
 */
class produtosModel extends model
{

    public function get_produtos($p_id = null)
    {
        $where = null;
        if ($p_id) {
            $where = "id = $p_id";
        }
        return $this->read('produtos', array('*'), $where);
    }

    public function upd(array $data = NULL)
    {
        $where = "id = " . $data['id'];
        return parent::update('produtos', $data, $where);
    }

    public function del($id)
    {
        $where = 'id = ' . $id;
        return parent::delete('produtos', $where);
    }

    public function ins($arrDados){
        return parent::insert('produtos', $arrDados);
    }
}