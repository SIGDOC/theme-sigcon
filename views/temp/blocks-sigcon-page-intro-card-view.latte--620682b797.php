<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-page-intro-card/view.latte */
final class Template620682b797 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="intro-card-container" class="main_child_ignore">
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

          <!-- Start Paragraphs -->
';
				if (!empty($main_content)) /* line 10 */ {
					echo '          <div
               class="drop_case_second_paragraph_letter__container">
';
					foreach ($main_content as $mc) /* line 12 */ {
						ob_start(fn() => '');
						try {
							echo '            <div
                class=""
                role="region">';
							ob_start();
							try {
								echo '
              <p>
                ';
								echo $mc['main_paragraph']['text'] /* line 17 */;
								echo '
              </p>
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

					echo '          </div>
';
				}
				echo '          <!--/End Paragraphs-->

';
				ob_start(fn() => '');
				try {
					echo '          <h2 aria-label="Quick Links" data-splitting="words">';
					ob_start();
					try {
						echo '
            Quick Links
          ';

					} finally {
						$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
					}
					echo '</h2>
';

				} finally {
					if ($ʟ_ifc[2] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
				echo '
          <!-- Start Quick List -->
';
				if (!empty($quick_links)) /* line 28 */ {
					echo '          <ul>
';
					foreach ($quick_links as $ql) /* line 29 */ {
						ob_start(fn() => '');
						try {
							echo '            <li
                 class=""
                 role="region">';
							ob_start();
							try {
								echo '
              <a href="';
								echo LR\Filters::safeUrl($ql['quick_link']['text']) /* line 33 */;
								echo '">';
								echo $ql['link_text']['text'] /* line 33 */;
								echo '</a>
            ';

							} finally {
								$ʟ_ifc[3] = rtrim(ob_get_flush()) === '';
							}
							echo '</li>
';

						} finally {
							if ($ʟ_ifc[3] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}

					}

					echo '          </ul>
';
				}
				echo '          <!--/End Quick List-->

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
			foreach (array_intersect_key(['mc' => '12', 'ql' => '29'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
