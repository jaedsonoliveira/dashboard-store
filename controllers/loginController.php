<?php
class loginController extends Controller{
    public function index(){
        $data = array();

        if(!empty($_POST['number'])){
            $unumber = $_POST['number'];
            $upass = $_POST['password'];

            $users = new Users();

            if($users->verifyUser($unumber, $upass));

            $token = $users->createToken($unumber);
            $_SESSION['token'] = $token;

            header('Location: '. BASE_URL);
            exit;
        }else{
            $data['msg'] = 'Numero ou senha errados';
        }

        $this->loadTemplate('login', $data);
    }

    public function sair(){
        unset($_SESSION['token']);
        header("Location: ".BASE_URL.'login');
        exit;
    }
}