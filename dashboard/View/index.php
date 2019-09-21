<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Cardápio IF Sudeste MG - Campus Rio Pomba</title>

    <!-- FullCalendar CSS CDN -->
    <link href='../Assets/css/core/main.min.css' rel='stylesheet' />
    <link href='../Assets/css/daygrid/main.min.css' rel='stylesheet' />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../Assets/css/custom.css">
<style>
    .fuck {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba(255, 255, 255, .8) url('../assets/loading.gif') 50% 50% no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading .fuck {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .fuck{
    display: block;
}
</style>
</head>

<body>

    <div class="wrapper">
        <nav id="menu-lateral">
            <div class="menu-lateral-header text-center">
                <img src="../Assets/logo.png" class="rounded" alt="user" width="200" height="50">
            </div>

            <ul class="list-unstyled components">
                <div class="row p-2">
                    <div class="col-auto">
                        <img src="https://icon-library.net/images/avatar-icon-images/avatar-icon-images-4.jpg"
                            class="rounded" alt="user" width="80" height="80">
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <h6>Nome</h6>
                            <h6><span class="badge badge-pill badge-dark">Administrador</span></h6>
                            <button type="button" class="btn btn-danger btn-sm btn-block"><i
                                    class="fas fa-sign-out-alt"></i> Sair</button>

                        </div>
                    </div>
                </div>
                <li class="active mt-4">
                    <a href="#"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-images"></i> Item</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Item 1</a>
                        </li>
                        <li>
                            <a href="#">Item 2</a>
                        </li>
                        <li>
                            <a href="#">Item 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-folder-open"></i> Item 2</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-0">
                <div class="container-fluid">

                    <button type="button" id="menu-lateral-slide" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="container p-5">
                <div id='calendar'></div>
            </main>
        </div>
    </div>

    <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span id="tituloE"></span><span id="start"></span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditCardapio" method="POST">
                        <input type="hidden" id="dataxd" name="dataxd">
                        <input type="hidden" id="idE" name="idE">
                        <input type="hidden" value="editar" name="acao">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Refeição</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect1" name="tipoE" id="tipoE">
                                    <option value="0">Almoço</option>
                                    <option value="1">Jantar</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Principal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite o prato principal..."
                                    name="principalE" id="principalE">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Guarnição</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a guarnição..."
                                    name="guarnicaoE" id="guarnicaoE">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Acompanhamento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite o acompanhamento..."
                                    name="acompanhamentoE" id="acompanhamentoE">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Salada</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a salada..." name="saladaE"
                                    id="saladaE">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bebida</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a bebida..." name="bebidaE"
                                    id="bebidaE">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sobremesa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a sobremesa..."
                                    name="sobremesaE" id="sobremesaE">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-info" id="btnEditCardapio" type="button" value="Editar">
                            <input class="btn btn-danger" id="btnDeleteCardapio" type="button" value="Deletar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCadCardapio" method="POST">
                        <input type="hidden" id="datax" name="datax">
                        <input type="hidden" value="adicionar" name="acao">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Refeição</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                                    <option value="0">Almoço</option>
                                    <option value="1">Jantar</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Principal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite o prato principal..."
                                    name="principal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Guarnicao</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a guarnição..."
                                    name="guarnicao">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Acompanhamento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite o acompanhamento..."
                                    name="acompanhamento">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Salada</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a salada..." name="salada">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bebida</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a bebida..." name="bebida">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sobremesa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Digite a sobremesa..."
                                    name="sobremesa">
                            </div>
                        </div>


                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-12">
                        <input type="button" id="btnCadCardapio" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="fuck"><!-- Place at bottom of page --></div>

    <!-- JQuery Ajax JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- SweetAlert JS -->
    <!-- FullCalendar JS -->
    <script src='../Assets/js/core/main.min.js'></script>
    <script src='../Assets/js/interaction/main.min.js'></script>
    <script src='../Assets/js/daygrid/main.min.js'></script>
    <script src='../Assets/js/core/locales/pt-br.js'></script>
    <script src="../Assets/js/custom.js"></script>

    <!-- Notify JS -->
    <script src="../Assets/js/bootstrap-notify.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        //MENU LATERAL
        $('#menu-lateral-slide').on('click', function() {
            $('#menu-lateral').toggleClass('active');
            $(this).toggleClass('active');
        });

        //INPUT DINAMICO
        $(".adicionar").click(function() {
            var html = $(".copiar").html();
            $(".adicionado").after(html);
        });
        $("body").on("click", ".remover", function() {
            $(this).parents(".control-group").remove();
        });
    });
    </script>
</body>

</html>