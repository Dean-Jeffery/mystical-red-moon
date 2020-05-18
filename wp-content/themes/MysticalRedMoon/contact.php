<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main id="content">
    <div class="feature ">
        <div class="one-half">
            <h2>Get in touch...</h2>
            <p>dana@redmoontarot.co.uk</p>
        </div>
        <div class="one-half">
            <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]');?>
        </div>
    </div>
</main>
<?php get_footer(); ?>