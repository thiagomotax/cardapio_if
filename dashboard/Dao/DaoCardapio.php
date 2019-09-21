<?php

    require_once('../bd/database.php');
    
    class DaoCardapio {

        private $conn;

        public function __construct() {
            $database = new Database();
            $db = $database->dbConnection();
            $this->conn = $db;
        }

        public function runQuery($sql) {
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }

        public function add(ModelCardapio $Cardapio) {
            try {
                $tipo = $Cardapio->getTipo();
                $principal = $Cardapio->getPrincipal();
                $guarnicao = $Cardapio->getGuarnicao();
                $acompanhamento =$Cardapio->getAcompanhamento();
                $salada = $Cardapio->getSalada();
                $bebida = $Cardapio->getBebida();
                $sobremesa = $Cardapio->getSobremesa();
                $data = $Cardapio->getData();
                $zero = 1;

                $stmt = $this->conn->prepare("INSERT INTO cardapio(idNutricionista, principalCardapio, guarnicaoCardapio, acompanhamentoCardapio, salada1Cardapio, bebidaCardapio, sobremesaCardapio, tipoCardapio, dataCardapio)
                VALUES(:id, :principal, :guarnicao, :acompanhamento, :salada, :bebida, :sobremesa, :tipo, :datax)");
                $stmt->bindparam(":id", $zero);
                $stmt->bindparam(":principal", $principal);
                $stmt->bindparam(":guarnicao", $guarnicao);
                $stmt->bindparam(":acompanhamento", $acompanhamento);
                $stmt->bindparam(":salada", $salada);
                $stmt->bindparam(":bebida", $bebida);
                $stmt->bindparam(":sobremesa", $sobremesa);
                $stmt->bindparam(":tipo", $tipo);
                $stmt->bindparam(":datax", $data);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    echo 1;
                }else{
                    echo 2;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function update(ModelCardapio $Cardapio) {
            try {

                $tipo = $Cardapio->getTipo();
                $principal = $Cardapio->getPrincipal();
                $guarnicao = $Cardapio->getGuarnicao();
                $acompanhamento =$Cardapio->getAcompanhamento();
                $salada = $Cardapio->getSalada();
                $bebida = $Cardapio->getBebida();
                $sobremesa = $Cardapio->getSobremesa();
                $id = $Cardapio->getId();

                $stmt = $this->conn->prepare("UPDATE cardapio SET tipoCardapio = ?, principalCardapio = ?, 
                guarnicaoCardapio = ?, acompanhamentoCardapio = ?, salada1Cardapio = ?, bebidaCardapio = ?,
                sobremesaCardapio = ? WHERE idCardapio = ?");

                $stmt->bindparam(1, $tipo);
                $stmt->bindparam(2, $principal);
                $stmt->bindparam(3, $guarnicao);
                $stmt->bindparam(4, $acompanhamento);
                $stmt->bindparam(5, $salada);
                $stmt->bindparam(6, $bebida);
                $stmt->bindparam(7, $sobremesa);
                $stmt->bindparam(8, $id);


                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    echo 1;
                } else {
                    echo 2;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function delete(ModelCardapio $Cardapio) {
            try {
                $id = $Cardapio->getId();
                
                $stmt = $this->conn->prepare("DELETE FROM cardapio WHERE idCardapio = ?");

                $stmt->bindparam(1, $id);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    echo 1;
                } else {
                    echo 2;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>