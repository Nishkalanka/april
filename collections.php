<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>
<body class="collection-page">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container">

		<div class="row">
        	<div id="bc1" class="btn-group btn-breadcrumb">
        	    <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        	    <a href="#" class="btn btn-default"><div>Женщинам</div></a>
        	    <a href="#" class="btn btn-default"><div>Одежда</div></a>
        	    <a href="#" class="btn btn-default"><div>Платья</div></a>
        	    <a href="#" class="btn btn-default"><div>Платья джинсовые</div></a>
        	    <a href="#" class="btn btn-default"><div>Платье ZURI MAXI DRESS</div></a>
        	</div>
	</div>
		
	</div> <!--container-->
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/filterblock.html'); ?>
	
	<div id="product-board">
	
		<div class="product large static">
			<div class="text">

				<h3>Женская одежда</h3>
				<!--<p class="lead">Примерь а потом купи то что тебе подошло! <a href="#">подробнее</a></p>-->
						<ul class="CatalogNav">
							<li class="active "><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Платья и сарафаны</a>
								<ul>
									<li><a href="#">Платья-макси</a></li>
									<li class="active"><a href="#">Платья без рукаквов</a></li>
									<li><a href="#">Джинсовые платья</a></li>
								</ul>
							</li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Футболки</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Топы и майки</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Юбки</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Брюки</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Джинсы</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Верхняя одежда</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Носки, чулки и колготки</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Одежда больших размеров</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Одежда для беременных</a></li>
						</ul>
						<!--<div id="Subscribe" class="text-center">
							<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email адрес</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email адрес">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="glyphicon glyphicon-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>рассылка новинок и скидок нашего магазина</p>
				
			</div>
		</form>
	</div>
						</div>-->
						
						<div class="Wow">
							<h2>Сначала примерь!</h2>
							<p>Примеряйте и оплачивайте<br> только подходящие<br> товары</p>
							<a class="btn" href="#">подробнее</a>
						</div><!--Wow-->
						
				
			</div><!--text-->
		</div><!--product-->
		
		<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/item.html'); ?>	

	</div> <!-- //end product-board -->
	
	<div class="load-more-container">
		<button class="btn load-more">
			показать еще 
		</button>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>