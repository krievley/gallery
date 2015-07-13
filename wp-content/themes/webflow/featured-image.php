<?php

/*
    Template Name: Featured Image Template
*/

?>

<?php get_header(); ?>

	<section class="w-section section section-gray" id="contact">
        <div class="w-container" style="padding-top: 5%; padding-bottom: 5%">
            <div class="section-title-group">
                <h2 class="section-heading centered">Featured Image</h2>
                <div class="section-subheading center">The featured image on the home page.</div>
            </div>
            <div class="w-form form-wrapper squeezed">
                <a class="w-lightbox w-inline-block" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/images/070.png">
                    <script type="application/json" class="w-json">{ "items": [{
                                                                          "url": "<?php bloginfo('template_url'); ?>/images/070.png",
                                                                          "fileName": "070.png",
                                                                          "origFileName": "070.png",
                                                                          "width": 500,
                                                                          "height": 500,
                                                                          "size": 28987,
                                                                          "type": "image"
                                                                        }] }
                    </script>
                </a>    
            </div>
        </div>
    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>