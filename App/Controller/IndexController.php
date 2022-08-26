<?php

/* o name space segue a defininição dos diretorios*/
namespace App\Controller;

use MF\Controller\Action;
use MF\Model\Container;
/* use App\Connection;  */
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action{

    public function index(){
        //$this->view->dados = ['cadeira', 'sofa', 'cadeira'];

        //instancia de conexão
       /*  $conn = Connection::getDb();

        $produto = new Produto($conn);
 */
        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();

        @$this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos(){
       // $this->view->dados = ['php','javascript','java'];
        /* $conn = Connection::getDb();

        $info = new Info($conn);
 */
        $info = Container::getModel('Info');

        $info = $info->getInfo();

        @$this->view->dados = $info;
        $this->render('sobreNos', 'layout2');
    }


}

?>