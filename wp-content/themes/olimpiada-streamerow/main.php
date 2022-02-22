<?php

/**
 * Template Name: Main
 * Description: Front-page
 *
 */

get_header();

the_post();
?>


<section class="s2">
	<div class="s2a">
		<div class="line-start"></div>
		<!-- <div class="line-end"></div> -->
		<div class="title">
			<div class="olives">
				<i class="olive-left"></i>
				<h2>
					Czym jest Olimpiada Streamerów?
				</h2>
				<i class="olive-right"></i>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-8 text-center">
				<p>
				Olimpiada Streamerów to 5 emomocjonujących konkurencji, w których ósemka naszych dzielnych Olimpijczyków zawalczy o najwyższy stopień podium i wieczną chwałę. 
				<br>
				5 wyzwań, podczas których streamerzy zmierzą się w znane i lubiane tytuły. Niektóre dyscypliny znamy już dziś. Resztę wybierzecie wy! Rozsiądźcie się wygodnie, bo zaraz zaczynamy!
				</p>
			</div>
		</div>
		<div class="s2a__content">
			<img class="s2a__shini" src="<?php echo get_template_directory_uri(); ?>/assets/img/s2-shini.webp" alt="">
			<img class="s2a__games" src="<?php echo get_template_directory_uri(); ?>/assets/img/games-rounds.png" alt="">
			<!-- <img class="s2a__content--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/s2-cont.webp" alt=""> -->

		</div>
		<div class="s2a--spacing"></div>
		</div>
	</div>
	<div class="s2b">
		<div class="title">
			<h3>
				Zdecyduj w czym zmierzą się nasi zawodnicy!
			</h3>
			<div class="olives">
				<i class="olive-left-dark"></i>
				<a class="button text-white" href="/vote">Zagłosuj</a>
				<i class="olive-right-dark"></i>
			</div>
		</div>
	</div>
</section>

<section class="s3">
	<div class="line-start"></div>
	<div class="d-flex justify-content-center">
		<div class="title text-primary">
			<div>
				<span>
					Poznaj naszych
				</span>
				<br>
				Olimpijczyków:
			</div>
		</div>
	</div>
	<div class="influs__wrap">
		<div class="influs">
			<a href="//twitch.tv/tuttekhs" target="_blank" class="influ influ-1">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-1.webp" alt="">
					<div class="influ__meta influ__meta--r">
						<span class="name">tuttek</span>
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/kezman22" target="_blank" class="influ influ-2">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-2.webp" alt="">
					<div class="influ__meta influ__meta--r">
						<span class="name">kezman</span>
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/overpow" target="_blank" class="influ influ-3">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-3.webp" alt="">
					<div class="influ__meta influ__meta--r">
						<span class="name">overpow</span>
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/slayproxx" target="_blank" class="influ influ-4">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-4.webp" alt="">
					<div class="influ__meta influ__meta--r">
						<span class="name">slayproxx</span>
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/gluhammer" target="_blank" class="influ influ-5">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-5.webp" alt="">
					<div class="influ__meta influ__meta--l">
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
						<span class="name">gluhammer</span>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/nieuczesana" target="_blank" class="influ influ-6">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-6.png" alt="">
					<div class="influ__meta influ__meta--l">
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
						<span class="name">nieuczesana</span>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/blackfireice" target="_blank" class="influ influ-7">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-7.png" alt="">
					<div class="influ__meta influ__meta--l">
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
						<span class="name">blackfireice</span>
					</div>
				</div>
			</a>
			<a href="//twitch.tv/shini_waifu" target="_blank" class="influ influ-8">
				<div class="influ__wrap">
					<img class="influ__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/influ-8.png" alt="">
					<div class="influ__meta influ__meta--l">
						<i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitch.png" alt=""></i>
						<span class="name">shini</span>
					</div>
				</div>
			</a>
		</div>
	</div>


	<div class="harmonogram__wrap" id="harmonogram">
		<div class="harmonogram__influ">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-harmo.png" alt="">
			<p>
				<span>Harmonogram:</span>
			</p>
		</div>
	</div>
</section>

<div class="harmonogram__cont">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/harmonogram.webp" alt="">
	<div class="line-end"></div>
</div>

<?php
get_footer();
