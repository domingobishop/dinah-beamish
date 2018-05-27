<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center site-info">
          <h4>Dinah Beamish</h4>
          <?php if ( is_active_sidebar( 'bc-footer-widgets' ) ) : ?>
              <div class="bc-footer-widgets">
                  <?php dynamic_sidebar( 'bc-footer-widgets' ); ?>
              </div>
          <?php endif; ?>
        <p><small>Copyright © <?php echo date("Y"); ?> <br>
          Website by <a href="http://chrisbishop.me.uk/" target="_blank">Chris Bishop</a></small></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>