<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-page-intro-card/view.latte */
final class Template620682b797 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="intro-card-container">
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

          <div class="drop_case_second_paragraph_letter__container">
            ';
				echo $main_content['text'] /* line 10 */;
				echo '
          </div>
';
				ob_start(fn() => '');
				try {
					echo '          <h2 aria-label="';
					echo $panel['main_heading']['text'] /* line 12 */;
					echo '" data-splitting="words">';
					ob_start();
					try {
						echo '
            ';
						echo $main_heading['text'] /* line 13 */;
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
				echo '          <!-- Start list of conference committee -->
';
				if (!empty($roles)) /* line 16 */ {
					echo '          <ul>
';
					foreach ($roles as $role) /* line 17 */ {
						ob_start(fn() => '');
						try {
							echo '            <li
                 class="" 
                 role="region">';
							ob_start();
							try {
								echo '
              <strong>';
								echo $role['title']['text'] /* line 21 */;
								echo '</strong>: ';
								echo $role['name']['text'] /* line 21 */;
								echo ', ';
								echo $role['affiliation']['text'] /* line 21 */;
								echo ', ';
								echo $role['country']['text'] /* line 21 */;
								echo '
            ';

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

					}

					echo '          </ul>
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
			foreach (array_intersect_key(['role' => '17'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
