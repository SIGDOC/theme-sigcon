# THEME FOR SIGDOC CONFERENCES

This repo is for the SIG on the Design of Communication conference.

## CUSTOM LAYOUTS

### Schedule / Program

<img src="assets/img/docs/sigcon-layout-program-schedule.png" width="250px" />

Use this layout for the SIGDOC program page.

#### Features

- Programmatic population of schedule via CSV file: [/prod/global/vendor/sigdoc-schedule.csv](/prod/global/vendor/sigdoc-schedule.csv).
- Schedule filtering via searchbar

#### WP theme development files

- **Template**: [views/templates/template-schedule.latte](/views/templates/template-schedule.latte)
- **Custom Includes**:
  - [/layout/header-schedule](/views/layout/header-schedule)
- **CSS**:
    - [src/scss/theme/pages/_schedule.scss](src/scss/theme/pages/_schedule.scss)
- **JS**:
    - [/prod/global/vendor/schedule.js](/prod/global/vendor/schedule.js)
- **Notes**: Main CSS styles are located in a shared cards stylesheet: `gutenberg/blocks_shared_css_and_js/css/sigcon-cards.scss`

## CUSTOM CONTENT BLOCKS

Custom blocks are located in the `gutenberg > blocks` folder area.

### Flexbox thin cards

<img src="gutenberg/blocks/sigcon-cards-flex-thin/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: [gutenberg/blocks/sigcon-cards-flex-thin](gutenberg/blocks/sigcon-cards-flex-thin)

**Notes**: Main CSS styles are located in a shared cards stylesheet: [gutenberg/blocks_shared_css_and_js/css/sigcon-cards.scss](gutenberg/blocks_shared_css_and_js/css/sigcon-cards.scss). Good for bios about speakers or series of related content that needs a featured image.

<br>
<br>
<br>

### Cards with left floated images

<img src="gutenberg/blocks/sigcon-cards-left-float-img-and-txt/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-cards-left-float-img-and-txt`

**Notes**: Good for bios about speakers or series of related content that needs a featured image. It's frontend.scss file overwrites WP's `tr-image-...` styles

### Landing page animated and numbered card panels

<img src="gutenberg/blocks/sigcon-landing-cards/example.jpg" width="105px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-landing-cards`

**Notes**: Uses Greensock.js library for the animations. However, it is designed to not require Greensock or javascript in general.

### Flexbox animated and numbered card panels

<img src="gutenberg/blocks/sigcon-landing-cards-flexrow/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-landing-cards-flexrow`

**Notes**: *Currently designed to account for up to 5 card panels*. Uses Greensock.js library for the animations. However, it is designed to not require Greensock or javascript in general.

### Featured paragraph with styled first letter

<img src="gutenberg/blocks/sigcon-page-card-paragraph-feature/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-page-card-paragraph-feature`

**Notes**: Good for first paragraph chunk on a longer content page. Use sparingly.

<br>

### Intro card for a page

<img src="gutenberg/blocks/sigcon-page-intro-card/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-page-intro-card`

**Notes**: Good to use as the first paragraph on a page for the most important info. Put your top content priorities in here.

<br>

### Cards for a posters

<img src="gutenberg/blocks/sigcon-poster-session-cards/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-poster-session-cards`

**Notes**: If featuring posters on the site.

### Accessible landmark section regions of content

<img src="gutenberg/blocks/sigcon-section-content/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-section-content`

**Notes**: Create accessbile landmarks to break up larger/longer pages of content.

### Sponsors Gallery

<img src="gutenberg/blocks/sigcon-sponsor-gallery/example.jpg" width="150px" style="float:left;margin-right:15px" />

**Path**: `gutenberg/blocks/sigcon-sponsor-gallery`

**Notes**: Create a gallery of sponsor logos, where each logo can be provided a URL to their desired site.

## THEME REDONE & GUTENBERG BLOCK LESSONS LEARNED

- `model.json` keys **must use** underscores—not hyphens. Otherwise it breaks the JSON.
- anchors can nicely use the `link` object with the `tr_a()` template part. But, the trade off is not as much CSS versatility without adding classes to the anchor element itself.
- Needed to modify Theme Redone's [/gutenberg/init.php](/gutenberg/init.php) because I needed to check for `.DS_Store` as a directory. Otherwise, if left unchecked, the building process would fail.
  ```
  // REGISTER THE DYNAMIC BLOCKS ------------------------------
  $block_prefix = json_decode(file_get_contents(get_template_directory() . "/theme_redone_global_config.json"), true)['BLOCK_NAME_PREFIX'];
  $all_blocks_dir_names = array_diff(scandir(TR_BLOCKS_DIR), ['..', '.', 'new-block-setup']);
  foreach ($all_blocks_dir_names as $key => $block_dir_name) {
    if ($block_dir_name != '.DS_Store') {

      $block_model = json_decode(file_get_contents(TR_BLOCKS_DIR . "/$block_dir_name/model.json"), true);
      $block_meta = $block_model['block_meta'];
      if (
        !array_key_exists("isJsRendered", $block_meta) ||
        (array_key_exists("isJsRendered", $block_meta) && $block_meta['isJsRendered'] === false)
      ) {
        require_once TR_BLOCKS_DIR . "/$block_dir_name/controller.php";
      }

    }

  }
  // END:REGISTER THE DYNAMIC BLOCKS --------------------------
  ```

### Block Templating

Custom Gutenberg blocks (`/gutenberg/blocks/..`)

