<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/views/templates/404.latte */
final class Template0e428ef2e2 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<section class="content">
  404 not found
</section>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 7 */;
	}
}
