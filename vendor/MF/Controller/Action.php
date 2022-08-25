<?php
    namespace MF\Controller;

    use stdClass;

    abstract class Action {
        protected $view;

        public function __construct( )
    {
        $this->view = new stdClass();
    }

    protected function render($view, $layout) {
        $this->view->page = $view;
        require_once '../App/Views/'.$layout.'.phtml';
    }

    protected function content(){
        $classAtual = get_class($this);

        $classAtual = str_replace('App\\controller\\','', $classAtual);

        $classAtual = strtolower(str_replace('controller', '', $classAtual));
        require_once "../App/Views/index/". $this->view->page  .".phtml";
    }

    }
?>