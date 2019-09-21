<?php
    
    $acao = $_POST["acao"];

    switch ($acao) {
        case 'adicionar':
            add();
            break;
        case 'editar':
            update();
            break;
        case 'excluir':
            delete();
            break;
    }

    function add() {
        require_once ('../Model/ModelCardapio.php');
        require_once ('../Dao/DaoCardapio.php');
        require_once ('../bd/database.php');
        $db = new Database();
        $dao = new DaoCardapio($db);
        $principal = $_POST['principal'];
        $guarnicao = $_POST['guarnicao'];
        $acompanhamento = $_POST['acompanhamento'];
        $salada = $_POST['salada'];
        $bebida = $_POST['bebida'];
        $sobremesa = $_POST['sobremesa'];
        $tipo = $_POST['tipo'];
        $data = $_POST['datax'];

        $Cardapio = new ModelCardapio();
        $Cardapio->setPrincipal($principal);
        $Cardapio->setGuarnicao($guarnicao);
        $Cardapio->setAcompanhamento($acompanhamento);
        $Cardapio->setSalada($salada);
        $Cardapio->setBebida($bebida);
        $Cardapio->setSobremesa($sobremesa);
        $Cardapio->setTipo($tipo);
        $Cardapio->setData($data);
        $dao->add($Cardapio);   
    }

    function update() {
        require_once ('../Model/ModelCardapio.php');
        require_once ('../Dao/DaoCardapio.php');
        require_once ('../bd/database.php');
        $db = new Database();
        $dao = new DaoCardapio($db);
        $id = $_POST['idE'];
        $principal = $_POST['principalE'];
        $guarnicao = $_POST['guarnicaoE'];
        $acompanhamento = $_POST['acompanhamentoE'];
        $salada = $_POST['saladaE'];
        $bebida = $_POST['bebidaE'];
        $sobremesa = $_POST['sobremesaE'];
        $tipo = $_POST['tipoE'];
        // $data = $_POST['datax'];

        $Cardapio = new ModelCardapio();
        $Cardapio->setId($id);
        $Cardapio->setPrincipal($principal);
        $Cardapio->setGuarnicao($guarnicao);
        $Cardapio->setAcompanhamento($acompanhamento);
        $Cardapio->setSalada($salada);
        $Cardapio->setBebida($bebida);
        $Cardapio->setSobremesa($sobremesa);
        $Cardapio->setTipo($tipo);
        // $Cardapio->setData($data);
        $dao->update($Cardapio);   
    }

    function delete() {
        require_once ('../Model/ModelCardapio.php');
        require_once ('../Dao/DaoCardapio.php');
        require_once ('../bd/database.php');
        $db = new Database();
        $dao = new DaoCardapio($db);
        $id = $_POST['id'];
        $Cardapio = new ModelCardapio();
        $Cardapio->setId($id);
        $dao->delete($Cardapio);
    }
?>