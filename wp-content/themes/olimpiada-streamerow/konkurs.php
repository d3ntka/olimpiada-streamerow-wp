<?php

/**
 * Template Name: Konkurs
 * Description: Submission page
 *
 */

get_header();

?>



<section class="s-konkurs" id="now">
	<div class="tigerki-konkurs-1"></div>
	<div class="konkurs-influ-2"></div>
	<div class="line-start"></div>
<div class="s-konkurs__content">


	<div class="row justify-content-center">
		<div class="col-xl-4">
			<div class="title">
				<div class="olives text-secondary">
					<i class="olive-left-gold"></i>
					<h1>
						Weź udział <br>
						w konkursie
					</h1>
					<i class="olive-right-gold"></i>
				</div>
			</div>
			<div class="s-konkurs__subtitle">
				Wygraj tigerki i wybierz ostatnią dyscyplinę dla naszych olimpijczyków
			</div>
		</div>
		<div class="col-xl-5 d-flex justify-content-center">
			<div>
				<div class="s-konkurs__kroki">
					<div class="lines">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/konkurs_kroki.png" alt=""> -->
					</div>
					<div>
						<p>
						Pokaż swojego ulubionego streamera/-kę jako <span class="text-secondary">starożytnego Wojownika/-czkę u boku Tygrysa.</span>
						</p>
						<p>
							Technika dowolna - rysunek, kolaż, rzeźba, przeróbka w programie graficznym. <em>Puść wodze fantazji!</em>
						</p>
						<p>
							Zgłoszenie wgraj w <em>formacie .png, .jpg, .jpeg, .bmp</em> poprzez poniższy formularz. W przypadku prac fizycznych może to być zdjęcie lub skan.
						</p>
						<p>
							Pamiętaj o wypełnieniu <em>wszystkich pól</em> w formularzu. Inaczej zgłoszenie może zostać pominięte!
						</p>
					</div>
				</div>
				<div>
					Prace można zgłaszać do 17.03.2022 do 23:59
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<div class="s-konkurs__submissionWrap">
	<div class="tigerki-konkurs-2"></div>
	<div class="konkurs-influ-1"></div>
	<div class="s-konkurs__submission">
		<?php echo do_shortcode('[contact-form-7 id="28" title="Konkurs"]'); ?>
	</div>
</div>





<?php
get_footer();
