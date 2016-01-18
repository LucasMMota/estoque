<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class Pedidos extends controller
{

    function index_action()
    {
        $this->template->setTitle("Pedidos");
        $pedidosModel = new pedidosModel();
        $arrPedidos = $pedidosModel->get_pedidos();

        $this->smarty->assign('arrItens', $arrPedidos);

        $this->template->run();
        $this->smarty->display("listagemPedidos.tpl");
    }

    function salvar()
    {
        $pedidosModel = new pedidosModel();
        $arrPedidos = $pedidosModel->get_pedidos($_POST['produtos_id'], $_POST['clientes_id']);
        if ($arrPedidos) {
            Header('Location: /pedidos');
        }
        $arrProduto = [];
        $arrProduto['clientes_id'] = $_POST['clientes_id'];
        $arrProduto['produtos_id'] = $_POST['produtos_id'];


        $pedidosModel->ins($arrProduto);
        Header("Location: /pedidos");
    }

    function excluir()
    {
        $c_id = $this->getParam('clientes_id');
        $p_id = $this->getParam('produtos_id');

        $pedidosModel = new pedidosModel();
        $pedidosModel->del($p_id, $c_id);
        Header("Location: /pedidos");
    }

    function novo()
    {
        $this->template->setTitle("Novo | Pedidos");

        $produtosModel = new produtosModel();
        $clientesModel = new clientesModel();

        $arrProdutos = $produtosModel->get_produtos();
        $arrClientes = $clientesModel->get_clientes();

        $this->smarty->assign('arrProdutos', $arrProdutos);
        $this->smarty->assign('arrClientes', $arrClientes);

        $this->template->run();
        $this->smarty->display("pedidos/novo.tpl");
    }
}

?>