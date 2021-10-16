<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="header">
			<div class="nav secondary">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="menu-wrapper">
								<div class="languaje-switcher">
									<strong>ES </strong> EN
								</div>
								<nav>
									<ul>
										<li><a data-toggle="modal" data-target="#modalPhone" href="">Te llamamos</a></li>
										<li class="position-relative" data-tooltip><a>Ayuda</a>
												<div class="tooltip">
													<h3>¿Necesitas ayuda?</h3>
													<p>Para cualquier consulta puedes ponerte en contacto con nosotros. Estaremos encantados de ayudarte.
														<ul>
															<li><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-poi.svg" /><a href="/sede-y-oficinas">Sede y oficinas</a></li>
															<li><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mail.svg" /><a href="mailto:hola@tressis.com">tressis@tressis.com</li>
															<li><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-tel.svg" /> Llámanos <a href="tel:917 02 02 74">900 827 770</li>
														</ul>
													<p>De todas formas, siempre tienes la posibilidad de explorar nuestra sección de preguntas frecuentes</p>
													<p>O contactar con nuestra atención al cliente.</p>
												</div>
										</li>
										<li><a href="https://clientes.tressis.com/" target="out">Iniciar sesión</a></li>
										<li><a href="https://clientes.tressis.com/Operativa/Contratos/AltaModular/NuevoContrato.aspx?clienteNuevo=1" target="out" class="text-morado">Hazte cliente</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="nav primary">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-tressis.svg" alt="logotipo tressis" class="logo-normal"/>
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-tressis-invertido.svg" alt="logotipo tressis" class="logo-inverted"/>

							</a>
							<div class="mega-nav">
								<?php wp_megamenu(array('theme_location' => 'primary')); ?>
								<div class="sticky-options">
									<nav>
										<a data-toggle="modal" data-target="#modalPhone" href="">Te llamamos</a><br />
										<a href="">Ayuda</a>

										<div class="d-flex">
											<a href=""> <span style="margin-right:5px">ES</span></a> <a href=""> <span style="color:#595959;">EN</span> </a>
										</div>
									</nav>
									<div class="wrapper-butttons">
										<a href="https://clientes.tressis.com/" class="btn btn-transparent">Iniciar sesión</a>
										<a href="" class="btn btn-primary">Hazte cliente</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

<!-- Modal -->
<div class="modal fade" id="modalPhone" tabindex="-1" role="dialog" aria-labelledby="modalPhone" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 	<div class="container">
			  <div class="row">
				  	<div class="col-12">
						  <div class="block-form">
							  	<div class="block-text-form">
									  <div class="text-center">
											<h2 class="title text-32">Te llamamos</h2>
											<p class="text-20">En breve, un asesor se pondrá en contacto contigo.<br />De lunes a viernes, entre las 9:00 y 19:00 horas.</p>
										</div>
									<div class="form-wrapper">	
										<?php echo do_shortcode( '[contact-form-7 id="38062" title="te_llamamos"]' ); ?>
									</div>
								</div>
							</div>
					</div>
				</div>	
			</div>
	</div>

    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalWork" tabindex="-1" role="dialog" aria-labelledby="modalWork" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 	<div class="container">
			  <div class="row">
				  	<div class="col-12">
						  <div class="block-form">
							  	<div class="block-text-form">
									  <div class="text-center">
											<h2 class="title text-32">Trabaja con nosotros</h2>
											<p class="text-20">Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem</p>
										</div>
									<div class="form-wrapper">	
										<?php echo do_shortcode( '[contact-form-7 id="38150" title="trabaja"]' ); ?>
									</div>
								</div>
							</div>
					</div>
				</div>	
			</div>
	</div>

    </div>
  </div>
</div>