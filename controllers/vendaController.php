<?php
class vendaController extends Controller{
    public function index(){
        $data = array();

        $v = new Vendas();

        $data['list'] = $v->getSales();

        $this->loadTemplate('venda', $data);
    }

    public function add(){
        $data = array();

        $v = new Vendas();

        if(!empty($_POST['name'])){
            $name = $_POST['name'];
            $price = $this->filter_post_money('price');
            $quantity = $this->filter_post_money('quantity');
            $total_price = $this->filter_post_money('total_price');
            $date = $_POST['date_sale'];

            $v->addSale($name, $price, $price, $quantity, $total_price, $date);
        }

        
        $this->loadTemplate('add_sale', $data);
    }

    public function filter_post_money($t){
        $price = filter_input(INPUT_POST, $t);
        $price = str_replace('.', '', $price);
        $price = str_replace(',','.', $price);
        $price = filter_var($price, FILTER_VALIDATE_FLOAT);

        return $price;
    }


    public function edit($id){
       
        $data = array();

        $v = new Vendas();

        if(!empty($_POST['name'])){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $this->filter_post_money('price');
            $quantity = $this->filter_post_money('quantity');
            $total_price = $this->filter_post_money('total_price');
            $date = filter_input(INPUT_POST, 'date_sale', FILTER_SANITIZE_STRING);

            if($name && $price && $quantity && $total_price && $date){
                $v->editSale($name, $price, $quantity, $total_price, $date, $id);
            }else{
                $data['warning'] = 'Digite os campos corretamente';
            }
        }

        $data['info'] = $v->getSale($id);

       //var_dump($data);

        $this->loadTemplate('edit_sale', $data);
    }

    public function del($id){
        $data = array();

        $v = new Vendas();

        $data = $v->delVenda($id);

       
        $this->loadTemplate('del_venda', $data);
        header('Location: '.BASE_URL.'venda');
    }
   
}