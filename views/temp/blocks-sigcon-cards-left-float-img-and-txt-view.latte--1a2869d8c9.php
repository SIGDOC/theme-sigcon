<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-cards-left-float-img-and-txt/view.latte */
final class Template1a2869d8c9 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!-- START NEW CARD SECTION -->
';
		if (!empty($cards)) /* line 2 */ {
			echo '<section
         class="sigcon-relative card__sections floating_cards"
         role="region"
         aria-labelledby="';
			echo $section_id['text'] /* line 5 */;
			echo '">

  <div class="cards__main_external_wrapper card__regular_wrapped_flex">
    
';
			ob_start(fn() => '');
			try {
				echo '    <h2 id="';
				echo $section_id['text'] /* line 9 */;
				echo '">';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($section_h2['text']) /* line 9 */;

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
    <div class="cards__sub_container">
    
      <!-- Start Card Loop -->
';
			foreach ($cards as $card) /* line 15 */ {
				ob_start(fn() => '');
				try {
					echo '      <div class="float_left_card__inner_wrapper">';
					ob_start();
					try {
						echo '

        <div class="card__main_image">
';
						if (empty($card['main_image']['src'])) /* line 20 */ {
							echo '            <img class="card__main_image" src="';
							echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/wp-content/themes/theme-sigcon/assets/img/placeholder-sigdoc-logo.png')))) /* line 29 */;
							echo '" alt="" />
            <?php esc_url( wp_get_attachment_url( get_theme_mod( \'custom_logo\' ) ) ) ?>
';
						}
						echo "\n";
						if (!empty($card['main_image']['src'])) /* line 33 */ {
							echo '            ';
							echo LR\Filters::escapeHtmlText(tr_get_media($card['main_image'], true)) /* line 34 */;
							echo "\n";
						}
						echo '        </div>

        <div class="card__desc_wrapper">
';
						ob_start(fn() => '');
						try {
							echo '          <h3 class="card__main_name">';
							ob_start();
							try {
								echo LR\Filters::escapeHtmlText($card['main_name']['text']) /* line 39 */;

							} finally {
								$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
							}
							echo '</h3>
';

						} finally {
							if ($ʟ_ifc[2] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						ob_start(fn() => '');
						try {
							echo '          <p class="card__sub_name">';
							ob_start();
							try {
								echo LR\Filters::escapeHtmlText($card['sub_name']['text']) /* line 40 */;

							} finally {
								$ʟ_ifc[3] = rtrim(ob_get_flush()) === '';
							}
							echo '</p>
';

						} finally {
							if ($ʟ_ifc[3] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						ob_start(fn() => '');
						try {
							echo '          <p>';
							ob_start();
							try {
								echo '
            ';
								echo $card['paragraph']['text'] /* line 43 */;
								echo '
          ';

							} finally {
								$ʟ_ifc[4] = rtrim(ob_get_flush()) === '';
							}
							echo '</p>
';

						} finally {
							if ($ʟ_ifc[4] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '        </div>

        <div class="cta-container">
          <span class="card-cta">
            ';
						echo LR\Filters::escapeHtmlText(tr_a($card['link'])) /* line 49 */;
						echo '
          </span>
        </div>

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

			}

			echo '
    </div>
  </div>

</section>';
		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['card' => '15'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
