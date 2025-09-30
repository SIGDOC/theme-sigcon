<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/template-search.latte */
final class Template82932b0f88 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/search-header'), $this->params, 'include')->renderToContentType('html') /* line 7 */;
		echo '
<div class="content form_search_container">

  ';
		echo LR\Filters::escapeHtmlText(the_content()) /* line 11 */;
		echo '

</div>


';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 16 */;
	}
}
