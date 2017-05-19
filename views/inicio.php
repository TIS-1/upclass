<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#">TopCasaFina Arquitetura</a>
				</div>

				<div class="collapse navbar-collapse" id="collapse-navbar">
					<ul class="nav navbar-nav">
						<li><a href="#sobre-nos">Sobre Nós</a></li>
						<li><a href="#nossos-projetos">Nossos Projetos</a></li>
						<li><a href="#depoimentos">Depoimentos</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container topCasaFina-bannerWrapper">
			<div class="topCasaFina-banner">
				<h1>TopCasaFina Arquitetura</h1>
				<p>Projetando a casa dos sonhos desde 2000 A.C</p>
				<button class="btn btn-primary btn-lg">Contate-nos agora</button>
			</div>
		</div>

	</header>

	<section id="sobre-nos" class="container">
		<h2>Sobre Nós</h2>
		<div class="row">
			<img class="img-responsive col-sm-6" src="assets/img/empresa.jpg" alt="">

			<div class="panel-group col-sm-6" id="paineis-sobre">
				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#primeiro-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Desde 1935</h3>
					</div>

					<div class="collapse in" id="primeiro-paragrafo">
						<div class="panel-body">
							Desde 1935 trazendo casas, mansões e prédios lindos para o mundo
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#segundo-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Alegria em colaborar para um mundo mais bonito</h3>
					</div>

					<div id="segundo-paragrafo" class="collapse">
						<div class="panel-body">
							Trazendo alegria para a vida das pessoas que tem dinheiro para gastar.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#terceiro-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Mais de 300 prêmios em design e em conforto.</h3>
					</div>

					<div id="terceiro-paragrafo" class="collapse">
						<div class="panel-body">
							Mais de 5 milhões de clientes satisfeitos em todo o mundo.
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<div class="jumbotron">
		<div class="container">
			<h3>Mais de 300 prêmios em design e em conforto.</h3>
			<p>Mais de 5 milhões de clientes satisfeitos em todo o mundo.</p>
		</div>
	</div>

	<section id="nossos-projetos" class="container">
		<h2>Nossos Projetos</h2>

		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail">
					<img src="assets/img/projetos/casa-castelo.png" alt="">
					<figcaption class="caption">
						<h3>Casa Castelo</h3>
						<p>
							A Casa Castelo é o último lançamento da TopCasaFina Arquitetura, feita para um monge.
						</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail">
					<img src="assets/img/projetos/casa-lago.png" alt="">
					<figcaption class="caption">
						<h3>Casa Castelo</h3>
						<p>
							A Casa do Lago foi lar de inúmeras pessoas que conheciam o presidente da época.
						</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail">
					<img src="assets/img/projetos/mercado-marapira.png" alt="">
					<figcaption class="caption">
						<h3>Casa Castelo</h3>
						<p>
							O mercado Marapira foi projetado nos mínimos detalhes na arquitetura baseada em frutas.
						</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail">
					<img src="assets/img/projetos/palacio-dionisio.png" alt="">
					<figcaption class="caption">
						<h3>Palácio Dionísio</h3>
						<p>
							O palácio Dionísio foi eleito pela revista 'Grandes palácios' como o palácio mais lindo do mundo.
						</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail">
					<img src="assets/img/projetos/residencia-ludi.png" alt="">
					<figcaption class="caption">
						<h3>Residência Ludi</h3>
						<p>
							A residência Ludi foi projetada para ser a mais bela casa de São Paulo pela revista Housing.
						</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<section id="depoimentos">

		<h2 class="container titulo-depoimentos">Depoimentos de Clientes</h2>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<figure class="item active">
					<img src="assets/img/depoimentos/depoimento1.png" alt="Depoimento 1">
					<figcaption class="carousel-caption">
						<h3>Yuri Padilha</h3>
						<p>Gostei muito e achei rápido o serviço.</p>
					</figcaption>
				</figure>
				<figure class="item">
					<img src="assets/img/depoimentos/depoimento2.png" alt="Depoimento 2">
					<figcaption class="carousel-caption">
						<h3>Fernando Stafaneni</h3>
						<p>Excelente trabalho.</p>
					</figcaption>
				</figure>
				<figure class="item">
					<img src="assets/img/depoimentos/depoimento3.png" alt="Depoimento 3">
					<figcaption class="carousel-caption">
						<h3>Caio Sauzas</h3>
						<p>Gostei, competência em primeiro lugar.</p>
					</figcaption>
				</figure>
			</div>

			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<section id="video" class="col-sm-6">

				<h2>Video institucional</h2>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/i_3Pv1AygeI" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>

			<section id="contato" class="col-sm-6">
				<h2>Contato</h2>
				<h4>Entre em contato conosco</h4>

				<form>
					<div class="form-group">
						<label for="contato-nome">Nome:</label>
						<input id="contato-nome" class="form-control" type="text" placeholder="Seu nome">
					</div>

					<div class="form-group">
						<label for="contato-email">E-mail:</label>
						<div class="input-group">
							<div class="input-group-addon">@</div>
							<input id="contato-email" class="form-control" type="email" placeholder="Seu e-mail">
						</div>
					</div>

					<div class="grupo-radio">
						<div class="radio">
							<label>
								<input type="radio" name="tipo-pessoa" value="fisica" checked>
								Pessoa física
							</label>
						</div>

						<div class="radio">
							<label>
								<input type="radio" name="tipo-pessoa" value="juridica">
								Pessoa jurídica
							</label>
						</div>
					</div><!--

				--><select class="contato-select form-control" name="tipo-solicitacao">
				<option value="" disabled selected>Tipo de solicitação</option>
				<option value="casa">Casa</option>
				<option value="apartamento">Apartamento</option>
				<option value="mansao">Mansão</option>
			</select>

			<button type="submit" class="btn btn-primary">Enviar</button>

		</form>
	</section>
</div>
</div>

<footer>
	<address>
		<strong>TopCasaFina Arquitetura</strong><br>
		Rua Vergueiro, 3185, Vila Mariana<br>
		São Paulo, SP<br>
		Tel: (11) 5571-2751 ou 5083-3884
	</address>
	<address>
		E-mail: contato.topcasafina@alura.com.br
	</address>
</footer>

<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/navbar-animation-fix.js"></script>
</body>
</html>
