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

    function updateUsuario() {
        require_once ('../model/Usuarios.php');
        require_once ('../dao/UsuariosDAO.php');
        require_once ('../BancoDeDados/database.php');
        include "Util.php";
        $db = new Database();
        $dao = new UsuariosDAO($db);
        $id = $_POST['codUsuario'];
        $nome = $_POST['nome'];
        $cpf = soNumero($_POST['cpf']);
        $email = $_POST['email'];
        $nivel = $_POST['nivel'];
        $Usuarios = new Usuarios();
        $Usuarios->setId($id);
        $Usuarios->setNome($nome);
        $Usuarios->setCPF($cpf);
        $Usuarios->setEmail($email);
        $Usuarios->setNivel($nivel);
        $dao->update($Usuarios);
    }

    function deleteUsuario() {
        require_once ('../model/Usuarios.php');
        require_once ('../dao/UsuariosDAO.php');
        require_once ('../BancoDeDados/database.php');
        $db = new Database();
        $dao = new UsuariosDAO($db);
        $id = $_POST['codUsuario'];
        $Usuarios = new Usuarios();
        $Usuarios->setId($id);
        $dao->delete($Usuarios);
    }
?>