<?php


class ManagerProduto extends Conexao {
   
    public function insertCostumer($table, $data){
        $pdo = parent::get_instance();
        $fields = implode(", ",array_keys($data));
        $values = ":".implode(', :', array_keys($data));
        $sql = "INSERT INTO $table($fields)VALUES ($values)" ;
        

       /*  (':nome',':cnpj',':rg',':dt_nascimento',':endereco',':complemento',':bairro',':cep',':cidade',':uf',':telefone',':descricao') */
        $statement = $pdo->prepare($sql);
        foreach($data as $key => $value){
            $statement->bindValue("$key", $value, PDO::PARAM_STR);
            
            /* var_dump($key.$value); */
        }
        $statement->execute();
    }
    
    public function listCostumer($table){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table  ORDER BY produto ASC";
        $statement = $pdo->query($sql);
        $statement->execute();
        
        return $statement -> fetchALL();
    }

    public function updateCostumer($table, $data, $id){
        $pdo = parent::get_instance();
        $new_values = "";
        foreach ($data as $k => $v){
            $new_values .= "$k=:$k, ";
        }
        $new_values = substr($new_values, 0, -2);
        $sql = "UPDATE $table SET $new_values WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        foreach($data as $k => $v){
            $stmt->bindValue(":$k", $v, PDO::PARAM_STR);
            
        }
        $stmt->execute();
    }

    public function getInfo($table, $id){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function deleteCostumer ($table, $id){
        $pdo = parent::get_instance();/* Pega a instancia da conexao */
        $sql = "DELETE FROM $table WHERE id = :id";
        $stmt = $pdo->prepare($sql);/* Prepara o SQL */
        $stmt->bindValue(":id", $id);/* Onde ler o paramentro ID */
        $stmt->execute();/*  e executa */
        
    }
}

