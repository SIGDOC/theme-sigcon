<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-page-card-paragraph-feature/view.latte */
final class Templateececedc508 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="feature-card-container">
  <section role="region" 
        aria-label="';
		echo $aria_label['text'] /* line 3 */;
		echo '">

';
		ob_start(fn() => '');
		try {
			echo '    <div class="panel panel__preface">';
			ob_start();
			try {
				echo '
      <div class="thumb">
        <div class="inner">

          <!-- Start paragraphs -->
';
				if (!empty($elements)) /* line 10 */ {
					echo '          <div>
';
					foreach ($elements as $el) /* line 11 */ {
						ob_start(fn() => '');
						try {
							echo '            <span>';
							ob_start();
							try {
								echo '
              <';
								echo LR\Filters::escapeHtmlText($el['element']['text']) /* line 12 */;
								echo ' class="';
								echo $el['selected_feature']['value'] /* line 12 */;
								echo '">
                ';
								echo $el['content']['text'] /* line 13 */;
								echo '
              </';
								echo LR\Filters::escapeHtml($el['element']['text']) /* line 14 */;
								echo '>
            ';

							} finally {
								$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
							}
							echo '</span>
';

						} finally {
							if ($ʟ_ifc[1] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}

					}

					echo '          </div>
';
				}
				echo '          
        </div><!--/inner-->
      </div><!--/thumb-->
    ';

			} finally {
				$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
			}
			echo '</div>';
		} finally {
			if ($ʟ_ifc[0] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		echo '<!--/panel-->
    
  </section>
</div>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['el' => '11'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
