<?php

/**
 * Template Name: Voting
 * Description: Voting page
 *
 */

get_header();

the_post();
?>



<section class="s-voting" id="now">
<div class="s-voting__content">
	<div class="title">
		<div class="olives text-secondary">
			<i class="olive-left-gold"></i>
			<h1>
				Zagłosuj!
			</h1>
			<i class="olive-right-gold"></i>
		</div>
	</div>
	<div class="col-8 col-lg-5 mx-auto">
		<p>
			Wybierz dwie dyscypliny godne
			naszych olimpijczyków
		</p>
	</div>

    <div class="votes">
        <?php echo do_shortcode('[poll id="2"]'); ?>
    </div>








	<div class="col-md-8 mx-auto">
		<p>
			<u>Dołącz do discorda</u> i weź udział w konkursie,  w którym wybierzesz
			finałową dyscyplinę dla  naszych dzielnych pretendentów do podium!
		</p>
	</div>
</div>

</section>



<?php
get_footer();
