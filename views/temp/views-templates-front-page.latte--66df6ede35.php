<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/front-page.latte */
final class Template66df6ede35 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<div class="content">
	';
		echo LR\Filters::escapeHtmlText(the_content()) /* line 4 */;
		echo '
</div>


';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 8 */;
	}
}
