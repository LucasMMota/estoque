<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class Produtos extends controller
{

    function index_action()
    {
        $this->template->setTitle("Produtos");
        //$this->template->fetchJS('files/js/index/index.js');
        $produtosModel = new produtosModel();
        $arrProdutos = $produtosModel->get_produtos();

        $arrColunas = array();
        if (isset($arrProdutos[0]))
            foreach ($arrProdutos[0] as $k => $v) {
                $arrColunas[] = $k;
            }

        $this->smarty->assign('arrColunas', $arrColunas);
        $this->smarty->assign('arrItens', $arrProdutos);

        $this->template->run();
        $this->smarty->display("listagem.tpl");
    }

    function editar()
    {
        $this->template->setTitle("Editar | Produtos");
        $id = $this->getParam('id');
        if ($id !== FALSE) {
            $produtosModel = new produtosModel();
            $arrProdutos = $produtosModel->get_produtos($id);

            $arrColunas = array();
            foreach ($arrProdutos[0] as $k => $v) {
                $arrColunas[] = $k;
            }

            $this->smarty->assign('arrColunas', $arrColunas);
            $this->smarty->assign('produto', $arrProdutos[0]);

            $this->template->run();
            $this->smarty->display("edicao.tpl");
        } else {
            Header("Location: /produtos");
        }
    }

    function salvar()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : FALSE;
        $arrProduto = [];
        foreach ($_POST as $campo => $valor) {
            $arrProduto[$campo] = $valor;
        }
        $produtosModel = new produtosModel();

        if ($id)
            $produtosModel->upd($arrProduto);
        else
            $produtosModel->ins($arrProduto);
        Header("Location: /produtos");
    }

    function excluir()
    {
        $id = $this->getParam('id');
        $produtosModel = new produtosModel();
        $produtosModel->del($id);
        Header("Location: /produtos");
    }

    function novo()
    {
        $this->template->setTitle("Novo | Produtos");

        $this->template->run();
        $this->smarty->display("produtos/novo.tpl");
    }
}

?>