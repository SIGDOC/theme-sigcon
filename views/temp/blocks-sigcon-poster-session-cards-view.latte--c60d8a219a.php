<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-poster-session-cards/view.latte */
final class Templatec60d8a219a extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if (!empty($panels)) /* line 5 */ {
			echo '<section id="posters-sessions-container"
         class="article-wrap posters__container"
         role="region"
         aria-label="Poster sessions for the conference">

';
			foreach ($panels as $panel) /* line 7 */ {
				ob_start(fn() => '');
				try {
					echo '    <article
             class="posters__article_card">';
					ob_start();
					try {
						echo '
      <div class="posters__article_card_thumbnail">
        <a href="';
						echo LR\Filters::safeUrl($panel['image_high_res_poster_url']['src']) /* line 12 */;
						echo '">
          ';
						echo LR\Filters::escapeHtmlText(tr_get_media($panel['image_poster_thumbnail'], false)) /* line 13 */;
						echo '
        </a>
      </div>
      <div class="posters__article_card_info">
';
						ob_start(fn() => '');
						try {
							echo '        <h3>';
							ob_start();
							try {
								echo '
          ';
								echo $panel['poster_title']['text'] /* line 19 */;
								echo '
        ';

							} finally {
								$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
							}
							echo '</h3>
';

						} finally {
							if ($ʟ_ifc[1] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '        <ul>
';
						ob_start(fn() => '');
						try {
							echo '          <li>';
							ob_start();
							try {
								echo '<strong>Presenter</strong>: ';
								echo $panel['presenter_name']['text'] /* line 22 */;

							} finally {
								$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
							}
							echo '</li>
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
							echo '          <li>';
							ob_start();
							try {
								echo '<strong>Title</strong>: ';
								echo $panel['presenter_title']['text'] /* line 23 */;

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
						ob_start(fn() => '');
						try {
							echo '          <li>';
							ob_start();
							try {
								echo '<strong>Affiliation</strong>: ';
								echo $panel['presenter_affiliation']['text'] /* line 24 */;

							} finally {
								$ʟ_ifc[4] = rtrim(ob_get_flush()) === '';
							}
							echo '</li>
';

						} finally {
							if ($ʟ_ifc[4] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						ob_start(fn() => '');
						try {
							echo '          <li>';
							ob_start();
							try {
								echo '<strong>Abstract</strong>: ';
								echo $panel['abstract']['text'] /* line 25 */;

							} finally {
								$ʟ_ifc[5] = rtrim(ob_get_flush()) === '';
							}
							echo '</li>
';

						} finally {
							if ($ʟ_ifc[5] ?? null) {
								ob_end_clean();
							} else {
								echo ob_get_clean();
							}
						}
						echo '          <li><a href="';
						echo LR\Filters::safeUrl($panel['image_high_res_poster_url']['src']) /* line 26 */;
						echo '">View High Resolution Version</li>
        </ul>
      </div>
      <hr>
    ';

					} finally {
						$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
					}
					echo '</article>
';

				} finally {
					if ($ʟ_ifc[0] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}

			}

			echo '</section>
';
		}
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
