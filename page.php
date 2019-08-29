<?php
get_header();
?>

	<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">

                    <?php
                    while ( have_posts() ) :
						the_post();
						
						the_content();

        

                    endwhile; // End of the loop.
                    ?>

    </div>
    </div>
    </div>
    </div>
    </div>
    

<?php
get_sidebar();
get_footer();
