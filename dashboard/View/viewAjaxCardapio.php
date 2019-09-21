<?php
        header('Content-type: application/json');
        require_once("../Dao/DaoCardapio.php");
        $CardapioDao = new DaoCardapio();

    	$encoding = 'UTF-8';

    	$stmtCardapio = $CardapioDao->runQuery("SELECT * FROM cardapio");
        $stmtCardapio->execute();
        $result = array();
    	while ($RowCardapio = $stmtCardapio->fetch(PDO::FETCH_ASSOC)) {
            $result[] = array(
            'id' => $RowCardapio['idCardapio'],
            'title'=>($RowCardapio['tipoCardapio'] == 0) ? 'Almoco' : 'Janta',
            'start'=> ($RowCardapio['tipoCardapio'] == 0) ? $RowCardapio['dataCardapio'] . " 11:00:00" : $RowCardapio['dataCardapio'] . " 17:00:00",
            'end'=> ($RowCardapio['tipoCardapio'] == 0) ? $RowCardapio['dataCardapio'] . " 12:30:00" : $RowCardapio['dataCardapio']. " 18:30:00",
            'color'=> ($RowCardapio['tipoCardapio'] == 0) ? '#ffff00' : '#add8e6',
            'principal'=> $RowCardapio['principalCardapio'],
            'guarnicao'=> $RowCardapio['guarnicaoCardapio'],
            'acompanhamento'=> $RowCardapio['acompanhamentoCardapio'],
            'salada'=> $RowCardapio['salada1Cardapio'],
            'bebida'=> $RowCardapio['bebidaCardapio'],
            'sobremesa'=> $RowCardapio['sobremesaCardapio'],
            'tipo'=> $RowCardapio['tipoCardapio']);
        }
    
        echo json_encode($result);

?>