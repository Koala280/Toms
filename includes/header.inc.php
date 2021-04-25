<!------------------------------------NAVIGATION/HEADER----------------------------->

<nav id="idNav">

		<div class="cLogo"><img src="http://localhost/Toms/img/logo.png"></div>	


				<!-----------------bei kleinem Display ----------------------->
		<ul id="idNavUlSmall">
			<li class="cLinkActive"><a href="#">Links</a></li>
			<li class="cLinkSub"><a href="http://ghswedel.de/web/roman/">Romans page</a></li>
			<li class="cLinkSub"><a href="http://ghswedel.de/web/robin/">Robins page</a></li>
			<li class="cLinkSub"><a href="http://ghswedel.de/web/kim-janosch/">Kim-Janoschs page</a></li>
			<li class="cLinkSub"><a href="http://ghswedel.de/">GHS Homepage</a></li>
			<li class="cLinkSub"><a href="http://localhost/Toms/">Toms Startseite</a></li>
		</ul>

			<!-------------------------bei normalen Bildschrim-------------------->
		<ul id="idNavUl">
			<li class="cLink"><a href="http://localhost/Toms/">Toms Startseite</a></li>
			<li class="cLink"><a href="http://ghswedel.de/web/roman/">Romans page</a></li>
			<li class="cLink"><a href="http://ghswedel.de/web/robin/">Robins page</a></li>
			<li class="cLink"><a href="http://ghswedel.de/web/kim-janosch/">Kim-Janoschs page</a></li>
			<li class="cLink"><a href="http://ghswedel.de/">GHS Homepage</a></li>

			<ul class="cSubMenu">

			<?php if(isset($_SESSION['ghs_t_loggedIn']) && $_SESSION['ghs_t_loggedIn']) {	?>

				<li class="cLinkActive"><a href="http://localhost/Toms/settings/"><?php echo $_SESSION['ghs_t_username']; ?></a></li>
				<li class="cLinkSub"><a href="http://localhost/Toms/abmelden/">Abmelden</a></li>

			<?php } else { ?>

				<li class="cLinkActive"><a href="http://localhost/Toms/AnmeldeSeite/">Anmelden</a></li>

			<?php } ?>
			</ul>
		</ul>

		
</nav>