
	<!-- NavBar -->
	
	<nav class="navbar sticky-top navbar-expand-lg menuBar py-1" >
		<div class="centeroo d-flex d-lg-none d-xl-none w-100">

			<div class="col-10">
				<a class="navbar-brand menuBarMovil py-0 btn btn-dark" href="index.php?view=index">
					<img src="Img/Logo_g_sm.webp" alt="Logo_g_sm.webp">					
				</a>
			</div>

			<div class="col-2 align-self-center" style="">
				<button id="btnM" class="navbar-toggler btn btn-dark ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdownA" aria-controls="navbarNavDropdownA" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white">&#9776;				
				</button>					
			</div>
		</div>
		<!-- botones menu -->
		<div class="centeroo d-flex">
			<div class=" collapse navbar-collapse" id="navbarNavDropdownA">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link btn btn-dark " href="<?=($vista=='home')?'#':'index.php?view=home'?>">HOME<?=($vista=='home')?'<span class="sr-only">(current)</span>':''?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link btn btn-dark" href="<?=($vista=='acerca')?'#':'index.php?view=acerca'?>">ACERCA DE<?=($vista=='acerca')?'<span class="sr-only">(current)</span>':''?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-dark " href="<?=($vista=='galeria')?'#':'index.php?view=galeria'?>">GALERIA<?=($vista=='galeria')?'<span class="sr-only">(current)</span>':''?></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link btn btn-dark dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  	COSTOS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  	<a class="dropdown-item" href="index.php?view=costos#divServicios">SERVICIOS INDIVIDUALES</a>
						  	<a class="dropdown-item" href="index.php?view=costos#promoshr">PROMOCIONES</a>
						  	<a class="dropdown-item" href="index.php?view=costos#cursos">CURSOS DE AUTOMAQUILLAJE</a>
						  	<a class="dropdown-item" href="index.php?view=costos#noviasCostoshr">NOVIAS</a>
						  	<a class="dropdown-item" href="index.php?view=costos#xvanioshr">QUINCEA&Ntilde;ERAS</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-dark" href="<?=($vista=='contacto')?'#':'index.php?view=contacto'?>">CONTACTO<?=($vista=='contacto')?'<span class="sr-only">(current)</span>':''?></a>
					</li>										
				</ul>
					<a class="navbar-brand mx-1 d-none d-lg-block d-xl-block" href="https://www.facebook.com/Merik_makeup-307252060037441/"  target="_blank">
				    	<img class="mx-auto " src="Img/Facebook.png" width="30" height="30" alt="facbookLogo">
				  	</a>				
					<a class="navbar-brand mx-1 d-none d-lg-block d-xl-block" href="https://www.instagram.com/merikmakeup/" target="_blank">
				    	<img class="mx-auto " src="Img/Instagram.webp" width="30" height="30" alt="Instagram.webp">
				  	</a>									
					
				  	<!-- mierda -->
				<form class="form-inline">
			      	<div class="input-group w-100 ml-auto">
							</div>
    			</form>
				<div class="gcse-searchbox-only">
				</div>
			</div>
		</div>
	</nav>