<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-section-content/view.latte */
final class Template9e1629c10c extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section class="article-wrap">
  <article class="article">
';
		ob_start(fn() => '');
		try {
			echo '    <h2 class="article__title">';
			ob_start();
			try {
				echo '
      ';
				echo $main_heading['text'] /* line 4 */;
				echo '
    ';

			} finally {
				$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
			}
			echo '</h2>
';

		} finally {
			if ($ʟ_ifc[0] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		echo '    
';
		ob_start(fn() => '');
		try {
			echo '    <div class="article__description">';
			ob_start();
			try {
				echo '
      ';
				echo $main_content['text'] /* line 8 */;
				echo '
    ';

			} finally {
				$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
			}
			echo '</div>
';

		} finally {
			if ($ʟ_ifc[1] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		echo '  </article>
</section>
';
	}
}
