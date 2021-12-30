<?php
class vendaController extends Controller{
    public function index(){
        $data = array();

        $this->loadTemplate('venda', $data);
    }
}