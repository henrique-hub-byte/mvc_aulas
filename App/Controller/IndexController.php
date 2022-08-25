<?php

/* o name space segue a defininição dos diretorios*/
namespace App\Controller;
use App\Connection;
use MF\Controller\Action;
use App\Models\Produto;

class IndexController extends Action{

    public function index(){
        //$this->view->dados = ['cadeira', 'sofa', 'cadeira'];

        //instancia de conexão
        $conn = Connection::getDB();

        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos(){
        //$this->view->dados = ['php','javascript','java'];
        $this->render('sobreNos', 'layout2');
    }


}

?>