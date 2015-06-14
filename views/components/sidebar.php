<!-- sidebar START -->
<div class="sidebar">
	<div class="sidebar-inner">
		<ul class="sidebar-header">
			<li><a href="http://www.ironphysique.sk" class="logo">IronPhysique</a></li>
			<li><a href="/login.php" class="button button-sm button-login">Prihlásenie</a></li>
		</ul>
		<div class="sidebar-menu">
			<ul>
				<li class="title"><a href="#">Menu</a></li>
				<?php require_once URL .'views/menu.php';?>

				<!-- Newsletter -->
				<li class="title"><a href="#">Odber noviniek</a></li>	
				<li class="newsletter">
					<div class="newsletter-inner">
						<p>Buď informovaný o akciách <br>a novom tovare ako prvý/prvá.</p>
						<form action="#" method="post">
							<input type="text" name="email" class="newsletter-email" placeholder="Váš email">
							<input type="submit" class="button button-sm newsletter-submit" value="Odoberať">
						</form>	
					</div>
				</li>			
			</ul>

			<!-- Footer menu -->
			<ul class="footer-menu">
				<li><a href="#">Obchodné podmienky |</a></li>
				<li><a href="#">Odstúpenie od zmluvy |</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>

		</div>
	</div>
</div>	
<!-- sidebar END -->