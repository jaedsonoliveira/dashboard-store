<?php
class Vendas extends Model{
    public function getSales(){
        $array = array();

        $sql= "SELECT * FROM sales";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function addSale($name, $price, $quantity, $total_price, $date_sale){
        $sql = "INSERT INTO sales (name, price, quantity, total_price, date_sale) VALUES (:name, :price, :quantity, :total_price, :date_sale)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quantity", $quantity);
        $sql->bindValue(":total_price", $total_price);
        $sql->bindValue(":date_sale", $date_sale);
        $sql->execute();

        header('Location: '.BASE_URL.'venda');
    }

    public function editSale($name, $price, $quantity, $total_price, $date_sale, $id){
        $sql = "UPDATE sales SET name = :name, price = :price , quantity = :quantity, total_price = :total_price, date_sale = :date_sale WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quantity", $quantity);
        $sql->bindValue(":total_price", $total_price);
        $sql->bindValue(":date_sale", $date_sale);
        $sql->bindValue(":id", $id);
        $sql->execute();

        header('Location: '.BASE_URL.'venda');
    }

    public function getSale($id){
        $array = array();
        $sql = "SELECT * FROM sales WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function delVenda($id){
        $array = array();

        $sql = "DELETE FROM sales WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();

        return $array;
    }

    public function getTotalSales(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM sales");
        $row = $sql->fetch();

        return $row['c'];
    }

    public function getTotalMoney(){
        $sql = $this->db->query("SELECT SUM(total_price) as c FROM sales");
        $row = $sql->fetch();

        return $row['c'];
    }
}