<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-sponsor-gallery/view.latte */
final class Template42820fdd64 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if (!empty($sponsors)) /* line 4 */ {
			echo '<section class="sponsors_container"
         role="region"
         aria-label="Gallery of sponsors for the conference">
  <h2>Sponsors</h2>
  <div class="masonry__container_sponsors">
';
			foreach ($sponsors as $sponsor) /* line 7 */ {
				ob_start(fn() => '');
				try {
					echo '    <div class="sponsor_item">';
					ob_start();
					try {
						echo '
      <a href="';
						echo LR\Filters::safeUrl($sponsor['sponsor_link']['text']) /* line 8 */;
						echo '" target="_blank" rel="noopenner noreferrer">
        ';
						echo LR\Filters::escapeHtmlText(tr_get_media($sponsor['sponsor_logo'], false)) /* line 9 */;
						echo '
      </a>
    ';

					} finally {
						$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
					}
					echo '</div>
';

				} finally {
					if ($ʟ_ifc[0] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}

			}

			echo '  </div>
</section>';
		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['sponsor' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
