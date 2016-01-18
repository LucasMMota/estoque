<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class Clientes extends controller
{

    function index_action()
    {
        $this->template->setTitle("Clientes");

        $clientesModel = new clientesModel();
        $arrClientes = $clientesModel->get_clientes();

        $arrColunas = array();
        if (isset($arrClientes[0]))
            foreach ($arrClientes[0] as $k => $v) {
                $arrColunas[] = $k;
            }

        $this->smarty->assign('arrColunas', $arrColunas);
        $this->smarty->assign('arrItens', $arrClientes);

        $this->template->run();
        $this->smarty->display("listagem.tpl");
    }

    function editar()
    {
        $this->template->setTitle("Editar | Clientes");
        $id = $this->getParam('id');
        if ($id !== FALSE) {
            $clientesModel = new clientesModel();
            $arrClientes = $clientesModel->get_clientes($id);

            $arrColunas = array();
            foreach ($arrClientes[0] as $k => $v) {
                $arrColunas[] = $k;
            }

            $this->smarty->assign('arrColunas', $arrColunas);
            $this->smarty->assign('produto', $arrClientes[0]);

            $this->template->run();
            $this->smarty->display("edicao.tpl");
        } else {
            Header("Location: /clientes");
        }
    }

    function salvar()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : FALSE;
        $arrProduto = [];
        foreach ($_POST as $campo => $valor) {
            $arrProduto[$campo] = $valor;
        }
        $clientesModel = new clientesModel();

        if ($id)
            $clientesModel->upd($arrProduto);
        else
            $clientesModel->ins($arrProduto);
        Header("Location: /clientes");
    }

    function excluir()
    {
        $id = $this->getParam('id');
        $clientesModel = new clientesModel();
        $clientesModel->del($id);
        Header("Location: /clientes");
    }

    function novo()
    {
        $this->template->setTitle("Novo | Clientes");

        $this->template->run();
        $this->smarty->display("clientes/novo.tpl");
    }
}

?>