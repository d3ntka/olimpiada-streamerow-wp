<?php

/**
 * Template Name: Konkurs
 * Description: Submission page
 *
 */

get_header();

?>



<section class="s-konkurs" id="now">
<div class="s-konkurs__content">
	<div class="row">
		<div class="col-lg-5">
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
		</div>
		<div class="col-8 col-lg-5 mx-auto">
			<div class="konkurs__kroki">
				<p>
				Pokaż swojego ulubionego streamera/-kę jako <span class="text-secondary">starożytnego Wojownika/-czkę u boku Tygrysa.</span>
				</p>
				<p>
					Technika dowolna - rysunek, kolaż, rzeźba, przeróbka w programie graficznym. <b>Puść wodze fantazji!</b>
				</p>
				<p>
					Zgłoszenie wgraj w formacie .png, .jpg, .jpeg, .bmp poprzez poniższy formularz. W przypadku prac fizycznych może to być zdjęcie lub skan.
				</p>
				<p>
					Pamiętaj o wypełnieniu wszystkich pól w formularzu. Inaczej zgłoszenie może zostać pominięte!
				</p>
			</div>
			<div>
				Prace można zgłaszać do 16.03.2022 o 23:59
			</div>
		</div>
	</div>
</div>

<div class="s-konkurs__submission">
	<?php echo do_shortcode('[contact-form-7 id="28" title="Konkurs"]'); ?>
</div>


</section>



<?php
get_footer();
