<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mix Panel</title>

	<link rel="stylesheet" href="{{ url('css/app.css')}}">
</head>
<body>
	<section id="home">
        <div class="container">
			@include('home.partials.header')
			<div class="form-container">
		        <div class="menu-options">
		        	<div class="formulario">
			        	<form class="form-group" id="formulario">
	                        <div class="row">
	                            <div class="input-field col-xs-12">
	                                <label for="email">Ingresa tu correo</label>
	                                <input id="email" name="email" type="email" autocomplete="off">
	                            </div>
	                            <div class="input-field col-xs-12">
	                                <label for="pass">Ingresa tu contraseña</label>
	                                <input id="pass" name="pass" type="password" autocomplete="off">
	                            </div>
								<div class=" btn-box col-xs-12">
									<a href="#" id="form-btn" class="mix-btn">Ingresa</a>
								</div>
	                        </div>
	                    </form>
		        	</div>
		        </div>
			</div>
			<div class="home-slider">
				<p>Ver más</p>
				<a href="#video"><span class="glyphicon glyphicon-triangle-bottom"><span></a>
			</div>
        </div>
	</section>
	<section id="video">
		@include('home.partials.header')
        <a href="https://www.youtube.com/embed/zNPsnXe4lWw?autoplay=1&color=white&fs=0&hl=es&showinfo=0&loop=1" class="video-media">
        	<i class="glyphicon glyphicon-play-circle"></i>
        	<span>Ver vídeo</span>
        </a>
        <div class="video-modal hidden">
	        <iframe width="100%" height="100%" src="#" frameborder="0" allowfullscreen></iframe>
	        <a id="video-modal-close" class="glyphicon glyphicon-remove" href="#"></a>
	    </div>
	</section>
	<section id="options">
		<div class="container">
			@include('home.partials.header')
	        <div class="options-container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 options-box">
								<div class="options-text">
									<h3>Options 1</h3>
									<p>Aqui se describe la opcion, si le das click en el boton te mostrará la información.</p>
									<a href="" class="mix-btn">Ingresar</a>
								</div>
							</div>
							<div class="col-sm-4 options-box">
								<div class="options-text">
									<h3>Options 1</h3>
									<p>Aqui se describe la opcion, si le das click en el boton te mostrará la información.</p>
									<a href="" class="mix-btn">Ingresar</a>
								</div>
							</div>
							<div class="col-sm-4 options-box">
								<div class="options-text">
									<h3>Options 1</h3>
									<p>Aqui se describe la opcion, si le das click en el boton te mostrará la información.</p>
									<a href="" class="mix-btn">Ingresar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	        </div>
		</div>
	</section>
	
	<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
</body>
</html>