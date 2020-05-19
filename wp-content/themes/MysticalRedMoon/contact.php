<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main id="content">
    <div class="feature ">
        <div class="one-half">
            <h2>Get in touch...</h2>
            <p>dana@redmoontarot.co.uk</p>
        </div>
        <div class="one-half">
            <?php echo do_shortcode('[contact-form-7 id="92" title="CONTACT FORM"]');?>
        </div>
    </div>
</main>
<?php get_footer(); ?>