<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views//layout/footer.latte */
final class Templated51d0adb89 extends Latte\Runtime\Template
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

      <div class="footer__flex_container">
        <div class="footer__committee_container">
          <h2>Conference Commiteee</h2>
          <ul>
            <li>
              <strong>Conference Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conf_chair_text')) /* line 12 */;
		echo '
            </li>
            <li>
              <strong>Program Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_program_chair_text')) /* line 15 */;
		echo '
            </li>
            <li>
              <strong>SRC Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_src_chair_text')) /* line 18 */;
		echo '
            </li>
            <li>
              <strong>Sponsorship Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_sponsorship_chair_text')) /* line 21 */;
		echo '
            </li>
            <li>
              <strong>Technical Editor(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_tech_editor_text')) /* line 24 */;
		echo '
            </li>
            <li>
              <strong>Industry Liaison(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_industry_liaison_text')) /* line 27 */;
		echo '
            </li>
          </ul>
        </div>

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
