<!--=====================================
CONTÁCTENOS
======================================-->

<div class="contactenos container-fluid bg-white py-4" id="contactenos">
	
	<div class="container text-center">
		
		<h1 class="py-sm-4">CONTÁCTENOS</h1>

		<form method="post">

			<div class="input-group input-group-lg">
				
				<input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Nombre" name="nombreContactenos" required>

				<input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Apellido" name="apellidoContactenos" required>

			</div>

			<div class="input-group input-group-lg">
				
				<input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Móvil" name="movilContactenos" required>

				<input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Correo Electrónico" name="emailContactenos" required>

			</div>

			<textarea class="form-control" rows="6" placeholder="Escribe aquí tu mensaje" name="mensajeContactenos" required></textarea>

			<button type="submit" class="btn btn-dark my-4 btn-lg py-3 text-uppercase w-50">Enviar</button>
			
			<?php

				$contactenos = new ControladorUsuarios();
				$contactenos -> ctrFormularioContactenos();
			
			?>

		</form>

	</div>

</div>

<!--=====================================
MAPA
======================================-->
<div class="mapa container-fluid bg-white p-0">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3393020136346!2d-74.07696827759489!3d4.710993929334206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85609e0cb15d%3A0x3a0461bdb41253cd!2sDecameron!5e0!3m2!1ses-419!2sco!4v1698414842383!5m2!1ses-419!2sco"width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
		<!-- <iframe src="https://maps.app.goo.gl/4gNxcu9THosJfnxD8" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3393020136346!2d-74.07696827759489!3d4.710993929334206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85609e0cb15d%3A0x3a0461bdb41253cd!2sDecameron!5e0!3m2!1ses-419!2sco!4v1698414842383!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
			<!-- https://maps.app.goo.gl/4gNxcu9THosJfnxD8 -->

			<div class=" p-4 info"> 

		<h3 class="mt-4"><strong>Visítanos</strong></h3>
		<p>Ven y vive una gran aventura con tu familia</p>


		<p>
		Decameron<br>
		Calle 20 # 82-52 C.C. Hayuelos Local<br>
		Bogota Colombia<br>
		</p>

		<p class="pb-4">Email: DIEGO.CHINCHILLA23@GMAIL.COM.com<br>
		Tel: 3133153488</p>

	</div>	

</div>

<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid p-0">

	<div class="grid-container">
			
		<div class="grid-item d-none d-lg-block pt-2"></div>

		<div class="grid-item d-none d-lg-block pt-2">
			
<footer class="main-footer">

	<strong>Copyright © <?php echo date("Y"); ?>  <a href="https://www.grupoalegres.com/" target="_blank">Grupo Alegre</a>.</strong> Todos los derechos reservados.

</footer>

		</div>

		<div class="grid-item pt-2">
			
			<ul class="py-1">

				<li>
					<a href="https://www.facebook.com/Grupoalegres" target="_blank"><i class="fab fa-facebook-f lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="https://www.facebook.com/Grupoalegres" target="_blank"><i class="fab fa-twitter lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="https://www.youtube.com/channel/UCkM7DVo9gj3ZWt2gAyQqlJQ" target="_blank"><i class="fab fa-youtube lead text-white float-left mx-3"></i></a>
				</li>


				<li>
					<a href="https://www.youtube.com/channel/UCkM7DVo9gj3ZWt2gAyQqlJQ" target="_blank"><i class="fab fa-instagram lead text-white float-left mx-3"></i></a>
				</li>	
			
			</ul>	

		</div>

	</div>

</footer>

<!--=====================================
REDES SOCIALES MÓVIL
======================================-->

<ul class="redesMovil p-2 nav nav-justified">

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-twitter lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-youtube lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-instagram lead text-white"></i></a>
	</li>	

</ul>	
