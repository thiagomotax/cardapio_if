<?php
	  require_once("../Dao/DaoCardapio.php");
	  $CardapioDao = new DaoCardapio();
      $stmtCardapio = $CardapioDao->runQuery("SELECT * FROM cardapio ORDER BY idCardapio DESC LIMIT 1");
	  $stmtCardapio->execute();
	  $RowCardapio = $stmtCardapio->fetch(PDO::FETCH_ASSOC);

	  $stmtCardapio2 = $CardapioDao->runQuery("SELECT * FROM cardapio WHERE idCardapio<>(select max(idCardapio) from cardapio) LIMIT 10");
	  $stmtCardapio2->execute();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardápio IF Sudeste MG - Campus Rio Pomba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Amimate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- GoogleFont CSS -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/custom.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
        <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i
                    class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>Cardápio IF</strong></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#cardapio" class="nav-link">Cardápio</a></li>
                    <li class="nav-item"><a href="#informacoes" class="nav-link">Informações</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-light">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4 animated fadeInUp delay-0s">Restaurante Universitário</h1>
                    <p class="lead text-muted mb-0 animated fadeInUp delay-0s">Acompanhe diariamente o cardápio
                        do IFSudeste MG - Campus Rio Pomba.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="../Assets/img/head_1.png" alt=""
                        class="img-fluid animated pulse delay-0s"></div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5 animated fadeInDown delay-1s">
                    <h2 class="display-4 font-weight-light" id="cardapio">Cardápio</h2>
                    <p class="font-italic text-muted">*Atualizado pela área de nutrição do campus</p>
                </div>
                <!-- <div class="col-auto offset-lg-4 align-self-end animated fadeInUp delay-1s" style="z-index: 9999">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hoje, 02 de setembro
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Ver anteriores</a>
                            <a class="dropdown-item" href="#">Outra ação</a>
							<a class="dropdown-item" href="#">Alguma coisa aqui</a> 
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-12">

                    <div class="main-body align-self-end animated fadeInUp delay-1s">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
									aria-controls="home" aria-selected="true">Cárdapio <?php
									$cortar = explode("-", $RowCardapio['dataCardapio']);
									$ano = $cortar[0];
									$mes = $cortar[1];
									$dia = $cortar[2];
									echo $dia.'/'.$mes.'/'.$ano;
									?>
									</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab"
                                    aria-controls="profile" aria-selected="false">Dias anteriores</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                <div class="row list">
                                    <div class="col-12">

                                        <h2 class="prato-principal mt-3 mb-3 animated fadeInDown delay-1s">Prato
                                            Principal</h2>

                                        <div class="card shadow-sm mb-2 animated fadeInUp delay-2s">
                                            <div class="card-body">
                                                <div class="row align-items-center">

                                                    <div class="col ml-n2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <?php if($RowCardapio['principalCardapio'] != null){ echo $RowCardapio['principalCardapio'];} else {echo "-";}?>
                                                        </h4>

                                                    </div>
                                                </div> <!-- / .row -->
                                            </div> <!-- / .card-body -->
                                        </div>

                                    </div>
                                </div>

                                <div class="row list">
                                    <div class="col-12">

                                        <h2 class="prato-principal mt-3 animated fadeInDown delay-1s">Guarnição</h2>

                                        <div class="card shadow-sm mb-2 animated fadeInUp delay-2s">
                                            <div class="card-body">
                                                <div class="row align-items-center">

                                                    <div class="col ml-n2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <?php if($RowCardapio['guarnicaoCardapio'] != null){ echo ucfirst($RowCardapio['guarnicaoCardapio']);} else {echo "-";}?>
                                                        </h4>
                                                    </div>
                                                </div> <!-- / .row -->
                                            </div> <!-- / .card-body -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row list">
                                    <div class="col-12">

                                        <h2 class="prato-principal mt-3 animated fadeInDown delay-1s">Acompanhamento
                                        </h2>

                                        <div class="card shadow-sm mb-2 animated fadeInUp delay-2s">
                                            <div class="card-body">
                                                <div class="row align-items-center">

                                                    <div class="col ml-n2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <?php if($RowCardapio['acompanhamentoCardapio'] != null){ echo ucfirst($RowCardapio['acompanhamentoCardapio']);} else {echo "-";}?>
                                                        </h4>
                                                    </div>
                                                </div> <!-- / .row -->
                                            </div> <!-- / .card-body -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row list">
                                    <div class="col-12">

                                        <h2 class="prato-principal mt-3 animated fadeInDown delay-1s">Salada</h2>

                                        <div class="card shadow-sm mb-2 animated fadeInUp delay-2s">
                                            <div class="card-body">
                                                <div class="row align-items-center">

                                                    <div class="col ml-n2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <?php if($RowCardapio['salada1Cardapio'] != null){ echo ucfirst($RowCardapio['salada1Cardapio']);} else {echo "-";}?>
                                                        </h4>
                                                    </div>
                                                </div> <!-- / .row -->
                                            </div> <!-- / .card-body -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row list">
                                    <div class="col-12">

                                        <h3 class="prato-principal mt-3 animated fadeInDown delay-1s">Sobremesa</h3>

                                        <div class="card shadow-sm mb-2 animated fadeInUp delay-2s">
                                            <div class="card-body">
                                                <div class="row align-items-center">

                                                    <div class="col ml-n2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <?php if($RowCardapio['sobremesaCardapio'] != null){ echo ucfirst($RowCardapio['sobremesaCardapio']);} else {echo "-";}?>
                                                        </h4>



                                                    </div>
                                                </div> <!-- / .row -->
                                            </div> <!-- / .card-body -->
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                                <ul class="list-group list-group-flush">
									<?php while ($RowCardapio2 = $stmtCardapio2->fetch(PDO::FETCH_ASSOC)) {
										$cortar = explode("-", $RowCardapio2['dataCardapio']);
										$ano = $cortar[0];
										$mes = $cortar[1];
										$dia = $cortar[2];
										?>
									<li class="list-group-item"><?php echo $dia.'/'.$mes.'/'.$ano.'&nbsp&nbsp'.'- '.
																			'<strong>Principal: </strong>'.$RowCardapio2['principalCardapio'].'&nbsp'
																			.'<strong>Guarnicao:  </strong>'.$RowCardapio2['guarnicaoCardapio'].'&nbsp'
																			.'<strong>Acompanhamento:  </strong>'.$RowCardapio2['acompanhamentoCardapio'].'&nbsp'
																			.'<strong>Salada:  </strong>'.$RowCardapio2['salada1Cardapio'].'&nbsp'
																			.'<strong>Bebida:  </strong>'.$RowCardapio2['bebidaCardapio'].'&nbsp'
																			.'<strong>Sobremesa:  </strong>'.$RowCardapio2['sobremesaCardapio']?></li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5 animated fadeInDown delay-3s">
                    <h6 class="display-4 font-weight-light" id="informacoes">Informações</h6>
                    <p class="font-italic text-muted">Valores e horário de funcionamento do R.U</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-6 col-sm-12 mb-5 animated fadeInUp delay-3s">
                    <div class="bg-white rounded shadow-sm py-5 px-4">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-4">
                                <h5 class="font-weight-bold"></h5>
                            </div>
                            <div class="col col-lg-2">
                                <h5 class="font-weight-bold">Preço</h5>
                            </div>
                            <div class="col col-lg-6">
                                <h5 class="font-weight-bold">Observação</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-4">
                                <h6 class="font-weight-light">Discente</h6>
                            </div>
                            <div class="col col-lg-2">
                                <h6 class="font-weight-light">R$ 2,00</h6>
                            </div>
                            <div class="col col-lg-6">
                                <h6 class="font-weight-light">Indispensável a apresentação da carteirinha de estudante.
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-4">
                                <h6 class="font-weight-light">Servidores, colaboradores terceirizados</h6>
                            </div>
                            <div class="col col-lg-2">
                                <h6 class="font-weight-light">R$ 3,00</h6>
                            </div>
                            <div class="col col-lg-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-4">
                                <h6 class="font-weight-light">Visitantes</h6>
                            </div>
                            <div class="col col-lg-2">
                                <h6 class="font-weight-light">R$ 2,00</h6>
                            </div>
                            <div class="col col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-6 col-sm-12 mb-5 animated fadeInUp delay-3s">
                    <div class="bg-white rounded shadow-sm py-5 px-4">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-6">
                                <h5 class="font-weight-bold">Refeição</h5>
                            </div>
                            <div class="col col-lg-6">
                                <h5 class="font-weight-bold">Horário</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <h6 class="font-weight-light">Almoço</h6>
                            </div>
                            <div class="col col-lg-6">
                                <h6 class="font-weight-light">11h00 -12h30 (segunda a sábado)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <h6 class="font-weight-light">Jantar</h6>
                            </div>
                            <div class="col col-lg-6">
                                <h6 class="font-weight-light">17h00 - 18h00 (segunda a sexta-feira)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <small class="mt-4">O restaurante universitário funciona em dias letivos, conforme
                                calendário acadêmico.</small>
                        </div>
                    </div>
                </div>
                <!-- End-->
            </div>
        </div>
    </div>


    <footer class="bg-light pb-5">
        <div class="container text-center">
            <p class="text-muted mb-0">Desenvolvido por</p>
            <img src="https://www.emcomp.com.br/wp-content/uploads/2015/11/Logo-Emcomp-azul.png" alt="" width="150"
                height="50">
        </div>
    </footer>


    <!-- JQuery Ajax JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</body>

</html>