<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 15/01/2016
 * Time: 22:04
 */
class pedidosModel extends model
{

    public function get_pedidos($p_id = null, $c_id=null)
    {
        $where = null;
        if ($p_id && $c_id) {
            $where = "clientes_id = $c_id and produtos_id = $p_id";
        }
        return $this->read('pedidos', array('*'), $where);
    }

    public function del($p_id, $c_id)
    {
        $where = 'clientes_id = ' . $c_id . ' AND produtos_id = ' . $p_id;
        return parent::delete('pedidos', $where);
    }

    public function ins($arrDados)
    {
        parent::insert('pedidos', $arrDados);
    }
}