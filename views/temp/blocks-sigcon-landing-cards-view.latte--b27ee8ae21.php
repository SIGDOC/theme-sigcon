<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-landing-cards/view.latte */
final class Templateb27ee8ae21 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="landing-cards-wrap">
';
		if (!empty($panels)) /* line 5 */ {
			echo '  <main class="landing-cards-flex-container"
        role="main"
        aria-label="Main action items for the conference">

';
			foreach ($panels as $panel) /* line 7 */ {
				ob_start(fn() => '');
				try {
					echo '    <section
             class="panel" 
             role="region">';
					ob_start();
					try {
						echo '
      <a href="';
						echo LR\Filters::safeUrl($panel['panel_cta_link']['url']) /* line 11 */;
						echo '">
';
						ob_start(fn() => '');
						try {
							echo '        <h2 aria-label="';
							echo $panel['main_heading']['text'] /* line 12 */;
							echo '" data-splitting="words">';
							ob_start();
							try {
								echo '
          ';
								echo $panel['main_heading']['text'] /* line 13 */;
								echo '
        ';

							} finally {
								$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
							}
							echo '</h2>
';

						} finally {
							if ($ʟ_ifc[1] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '      </a>
      <div class="thumb">
';
						ob_start(fn() => '');
						try {
							echo '        <p>';
							ob_start();
							try {
								echo $panel['keyword_1']['text'] /* line 17 */;
								echo ' &bull; ';
								echo $panel['keyword_2']['text'] /* line 17 */;
								echo ' &bull; ';
								echo $panel['keyword_3']['text'] /* line 17 */;

							} finally {
								$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
							}
							echo '</p>
';

						} finally {
							if ($ʟ_ifc[2] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '        <div class="inner">
';
						ob_start(fn() => '');
						try {
							echo '          <a class="thumb-link" href="';
							echo LR\Filters::safeUrl($panel['panel_cta_link']['url']) /* line 19 */;
							echo '">';
							ob_start();
							try {
								echo '
            ';
								echo LR\Filters::escapeHtmlText(tr_get_media($panel['main_image'], false)) /* line 20 */;
								echo '
          ';

							} finally {
								$ʟ_ifc[3] = rtrim(ob_get_flush()) === '';
							}
							echo '</a>
';

						} finally {
							if ($ʟ_ifc[3] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '        </div>
      </div>
    ';

					} finally {
						$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
					}
					echo '</section>
';

				} finally {
					if ($ʟ_ifc[0] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}

			}

			echo '    
  </main>
';
		}
		echo '</div>

<noscript>
  <style type="text/css">
    body #wrap {
      transform: translateX(0); /*defaults to 100%*/
    }
    body #wrap .panel {
      --progress: 0.5; /*defaults to 0*/
    }
    
    body #wrap .panel,
    body #wrap .panel::before {
      opacity: 1 /*defaults to 0*/
    }
    
    body #wrap .panel > a h2 {
      color: var(--primaryColor); /*defaults to transparent*/
      pointer-events: unset;
      transform: translateY(calc(100px - (var(--progress) * 200px)));
    }
    
    body #wrap .panel .thumb p {
      font-size: 18px;
    }
    
    body #loader,
    body #loader .wrap {
      display: none;
    }
    
    body #social svg {
      transform: translateY(0); /*defaults to -150px*/
    }
    body #social a:last-of-type svg {
      transform: translateX(0px); /*defaults to 150px*/
    }
  </style>
</noscript>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['panel' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
