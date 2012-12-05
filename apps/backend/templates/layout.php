<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sam:D | Sistema de Atención Médica Domiciliaria por Intermedi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Solicite atención médica en su casa u oficina a través de los planes de cobertura de Intermedi">
	<meta name="keywords" content="ayuda, emergencias, ticket, solicitud, en línea, ambulanci, hospital, médico, paramédico, caracas, venezuela">
	<meta name="author" content="www.intermedi.com.ve">
	
	<!-- Bootstrap Styles -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
	/*padding-top: 60px;*/ /* If fixed navbar. 60px to make the container go all the way to the bottom of the topbar */
	}
	</style>
	<!-- Bootstrap Styles Responsive -->
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="header-zone">
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
				<a class="brand" href="#">sam:D</a>
				<ul class="nav pull-right">
					<li class="active"><a href="#"><i class="icon-home"></i> Mis Solicitudes</a></li>
					<li><a href="#"><i class="icon-plus"></i> Nueva Solicitud</a></li>
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-asterisk"></i> Mi Cuenta <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Mi Perfil</a></li>
							<li><a href="#"><i class="icon-question-sign"></i> Ayuda</a></li>
							<li><a href="#"><i class="icon-heart"></i> Atención al Cliente</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-off"></i> Cerrar Sesión</a></li>
						</ul>
					</li>			
				</ul>
				</div>
			</div>
		</div>	
	</div>
	<div id="middle-zone">
            <div class="row">
                <div class="span12">
                            <?php echo $sf_content ?>
		</div>
            </div>
	</div>
	<div id="footer-zone">
		<div class="container">
			<hr>
			<div class="row">
				<div class="span12">
				
					<ul class="nav nav-pills" style="margin:auto;">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Nueva Solicitud</a></li>
						<li><a href="#">Mis Solicitudes</a></li>
						<li><a href="#">Mi Perfil</a></li>
						<li><a href="#">Ayuda</a></li>
					</ul>
					
					<p style="color: #999999;">¿Necesita asistencia inmediata? Contacta ya al <strong>0800-INTERM(036639)</strong></p>
				</div>
			</div>
		</div>
	</div>
	
	
<!-- SCRIPTS -->

<!-- jQuery -->
<script src="js/jquery.js" type="text/javascript"></script>
<!-- Bootstrap Scripts -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
</body>

</html>
