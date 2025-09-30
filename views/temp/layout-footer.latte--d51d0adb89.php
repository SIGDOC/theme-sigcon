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

        <div class="footer__contact_container">
          <h2>Questions?</h2>
          <h3>About the program or proceedings?</h3>
          <p>
            E-mail: <span class="blockspam" aria-hidden="true">BOT, PLEASE GO AWAY!</span> ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_program_questions_email_name_text')) /* line 13 */;
		echo '@<!-- sdfjsdhfkjypcs -->';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_program_questions_email_address_text')) /* line 13 */;
		echo '
          </p>
          <h3 style="margin-top: 1rem !important;">About conference logistics?</h3>
          <p>
            E-mail: <span class="blockspam" aria-hidden="true">BOT, PLEASE GO AWAY!</span> ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conference_questions_email_name_text')) /* line 17 */;
		echo '@<!-- sdfjsdhfkjypcs -->';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conference_questions_email_address_text')) /* line 17 */;
		echo '
          </p>
        </div>

        <div class="footer__committee_container">
          <h2>Conference Commiteee</h2>
          <ul>
            <li>
              <strong>Conference Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conf_chair_text')) /* line 25 */;
		echo '
            </li>
            <li>
              <strong>Program Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_program_chair_text')) /* line 28 */;
		echo '
            </li>
            <li>
              <strong>SRC Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_src_chair_text')) /* line 31 */;
		echo '
            </li>
            <li>
              <strong>Sponsorship Chair(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_sponsorship_chair_text')) /* line 34 */;
		echo '
            </li>
            <li>
              <strong>Technical Editor(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_tech_editor_text')) /* line 37 */;
		echo '
            </li>
            <li>
              <strong>Industry Liaison(s)</strong>: ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_industry_liaison_text')) /* line 40 */;
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
		echo LR\Filters::escapeHtmlText(wp_footer()) /* line 56 */;
		echo '
  </body>
  </html>
';
	}
}
