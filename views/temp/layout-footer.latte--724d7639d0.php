<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views//layout/footer.latte */
final class Template724d7639d0 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		echo '  </main>
  <div class="backdrop"></div>
  <footer class="footer">
    <div class="container">
      <h2><a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/')))) /* line 5 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(get_bloginfo('name')) /* line 5 */;
		echo '</a></h2>

        <div class="footer__copyright_container">
          <p class="copyright">
            © <?php echo current_year(); ?> <a href="https://sigdoc.acm.org" target="" rel="noopenner">SIGDOC</a> - All rights reserved
            <br>
            Wordpress theme, <em>Theme-SIGCON</em>, created by <a href="https://clndgrn.com" target="_blank" rel="noopenner">Chris Lindgren</a>
          </p>
        </div>
      </div>
      
    </div>
  </footer>
  ';
		echo LR\Filters::escapeHtmlText(wp_footer()) /* line 43 */;
		echo '
  </body>
  </html>
';
	}
}
