<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Introducción a las Tecnologías de la Información</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-brown-700">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Kuroro</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfil</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> Balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Mensajes <span class="badge badge-pill bg-blue ml-auto">0</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Configurar cuenta</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Cerrar Sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md bg-brown">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Angel Balboa</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd. Victoria
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
								<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Pagina Principal
								</span>
							</a>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empleados</div> <i class="icon-menu" title="Datos y Formularios"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-briefcase"></i> <span>Empleados</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empleados">
								<li class="nav-item"><a href="Listado_De_Empleados.php" class="nav-link">Listado de Empleados</a></li>
							<li class="nav-item"><a href="form_inputs.php" class="nav-link active">Registro de Empleados</a></li>
							<li class="nav-item"><a href="Actualizar_Registro.php" class="nav-link active">Actualizar Empleados</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-airplane3"></i> <span>Vacaciones</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vacaciones">
								<li class="nav-item"><a href="Lista_De_Vacaciones.php" class="nav-link active">Lista de Vacaciones/Editar</a></li>
								<li class="nav-item"><a href="Solicitud_Vac.php" class="nav-link active">Solicitar Vacaciones</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Departamentos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube4"></i> <span>Listado de Departamentos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Departamentos">
								<li class="nav-item"><a href="Listado_De_Departamentos.php" class="nav-link">Listado de Departamentos</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empresas</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-office"></i> <span>Empresas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empresas">
								<li class="nav-item"><a href="Listado_De_Empresas.php" class="nav-link">Lista de Empresas/Editar Empresa</a></li>
								<li class="nav-item"><a href="AgregarDep.php" class="nav-link">Agregar Empresa</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Boletos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Boletos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empresas">
								<li class="nav-item"><a href="Boletos.php" class="nav-link">Pagar Boleto</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Alumnos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Alumnos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Alumnos">
								<li class="nav-item"><a href="Añadir_Alumno.php" class="nav-link">Añadir Alumno</a></li>
								<li class="nav-item"><a href="Listado_De_Alumnos.php" class="nav-link">Lista/Editar Alumno</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Turorias</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-certificate"></i> <span>Tutorias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Tutorias">
								<li class="nav-item"><a href="Listado_De_Tutorias.php" class="nav-link">Lista de Tutorias</a></li>
								<li class="nav-item"><a href="Añadir_Tutoria.php" class="nav-link">Añadir Tutorias</a></li>
							</ul>
						</li>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Alumnos</span> - Listado de Alumnos</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
							<a href="Listado_De_Alumnos.php" class="breadcrumb-item">Alumnos</a>
							<span class="breadcrumb-item active">Listado de Alumnos</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
								<i class="icon-comment-discussion mr-2"></i>
								Soporte
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Ayuda no disponible por el momento</a>
							</div>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Configuración
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Seguridad de la Cuenta</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analisis</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accesibilidad</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card bg-brown-300">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Lista de Tutorias</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>
				<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr class="bg-blue-700">
									<th>   </th>
									<th>ID</th>
									<th>Alumno</th>
									<th>Matricula</th>
									<th>Carrera</th>
									<th>Empleado</th>
									<th>ID del Empleado</th>
									<th>Departamento</th>
									<th>Fecha</th>
									<th>Tema Atendido</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut1_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>1</th>
									<th>Ángel Martin Reyes Balboa</th>
									<th>1930167</th>
									<th>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</th>
									<th>Marth</th>
									<th>3</th>
									<th>proyectos</th>
									<th>15 de Octubre de 2019</th>
									<th>Familia</th>
								</tr>
								<tr>
								<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut2_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>2</th>
									<th>Victoria Bernardo Bouza</th>
									<th>1780273</th>
									<th>INGENIERIA MECATRONICA</th>
									<th>Jackelyn</th>
									<th>5</th>
									<th>Finanzas</th>
									<th>14 de Octubre de 2019 </th>
									<th>Inasistencias</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut3_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>3</th>
									<th>Juan Antonio Ivanov Perona</th>
									<th>1890239</th>
									<th>INGENIERIA DE SISTEMAS AUTOMOTRICES</th>
									<th>Bruno</th>
									<th>8</th>
									<th>proyectos</th>
									<th>12 de Octubre de 2019</th>
									<th>Problemas Familiares</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut4_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>4</th>
									<th>Carla Adrian Acuña</th>
									<th>1849182</th>
									<th>PYMES</th>
									<th>Aura</th>
									<th>4</th>
									<th>Mantenimiento</th>
									<th>5 de junio de 2019</th>
									<th>Problemas economicos</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut5_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>5</th>
									<th>Victor Pages Blanco</th>
									<th>1940392</th>
									<th>INGENIERIA MECATRONICA</th>
									<th>Jackelyn</th>
									<th>5</th>
									<th>Finanzas</th>
									<th>20 de Septiembre de 2019</th>
									<th>Falta de atencion</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut6_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>6</th>
									<th>Ángel Martin Reyes Balboa</th>
									<th>1930167</th>
									<th>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</th>
									<th>Aura</th>
									<th>4</th>
									<th>Mantenimiento</th>
									<th>15 de Noviembre de 2019</th>
									<th>Asesiorias de Algebra</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut7_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>7</th>
									<th>Carla Adrian Acuña</th>
									<th>1849182</th>
									<th>PYMES</th>
									<th>DIO Brando</th>
									<th>2</th>
									<th>Proyectos</th>
									<th>9 de Octubre de 2019</th>
									<th>Problemas de puntualidad</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut8_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>8</th>
									<th>Victor Pages Blanco</th>
									<th>1940392</th>
									<th>INGENIERIA MECATRONICA</th>
									<th>Mohamed Abdul</th>
									<th>10</th>
									<th>Recepción</th>
									<th>9 de Diciembre de 2019</th>
									<th>Problemas de Confianza</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut9_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>9</th>
									<th>Victor Pages Blanco</th>
									<th>1940392</th>
									<th>INGENIERIA MECATRONICA</th>
									<th>Chrome Emblem</th>
									<th>7</th>
									<th>Recepción</th>
									<th>28 de Noviembre de 2019</th>
									<th>Problemas de Salud</th>
								</tr>
								<tr>
									<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Tut4_modal"><i class="icon-pencil7"></i></a>
					    		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    		</td>
									<th>10</th>
									<th>Carla Adrian Acuña</th>
									<th>1849182</th>
									<th>PYMES</th>
									<th>Marth</th>
									<th>3</th>
									<th>Proyectos</th>
									<th>23 de Septiembre de 2019</th>
									<th>Problemas de Puntualidad</th>
								</tr>
							</tbody>
						</table>
		        </div>	
			</div>
			<!-- /content area -->

				<!--Modal Editar-->
				<div id="Tut1_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Alumno</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="1" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Angel Martin Reyes Balboa" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1930167" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Marth" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="3" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Proyectos" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="15 de Octubre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Familiares" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut2_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="2" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Victoria Bernardo Bouza" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1780273" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Jackelyn" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="5" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Finanzas" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="14 de Octubre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Inasistencias" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut3_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="3" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Juan Antonio Ivanov Perona" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1890239" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Bruno" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="8" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Proyectos" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="12 de Octubre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas Familiares" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->
				<!--Modal Editar-->
				<div id="Tut4_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="4" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Carla Adrian Acuña" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1849182" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Aura" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="4" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Mantenimiento" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="5 de Julio 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas economicos" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut5_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="5" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Victor Pages Blanco" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1940392" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Jackelyn" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="5" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Finanzas" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="20 de Septiembre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Falta de atencion" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut6_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="6" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Angel Marth Reyes Balboa" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1930167" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Aura" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="4" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Mantenimiento" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="15 de Noviembre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Asesiorias de Algebra" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut7_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="7" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Carla Adrian Acuña" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1849182" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="DIO Brando" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="2" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Proyectos" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="9 de Octubre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas de Puntualidad" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut8_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="8" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Victor Pages Blanco" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1940292" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Mohamed Abdul" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="10" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Recepción" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="9 de Diciembre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas de Confianza" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut9_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="9" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Victor Pages Blanco" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1940392" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Chrome Emblem" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="7" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Recepción" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="28 de Noviembre de 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas de Salud" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

				<!--Modal Editar-->
				<div id="Tut10_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-brown-700">
								<h5 class="modal-title font-weight-bold">Editar Tutoria</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>ID</label>
												<input type="text" value="10" class="form-control">
											</div>
										</div>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Alumno</label>
												<input type="text" value="Carla Adrian Acuña" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Matricula</label>
												<input type="text" value="1849182" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Carrera</label>
													<select class="form-control col-lg-10 border-indigo border-2">
														<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE LA INFORMACIÓN</span></option>
			                                			<option value="opt1"><span>INGENIERIA DE SISTEMAS AUTOMOTRICES</span></option>
			                                			<option value="opt2"><span>INGENIERIA MECATRONICA</span></option>
			                                			<option value="opt2"><span>PYMES</span></option>
			                                			<option value="opt2"><span>INGENIERIA EN TECNOLOGIAS DE MANUFACTURA</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Empleado</label>
												<input type="text" value="Marth" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Numero de Empleado</label>
												<input type="text" value="3" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Departamento</label>
												<input type="text" value="Proyectos" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Fecha de Tutoria</label>
												<input type="text" value="23 de Septiembre 2019" class="form-control">
											</div>
										</div>
									</div><div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Tema Tratado</label>
												<input type="text" value="Problemas de Puntualidad" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-violet" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal de Editar-->

			<!--Modal de Eliminar-->
				<div id="Borrar_modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirmar Acción</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								¿Estás seguro de eliminar el Registro?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-violet" data-dismiss="modal">Sí, borralo</button>
								<button type="button" class="btn btn-light" data-dismiss="modal">No borrar</button>
							</div>
						</div>
					</div>
				</div>
			<!--Fin del Modal-->
			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2019 - 2019. <a href="#">Introducción a las Tecnologías de la Información</a> hecho por <a href="http://themeforest.net/user/Kopyov" target="_blank">Angel Balboa</a>
					</span>

					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
