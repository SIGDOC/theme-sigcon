<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views//layout/main-menu.latte */
final class Template0089584715 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		echo '<div class="header">
  <div class="header__navbar_container-flex container">
    
    <div class="header__navbar-main_info">
      <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/')))) /* line 5 */;
		echo '">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/wp-content/themes/theme-sigcon/assets/img/sigdoc-logo-transparent-75x75.png')))) /* line 6 */;
		echo '" alt="" />
      </a>
      <p>';
		echo LR\Filters::escapeHtmlText(get_bloginfo('title')) /* line 8 */;
		echo '</p>
      <p>
        ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conf_location_text')) /* line 10 */;
		echo ' | ';
		echo LR\Filters::escapeHtmlText(get_theme_mod('sigcon_conf_daterange_text')) /* line 10 */;
		echo '
      </p>
    </div>
    
    <nav class="navbar">
      <button 
        class="navbar-toggler collapsed" 
        type="button" 
        data-toggle="collapse" 
        aria-expanded="false" 
        aria-label="Toggle navigation"
      >
        <span class="span-icon"></span>
        <span class="span-icon"></span>
        <span class="span-icon"></span>
      </button>
      ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['menu' => 'top', 'theme_location' => 'menu-1', 'container' => 'div', 'container_id' => 'tr-main-menu', 'container_class' => 'navbar-collapse', 'menu_id' => 'primary-menu', 'menu_class' => 'navbar-nav', 'depth' => 2, 'fallback_cb' => 'ThemeRedoneWalker::fallback', 'walker' => new ThemeRedoneWalker])) /* line 26 */;
		echo '
    </nav> 

  </div>
</div>
';
	}
}