- [] `enter_name_of_block`: Enter description of block component
	- [] editor.scss
	- [] view.latte
	- [] frontend.scss
	- [] frontend.js
	- [] model.json
	- [] example.jpg

## Programming Environment Requirements

- PHP ^8.0 (^7.4.29 for releases prior to v1.1.0)
	- This theme runs on PHP ^8.0
- Composer 2.0.2^
- Node 14.19.1
  - [Installation instructions](./node.md)

### Suggested Development Tools

- [Local](https://localwp.com/): A great Wordpress devtool that helps you run a full WP environment locally on your computer to test before deploying any new changes.
- VS Code: Great free code editor
- Github Desktop: To help version control management.

---

## DEV ENVIRONMENT SETUP

1. Install PHP, Node, and Composer.
2. At the root of the theme, there is a “theme_redone_global_config.json” file. Replace “localhost/theme-redone” with the name of your project from htdocs “localhost/[PROJECT-FOLDER-NAME]” (This makes sure browser-sync connects to the correct project)
3. From the terminal (from inside the root directory of the theme) run `composer install`.
4. Run `npm install` to install the PHP and JS dependencies. (Make sure Node version 14.19.1 is used. We suggest using NVM to manage Node versions)
    - **NOTE**: On an M1 chip, I used `yarn install` instead. `node-sass` kept breaking due to lack of M1 ARM64 support. First, I 
        1. ran `yarn add sass gulp-sass --save-dev`, which properly installed allthethings. Then,
        2. in the `gulpfile.js`, I updated the `sass` library reference to `const sass = require("gulp-sass")(require('sass'))`.
5. Install the TRB CLI package globally ( `npm i -g @webredone/trb-cli` ) to scaffold blocks faster.
6. In WordPress, activate the theme.
7. If you want to enable SVG uploads to the media folder, install the svg-support plugin.


## Compilation, Watching + Bundling & Minification Tasks

1. To start the compiler and make it watch for file changes, simply run the `npm start command` from the terminal.
2. Create or revise blocks/theme.
3. Once the project is finished and ready to be deployed, run `npm run build:prod` to optimize CSS and JavaScript files.
4. Commit and push changes to github repo: [SIGDOC/theme-sigcon](https://github.com/SIGDOC/theme-sigcon).

## ARCHITECTURE

```
.
├── assets
│   ├── img
│   └── svg
├── cptui
│   ├── post_types.php
│   └── taxonomies.php
├── gutenberg
│   ├── blocks
│   │   ├── new-block-blueprint
│   │   │   ├── _editor.scss
│   │   │   ├── controller.php
│   │   │   ├── EditMain.js
│   │   │   ├── EditSidebar.js
│   │   │   ├── example.jpg
│   │   │   ├── frontend.js
│   │   │   ├── frontend.scss
│   │   │   ├── model.json
│   │   │   ├── View.js
│   │   │   └── view.latte
│   ├── blocks_shared_css_and_js
│   │   ├── css
│   │   └── js
│   ├── components
│   ├── core
│   ├── helpers
│   ├── scss
│   ├── blocks.js
│   ├── init.php
│   └── register_block.js
├── page-templates
├── php-inc
├── prod
├── src
│   ├── js
│   └── scss
├── vendor
├── views
│   ├── layout
│   ├── parts
│   ├── temp
│   └── templates
├── 404.php
├── front-page.php
├── functions.php
├── index.php
├── page.php
├── screenshot.png
├── single.php
├── style.css
└── theme_redone_global_config.json
```

---

## WHAT IS THEME REDONE?

Theme Redone is a custom WordPress theme starter/framework with its own Gutenberg blocks solution and a CLI that speeds up the block creation process.

### TR Features

- ✅ [Latte templating engine](https://webredone.com/theme-redone/why-latte-as-a-templating-engine/) for its beautiful syntax and a more streamlined and manageable workflow
- ✅ EsBuild/Webpack + Gulp task tasks for [compiling SCSS and JS](https://webredone.com/theme-redone/scss-and-js-compilation-bundling/)
- ✅ SCSS (SMACSS folder/files structure)
- ✅ Javascript (ES8 and React/Svelte/Vue support, thanks to EsBuild and Babel)
- ✅ In-theme [framework for building Gutenberg blocks](https://webredone.com/theme-redone/gutenberg-blocks-framework/) in a streamlined and standardized way
- ✅ [TRB CLI](https://webredone.com/theme-redone/gutenberg-blocks-framework/trb-cli/) helper for scaffolding new Gutenberg blocks
- ✅ [Bare-bones grid system](https://webredone.com/theme-redone/simple-grid-system/) coded with Flex and CSS variables (about 15 lines of code)
- ✅ [Helper functions](https://webredone.com/theme-redone/theme-functions/) for repetitive tasks such as rendering images, links, SVG code, and more
- ✅ Just a few [well-written UI components](https://webredone.com/theme-redone/javascript-ui-elements-classes/) to get you started (we don’t like bloat in our code): Modal, Accordion, Tabs, Menu, Dropdowns, Sliders, and simple “in view fade-in transitions”
- ✅ [SVG support](https://webredone.com/theme-redone/svg-handling/)
- ✅ [Tracy Debugger](https://webredone.com/theme-redone/debugging-tracy/) to help us make sure we write stable and error-free code
- ✅ And much more

Visit [https://webredone.com/theme-redone/](https://webredone.com/theme-redone/) to learn more.
