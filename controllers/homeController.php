<?php
class homeController extends Controller {
    private $user;

    public function __construct(){
        parent::__construct();
        $this->user = new Users();
        if(!$this->user->checkLogin()){
            header('Location: '.BASE_URL.'login');
            exit;
        }
    }

    public function index() {
        $data = array();

        $v = new Vendas();
        $p = new Products();

        $data['list'] = $v->getSales();

        $total_products = $p->getTotalProducts();
        $total_sales = $v->getTotalSales();
        $total_money = $v->getTotalMoney();


		$data['total_products'] = $total_products;
        $data['total_sales'] = $total_sales;
        $data['total_money'] = $total_money;


        $this->loadTemplate('home', $data);
    }

}