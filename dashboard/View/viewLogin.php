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
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-login my-5 shadow">
					<div class="card-body">
						<h5 class="card-title text-light text-center">Login</h5>
						<form class="form-login">
							<div class="form-label-group">
								<input type="email" id="email" class="form-control shadow" placeholder="Email" required autofocus>
								<label for="email">Email</label>
							</div>

							<div class="form-label-group">
								<input type="password" id="senha" class="form-control shadow" placeholder="Senha" required>
								<label for="senha">Senha</label>
							</div>

							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label text-light" for="customCheck1">Lembrar-me</label>
							</div>
							<button class="btn btn-lg btn-dark btn-block text-uppercase shadow" type="submit">Entrar</button>
						</form>
						<hr class="hr">
						<div class="row d-flex justify-content-center">
							<div class="col-12 text-center">
								<small>Desenvolvido por</small>
							</div>
							<div class="col-12 text-center">
								<img src="../Assets/emcomp_w.png" alt="" width="120" height="40">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	 <!-- JQuery Ajax JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>