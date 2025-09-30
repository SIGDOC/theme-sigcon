<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-cards-flex-thin/view.latte */
final class Template88926d59b8 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!-- START FLEX CARD SECTION -->
';
		if (!empty($cards)) /* line 2 */ {
			echo '<section 
         role="region"
         aria-labelledby="';
			echo LR\Filters::escapeHtmlAttr($section_id['text']) /* line 4 */;
			echo '"
         class="sigcon-relative card__sections">
  
  <!-- Start Flex Thin Cards -->
  <div class="cards__main_external_wrapper card__regular_wrapped_flex">

    <h2 id="';
			echo LR\Filters::escapeHtmlAttr($section_id['text']) /* line 10 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($section_h2['text']) /* line 10 */;
			echo '</h2>

    <div class="cards__sub_container">
    
      <!-- Start Card Loop -->
';
			foreach ($cards as $card) /* line 16 */ {
				ob_start(fn() => '');
				try {
					echo '      <div class="card__inner_wrapper">';
					ob_start();
					try {
						echo '

        <!-- image -->
        <div class="card__main_image">

';
						if (empty($card['image']['src'])) /* line 23 */ {
							echo '            <img class="card__main_image" src="';
							echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/wp-content/themes/theme-sigcon/assets/img/placeholder-sigdoc-logo.jpg')))) /* line 24 */;
							echo '" alt="" />
';
						}
						echo "\n";
						if (!empty($card['image']['src'])) /* line 27 */ {
							echo '            ';
							echo LR\Filters::escapeHtmlText(tr_get_media($card['image'], true)) /* line 28 */;
							echo "\n";
						}
						echo '        </div>

        <!-- text area -->
        <div class="card__desc_wrapper">
          <h3 class="card__main_name">';
						echo LR\Filters::escapeHtmlText($card['main_heading']['text']) /* line 34 */;
						echo '</h3>
          <p class="card__sub_name">
            ';
						echo LR\Filters::escapeHtmlText($card['sub_heading']['text']) /* line 36 */;
						echo '
          </p>
';
						ob_start(fn() => '');
						try {
							echo '          <p>';
							ob_start();
							try {
								echo "\n";
								ob_start(fn() => '');
								try {
									echo '            <a href="';
									echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($card['link']['url'])) /* line 39 */;
									echo '|noescape" target="_blank">';
									ob_start();
									try {
										echo $card['link']['title'] /* line 39 */;

									} finally {
										$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
									}
									echo '</a>
';

								} finally {
									if ($ʟ_ifc[2] ?? null) {
										ob_end_clean();
									} else {
										echo ob_get_clean();
									}
								}
								echo '          ';

							} finally {
								$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
							}
							echo '</p>
';

						} finally {
							if ($ʟ_ifc[1] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '          <p>
            ';
						echo $card['para_copy']['text'] /* line 42 */;
						echo '
          </p>
        </div>
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

			echo '      <!-- End Card Loop -->

    </div>
  </div>
</section>';
		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['card' => '16'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
