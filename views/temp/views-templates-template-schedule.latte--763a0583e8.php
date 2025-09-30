<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/template-schedule.latte */
final class Template763a0583e8 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->createTemplate(tr_view_path('/layout/header-schedule'), $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo "\n";
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 6 */;
	}
}
