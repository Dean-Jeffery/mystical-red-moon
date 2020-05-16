</div>
<div class="email-signup">
    <!-- Email signup -->
    <form title="email-signup" action="">
        <h4>Join Our Mailing List</h4>
        <input type="text" placeholder="Enter Email" name="email" required>
        <button type="submit" class="button">Signup</button>
    </form>
</div>
<footer id="footer">

    <div class="wrapper">
    <h5>Red Moon Tarot</h5>
        <div class="footer">
            <div>
                <div class="contact">
                    <p>dana@redmoontarot.co.uk</p>
                </div>
            </div>
            <div>
            <?php wp_nav_menu( array( 'theme_location' => 'Header-menu' ) );?>

            </div>
        </div>
    </div>
    <div class="shameless-plug">
    <p>Website built by <a href="http://deanjeffery.co.uk" target="_blank">Dean Jeffery</a></p>
</div> 
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>