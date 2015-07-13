<?php

/*
    Template Name: Contact Template
*/

?>

<?php get_header(); ?>

	<section class="w-section section section-gray" id="contact">
        <div class="w-container" style="padding-top: 5%; padding-bottom: 5%">
            <div class="section-title-group">
                <h2 class="section-heading centered">Contact Form</h2>
                <div class="section-subheading center">Please use this form to submit a contact request.</div>
            </div>
            <div class="w-form form-wrapper squeezed">
                <form id="email-form" name="email-form" data-name="Email Form">
                    <div class="w-row">
                        <div class="w-col w-col-6 column-remove-padding">
                            <input class="w-input form-field" id="name-7" type="text" placeholder="Name" name="name-7" data-name="Name 7">
                        </div>
                        <div class="w-col w-col-6 column-remove-padding">
                            <input class="w-input form-field" id="email-9" type="email" placeholder="Email" name="email-9" data-name="Email 9" required="required">
                        </div>
                    </div>
                    <textarea class="w-input form-field text-area" id="field-4" placeholder="Message" name="field-4" data-name="Field 4"></textarea>
                    <input class="w-button button full-width" type="submit" value="Send Message" data-wait="Please wait...">
                </form>
                <div class="w-form-done success-message">
                    <p class="paragraph-form">Thank you! Your submission has been received!</p>
                </div>
                <div class="w-form-fail success-message">
                    <p class="paragraph-form">Oops! Something went wrong while submitting the form :(</p>
                </div>
            </div>
        </div>
    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>