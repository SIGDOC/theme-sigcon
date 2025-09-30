<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/index.latte */
final class Templatecf2401927f extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<section class="content">

';
		if (have_posts()) /* line 5 */ {
			while (have_posts()) /* line 6 */ {
				echo '  ';
				echo LR\Filters::escapeHtmlText(the_post()) /* line 7 */;
				echo '
  ';
				echo LR\Filters::escapeHtmlText(the_title()) /* line 9 */;
				echo '<br >
  ';
				echo LR\Filters::escapeHtmlText(tr_posted_by()) /* line 10 */;
				echo '<br />
  ';
				echo LR\Filters::escapeHtmlText(tr_posted_on(true)) /* line 11 */;
				echo '<br /><br />
';

			}
		} else /* line 13 */ {
			echo '  <h2>Nothing Found</h2>
';
		}
		echo '</section>

<br />
';
		$customposts = get_posts(['numberposts' => 4]) /* line 19 */;
		foreach ($customposts as $post) /* line 20 */ {
			echo '  Post ID: ';
			echo LR\Filters::escapeHtmlText($post->ID) /* line 21 */;
			echo '<br />
  Title: ';
			echo LR\Filters::escapeHtmlText($post->post_title) /* line 22 */;
			echo '<br />
  ';
			echo LR\Filters::escapeHtmlText(tr_posted_on(true, $post->ID)) /* line 23 */;
			echo '<br />
  Author: ';
			echo LR\Filters::escapeHtmlText(tr_posted_by()) /* line 24 */;
			echo '<br />
';

		}

		echo "\n";
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 27 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '20'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
