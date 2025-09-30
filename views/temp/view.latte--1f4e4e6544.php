<?php

use Latte\Runtime as LR;

/** source: /Users/chrislindgren/Local Sites/sigdocconference/app/public/wp-content/themes/theme-sigcon/gutenberg/blocks/sigcon-workshops-collapsible-filterable/view.latte */
final class Template1f4e4e6544 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if (!empty($cards)) /* line 2 */ {
			echo '<section
         role="region"
         data-role="page" id="page"
         class="sigcon-relative card__sections">

  <div data-role="content" class="cards__main_external_wrapper card__regular_wrapped_flex">

    <div data-role="collapsible-set"
        class="cards__sub_container initialize_block">

      <form role="form">
        <div class="form-group">
          <input type="text" class="form-control" id="search">
            <label class="float-label" for="search">
              Search filter for workshops</label>
        </div>
      </form>

';
			foreach ($cards as $card) /* line 22 */ {
				ob_start(fn() => '');
				try {
					echo '      <div class="card__inner_wrapper"
           data-role="listview" data-inset="true">';
					ob_start();
					try {
						echo '

        <article class="workshop_item workshop_card_container">

          <h2 class="workshop_heading" aria-label="Toggle Dropdown" aria-expanded="false">
            ';
						echo $card['workshop_title']['text'] /* line 28 */;
						echo '
            <button class="js-button-toggle">Show/Hide Description</button>
          </h2>

          <div class="workshop_content_container toggle_hide">

            <h3 class="workshop_facilitators">Facilitators</h3>
            <p>';
						echo $card['facilitators']['text'] /* line 35 */;
						echo '</p>

            <h3>Description</h3>
            ';
						echo $card['description']['text'] /* line 38 */;
						echo '

            <h3>Structure/Format</h3>
            ';
						echo $card['structure_format']['text'] /* line 41 */;
						echo '

';
						ob_start(fn() => '');
						try {
							echo '            <div>';
							ob_start();
							try {
								echo '
              <h3>References</h3>
';
								ob_start(fn() => '');
								try {
									echo '              <div>';
									ob_start();
									try {
										echo '
                ';
										echo $card['references']['text'] /* line 46 */;
										echo '
              ';

									} finally {
										$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
									}
									echo '</div>
';

								} finally {
									if ($ʟ_ifc[2] ?? null) {
										ob_end_clean();
									} else {
										echo ob_get_clean();
									}
								}
								echo '            ';

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
						echo '          </div>
        </article>

      ';

					} finally {
						$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
					}
					echo '</div>
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
      <div class="no-result">
        <div class="no_result__logo">
          <svg id="sigdoc-23-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 222.47 226.03" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%);">
              <g id="Calque_2">
                <g id="color">
                  <path class="cls-11" d="m182.94,193.53l-2.9-3.6c1.2-1,2.6-1.9,4.1-2.9,3-2,6.2-4.1,7.5-6.7l4.2,2.1c-1.9,3.7-5.7,6.3-9.1,8.5-1.4.9-2.7,1.8-3.8,2.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 33.2872px, 8.5216px; fill: rgb(48, 142, 156);"></path>
                  <path class="cls-12" d="m151.54,214.03l-1.8-4.2c12.9-5.4,22.3-13,33.2-21.8l1.3-1.1,2.8,3.5-1.3,1.1c-11.1,9-20.7,16.8-34.2,22.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 74.1552px, 19.3659px; fill: rgb(44, 158, 187);"></path>
                  <path class="cls-13" d="m156.74,206.03l-3.3-7.8c12.6-5.3,21.9-12.8,32.7-21.5l1.3-1.1,5.3,6.6-1.3,1.1c-10.8,8.7-21,16.9-34.7,22.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 80.1702px, 21.1671px; fill: rgb(239, 212, 27);"></path>
                  <path class="cls-2" d="m108.14,225.53c-9.8,0-19.6-1.1-29.1-3.1l2.5-11.1c25.7,5.6,52.7,3,78-7.7l4.4,10.5c-17.7,7.4-36.6,11.3-55.8,11.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 149.429px, 39.704px; fill: rgb(24, 133, 177);"></path>
                  <path class="cls-17" d="m107.84,217.03c-9.7,0-19.4-1-28.8-3.1l1.8-8.3c26,5.7,53.3,3,78.9-7.8l3.3,7.8c-17.5,7.4-36.3,11.3-55.2,11.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 144.737px, 38.639px; fill: rgb(127, 0, 0);"></path>
                  <path class="cls-40" d="m94.14,225.23c-33.7-7.4-62.4-29.6-78.7-60.9S-2.86,96.73,10.34,64.83l7.9,3.2c-12.2,29.5-10.5,63.2,4.8,92.3s41.8,49.7,73,56.5l-1.9,8.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 326.135px, 87.5177px; fill: rgb(237, 211, 29);"></path>
                  <path class="cls-2" d="m102.64,221.13c-33.1-7.2-61.3-29.1-77.4-59.9S7.34,94.83,20.24,63.43l7.9,3.2c-12,29-10.3,62,4.7,90.6s41.1,48.8,71.7,55.5l-1.9,8.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 320.777px, 85.9699px; fill: rgb(23, 133, 177);"></path>
                  <path class="cls-40" d="m2.84,75.43l-1.6-.7C15.74,39.63,45.64,14.03,83.34,4.43c37.7-9.6,76.1-1.4,105.5,22.5l-1.1,1.4C158.74,4.83,120.84-3.17,83.74,6.23S17.14,40.83,2.84,75.43Z" style="stroke-dashoffset: 0px; stroke-dasharray: 353.965px, 94.5222px; fill: rgb(23, 122, 198);"></path>
                  <path class="cls-37" d="m172.04,82.83l-2.2-5.6-.7-1.8h2q.9,0,2.3,3.6,1.1,2.9,1.2,3l-2.6.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 16.2502px, 4.1532px; fill: rgb(234, 210, 31);"></path>
                  <path class="cls-36" d="m167.04,81.43c-7.87-10.02-17.81-18.2-29.14-24l1.07-2.08c11.68,5.91,21.8,14.35,29.84,24.63l-1.77,1.44Z" style="stroke-dashoffset: 0px; stroke-dasharray: 64.8351px, 16.9464px; fill: rgb(127, 0, 0);"></path>
                  <path class="cls-16" d="m196.64,82.33c-4.6-11.4-11.6-21.6-20.6-30l5.8-6.2c9.9,9.2,17.6,20.5,22.7,33l-7.9,3.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 74.8217px, 19.3454px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-32" d="m166.44,80.63c-.8-1.2-11.4-15.1-12-15.8l1.6-1.3v-.1l.1-2.1q1,0,7.3,8.3c1.4,1.8,5.8,7.7,6.4,8.5l-3.4,2.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 40.0403px, 10.1479px; fill: rgb(232, 210, 33);"></path>
                  <path class="cls-27" d="m175.84,95.33c-.89-6.25-2.93-10.85-4.4-14.5l2.4-.9c2,5.2,3.8,9.9,4.5,15.1l-2.5.3Z" style="stroke-dashoffset: 0px; stroke-dasharray: 29.0171px, 7.15766px; fill: rgb(99, 154, 134);"></path>
                  <path class="cls-17" d="m200.84,98.43c-.8-5.9-2.8-11.3-5.3-17.7l7.9-3.1c2.6,6.7,4.9,12.8,5.9,19.6l-8.5,1.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 45.1928px, 11.0162px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-32" d="m155.64,95.13c6.6,20.2-.1,40.2-17.4,52.3-15.9,11.1-41.1,14.5-61.7-2.7l2.4-3c19.1,16,42.4,12.8,57.1,2.5,12.5-8.7,23.2-25.9,16-47.9l3.6-1.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 201.118px, 48.2449px; fill: rgb(127, 0, 0);"></path>
                  <path class="cls-35" d="m113.14,166.03c-5.9,0-11.7-.8-17.4-2.4-24.6-6.7-42-26.1-45.5-50.6l2.5-.4c3.4,23.5,20.1,42.1,43.7,48.5s47.5-1.1,62.4-19.6l2,1.6c-11.6,14.6-29.2,23-47.7,22.9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 233.659px, 54.5669px; fill: rgb(105, 169, 128);"></path>
                  <path class="cls-25" d="m111.64,144.73c-5.4,0-10.8-1.3-15.6-3.8-12.2-6.2-19.5-18.3-18.8-31.7l1.8.1c-.6,12.6,6.2,24.1,17.9,30,11.2,5.9,24.8,4.5,34.6-3.5l1.1,1.4c-6,4.8-13.4,7.5-21,7.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 126.92px, 28.5592px; fill: rgb(64, 97, 122);"></path>
                  <path class="cls-4" d="m99.06,66.04l-1.52-4.77c15.97-4.96,33.02-.21,44.57,12.51,11.55,12.72,14.81,30.15,8.39,45.58l-4.64-1.93c5.67-13.66,2.81-29.12-7.46-40.38-10.27-11.27-25.28-15.38-39.34-11.01Z" style="stroke-dashoffset: 0px; stroke-dasharray: 158.076px, 36.4974px; fill: rgb(226, 208, 37);"></path>
                  <path class="cls-26" d="m125.44,117.73l-2.4-2.1q-.6-.5-.6-5.8h2.8c0,.1.1,4.7.1,4.8l.1,3.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 16.3624px, 3.51728px; fill: rgb(104, 149, 147);"></path>
                  <path class="cls-20" d="m92.54,114.33c-.1-6.5,2.7-11.9,8-15,6-3.5,13.4-3.6,19.5-.3,5.4,3,8.4,8.2,8.5,14.8h-2.6c-.1-5.6-2.6-10-7.1-12.5-5.3-2.8-11.7-2.7-16.9.3-4.4,2.6-6.8,7.2-6.7,12.8l-2.7-.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 90.419px, 19.0844px; fill: rgb(127, 0, 0);"></path>
                  <path class="cls-25" d="m110.44,129.13c-3.4,0-6.7-.8-9.6-2.4-5.5-3.1-8.6-8.5-8.8-15.2l4.8-.1c.1,6.3,3.5,9.5,6.2,11,4.7,2.5,10.4,2.4,15.1-.3,2.7-1.6,6-4.9,5.9-11.2l4.9-.1c.1,6.7-2.8,12.2-8.2,15.5-3.1,1.9-6.7,2.8-10.3,2.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 91.382px, 18.3813px; fill: rgb(223, 207, 39);"></path>
                  <path class="cls-25" d="m131.94,113.03c-1.8-5.5-4.5-10.5-8-14.9l2.3-2.2c3.8,4.7,6.7,10.1,8.6,16l-2.9,1.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 35.0661px, 6.5884px; fill: rgb(67, 92, 116);"></path>
                  <path class="cls-2" d="m92.34,195.73v-1.4c0-1.3,1-1.3,2.6-1.4l13.1-.2,14.3-.2v2.7l-28.6.5h-1.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 55.8418px, 9.13836px; fill: rgb(20, 127, 174);"></path>
                  <path class="cls-7" d="m108.24,198.43l-.1-4.4c30.7-.4,58.9-16.8,74.4-43.3l3.8,2.2c-16.3,27.8-45.9,45-78.1,45.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 165.539px, 27.8295px; fill: rgb(220, 206, 41);"></path>
                  <path class="cls-17" d="m115.64,203.53l-.2-8.5c30-.4,57.5-16.5,72.7-42.3l7.3,4.3c-16.6,28.4-46.8,46-79.8,46.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 176.38px, 25.161px; fill: rgb(126, 2, 2);"></path>
                  <path class="cls-30" d="m105.44,183.13c-7.3,0-14.6-1-21.7-2.9l.3-1c34.6,9.3,71.2-4.7,90.8-34.7l.9.6c-15.5,23.7-41.9,38-70.3,38Z" style="stroke-dashoffset: 0px; stroke-dasharray: 184.476px, 26.8875px; fill: rgb(120, 160, 120);"></path>
                  <path class="cls-35" d="m111.34,54.23c27.6,3.3,52,23.6,60.8,50.6l-2.3.8c-8.5-26-32.1-45.6-58.8-48.8l.3-2.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 150.762px, 18.3473px; fill: rgb(216, 205, 44);"></path>
                  <path class="cls-27" d="m181.04,142.33c5.4-31.6-9.1-63.2-37.1-80.9l-1.6,2.3c27,17.1,41,47.6,35.8,78.1l2.9.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 172.917px, 18.4403px; fill: rgb(122, 156, 118);"></path>
                  <path class="cls-38" d="m158.74,63.13c-26.3-21.1-63.1-22.9-91.3-4.6l-1.4-2.1c29.1-19,67.1-17.1,94.3,4.7l-1.6,2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 187.159px, 16.6112px; fill: rgb(125, 139, 116);"></path>
                  <path class="cls-17" d="m23.64,90.03l-8.2-2.2C24.04,55.83,48.54,30.43,80.94,20.03s67-4.1,92.7,16.8l-5.4,6.6c-23.5-19.1-55.1-24.9-84.7-15.3-29.6,9.6-52.1,32.6-59.9,61.9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 366.705px, 26.5608px; fill: rgb(125, 3, 4);"></path>
                  <path class="cls-2" d="m29.34,95.93l-5.5-1.5c8.2-30.4,31.4-54.4,62.1-64.3s63.6-3.9,87.9,16l-3.6,4.4c-22.8-18.6-53.7-24.2-82.6-15s-50.7,31.9-58.3,60.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 353.335px, 19.6553px; fill: rgb(18, 124, 173);"></path>
                  <path class="cls-2" d="m15.04,89.93l-5.5-1.5C18.64,54.63,44.44,27.93,78.64,16.83s70.8-4.4,97.9,17.8l-3.6,4.4c-25.6-20.9-60.2-27.2-92.5-16.8S23.54,58.03,15.04,89.93Z" style="stroke-dashoffset: 0px; stroke-dasharray: 400.807px, 14.4527px; fill: rgb(18, 124, 172);"></path>
                  <path class="cls-13" d="m174.34,36.23c-30.4-24.8-72.9-28.4-108.4-9.2l-4-7.5C100.44-1.27,146.74,2.73,179.74,29.63l-5.4,6.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 142.297px, 115.652px; fill: rgb(209, 202, 49);"></path>
                  <path class="cls-9" d="m16.94,82.93l-3.8-1C22.14,48.43,47.74,21.83,81.74,10.93,115.74.03,151.94,6.63,178.84,28.53l-2.5,3.1c-26-21.1-60.9-27.4-93.5-16.9C50.24,25.23,25.54,50.73,16.94,82.93Z" style="stroke-dashoffset: 0px; stroke-dasharray: 223.72px, 188.144px; fill: rgb(53, 133, 184);"></path>
                  <path class="cls-39" d="m115.74,201.73c-28.5,0-55-13.1-73-36.2-18.3-23.5-24.5-53.1-17-81.2l1.8.5c-7.4,27.5-1.3,56.5,16.7,79.6,18,23.1,44.6,36,73.1,35.5v1.9l-1.6-.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 184.47px, 160.062px; fill: rgb(123, 3, 5);"></path>
                  <path class="cls-17" d="m114.74,211.13c-29.5,0-57-13.6-75.6-37.5-19-24.3-25.4-55-17.6-84.1l8.2,2.2c-7.1,26.5-1.3,54.5,16.1,76.7,17.4,22.2,43,34.7,70.4,34.2l.2,8.5h-1.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 188.68px, 169.087px; fill: rgb(205, 201, 52);"></path>
                  <path class="cls-19" d="m181.84,34.73l-1-.8" style="stroke-dashoffset: 0px; stroke-dasharray: 1.1454px, 0.235202px; fill: rgb(114, 153, 193);"></path>
                  <path class="cls-10" d="m219.54,111.03c-1.9-32-16.3-62-40.1-83.4l1.1-1.3c24.2,21.7,38.8,52.1,40.7,84.5l-1.7.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 99.7178px, 94.9362px; fill: rgb(55, 109, 152);"></path>
                  <path class="cls-13" d="m211.24,111.03c-1.6-27.5-14-53.2-34.5-71.7l5.7-6.3c22.1,19.9,35.5,47.7,37.3,77.5l-8.5.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 94.2734px, 92.67px; fill: rgb(202, 200, 55);"></path>
                  <path class="cls-34" d="m96.44,175.53c22.6.5,43.1-7.6,56.3-22.2,13.2-14.6,16.9-33.2,10-51l4.6-.9c7.3,19,3.4,38.9-10.7,54.4-14.1,15.5-36,24.1-60.1,23.6l-.1-3.9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 124.393px, 126.647px; fill: rgb(132, 9, 1);"></path>
                  <path class="cls-21" d="m106.14,131.03v-1.7c8.5-.1,13.5-6,15.3-11.5s1.4-13.1-5.2-18.4l1-1.3c7.9,6.5,9.1,18.2,2.6,26.1-3.4,4.2-8.4,6.6-13.7,6.8h0Z" style="stroke-dashoffset: 0px; stroke-dasharray: 43.7891px, 45.4426px; fill: rgb(81, 71, 89);"></path>
                  <path class="cls-28" d="m108.94,132.43c-11.1-.2-19.9-9.4-19.7-20.4.1-5.8,2.7-11.3,7.2-15l1.6,2c-7.4,6.2-8.3,17.2-2.1,24.6,3.3,3.9,8.1,6.2,13.3,6.2v2.6h-.3Z" style="stroke-dashoffset: 0px; stroke-dasharray: 46.683px, 50.1232px; fill: rgb(197, 199, 58);"></path>
                  <path class="cls-35" d="m161.44,90.63c13.9,19.7,7.5,45.8-15.1,62.1l-4-3.3c20.5-14.8,26.3-38.6,13.7-56.4l5.4-2.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 69.538px, 77.6856px; fill: rgb(151, 184, 94);"></path>
                  <path class="cls-17" d="m1.44,118.73C-4.86,74.23,21.04,29.93,62.84,13.33l3.1,7.9C27.74,36.43,4.14,76.93,9.84,117.63l-8.4,1.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 124.206px, 144.239px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-15" d="m107.54,108.13l-.5-.8-.7-.6c.4-.4,1-.7,1.6-.8v1l.5.8-.9.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 3.53849px, 3.17111px; fill: rgb(123, 4, 6);"></path>
                  <path class="cls-28" d="m113.04,120.03l-.6-1.6c3.2-1.2,5.2-3.5,5.4-6.3.3-2.5-.9-4.9-2.9-6.2-2.2-1.4-5-1.2-7.9.6l-.9-1.4c3.4-2.1,6.9-2.3,9.7-.6,2.6,1.7,4,4.7,3.7,7.8-.3,3.4-2.7,6.2-6.5,7.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 26.1959px, 31.6046px; fill: rgb(157, 95, 89);"></path>
                  <path class="cls-25" d="m110.44,121.73c-3.5,0-6.6-2-8.1-5.1-2.3-4.7-.5-10.3,4-12.8l2.2,3.7c-2.6,1.4-3.7,4.6-2.4,7.2.9,1.9,3.2,3.5,6.6,2.2l1.5,4c-1.1.5-2.4.8-3.8.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 23.8863px, 29.7023px; fill: rgb(86, 63, 79);"></path>
                  <path class="cls-17" d="m16.84,97.83l-1.8-.5c8.9-33.2,34.3-59.4,67.8-70.2s69.5-4.3,96.1,17.4l-1.2,1.4c-26-21.3-61.3-27.7-94.3-17.1-33,10.6-57.8,36.5-66.6,69Z" style="stroke-dashoffset: 0px; stroke-dasharray: 174.864px, 232.524px; fill: rgb(189, 196, 65);"></path>
                </g>
                <g id="stroke">
                  <path class="cls-17" d="m186.44,191.33l-1.3-1.6c1-.8,2.1-1.5,3.3-2.3,2.6-1.7,5.3-3.5,6.5-5.8l1.8.9c-1.4,2.9-4.5,4.9-7.2,6.6-1.1.7-2.1,1.4-3.1,2.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 13.4303px, 17.271px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-1" d="m157.34,210.13l-.5-1.2c10.7-4.5,18.5-10.8,27.5-18l1.1-.9.8,1-1.1.9c-9.1,7.3-16.9,13.6-27.8,18.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 30.1265px, 41.7347px; fill: rgb(13, 116, 169);"></path>
                  <path class="cls-17" d="m113.84,218.93c-7.6,0-15.2-.8-22.6-2.5l.2-1c22,4.7,44.8,2.4,65.4-6.5l.4,1c-13.7,6-28.5,9-43.4,9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 55.5674px, 80.8382px; fill: rgb(184, 194, 68);"></path>
                  <path class="cls-17" d="m91.04,217.43c-30.9-6.8-57.2-27.1-72.2-55.9S2.04,99.53,14.14,70.23l2.6,1.1c-11.7,28.5-10.1,60.8,4.6,88.9s40.3,47.8,70.3,54.4l-.6,2.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 149.951px, 228.244px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-2" d="m15.94,71.03l-1-.4C27.84,39.33,54.44,16.53,88.04,8.03s67.7-1.3,93.9,19.9l-.7.9C155.34,7.83,121.44.63,88.34,9.13S28.64,40.13,15.94,71.03Z" style="stroke-dashoffset: 0px; stroke-dasharray: 155.13px, 244.012px; fill: rgb(117, 8, 13);"></path>
                  <path class="cls-8" d="m197.84,90.43l-3.4-8.5-1.8-4.6-.5-1.3h1.4q.7,0,1.8,2.9.9,2.4,1,2.5l1.5,9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 12.8326px, 19.4885px; fill: rgb(179, 193, 72);"></path>
                  <path class="cls-5" d="m161.82,70.62c-7.06-9-15.92-16.34-26.15-21.53l1.32-2.67c10.6,5.39,19.86,13.03,27.12,22.39l-2.29,1.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 28.6763px, 46.9232px; fill: rgb(172, 131, 81);"></path>
                  <path class="cls-35" d="m169.44,78.03c-.7-1-9.2-12.2-9.6-12.7l.7-.6h0v-.9q.5,0,5.3,6.4c1.1,1.4,4.6,6.1,5.1,6.8l-1.5,1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 13.8919px, 22.5921px; fill: rgb(177, 192, 74);"></path>
                  <path class="cls-27" d="m178.14,101.73c-1-8.4-4-16.5-8.7-23.6l1.6-1.1c4.9,7.3,8,15.7,9,24.4l-1.9.3Z" style="stroke-dashoffset: 0px; stroke-dasharray: 20.6748px, 34.9256px; fill: rgb(174, 191, 76);"></path>
                  <path class="cls-35" d="m173.84,93.83c-.6-4.1-1.9-7.8-3.7-12.2l2.1-.8c1.8,4.1,3.1,8.4,3.8,12.7l-2.2.3Z" style="stroke-dashoffset: 0px; stroke-dasharray: 11.4465px, 19.1945px; fill: rgb(140, 22, 1);"></path>
                  <path class="cls-22" d="m132.74,87.43c.1.5.4,1,.8,1.4.1-.3.1-.7,0-1-.1-.2-.4-.4-.6-.4h-.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 1.89641px, 1.80269px; fill: rgb(111, 73, 156);"></path>
                  <path class="cls-36" d="m125.61,163.14c20.32-1.97,35.62-15.68,39.76-35.73,4.87-23.58-12.6-45.69-21.53-51.88l-.97,1.32c16.79,11.65,24.81,30.86,20.84,50.11-3.97,19.24-18.73,32.61-38.29,34.61l.19,1.57Z" style="stroke-dashoffset: 0px; stroke-dasharray: 79.168px, 153.493px; fill: rgb(169, 190, 79);"></path>
                  <path class="cls-33" d="m114.54,158.83c-4.4,0-8.8-.6-13.1-1.8-18.6-5.1-31.7-19.7-34.4-38.2l1.2-.2c2.6,18,15.4,32.2,33.4,37.2s36.4-.8,47.8-15l1,.8c-8.6,11-21.8,17.3-35.9,17.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 72.2083px, 145.448px; fill: rgb(188, 189, 66);"></path>
                  <path class="cls-25" d="m114.24,142.63c-4.9,0-9.7-1.2-14.1-3.4-10.9-5.3-17.6-16.5-17-28.5l1.8.1c-.5,16.1,12.2,29.5,28.2,30,6.8.2,13.5-2,18.9-6.2l1.1,1.4c-5.4,4.2-12,6.6-18.9,6.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 45.6494px, 94.2297px; fill: rgb(99, 43, 53);"></path>
                  <path class="cls-23" d="m85.44,110.73l-3-.1c1.1-17.3,16.1-30.5,33.4-29.4,7,.5,13.6,3.2,18.9,7.9l-2,2.2c-11.8-10.4-29.8-9.3-40.2,2.5-4.2,4.7-6.6,10.6-7.1,16.9Z" style="stroke-dashoffset: 0px; stroke-dasharray: 44.5869px, 95.1613px; fill: rgb(134, 0, 0);"></path>
                  <path class="cls-14" d="m127.84,114.63h-.6q-.6,0-.6-3.4v-1.4h1.1l.1,4.3v.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 4.22244px, 7.35816px; fill: rgb(49, 61, 115);"></path>
                  <path class="cls-20" d="m99.54,112.43c-.3-4.8,2.1-9.4,6.3-11.9,4.8-2.8,10.6-2.9,15.4-.3,4.2,2.3,6.8,6.8,6.7,11.7h-1.6c.1-4.2-2.2-8.2-5.9-10.2-4.3-2.3-9.6-2.2-13.8.2-3.6,2.2-5.8,6.2-5.5,10.5h-1.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 26.9852px, 60.0073px; fill: rgb(156, 38, 48);"></path>
                  <path class="cls-20" d="m113.74,125.93c-2.6,0-5.2-.6-7.5-1.9-4.3-2.3-6.9-6.8-6.8-11.7h1.7c-.1,4.2,2.1,8.2,5.8,10.2,4.3,2.3,9.5,2.2,13.8-.2,3.6-2.2,5.8-6.2,5.5-10.5h1.7c.3,4.8-2.2,9.4-6.3,11.9-2.4,1.5-5.2,2.2-7.9,2.2Z" style="stroke-dashoffset: 0px; stroke-dasharray: 26.4348px, 60.7829px; fill: rgb(159, 186, 87);"></path>
                  <path class="cls-3" d="m157.14,96.93c-1.9-5.5-4.9-10.6-8.8-15.1l.8-.7c4,4.5,7,9.7,9,15.4l-1,.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 11.7425px, 26.0323px; fill: rgb(201, 229, 238);"></path>
                  <path class="cls-17" d="m99.14,195.13v-1.1c0-1.1.9-1.1,2-1.1l10-.2,11-.2v2.3l-22,.4-1-.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 14.953px, 35.1994px; fill: rgb(113, 21, 27);"></path>
                  <path class="cls-7" d="m115.14,194.23v-1.1c28.2-.4,54-15.5,68.3-39.8l1,.6c-14.4,24.6-40.7,39.9-69.3,40.3Z" style="stroke-dashoffset: 0px; stroke-dasharray: 48.1049px, 120.689px; fill: rgb(153, 184, 92);"></path>
                  <path class="cls-35" d="m113.44,179.13c-5.9,0-11.8-.8-17.6-2.4l.3-1c27.9,7.5,57.4-3.8,73.2-28l.9.6c-12.5,19.2-33.9,30.8-56.8,30.8Z" style="stroke-dashoffset: 0px; stroke-dasharray: 47.7187px, 123.443px; fill: rgb(208, 202, 50);"></path>
                  <path class="cls-35" d="m95.64,177.53c-25-6.9-44.6-28.8-48.8-54.4l2.5-.4c4.4,25,22.6,45.3,47,52.3l-.7,2.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 43.2762px, 113.131px; fill: rgb(210, 203, 49);"></path>
                  <path class="cls-31" d="m173.74,133.43c5.9-26.3-10-52.7-40.7-67.4l-1.5,1.6c29.8,14.3,45.2,39.9,39.5,65.4l2.7.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 47.4973px, 125.405px; fill: rgb(149, 183, 95);"></path>
                  <path class="cls-6" d="m155.14,61.13c-22.3-17.9-53.6-19.4-77.5-3.8l-1-1.5c24.6-16,56.7-14.5,79.7,3.9l-1.2,1.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 46.3315px, 125.598px; fill: rgb(148, 17, 9);"></path>
                  <path class="cls-27" d="m144.68,49.73l1.8-2.3c21.6,17.5,32.7,44.9,29.6,73.3-3.1,28.4-19.7,52.8-44.5,65.3l-1.3-2.6c23.9-12.1,40-35.6,42.9-63,3-27.4-7.6-53.9-28.5-70.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 88.1253px, 241.692px; fill: rgb(214, 167, 51);"></path>
                  <path class="cls-17" d="m113.74,194.93c-25.3,0-48.8-11.7-64.8-32.2-16.3-20.9-21.8-47.2-15.1-72.1l2.3.6c-6.5,24.2-1.2,49.8,14.7,70.1s39.3,31.7,64.4,31.2v2.4h-1.5Z" style="stroke-dashoffset: 0px; stroke-dasharray: 80.5125px, 225.722px; fill: rgb(142, 181, 100);"></path>
                  <path class="cls-24" d="m186.44,32.63l-1-.8" style="stroke-dashoffset: 0px; stroke-dasharray: 1.08207px, 0.298535px; fill: rgb(115, 101, 169);"></path>
                  <path class="cls-17" d="m220.04,105.13c-1.6-27.7-14.1-53.6-34.7-72.2l1.3-1.4c21,18.9,33.7,45.3,35.3,73.5l-1.9.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 44.2227px, 125.507px; fill: rgb(32, 146, 183);"></path>
                  <path class="cls-20" d="m110.64,128.83v-2.5c7.7-.3,13.6-6.8,13.3-14.4-.2-3.9-2-7.6-5-10.1l1.5-2c7,5.8,8,16.1,2.2,23.1-2.9,3.5-7.2,5.7-12,5.9h0Z" style="stroke-dashoffset: 0px; stroke-dasharray: 21.0068px, 57.0267px; fill: rgb(151, 43, 4);"></path>
                  <path class="cls-25" d="m110.44,129.03c-9.2-.2-16.5-7.8-16.3-16.9.1-4.8,2.3-9.3,5.9-12.4l1.8,2.3c-5.8,4.9-6.5,13.5-1.6,19.3,2.5,3,6.2,4.8,10.1,4.9h.3v2.9h-.2v-.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 21.7413px, 58.0937px; fill: rgb(116, 17, 21);"></path>
                  <path class="cls-3" d="m109.44,108.63v-1.7c0-.9,1.3-1.4,1.6-1.4h3.4l-5,3.1Z" style="stroke-dashoffset: 0px; stroke-dasharray: 4.20122px, 9.17068px; fill: rgb(232, 244, 248);"></path>
                  <path class="cls-25" d="m116.34,118.53l-.8-2.1c3.3-1.3,4-3.5,4.2-4.8.2-1.8-.7-3.6-2.2-4.6-1.6-1-3.8-.9-6,.5l-1.2-1.9c2.9-1.8,6-2,8.3-.5s3.5,4.1,3.3,6.8c-.3,2.9-2.3,5.3-5.6,6.6Z" style="stroke-dashoffset: 0px; stroke-dasharray: 13.7482px, 35.1115px; fill: rgb(132, 174, 105);"></path>
                  <path class="cls-18" d="m113.34,119.13c-2.6,0-5-1.5-6.1-3.9-1.7-3.6-.4-7.8,3.1-9.8l1.2,2c-2.4,1.3-3.4,4.2-2.2,6.7.8,1.7,3,3.3,6.1,2.1l.8,2.2c-.8.5-1.8.7-2.9.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 11.7839px, 29.9161px; fill: rgb(210, 23, 15);"></path>
                  <polygon class="cls-25" points="109.94 118.53 110.44 117.33 109.54 118.33 110.44 117.33 111.14 115.93 111.54 116.13 110.54 117.23 109.94 118.53"></polygon>
                </g>
              </g>
              <path class="cls-35" d="m167.84,89.13c3.3,4.9,5.9,10.2,7.8,15.8,8.2,24.1,1.8,49.4-16.5,66.1l-1.7-1.9c17.6-15.9,23.6-40.2,15.8-63.3s-27.5-38.8-51.2-40.8l.2-2.6c18.5,1.4,35.3,11.3,45.6,26.7Z" style="stroke-dashoffset: 0px; stroke-dasharray: 79.2787px, 209.063px; fill: rgb(240, 212, 27);"></path>
              <path class="cls-25" d="m139.03,85.38c13.9,19.7,7.5,45.8-15.1,62.1l-4-3.3c20.5-14.8,26.3-38.6,13.7-56.4l5.4-2.4Z" style="stroke-dashoffset: 0px; stroke-dasharray: 40.7355px, 106.488px; fill: rgb(127, 170, 107);"></path>
              <path class="cls-32" d="m146.16,84.65l4.96-4.13c13.34,16.35,15.62,38.75,5.87,58.56s-28.97,32.2-50.3,32.22l.13-6.4c18.89-.03,35.94-10.96,44.56-28.57,8.62-17.61,6.52-37.28-5.23-51.67Z" style="stroke-dashoffset: 0px; stroke-dasharray: 70.6557px, 178.263px; fill: rgb(245, 177, 23);"></path>
              <path class="cls-29" d="m103.75,133.04l-.5,3c10.92,1.82,21.54-2.31,27.76-10.86,6.22-8.55,6.55-19.34.78-28.2l-2.83,1.51c5.1,7.85,4.83,17.41-.71,24.98s-14.9,11.17-24.51,9.56Z" style="stroke-dashoffset: 0px; stroke-dasharray: 34.3947px, 87.7983px; fill: rgb(157, 13, 3);"></path>
            </svg>
        </div>
        <h3>Sorry, no matching terms.</h3>
      </div>

    </div>

  </div>
</section>';
		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['card' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
