<?php
class estoqueController extends Controller{
    public function index(){
        
        $data = array();

        $p = new Products();

        $s = '';

        if(!empty($_GET['busca'])){
            $s = $_GET['busca'];
        }

        $data['list'] = $p->getProducts($s);
        $this->loadTemplate('estoque', $data);
    }


    public function add(){
        $data = array();

        $p = new Products();

        if(!empty($_POST['cod'])){
            $cod = $_POST['cod'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $min_quantity = $_POST['min_quantity'];

            $p->addProduct($cod,$name, $price, $quantity, $min_quantity);

            header('Location '.BASE_URL);
        }

        $this->loadTemplate('add', $data);
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

        $p = new Products();

        if(!empty($_POST['cod'])){
            $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $this->filter_post_money('price');
            $quantity = $this->filter_post_money('quantity');
            $min_quantity = $this->filter_post_money('min_quantity');

            if($cod && $name && $price && $quantity && $min_quantity){
                $p->editProduct($cod, $name, $price, $quantity, $min_quantity,$id);
            }else{
                $data['warning'] = 'Digite os campos corretamente';
            }
        }

        $data['info'] = $p->getProduct($id);

        $this->loadTemplate('edit', $data);
    }

       
    
}
