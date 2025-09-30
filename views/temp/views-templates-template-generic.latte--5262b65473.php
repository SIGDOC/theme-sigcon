<?php

use Latte\Runtime as LR;

/** source: /Users/calindgr/Documents/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/template-generic.latte */
final class Template5262b65473 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->createTemplate(tr_view_path('/layout/no-subtitle-header'), $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo "\n";
		echo LR\Filters::escapeHtmlText(the_content()) /* line 4 */;
		echo '

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 6 */;
	}
}
