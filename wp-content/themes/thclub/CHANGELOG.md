# Change Log

## [v2.10.6](https://github.com/olefredrik/fiftytwo/tree/v2.10.6) (2019-04-12)

** Changes **
- fix foundation-explicit-pieces.js (was broken since foundation-sites@6.5.1)
- Motion UI updated to latest version
- fiftytwo_pagination() refactored

**Fixed bugs:**

- Using foundation-explicit-pieces.js will not compile [\#1363](https://github.com/olefredrik/fiftytwo/issues/1363)

**Closed issues:**
- Update Motion UI [\#1363](https://github.com/olefredrik/fiftytwo/issues/1376)

** Merged pull requests: **

- Fixes fiftytwo_pagination() - Outputs valid HTML, output matches Foundation's docs. [\#1375](https://github.com/olefredrik/fiftytwo/pull/1372) ([pixelbrad](https://github.com/pixelbrad))
- Fix foundation-explicit-pieces.js compile error [\#1375](https://github.com/olefredrik/fiftytwo/pull/1375) ([emaia](https://github.com/emaia))


## [v2.10.5](https://github.com/olefredrik/fiftytwo/tree/v2.10.5) (2019-04-04)

** Merged pull requests: **

- Small fixes #1161  (@emaia)
- Revert style changes in 6.4.3 up-to-date #1160 (@olefredrik)
- Separate grid element from container #1159 (@olefredrik)
- Revert style changes in 6.4.3 up-to-date #1158 (@colin-marshall)
- Tiny update gulpfile.babel.js #1155 (@gruenewiese)
- Update to Foundation for Sites 6.4.3 #1154 (@Aetles)
- Change the full-width template class to .main-content-full-width #1149 (@colin-marshall)
- Add Impeach Trump Now site to the showcase #1139 (@olefredrik)
- Reintroduce WPCS without Travis #1131 (@colin-marshall)
- Reintroduce package task #1130 (@colin-marshall)
- Fix php error in asset_path function #1129 (@JPOak)
- Combine asset path function. Much prettier. #1126 (@JPOak)
- Remove data attribute for sticky footer #1125 (@olefredrik)
- update jqmigrate to be compatible with jquery version used #1244 (@farlandlee)
- Fix image alignment bug discussed in #1237. #1239 (@JPOak)
- Wordpress gallery: Added css and custom markup #1234 (@emaia)
- Update package-lock.json file to sync up with package.json . #1233 (@JPOak)
- translate(urdu): mo, po file #1226 (@adeelshahid)
- Removed underscore from accessibility import in app.scss #1222 (@colin)
- Make topbar default if mobile nav setting isn't already defined #1220 (@colin)
- Remove reference to gutil in gulpfile #1213 (@dgobnto)
- Replace deprecated gulp-util with ansi-colors and fancy-log #1212 (@colin)
- Added path for php and scss file changes/removals to console output. feature request #1210 (@colin)
- Refine Webpack watch + build functions #1205 (@conorbarclay)
- Adds Hungarian translation. #1201 (@belamezey)
- Bumped bablel-loader, webpack, and webpack-stream in package.json #1196 (@colin)
- Fix typo #1194 (@dgobnto)
- Fix footer container. #1180 #1189 (@JPOak)
- Remove demosite script #1188 (@olefredrik)
- Fix unclosed anchor tag in Dutch translation #1183 (@tiborp)
- Code cleanup #1178 (@Aetles)
- Remove stray ‘[‘ and update single.php sidebar indentation #1176 (@giollianosulit)
- Update package-lock.json file with updated Foundation version. #1175 (@JPOak)
- Improvements + Consistency updates in code indentation across multiple php files #1173 (@giollianosulit)
- Optimize JavaScript tasks #1169 (@conorbarclay)
- Fix asset exclusion globbing pattern #1168 (@conorbarclay)
- Adding aria-label attribute to mobile menu hamburger button #1166 (@aldavigdis)
- Adding Icelandic localisation #1165 (@aldavigdis)
- Clean up showcase - sites made with FP  #1361 (@olefredrik)
- Update footer.php  #1359 (@dgobnto)
- Remove extra line  #1358 (@dgobnto)
- vulnerabilities fixed  #1354 (@derweili)
- Dependency updates / Security fixes  #1353 (@derweili)
- Add Persian language file  #1348 (@mojtaba)
- Travis ci  #1345 (@derweili)
- Foundation 6.5.1 #1344 (@derweili)
- Main file changed to gulpfile.babel.js #1342 (@derweili)
- Sentence correction #1337 (@thisisbhaven)
- Gutenberg Support #1331 (@derweili)
- Update package.json #1327 (@dantahoua)
- Add aria label to the search form to assist in accessibility #1308 (@joshsmith01)
- Add container to index.php to match other default page templates #1299 (@colin-marshall)
- Licence Badge Updated #1297 (@derweili)
- Comments template cleaned up and refactored #1296 (@derweili)
- Fix image watcher copying images + reloading browser. Bump gulp-imagemin to 4.1.0. #1287 (@pixelbrad)
- Watch task to handle SVG files #1281 (@derweili)
- added russian language #1278 (@dzmitROCK)
- Add La revanche des sites to showcase #1261 (@bqst)
- use get_stylesheet_directory_uri to support usage as childtheme #1260 (@derweili)
- Replace deprecated log call #1257 (@hibernius)
- Add default breakpoint for smaller screen sizes to footer widget area. #1251 #1255 (@JPOak)
- Code cleanup while loop page.php #1253 (@dgobnto)
- fix: update webpack exclude rules for Windows compatibility #1250 (@colin-marshall)


## [v2.10.4](https://github.com/olefredrik/fiftytwo/tree/v2.10.4) (2017-10-11)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.10.3...v2.10.4)

**Fixed bugs:**

- WooCommerce Sidebar issues [\#1057](https://github.com/olefredrik/fiftytwo/issues/1057)

**Closed issues:**

- Responsive $grid-margin-gutters only work when XY-cell is included with a breakpoint [\#1121](https://github.com/olefredrik/fiftytwo/issues/1121)
- Basic grid not working? [\#1117](https://github.com/olefredrik/fiftytwo/issues/1117)
- Saving php file causes loss of sass changes in BrowserSync [\#1113](https://github.com/olefredrik/fiftytwo/issues/1113)
- Where do I put JS files so they are added to the /dist/ folder? [\#1108](https://github.com/olefredrik/fiftytwo/issues/1108)
- Old "NPM run build" method..... [\#1107](https://github.com/olefredrik/fiftytwo/issues/1107)
- Override WooCommerce styles [\#1106](https://github.com/olefredrik/fiftytwo/issues/1106)
- check-if-sidebar-exist.php  Is this used anymore? [\#1103](https://github.com/olefredrik/fiftytwo/issues/1103)
- XY Grid offsets don't include margin or padding [\#1099](https://github.com/olefredrik/fiftytwo/issues/1099)
- Removing before and after hooks... [\#1097](https://github.com/olefredrik/fiftytwo/issues/1097)
- Sticky Footer JS Missing [\#1095](https://github.com/olefredrik/fiftytwo/issues/1095)
- Content in Single.php [\#1094](https://github.com/olefredrik/fiftytwo/issues/1094)
- error on npm start [\#1093](https://github.com/olefredrik/fiftytwo/issues/1093)
- Error While npm install -g gulp [\#1092](https://github.com/olefredrik/fiftytwo/issues/1092)
- Semantically incorrect use of article elements [\#1091](https://github.com/olefredrik/fiftytwo/issues/1091)
- Npm start error  [\#1089](https://github.com/olefredrik/fiftytwo/issues/1089)
- Breadcrumbs error \(custom post types/taxonomies\) [\#1088](https://github.com/olefredrik/fiftytwo/issues/1088)
- Pagination showing same content [\#1087](https://github.com/olefredrik/fiftytwo/issues/1087)
- Update configuration process [\#1083](https://github.com/olefredrik/fiftytwo/issues/1083)
- Remove woocommerce hooks in cleanup.php.. [\#1082](https://github.com/olefredrik/fiftytwo/issues/1082)
- Article elements for widgets in sidebar and footer.. [\#1078](https://github.com/olefredrik/fiftytwo/issues/1078)
- How to get the breakpoint variable value from \_settings.scss [\#1077](https://github.com/olefredrik/fiftytwo/issues/1077)
- Conflict with Gravityforms - jQuery is not defined [\#1076](https://github.com/olefredrik/fiftytwo/issues/1076)
- Stick with 2.9 or tweak 2.10 for compatibility? [\#1075](https://github.com/olefredrik/fiftytwo/issues/1075)
- Error in plugin: 'sass' after changing values in \_settings.scss [\#1074](https://github.com/olefredrik/fiftytwo/issues/1074)
- Stop combine admin enqueue JavaScript into one file or add ignore options [\#1073](https://github.com/olefredrik/fiftytwo/issues/1073)
- Dropdown Links Not Working - Tablet [\#1072](https://github.com/olefredrik/fiftytwo/issues/1072)
- Add javascript file  [\#1069](https://github.com/olefredrik/fiftytwo/issues/1069)
- WooCommerce 3.0 - Hidden products showing in search results [\#1068](https://github.com/olefredrik/fiftytwo/issues/1068)
- Rename & fix path file [\#1067](https://github.com/olefredrik/fiftytwo/issues/1067)
- missing textdomains  [\#1066](https://github.com/olefredrik/fiftytwo/issues/1066)
- Npm start not watching css modifications [\#1064](https://github.com/olefredrik/fiftytwo/issues/1064)
- template-specific sass styles [\#1062](https://github.com/olefredrik/fiftytwo/issues/1062)
- \#footer-container Issues [\#1060](https://github.com/olefredrik/fiftytwo/issues/1060)
- Console error: Uncaught SyntaxError: Unexpected token import [\#1051](https://github.com/olefredrik/fiftytwo/issues/1051)
- WP built-in post tags [\#851](https://github.com/olefredrik/fiftytwo/issues/851)

**Merged pull requests:**

- Remove data attribute for sticky footer [\#1125](https://github.com/olefredrik/fiftytwo/pull/1125) ([olefredrik](https://github.com/olefredrik))
- Update README.md to reflect JavaScript changes [\#1119](https://github.com/olefredrik/fiftytwo/pull/1119) ([colin-marshall](https://github.com/colin-marshall))
- Move rev constant to config file [\#1116](https://github.com/olefredrik/fiftytwo/pull/1116) ([JPOak](https://github.com/JPOak))
- Add info about static asset hashing in readme [\#1115](https://github.com/olefredrik/fiftytwo/pull/1115) ([olefredrik](https://github.com/olefredrik))
- Static Asset Hashing [\#1114](https://github.com/olefredrik/fiftytwo/pull/1114) ([JPOak](https://github.com/JPOak))
- Remove unused sidebar template part. [\#1104](https://github.com/olefredrik/fiftytwo/pull/1104) ([JPOak](https://github.com/JPOak))
- Remove template hooks. [\#1102](https://github.com/olefredrik/fiftytwo/pull/1102) ([JPOak](https://github.com/JPOak))
- Update it\_IT.po [\#1101](https://github.com/olefredrik/fiftytwo/pull/1101) ([cipo28](https://github.com/cipo28))
- Target section instead of article in footer [\#1100](https://github.com/olefredrik/fiftytwo/pull/1100) ([olefredrik](https://github.com/olefredrik))
- Templating changes... [\#1098](https://github.com/olefredrik/fiftytwo/pull/1098) ([JPOak](https://github.com/JPOak))
- Remove breadcrumbs [\#1096](https://github.com/olefredrik/fiftytwo/pull/1096) ([JPOak](https://github.com/JPOak))
- remove woocommerce hooks. [\#1086](https://github.com/olefredrik/fiftytwo/pull/1086) ([JPOak](https://github.com/JPOak))
- package.json updates [\#1085](https://github.com/olefredrik/fiftytwo/pull/1085) ([colin-marshall](https://github.com/colin-marshall))
- Update config process [\#1084](https://github.com/olefredrik/fiftytwo/pull/1084) ([colin-marshall](https://github.com/colin-marshall))
- Widget area element change. Small spelling correction. [\#1081](https://github.com/olefredrik/fiftytwo/pull/1081) ([JPOak](https://github.com/JPOak))
- Added text domain to comment awaiting moderation message [\#1071](https://github.com/olefredrik/fiftytwo/pull/1071) ([colin-marshall](https://github.com/colin-marshall))
- Updated editor styles to match new app.css path [\#1070](https://github.com/olefredrik/fiftytwo/pull/1070) ([colin-marshall](https://github.com/colin-marshall))
- Typo fixed [\#1065](https://github.com/olefredrik/fiftytwo/pull/1065) ([derweili](https://github.com/derweili))
- Fixed kitchen sink grid update [\#1063](https://github.com/olefredrik/fiftytwo/pull/1063) ([colin-marshall](https://github.com/colin-marshall))

## [v2.10.3](https://github.com/olefredrik/fiftytwo/tree/v2.10.3) (2017-08-29)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.10.2...v2.10.3)

**Fixed bugs:**

- Issue with WooCommerce 3.0 new Gallery [\#1043](https://github.com/olefredrik/fiftytwo/issues/1043)
- "Active" class no longer being applied to Topbar link on active page [\#933](https://github.com/olefredrik/fiftytwo/issues/933)
- .active class applied to .main-menu li when using custom relative URLs in Menus [\#914](https://github.com/olefredrik/fiftytwo/issues/914)
- cant click parent links in Off-Canvas Navigation [\#710](https://github.com/olefredrik/fiftytwo/issues/710)

**Closed issues:**

- Installation issue [\#1055](https://github.com/olefredrik/fiftytwo/issues/1055)
- Grid elements don't function [\#1054](https://github.com/olefredrik/fiftytwo/issues/1054)
- app.js not building? [\#1053](https://github.com/olefredrik/fiftytwo/issues/1053)
- Issues with running jQuery 3.x [\#1052](https://github.com/olefredrik/fiftytwo/issues/1052)
- What version of fiftytwo  & Foundation am I running? [\#1050](https://github.com/olefredrik/fiftytwo/issues/1050)
- $offcanvas-size is deprecated [\#1048](https://github.com/olefredrik/fiftytwo/issues/1048)
- Tracking in git? [\#1047](https://github.com/olefredrik/fiftytwo/issues/1047)
- npm run command not working after running npm build [\#1046](https://github.com/olefredrik/fiftytwo/issues/1046)
- I'm not sure how to Package  [\#1045](https://github.com/olefredrik/fiftytwo/issues/1045)
- Keeping customizer settings when packaging / deploying the theme [\#1044](https://github.com/olefredrik/fiftytwo/issues/1044)
- Error with npm run package [\#1042](https://github.com/olefredrik/fiftytwo/issues/1042)
-  Manage packaging [\#1039](https://github.com/olefredrik/fiftytwo/issues/1039)
- syntax error navigation.php on line 131 [\#1035](https://github.com/olefredrik/fiftytwo/issues/1035)
- How to import 3rd party css? [\#1034](https://github.com/olefredrik/fiftytwo/issues/1034)
- .main-wrap causing horizontal scrolling on breakpoints [\#1029](https://github.com/olefredrik/fiftytwo/issues/1029)
- Has the update changed how the grid works? [\#1026](https://github.com/olefredrik/fiftytwo/issues/1026)
- Issue installing fiftytwo [\#1020](https://github.com/olefredrik/fiftytwo/issues/1020)
- Revisioned assets for gulp --production [\#944](https://github.com/olefredrik/fiftytwo/issues/944)
- disable off-canvas menu [\#930](https://github.com/olefredrik/fiftytwo/issues/930)
- Linking to an anchor tag on different post/page prevents scrolling up [\#887](https://github.com/olefredrik/fiftytwo/issues/887)
- Post Nav/Pagination Not Showing [\#820](https://github.com/olefredrik/fiftytwo/issues/820)
- Motion UI and WP sub-menus [\#701](https://github.com/olefredrik/fiftytwo/issues/701)
- \[Shortcodes\] \[Buttons\] [\#694](https://github.com/olefredrik/fiftytwo/issues/694)
- Problem with Custom Menu widget [\#621](https://github.com/olefredrik/fiftytwo/issues/621)
- Improve Documentation [\#605](https://github.com/olefredrik/fiftytwo/issues/605)
- Foundation Shortcode Buttons In WYSIWYG Editor [\#599](https://github.com/olefredrik/fiftytwo/issues/599)
- "Display Header Text" Checkbox Not Displaying in Customizer [\#464](https://github.com/olefredrik/fiftytwo/issues/464)

**Merged pull requests:**

- Fix pagination [\#1061](https://github.com/olefredrik/fiftytwo/pull/1061) ([colin-marshall](https://github.com/colin-marshall))
- Updated kitchen sink grid to XY Grid [\#1059](https://github.com/olefredrik/fiftytwo/pull/1059) ([colin-marshall](https://github.com/colin-marshall))
- Changed regex so it could only start with width or height. [\#1056](https://github.com/olefredrik/fiftytwo/pull/1056) ([colin-marshall](https://github.com/colin-marshall))
- Target Foundation version 6.4.1 [\#1049](https://github.com/olefredrik/fiftytwo/pull/1049) ([olefredrik](https://github.com/olefredrik))
- Prevent wp admin bar from overlapping Foundation menus [\#1041](https://github.com/olefredrik/fiftytwo/pull/1041) ([rediris](https://github.com/rediris))
- Change jQuery loading method [\#1040](https://github.com/olefredrik/fiftytwo/pull/1040) ([belamezey](https://github.com/belamezey))
- Off canvas links [\#1038](https://github.com/olefredrik/fiftytwo/pull/1038) ([olefredrik](https://github.com/olefredrik))
- de-queue FontAwesome CDN [\#1033](https://github.com/olefredrik/fiftytwo/pull/1033) ([linuxbastard](https://github.com/linuxbastard))

## [v2.10.2](https://github.com/olefredrik/fiftytwo/tree/v2.10.2) (2017-08-08)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.10.1...v2.10.2)

**Closed issues:**

- Missing script: watch [\#1028](https://github.com/olefredrik/fiftytwo/issues/1028)
- Smooth Scroll not added. [\#1027](https://github.com/olefredrik/fiftytwo/issues/1027)
- Foundation 6.4.0 [\#1008](https://github.com/olefredrik/fiftytwo/issues/1008)
- WooCommerce 3.0 Compatibility \(New Zoom/Lightbox feature\) [\#991](https://github.com/olefredrik/fiftytwo/issues/991)
- WooCommerce compatibility [\#982](https://github.com/olefredrik/fiftytwo/issues/982)
- Main menu with dropdowns - tapping sub-item link in iOS closes menu, does nothing else [\#975](https://github.com/olefredrik/fiftytwo/issues/975)
- responsive toggle menu stops working on 6.3.1 [\#973](https://github.com/olefredrik/fiftytwo/issues/973)
- Duplicate search bar when widget search produces no results [\#970](https://github.com/olefredrik/fiftytwo/issues/970)
- Dropdown menu issue [\#969](https://github.com/olefredrik/fiftytwo/issues/969)
- Header is covering top menu [\#938](https://github.com/olefredrik/fiftytwo/issues/938)
- How to make dropdowns in main nav open right [\#862](https://github.com/olefredrik/fiftytwo/issues/862)
- Theme Check Errors - Should I Be Worried? [\#840](https://github.com/olefredrik/fiftytwo/issues/840)
- Woocommerce template overrides [\#718](https://github.com/olefredrik/fiftytwo/issues/718)
- fiftytwo\_before\_content function not implemented [\#601](https://github.com/olefredrik/fiftytwo/issues/601)
- No rss/atom link?  [\#566](https://github.com/olefredrik/fiftytwo/issues/566)
- Stupid Question - how to set menu order to follow page order [\#541](https://github.com/olefredrik/fiftytwo/issues/541)
- Move right menu under left menu? [\#531](https://github.com/olefredrik/fiftytwo/issues/531)

**Merged pull requests:**

- Active class menu item [\#1032](https://github.com/olefredrik/fiftytwo/pull/1032) ([olefredrik](https://github.com/olefredrik))
- Include only XY-grid and disable float-grid by default [\#1031](https://github.com/olefredrik/fiftytwo/pull/1031) ([olefredrik](https://github.com/olefredrik))
- Add fontawesome handle [\#1030](https://github.com/olefredrik/fiftytwo/pull/1030) ([olefredrik](https://github.com/olefredrik))
- Dependencies [\#1024](https://github.com/olefredrik/fiftytwo/pull/1024) ([olefredrik](https://github.com/olefredrik))
- Woo 3 compatibility [\#1021](https://github.com/olefredrik/fiftytwo/pull/1021) ([linuxbastard](https://github.com/linuxbastard))

## [v2.10.1](https://github.com/olefredrik/fiftytwo/tree/v2.10.1) (2017-08-05)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.10.0...v2.10.1)

**Merged pull requests:**

- Xy grid in footer [\#1023](https://github.com/olefredrik/fiftytwo/pull/1023) ([olefredrik](https://github.com/olefredrik))

## [v2.10.0](https://github.com/olefredrik/fiftytwo/tree/v2.10.0) (2017-08-05)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.9.3...v2.10.0)

**Closed issues:**

- Expected response code 250 but got code "530", with message "530 5.7.1 Authentication required [\#1019](https://github.com/olefredrik/fiftytwo/issues/1019)
- Local to Live Pulling all Changes [\#1012](https://github.com/olefredrik/fiftytwo/issues/1012)
- ERR! Invalid name: "@gulp-sourcemaps/map-sources" [\#986](https://github.com/olefredrik/fiftytwo/issues/986)
- functions.php [\#981](https://github.com/olefredrik/fiftytwo/issues/981)
- Responsive Image height and width [\#972](https://github.com/olefredrik/fiftytwo/issues/972)
- How do you handle the "is-active" class on orbit slider when using ACF to add images [\#945](https://github.com/olefredrik/fiftytwo/issues/945)
- How do I support the built in WP Gallery in fiftytwo [\#937](https://github.com/olefredrik/fiftytwo/issues/937)
- Error: 'libsass' bindings not found. Try reinstalling 'node-sass'? [\#936](https://github.com/olefredrik/fiftytwo/issues/936)
- Problem with navigation touch events \(menu not working on ipad\) [\#935](https://github.com/olefredrik/fiftytwo/issues/935)
- Responsive Accordion Tabs [\#931](https://github.com/olefredrik/fiftytwo/issues/931)
- updating npm packages - guiding lines? [\#920](https://github.com/olefredrik/fiftytwo/issues/920)
- fiftytwo generator [\#919](https://github.com/olefredrik/fiftytwo/issues/919)
- Compilation issue [\#915](https://github.com/olefredrik/fiftytwo/issues/915)
- is\_single returns true for attachment page \(navigation.php\) [\#871](https://github.com/olefredrik/fiftytwo/issues/871)
- Is FP compatible with the WP Theme Directory guidelines? [\#849](https://github.com/olefredrik/fiftytwo/issues/849)
- Active dropdown always showing. [\#814](https://github.com/olefredrik/fiftytwo/issues/814)
- SCSS Compiling Issue / Components Not Importing [\#799](https://github.com/olefredrik/fiftytwo/issues/799)
- Should Aside be used for the sidebar? [\#798](https://github.com/olefredrik/fiftytwo/issues/798)
- npm run production watches files [\#745](https://github.com/olefredrik/fiftytwo/issues/745)
- Nav Questions [\#639](https://github.com/olefredrik/fiftytwo/issues/639)

**Merged pull requests:**

- Foundation update [\#1022](https://github.com/olefredrik/fiftytwo/pull/1022) ([olefredrik](https://github.com/olefredrik))

## [v2.9.3](https://github.com/olefredrik/fiftytwo/tree/v2.9.3) (2017-07-28)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.9.2...v2.9.3)

**Fixed bugs:**

- entering a comment redirects to wp-comments-posts.php  [\#505](https://github.com/olefredrik/fiftytwo/issues/505)

**Closed issues:**

- npm ERR! A complete log of this run can be found in: [\#1016](https://github.com/olefredrik/fiftytwo/issues/1016)
- Page builder to use with fiftytwo [\#1015](https://github.com/olefredrik/fiftytwo/issues/1015)
- ron script run packager [\#1013](https://github.com/olefredrik/fiftytwo/issues/1013)
- After Node update, Issue running npm run production [\#1011](https://github.com/olefredrik/fiftytwo/issues/1011)
- Sticky Mobile Nav \(Off Canvis\) + Force the page to scroll to top on open. Set to False but not working. [\#1009](https://github.com/olefredrik/fiftytwo/issues/1009)
- Float used in spite of flex grid [\#1005](https://github.com/olefredrik/fiftytwo/issues/1005)
- Issue with Equalizer with images [\#1004](https://github.com/olefredrik/fiftytwo/issues/1004)
- fail NPM install because Node-sass repo doesn't exist [\#1002](https://github.com/olefredrik/fiftytwo/issues/1002)
- localhost:3000 shows 2017 theme [\#1001](https://github.com/olefredrik/fiftytwo/issues/1001)
- Ajaxifying a javascript module  [\#999](https://github.com/olefredrik/fiftytwo/issues/999)
- Modify a module in components, not rebuilding foundation.js [\#998](https://github.com/olefredrik/fiftytwo/issues/998)
- fiftytwo doesn't seem to be working with ajaxify \(AWS plugin\) [\#994](https://github.com/olefredrik/fiftytwo/issues/994)
- Video embed not working - CANCELLED [\#993](https://github.com/olefredrik/fiftytwo/issues/993)
- Sticky top bar with content above [\#992](https://github.com/olefredrik/fiftytwo/issues/992)
- npm install fails [\#990](https://github.com/olefredrik/fiftytwo/issues/990)
- Travis CI fail wordpress-coding-standards [\#985](https://github.com/olefredrik/fiftytwo/issues/985)
- anyone is using scrollmagic with fiftytwo [\#983](https://github.com/olefredrik/fiftytwo/issues/983)
- Off canvas menu \(left and right\) disappearing every other hamburger menu click [\#977](https://github.com/olefredrik/fiftytwo/issues/977)
- foundation.css Loading in Visual Editor [\#976](https://github.com/olefredrik/fiftytwo/issues/976)
- Building Foundation-Sites via Maven does not work [\#974](https://github.com/olefredrik/fiftytwo/issues/974)
- \_settings.scss and \_foundation.scss importing non-existent files [\#966](https://github.com/olefredrik/fiftytwo/issues/966)
- Installation error: node-sass [\#964](https://github.com/olefredrik/fiftytwo/issues/964)
- Update Travis CI Build Checks [\#959](https://github.com/olefredrik/fiftytwo/issues/959)
- How many of you are using Flexbox flex grid? [\#943](https://github.com/olefredrik/fiftytwo/issues/943)
- Sass Error [\#942](https://github.com/olefredrik/fiftytwo/issues/942)
- Typo for exclude in config [\#940](https://github.com/olefredrik/fiftytwo/issues/940)
- Adding a transition to dropdown responsive menu [\#939](https://github.com/olefredrik/fiftytwo/issues/939)
- Changing responsive menu toggle breakpoint [\#932](https://github.com/olefredrik/fiftytwo/issues/932)
- npm run watch [\#921](https://github.com/olefredrik/fiftytwo/issues/921)
- Buddypress [\#856](https://github.com/olefredrik/fiftytwo/issues/856)
- $foundation-palette: Not compiling [\#816](https://github.com/olefredrik/fiftytwo/issues/816)
- Npm run / build 'clean' javascript error - Gulp/Node/Windows 7 Dependencies [\#792](https://github.com/olefredrik/fiftytwo/issues/792)
- Navigation dropdown always open [\#783](https://github.com/olefredrik/fiftytwo/issues/783)
- Theme check errors [\#641](https://github.com/olefredrik/fiftytwo/issues/641)
- Custom Header Image [\#467](https://github.com/olefredrik/fiftytwo/issues/467)

**Merged pull requests:**

- Update gulp-sourcemaps to latest version [\#1018](https://github.com/olefredrik/fiftytwo/pull/1018) ([olefredrik](https://github.com/olefredrik))
- Remove travis ci [\#1017](https://github.com/olefredrik/fiftytwo/pull/1017) ([olefredrik](https://github.com/olefredrik))
- Update packages [\#1014](https://github.com/olefredrik/fiftytwo/pull/1014) ([olefredrik](https://github.com/olefredrik))
- Add template and settings for demosite [\#1007](https://github.com/olefredrik/fiftytwo/pull/1007) ([olefredrik](https://github.com/olefredrik))
- Add taxonomies support to breadcrumbs [\#1006](https://github.com/olefredrik/fiftytwo/pull/1006) ([skoldin](https://github.com/skoldin))
- CPT Archive Support for fiftytwo Breadcrumb [\#1003](https://github.com/olefredrik/fiftytwo/pull/1003) ([derweili](https://github.com/derweili))
- Make nav menu names translatable [\#1000](https://github.com/olefredrik/fiftytwo/pull/1000) ([Aetles](https://github.com/Aetles))
- Fixed Edit link [\#997](https://github.com/olefredrik/fiftytwo/pull/997) ([dantahoua](https://github.com/dantahoua))
- Remove search query from current breadcrumb class [\#995](https://github.com/olefredrik/fiftytwo/pull/995) ([conorbarclay](https://github.com/conorbarclay))
- Kitchen Sink Updated [\#988](https://github.com/olefredrik/fiftytwo/pull/988) ([marcusconnor](https://github.com/marcusconnor))
- Optimize CSS & Sync with Vanilla Foundation [\#987](https://github.com/olefredrik/fiftytwo/pull/987) ([EricRihlmann](https://github.com/EricRihlmann))
- Fix Category page breadcrumb [\#984](https://github.com/olefredrik/fiftytwo/pull/984) ([RobertoCorreale](https://github.com/RobertoCorreale))
- Fix Off-Canvas Menu Bug [\#980](https://github.com/olefredrik/fiftytwo/pull/980) ([EricRihlmann](https://github.com/EricRihlmann))
- Update Pagination Centered [\#979](https://github.com/olefredrik/fiftytwo/pull/979) ([codenamesrk](https://github.com/codenamesrk))
- Removed broken links [\#978](https://github.com/olefredrik/fiftytwo/pull/978) ([millerdrew](https://github.com/millerdrew))
- fix hard-coded height of menu items [\#971](https://github.com/olefredrik/fiftytwo/pull/971) ([jfilter](https://github.com/jfilter))
- Update font-awesome to v4.7.0 [\#967](https://github.com/olefredrik/fiftytwo/pull/967) ([olefredrik](https://github.com/olefredrik))
- Changed search template to match default page mark up [\#963](https://github.com/olefredrik/fiftytwo/pull/963) ([GarySwift](https://github.com/GarySwift))
- Update version number to 2.9.2 [\#962](https://github.com/olefredrik/fiftytwo/pull/962) ([jcallery](https://github.com/jcallery))

## [v2.9.2](https://github.com/olefredrik/fiftytwo/tree/v2.9.2) (2017-03-17)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.9.1...v2.9.2)

**Closed issues:**

- cd [\#950](https://github.com/olefredrik/fiftytwo/issues/950)
- cd [\#949](https://github.com/olefredrik/fiftytwo/issues/949)
- Top Level Links - Mobile [\#947](https://github.com/olefredrik/fiftytwo/issues/947)

**Merged pull requests:**

- Add PHP 5.6 and Nightly to Travis CI  [\#961](https://github.com/olefredrik/fiftytwo/pull/961) ([EricRihlmann](https://github.com/EricRihlmann))

## [v2.9.1](https://github.com/olefredrik/fiftytwo/tree/v2.9.1) (2017-03-16)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.9.0...v2.9.1)

**Closed issues:**

- Use Mobile menu layout for Tablet and Mobile [\#953](https://github.com/olefredrik/fiftytwo/issues/953)
- Uncaught TypeError: $ is not a function [\#952](https://github.com/olefredrik/fiftytwo/issues/952)
- Mobile \(hamburger\) navigation not responding. [\#951](https://github.com/olefredrik/fiftytwo/issues/951)
- dropdown menu not working [\#948](https://github.com/olefredrik/fiftytwo/issues/948)
- gulp build error [\#941](https://github.com/olefredrik/fiftytwo/issues/941)
- Responsive images \(srcset\) and WordPress 4.7 [\#929](https://github.com/olefredrik/fiftytwo/issues/929)
- Errors while running the production task [\#925](https://github.com/olefredrik/fiftytwo/issues/925)
- Foundation.js  [\#923](https://github.com/olefredrik/fiftytwo/issues/923)
- Copy task: Motion UI and What Input [\#922](https://github.com/olefredrik/fiftytwo/issues/922)
- Maybe add node version somewhere at first install? [\#819](https://github.com/olefredrik/fiftytwo/issues/819)

**Merged pull requests:**

- Update PHP versions to use in Travis CI Build Checks [\#960](https://github.com/olefredrik/fiftytwo/pull/960) ([olefredrik](https://github.com/olefredrik))
- Minor Video Embed Optimization [\#958](https://github.com/olefredrik/fiftytwo/pull/958) ([EricRihlmann](https://github.com/EricRihlmann))
- Clean Up JS and Expand Responsive Video Functionality [\#957](https://github.com/olefredrik/fiftytwo/pull/957) ([EricRihlmann](https://github.com/EricRihlmann))
- Fix Travis CI Build Errors [\#956](https://github.com/olefredrik/fiftytwo/pull/956) ([EricRihlmann](https://github.com/EricRihlmann))
- Fix Mobile Menu Button AKA Hamburger [\#955](https://github.com/olefredrik/fiftytwo/pull/955) ([EricRihlmann](https://github.com/EricRihlmann))
- Solve/Avoid JS Conflict by Replacing '$' with 'jQuery' [\#954](https://github.com/olefredrik/fiftytwo/pull/954) ([EricRihlmann](https://github.com/EricRihlmann))
- update bower version [\#946](https://github.com/olefredrik/fiftytwo/pull/946) ([gpspake](https://github.com/gpspake))
- Responsive accordion tabs [\#934](https://github.com/olefredrik/fiftytwo/pull/934) ([olefredrik](https://github.com/olefredrik))
- Remove to-be deprecated classes from flex-video example [\#928](https://github.com/olefredrik/fiftytwo/pull/928) ([conorbarclay](https://github.com/conorbarclay))
- Clean up Gulp Copy task. [\#927](https://github.com/olefredrik/fiftytwo/pull/927) ([populationtwo](https://github.com/populationtwo))

## [v2.9.0](https://github.com/olefredrik/fiftytwo/tree/v2.9.0) (2016-12-15)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.8.0...v2.9.0)

**Closed issues:**

- how to @import absolute path write？ [\#924](https://github.com/olefredrik/fiftytwo/issues/924)
- Version number on files not updated to 2.8.0 [\#918](https://github.com/olefredrik/fiftytwo/issues/918)
- Is fiftytwo Updated? [\#916](https://github.com/olefredrik/fiftytwo/issues/916)
- jQuery error from 'source' folder [\#910](https://github.com/olefredrik/fiftytwo/issues/910)
- Sudden error when running "npm run watch" [\#890](https://github.com/olefredrik/fiftytwo/issues/890)
- node.js  [\#882](https://github.com/olefredrik/fiftytwo/issues/882)
- Error: Cannot find module 'sparkles' [\#867](https://github.com/olefredrik/fiftytwo/issues/867)
- Error during npm run build [\#866](https://github.com/olefredrik/fiftytwo/issues/866)
- data-equalize-on not working [\#813](https://github.com/olefredrik/fiftytwo/issues/813)
- using xlarge and xxlarge causes warnings [\#801](https://github.com/olefredrik/fiftytwo/issues/801)
- Modify topbar to accordion menu [\#715](https://github.com/olefredrik/fiftytwo/issues/715)

**Merged pull requests:**

- Foundation v6.3.0 [\#926](https://github.com/olefredrik/fiftytwo/pull/926) ([olefredrik](https://github.com/olefredrik))
- Added XLarge [\#917](https://github.com/olefredrik/fiftytwo/pull/917) ([alexbohariuc](https://github.com/alexbohariuc))
- Order placeholders [\#913](https://github.com/olefredrik/fiftytwo/pull/913) ([olefredrik](https://github.com/olefredrik))
- Update navigation.php [\#911](https://github.com/olefredrik/fiftytwo/pull/911) ([mrsWeasel](https://github.com/mrsWeasel))

## [v2.8.0](https://github.com/olefredrik/fiftytwo/tree/v2.8.0) (2016-10-21)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.7.1...v2.8.0)

**Closed issues:**

- Theme has many PHPCS warnings [\#907](https://github.com/olefredrik/fiftytwo/issues/907)
- Getting error in npm start [\#906](https://github.com/olefredrik/fiftytwo/issues/906)
- Is interchange broken? [\#902](https://github.com/olefredrik/fiftytwo/issues/902)
- npm run watch fails [\#899](https://github.com/olefredrik/fiftytwo/issues/899)
- "Unexpected character '`'" running npm run production or package [\#898](https://github.com/olefredrik/fiftytwo/issues/898)
- git clone error [\#892](https://github.com/olefredrik/fiftytwo/issues/892)
- Cannot find open [\#889](https://github.com/olefredrik/fiftytwo/issues/889)
- Drop Down Menu Vertical Class can't be removed [\#888](https://github.com/olefredrik/fiftytwo/issues/888)
- Installing fiftytwo Issues [\#878](https://github.com/olefredrik/fiftytwo/issues/878)
- Scss import failing [\#804](https://github.com/olefredrik/fiftytwo/issues/804)
- How to apply styles for different screen sizes [\#791](https://github.com/olefredrik/fiftytwo/issues/791)

**Merged pull requests:**

- Featured image optimization [\#909](https://github.com/olefredrik/fiftytwo/pull/909) ([EricRihlmann](https://github.com/EricRihlmann))
- Reformat code to fit WP PHPCS standards [\#908](https://github.com/olefredrik/fiftytwo/pull/908) ([Leland](https://github.com/Leland))
- Added Interchange on featured Images [\#905](https://github.com/olefredrik/fiftytwo/pull/905) ([alexbohariuc](https://github.com/alexbohariuc))
- Fix 'Posted on ...' for all languages [\#901](https://github.com/olefredrik/fiftytwo/pull/901) ([Martin4ndersen](https://github.com/Martin4ndersen))
- Add Danish language and fix translation issue with "Posted on ..." [\#900](https://github.com/olefredrik/fiftytwo/pull/900) ([Martin4ndersen](https://github.com/Martin4ndersen))
- Typo in dropdown font size setting [\#897](https://github.com/olefredrik/fiftytwo/pull/897) ([conorbarclay](https://github.com/conorbarclay))
- Fix Travis CI Build Errors [\#896](https://github.com/olefredrik/fiftytwo/pull/896) ([EricRihlmann](https://github.com/EricRihlmann))
- Normalize SCSS [\#894](https://github.com/olefredrik/fiftytwo/pull/894) ([EricRihlmann](https://github.com/EricRihlmann))
-  Turkish language files added [\#891](https://github.com/olefredrik/fiftytwo/pull/891) ([nurdankiratlioglu](https://github.com/nurdankiratlioglu))
- Updated README.md with info on packaging the theme to a zip file [\#864](https://github.com/olefredrik/fiftytwo/pull/864) ([colin-marshall](https://github.com/colin-marshall))

## [v2.7.1](https://github.com/olefredrik/fiftytwo/tree/v2.7.1) (2016-09-07)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.7.0...v2.7.1)

**Closed issues:**

- Disable body top padding when using fixed on top bar? [\#885](https://github.com/olefredrik/fiftytwo/issues/885)
- FP FontAwesome not working/not active? [\#884](https://github.com/olefredrik/fiftytwo/issues/884)
- Infinite Scroll [\#880](https://github.com/olefredrik/fiftytwo/issues/880)
- JS error in Safari [\#874](https://github.com/olefredrik/fiftytwo/issues/874)

**Merged pull requests:**

- Use System UI fonts [\#886](https://github.com/olefredrik/fiftytwo/pull/886) ([olefredrik](https://github.com/olefredrik))
- Update cs\_CZ.po [\#883](https://github.com/olefredrik/fiftytwo/pull/883) ([vladodriver](https://github.com/vladodriver))

## [v2.7.0](https://github.com/olefredrik/fiftytwo/tree/v2.7.0) (2016-09-04)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.6.2...v2.7.0)

**Fixed bugs:**

- Blog pagination issue w/ woocommerce - links shift from /blog to /store pages [\#836](https://github.com/olefredrik/fiftytwo/issues/836)

**Closed issues:**

- Building a source project using the packaged archive. [\#881](https://github.com/olefredrik/fiftytwo/issues/881)
- Install issue [\#877](https://github.com/olefredrik/fiftytwo/issues/877)
- Responsive images with fiftytwo and Interchange? [\#876](https://github.com/olefredrik/fiftytwo/issues/876)
- Caret-down or down arrow not showing when navigation has submenus [\#873](https://github.com/olefredrik/fiftytwo/issues/873)
- Error: Cannot find module './\_assignValue' [\#870](https://github.com/olefredrik/fiftytwo/issues/870)
- SSL with fiftytwo [\#868](https://github.com/olefredrik/fiftytwo/issues/868)
- README.md FoundationPSD link dead [\#865](https://github.com/olefredrik/fiftytwo/issues/865)
- Layout glitch [\#863](https://github.com/olefredrik/fiftytwo/issues/863)
- npm install issues [\#861](https://github.com/olefredrik/fiftytwo/issues/861)
- Browser Sync expects different task handle in Gulpfile [\#860](https://github.com/olefredrik/fiftytwo/issues/860)
- ACF / Repeater Image Gallery / Light Box conflict [\#853](https://github.com/olefredrik/fiftytwo/issues/853)
- Current steps to create offcanvas menu on the right? Removed from Customizer? [\#852](https://github.com/olefredrik/fiftytwo/issues/852)
- How can I get the mobile menu to be on tablet devices as well? [\#847](https://github.com/olefredrik/fiftytwo/issues/847)
- Only a portion of styles from \_front.scss are compiling. [\#846](https://github.com/olefredrik/fiftytwo/issues/846)
- Invalid CSS after "}": expected "}", was "" [\#845](https://github.com/olefredrik/fiftytwo/issues/845)
- Having The Mobile Menu Top Bar Active On iPads [\#844](https://github.com/olefredrik/fiftytwo/issues/844)
- npm install and npm run watch errors [\#843](https://github.com/olefredrik/fiftytwo/issues/843)
- npm run watch issue [\#841](https://github.com/olefredrik/fiftytwo/issues/841)
- fullPage.js npm error [\#838](https://github.com/olefredrik/fiftytwo/issues/838)
- .. [\#837](https://github.com/olefredrik/fiftytwo/issues/837)
- Colin's centered menu with logo \(zurb building block\) [\#834](https://github.com/olefredrik/fiftytwo/issues/834)
- Suggestion: Move template-parts inside page-templates [\#833](https://github.com/olefredrik/fiftytwo/issues/833)
- Autoprefixer missing -webkit prefixes [\#826](https://github.com/olefredrik/fiftytwo/issues/826)
- What is the workflow for moving a local dev site to a new computer? [\#817](https://github.com/olefredrik/fiftytwo/issues/817)
- Toggle search box not working on desktop view [\#802](https://github.com/olefredrik/fiftytwo/issues/802)
- NPM Error When Using "npm install" [\#790](https://github.com/olefredrik/fiftytwo/issues/790)
- Paragraph Font Size in \_settings.scss [\#786](https://github.com/olefredrik/fiftytwo/issues/786)
- Search by author of post? [\#785](https://github.com/olefredrik/fiftytwo/issues/785)
- \_settings.scss and custom CSS [\#781](https://github.com/olefredrik/fiftytwo/issues/781)
- NPM errors after migrating project to a new Mac [\#773](https://github.com/olefredrik/fiftytwo/issues/773)
- WordPress Site Icon [\#766](https://github.com/olefredrik/fiftytwo/issues/766)
- localhost:3000 issue [\#749](https://github.com/olefredrik/fiftytwo/issues/749)
- Sticky Footer [\#674](https://github.com/olefredrik/fiftytwo/issues/674)
- Bower install js compile errors [\#673](https://github.com/olefredrik/fiftytwo/issues/673)
- Errors on installation [\#665](https://github.com/olefredrik/fiftytwo/issues/665)

**Merged pull requests:**

- Fix broken link [\#879](https://github.com/olefredrik/fiftytwo/pull/879) ([olefredrik](https://github.com/olefredrik))
- Add missing comment on variable [\#869](https://github.com/olefredrik/fiftytwo/pull/869) ([olefredrik](https://github.com/olefredrik))
- Remove executable permissions for files [\#858](https://github.com/olefredrik/fiftytwo/pull/858) ([pmodin](https://github.com/pmodin))
- Add an .editorconfig file [\#857](https://github.com/olefredrik/fiftytwo/pull/857) ([Benjaminsson](https://github.com/Benjaminsson))
- Fix WP coding standards violations [\#855](https://github.com/olefredrik/fiftytwo/pull/855) ([olefredrik](https://github.com/olefredrik))
- Hebrew translations [\#850](https://github.com/olefredrik/fiftytwo/pull/850) ([elicohenator](https://github.com/elicohenator))
- Bugfix for figure tag [\#842](https://github.com/olefredrik/fiftytwo/pull/842) ([derweili](https://github.com/derweili))
- Introducing the\_post\_navigation and edit\_post\_link [\#839](https://github.com/olefredrik/fiftytwo/pull/839) ([Eccola](https://github.com/Eccola))
- Update theme-support.php [\#835](https://github.com/olefredrik/fiftytwo/pull/835) ([Gilmoursa](https://github.com/Gilmoursa))
- Switch to gulp-clean-css from deprecated gulp-minify-css [\#824](https://github.com/olefredrik/fiftytwo/pull/824) ([jmbarlow](https://github.com/jmbarlow))

## [v2.6.2](https://github.com/olefredrik/fiftytwo/tree/v2.6.2) (2016-06-09)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.6.1...v2.6.2)

**Closed issues:**

- Advice on Excessively Large File Size? [\#831](https://github.com/olefredrik/fiftytwo/issues/831)
- no styles [\#830](https://github.com/olefredrik/fiftytwo/issues/830)
- OffCanvas menu -webkit- prefixes in Safari [\#829](https://github.com/olefredrik/fiftytwo/issues/829)
- npm install error  [\#827](https://github.com/olefredrik/fiftytwo/issues/827)
- Responsive Menu not toggling [\#825](https://github.com/olefredrik/fiftytwo/issues/825)
- Mobile Menu Accordion Menu - Expand "active" submenu parent automatically [\#822](https://github.com/olefredrik/fiftytwo/issues/822)
- Google Fonts are being added automatically [\#818](https://github.com/olefredrik/fiftytwo/issues/818)
- NPM run production not working with node.js 6.1.0 \(Solved\) [\#815](https://github.com/olefredrik/fiftytwo/issues/815)
- Extra Question For Issues  [\#811](https://github.com/olefredrik/fiftytwo/issues/811)
- \<?php fiftytwo\_top\_bar\_r\(\); ?\> not showing any pages [\#810](https://github.com/olefredrik/fiftytwo/issues/810)
- npm install error [\#809](https://github.com/olefredrik/fiftytwo/issues/809)
- php CodeSniffer not working - Windows 10 [\#808](https://github.com/olefredrik/fiftytwo/issues/808)
- path.js throw error, Path must be a string. Received ' + inspect\(path\); [\#807](https://github.com/olefredrik/fiftytwo/issues/807)
- Logged in to my WP install via Browser Sync [\#806](https://github.com/olefredrik/fiftytwo/issues/806)
- fiftytwo installation via npm failed [\#805](https://github.com/olefredrik/fiftytwo/issues/805)
- Working with an "old" fiftytwo [\#800](https://github.com/olefredrik/fiftytwo/issues/800)
- Every little project requires 70,000 files? [\#797](https://github.com/olefredrik/fiftytwo/issues/797)
- Error trying to compile foundation.scss [\#796](https://github.com/olefredrik/fiftytwo/issues/796)
- can't upload on external save via SFTP [\#794](https://github.com/olefredrik/fiftytwo/issues/794)
- top-bar fixed [\#787](https://github.com/olefredrik/fiftytwo/issues/787)
- Strange character \( ` \) appearing in site text - this theme only [\#782](https://github.com/olefredrik/fiftytwo/issues/782)
- Missing modules when running npm run build or npm install [\#780](https://github.com/olefredrik/fiftytwo/issues/780)
- BwoserSync not working on older project after installing new project [\#779](https://github.com/olefredrik/fiftytwo/issues/779)
- about template page-sidebar-right [\#778](https://github.com/olefredrik/fiftytwo/issues/778)
- Component loading issue when building SCSS. [\#776](https://github.com/olefredrik/fiftytwo/issues/776)
- Significance of this return after running "watch"? [\#775](https://github.com/olefredrik/fiftytwo/issues/775)
- More info on Motion UI [\#772](https://github.com/olefredrik/fiftytwo/issues/772)
- Install fiftytwo twice in one themes directory? [\#769](https://github.com/olefredrik/fiftytwo/issues/769)
- Sass Mixins with fiftytwo [\#765](https://github.com/olefredrik/fiftytwo/issues/765)
- errors in sitemap.xml due to functions.php [\#753](https://github.com/olefredrik/fiftytwo/issues/753)
- Adding a second menu to mobile nav? [\#728](https://github.com/olefredrik/fiftytwo/issues/728)
- Fonts issues. [\#703](https://github.com/olefredrik/fiftytwo/issues/703)
- Noob question regarding fonts and how to set them up [\#702](https://github.com/olefredrik/fiftytwo/issues/702)
- Push changes to server with Git, but with whole assets? [\#700](https://github.com/olefredrik/fiftytwo/issues/700)
- Reveal does not display properly on a page with right sidebar layout [\#696](https://github.com/olefredrik/fiftytwo/issues/696)
- Off canvas menu won't open/reveal left [\#682](https://github.com/olefredrik/fiftytwo/issues/682)
- SCSS Not Compiling Because  [\#676](https://github.com/olefredrik/fiftytwo/issues/676)
- PostInstall issues  [\#672](https://github.com/olefredrik/fiftytwo/issues/672)
- How to make a sticky nav? [\#653](https://github.com/olefredrik/fiftytwo/issues/653)

**Merged pull requests:**

- Autoprefixer compability [\#832](https://github.com/olefredrik/fiftytwo/pull/832) ([olefredrik](https://github.com/olefredrik))
- Add foundation.css as editor styles [\#828](https://github.com/olefredrik/fiftytwo/pull/828) ([derweili](https://github.com/derweili))
- Update cs\_CZ.po [\#823](https://github.com/olefredrik/fiftytwo/pull/823) ([vladodriver](https://github.com/vladodriver))
- Updated Issue Template with New Questions [\#821](https://github.com/olefredrik/fiftytwo/pull/821) ([LukePettway](https://github.com/LukePettway))
- Add missing argument to fix travis CI build [\#795](https://github.com/olefredrik/fiftytwo/pull/795) ([minihays](https://github.com/minihays))
- Fix typo in gulpfile [\#793](https://github.com/olefredrik/fiftytwo/pull/793) ([perryst5](https://github.com/perryst5))
- Update german translation [\#789](https://github.com/olefredrik/fiftytwo/pull/789) ([jgierer12](https://github.com/jgierer12))
- fix missing \</div\> tag [\#788](https://github.com/olefredrik/fiftytwo/pull/788) ([jgierer12](https://github.com/jgierer12))
- remove favicon [\#784](https://github.com/olefredrik/fiftytwo/pull/784) ([15emedoctor](https://github.com/15emedoctor))
- Create cs\_CZ.po [\#777](https://github.com/olefredrik/fiftytwo/pull/777) ([vladodriver](https://github.com/vladodriver))
- Take 2: Optimize responsive images for 3/4 and full width templates [\#771](https://github.com/olefredrik/fiftytwo/pull/771) ([EricRihlmann](https://github.com/EricRihlmann))
- No download historical file by Travis [\#770](https://github.com/olefredrik/fiftytwo/pull/770) ([mik-laj](https://github.com/mik-laj))
- Portuguese update \(pt\_PT\) [\#768](https://github.com/olefredrik/fiftytwo/pull/768) ([pedro-mendonca](https://github.com/pedro-mendonca))

## [v2.6.1](https://github.com/olefredrik/fiftytwo/tree/v2.6.1) (2016-03-10)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.6.0...v2.6.1)

**Fixed bugs:**

- Responsive images WP 4.4 [\#607](https://github.com/olefredrik/fiftytwo/issues/607)
- Stripping Image Classes [\#532](https://github.com/olefredrik/fiftytwo/issues/532)

**Closed issues:**

- Essential Grid Plugin on Mobile [\#578](https://github.com/olefredrik/fiftytwo/issues/578)
- Mobile Menu doesn't load [\#485](https://github.com/olefredrik/fiftytwo/issues/485)

**Merged pull requests:**

- Remove local server url from gulpfile [\#764](https://github.com/olefredrik/fiftytwo/pull/764) ([olefredrik](https://github.com/olefredrik))

## [v2.6.0](https://github.com/olefredrik/fiftytwo/tree/v2.6.0) (2016-03-10)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.5.1...v2.6.0)

**Closed issues:**

- bower components \_global overriding scss/global/\_setting [\#762](https://github.com/olefredrik/fiftytwo/issues/762)
- Fresh install changes to \_settings.scss not cascading consistently [\#760](https://github.com/olefredrik/fiftytwo/issues/760)
- foundation.css file throw an 404 error on childthemes [\#758](https://github.com/olefredrik/fiftytwo/issues/758)
- Homepage replicate across all pages [\#755](https://github.com/olefredrik/fiftytwo/issues/755)
- Error messages always displayed when using Abide validation [\#719](https://github.com/olefredrik/fiftytwo/issues/719)

**Merged pull requests:**

- Bug fix settings file [\#763](https://github.com/olefredrik/fiftytwo/pull/763) ([EricRihlmann](https://github.com/EricRihlmann))
- Add the new foundation color palette mixin [\#761](https://github.com/olefredrik/fiftytwo/pull/761) ([olefredrik](https://github.com/olefredrik))
- Responsive images [\#657](https://github.com/olefredrik/fiftytwo/pull/657) ([olefredrik](https://github.com/olefredrik))

## [v2.5.1](https://github.com/olefredrik/fiftytwo/tree/v2.5.1) (2016-03-08)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.5.0...v2.5.1)

**Fixed bugs:**

- Dropdown Menu Arrows [\#752](https://github.com/olefredrik/fiftytwo/issues/752)

**Closed issues:**

- fiftytwo Grid [\#751](https://github.com/olefredrik/fiftytwo/issues/751)
- Git Ignores Files Inside fiftytwo Theme Folder. [\#750](https://github.com/olefredrik/fiftytwo/issues/750)
- gulp file errors, FP 2.5, npm run watch, Windows 7 x64 [\#748](https://github.com/olefredrik/fiftytwo/issues/748)
- Npm installation stop working... [\#744](https://github.com/olefredrik/fiftytwo/issues/744)
- Flexbox grid? [\#741](https://github.com/olefredrik/fiftytwo/issues/741)
- Incorrect GCC [\#739](https://github.com/olefredrik/fiftytwo/issues/739)
- Can't add or style elements of main content [\#736](https://github.com/olefredrik/fiftytwo/issues/736)
- adding the UNCSS task in my gulpfile.js [\#727](https://github.com/olefredrik/fiftytwo/issues/727)
- Offcanvas menu not working [\#720](https://github.com/olefredrik/fiftytwo/issues/720)
- jquery.js conflict with popular wordpress plugins [\#645](https://github.com/olefredrik/fiftytwo/issues/645)

**Merged pull requests:**

- Feature/child theme support [\#759](https://github.com/olefredrik/fiftytwo/pull/759) ([olefredrik](https://github.com/olefredrik))
- fix sidebar search to use input-group [\#757](https://github.com/olefredrik/fiftytwo/pull/757) ([ryanfrawley](https://github.com/ryanfrawley))
- Fix dropdown menu arrows [\#754](https://github.com/olefredrik/fiftytwo/pull/754) ([olefredrik](https://github.com/olefredrik))
- Change off-canvas menu height to affect all menus [\#747](https://github.com/olefredrik/fiftytwo/pull/747) ([bej-soan](https://github.com/bej-soan))
- Separate javascript files with semi-colon when concatenating [\#746](https://github.com/olefredrik/fiftytwo/pull/746) ([jontro](https://github.com/jontro))
- Remove duplicate line from foundation.scss [\#743](https://github.com/olefredrik/fiftytwo/pull/743) ([fourhexagons](https://github.com/fourhexagons))

## [v2.5.0](https://github.com/olefredrik/fiftytwo/tree/v2.5.0) (2016-03-02)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.4.0...v2.5.0)

**Closed issues:**

- Block Grid Not Working [\#738](https://github.com/olefredrik/fiftytwo/issues/738)
- Clean Install Problem [\#737](https://github.com/olefredrik/fiftytwo/issues/737)
- npm WARN package.json fiftytwo@5.5.1 No license field. [\#734](https://github.com/olefredrik/fiftytwo/issues/734)
- WP Search, show excerpts in search [\#732](https://github.com/olefredrik/fiftytwo/issues/732)
- anyone know what causes error:file to import not found or unreadable  [\#731](https://github.com/olefredrik/fiftytwo/issues/731)
- Adding logo in center of Nav Bar [\#730](https://github.com/olefredrik/fiftytwo/issues/730)
- Using foundation columns in Wordpress visual editor? [\#725](https://github.com/olefredrik/fiftytwo/issues/725)
-  libsass binding was not found - error [\#724](https://github.com/olefredrik/fiftytwo/issues/724)
- SASS/node error working with "old" FP 1.x projects alongside FP 2.x [\#722](https://github.com/olefredrik/fiftytwo/issues/722)
- how to style wordpress footer widgets [\#706](https://github.com/olefredrik/fiftytwo/issues/706)
- Top bar menu wonky with FP2.x [\#704](https://github.com/olefredrik/fiftytwo/issues/704)

**Merged pull requests:**

- Tethys Update \(Foundation 6.2\) [\#742](https://github.com/olefredrik/fiftytwo/pull/742) ([olefredrik](https://github.com/olefredrik))
- Sticky posts bugfix [\#733](https://github.com/olefredrik/fiftytwo/pull/733) ([colin-marshall](https://github.com/colin-marshall))

## [v2.4.0](https://github.com/olefredrik/fiftytwo/tree/v2.4.0) (2016-02-11)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.3.0...v2.4.0)

**Fixed bugs:**

- Duplicate jQuery  [\#669](https://github.com/olefredrik/fiftytwo/issues/669)
- Menu not appearing for off-canvas on non mobile sizes [\#650](https://github.com/olefredrik/fiftytwo/issues/650)
- Second-level submenus don't fly out [\#634](https://github.com/olefredrik/fiftytwo/issues/634)

**Closed issues:**

- Blog Title position in Top Bar [\#721](https://github.com/olefredrik/fiftytwo/issues/721)
- New menu [\#716](https://github.com/olefredrik/fiftytwo/issues/716)
- Reveal Modal [\#712](https://github.com/olefredrik/fiftytwo/issues/712)
- This is not full version of fiftytwo, when I installed it then I don't see any style from foundation.css. Where is css and scss folder and other... [\#711](https://github.com/olefredrik/fiftytwo/issues/711)
- Off canvas mobile menu issue [\#709](https://github.com/olefredrik/fiftytwo/issues/709)
- Misc changes to consider [\#708](https://github.com/olefredrik/fiftytwo/issues/708)
- Top Bar CSS differs on newly installed fiftytwo.... [\#705](https://github.com/olefredrik/fiftytwo/issues/705)
- npm run package do not minify js [\#695](https://github.com/olefredrik/fiftytwo/issues/695)
- Where have all the Sass variables gone in Foundation 6? [\#693](https://github.com/olefredrik/fiftytwo/issues/693)
- Using fiftytwo in production on EC2 [\#692](https://github.com/olefredrik/fiftytwo/issues/692)
- fiftytwo install error [\#691](https://github.com/olefredrik/fiftytwo/issues/691)
- Run Watch/Build Issues [\#690](https://github.com/olefredrik/fiftytwo/issues/690)
- sorry for the dumb question, but how do you update [\#689](https://github.com/olefredrik/fiftytwo/issues/689)
- media breakpoints [\#688](https://github.com/olefredrik/fiftytwo/issues/688)
- Missing semicolon in SCSS produces a segmentation fault. [\#686](https://github.com/olefredrik/fiftytwo/issues/686)
- library/navigation.php [\#685](https://github.com/olefredrik/fiftytwo/issues/685)
- Can't find topbar breakpoint in settings.scss [\#684](https://github.com/olefredrik/fiftytwo/issues/684)
- Old project with grunt: not able to make some change [\#683](https://github.com/olefredrik/fiftytwo/issues/683)
- gulpfile javascript build [\#680](https://github.com/olefredrik/fiftytwo/issues/680)
- SASS COMPILING ERROR [\#679](https://github.com/olefredrik/fiftytwo/issues/679)
- Plans for using SASS? [\#678](https://github.com/olefredrik/fiftytwo/issues/678)
- Default Topbar [\#677](https://github.com/olefredrik/fiftytwo/issues/677)
- Mobile Menu not working correctly. [\#675](https://github.com/olefredrik/fiftytwo/issues/675)
- off-canvas positioning [\#671](https://github.com/olefredrik/fiftytwo/issues/671)
- SCSS Documentation [\#652](https://github.com/olefredrik/fiftytwo/issues/652)
- woocommerce template overrides not working [\#651](https://github.com/olefredrik/fiftytwo/issues/651)
- Mobile Menu Customizer [\#494](https://github.com/olefredrik/fiftytwo/issues/494)

**Merged pull requests:**

- Remove caret for first-level menu [\#723](https://github.com/olefredrik/fiftytwo/pull/723) ([olefredrik](https://github.com/olefredrik))
- Adagio improvements [\#717](https://github.com/olefredrik/fiftytwo/pull/717) ([colin-marshall](https://github.com/colin-marshall))
- Fix topbar issues [\#714](https://github.com/olefredrik/fiftytwo/pull/714) ([olefredrik](https://github.com/olefredrik))
- Add reveal to the kitchen-sink template [\#713](https://github.com/olefredrik/fiftytwo/pull/713) ([olefredrik](https://github.com/olefredrik))
- Wrong file name [\#707](https://github.com/olefredrik/fiftytwo/pull/707) ([sylvhama](https://github.com/sylvhama))
- Navigation [\#699](https://github.com/olefredrik/fiftytwo/pull/699) ([olefredrik](https://github.com/olefredrik))
- Move nav visibility classes from php to scss [\#698](https://github.com/olefredrik/fiftytwo/pull/698) ([olefredrik](https://github.com/olefredrik))
- npm run package now minifies css & js [\#697](https://github.com/olefredrik/fiftytwo/pull/697) ([colin-marshall](https://github.com/colin-marshall))
- Added gulp clean tasks [\#681](https://github.com/olefredrik/fiftytwo/pull/681) ([colin-marshall](https://github.com/colin-marshall))
- Remove this as we use CDN hosted jQuery [\#670](https://github.com/olefredrik/fiftytwo/pull/670) ([olefredrik](https://github.com/olefredrik))

## [v2.3.0](https://github.com/olefredrik/fiftytwo/tree/v2.3.0) (2015-12-31)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.2.0...v2.3.0)

**Fixed bugs:**

- Bug on Off-canvas markup \(parts/mobile-off-canvas.php\) [\#661](https://github.com/olefredrik/fiftytwo/issues/661)
- validator errors [\#614](https://github.com/olefredrik/fiftytwo/issues/614)
- Sticky top bar causing page to spazz out [\#577](https://github.com/olefredrik/fiftytwo/issues/577)
- img\_unautop is greedy [\#95](https://github.com/olefredrik/fiftytwo/issues/95)

**Closed issues:**

- JSHint needs to be installed with gulp-jshint [\#664](https://github.com/olefredrik/fiftytwo/issues/664)
- No CSS in Child Theme [\#663](https://github.com/olefredrik/fiftytwo/issues/663)
- Issues with dependencies [\#660](https://github.com/olefredrik/fiftytwo/issues/660)
- populate composer.json [\#659](https://github.com/olefredrik/fiftytwo/issues/659)
- Sass error at watch command [\#655](https://github.com/olefredrik/fiftytwo/issues/655)
- gulp error notification [\#654](https://github.com/olefredrik/fiftytwo/issues/654)
- Exit status 8 while running npm install [\#649](https://github.com/olefredrik/fiftytwo/issues/649)
- How to commit WordPress database to Github or Bitbucket? [\#648](https://github.com/olefredrik/fiftytwo/issues/648)
- How to change topbar height? [\#647](https://github.com/olefredrik/fiftytwo/issues/647)
- Small issue with offcanvas menu [\#646](https://github.com/olefredrik/fiftytwo/issues/646)
- New WPCS rule \(ValidVariableName.NotSnakeCase\) causing build error [\#643](https://github.com/olefredrik/fiftytwo/issues/643)
- Having trouble committing project to BitBucket! [\#638](https://github.com/olefredrik/fiftytwo/issues/638)
- Prepping theme for deployment [\#636](https://github.com/olefredrik/fiftytwo/issues/636)
- Drilldown menu not working? [\#635](https://github.com/olefredrik/fiftytwo/issues/635)
- Initialize Desktop Navigation Later [\#631](https://github.com/olefredrik/fiftytwo/issues/631)
- Mobile Menu, all but first child [\#627](https://github.com/olefredrik/fiftytwo/issues/627)
- Error: File to import not found or unreadable [\#624](https://github.com/olefredrik/fiftytwo/issues/624)
- Can't get stylesheets to build [\#622](https://github.com/olefredrik/fiftytwo/issues/622)
- Fully-functional and easy-to-use Sticky Sidebar available [\#571](https://github.com/olefredrik/fiftytwo/issues/571)
- archive.php check if sidebar exist [\#517](https://github.com/olefredrik/fiftytwo/issues/517)
- Adding FlexVideo automatically? Any idea? [\#500](https://github.com/olefredrik/fiftytwo/issues/500)

**Merged pull requests:**

- Update to v2.3.0 [\#668](https://github.com/olefredrik/fiftytwo/pull/668) ([olefredrik](https://github.com/olefredrik))
- FP is based on Foundation 6 [\#667](https://github.com/olefredrik/fiftytwo/pull/667) ([olefredrik](https://github.com/olefredrik))
- Gulpfile improvements [\#666](https://github.com/olefredrik/fiftytwo/pull/666) ([colin-marshall](https://github.com/colin-marshall))
- Fix off canvas bug [\#662](https://github.com/olefredrik/fiftytwo/pull/662) ([olefredrik](https://github.com/olefredrik))
- add jshint to package and lint task to gulpfile on watch and build [\#658](https://github.com/olefredrik/fiftytwo/pull/658) ([jimlongo56](https://github.com/jimlongo56))
- Foundation update [\#656](https://github.com/olefredrik/fiftytwo/pull/656) ([olefredrik](https://github.com/olefredrik))
- Buttons editor [\#642](https://github.com/olefredrik/fiftytwo/pull/642) ([colin-marshall](https://github.com/colin-marshall))
- Fix front template errors [\#633](https://github.com/olefredrik/fiftytwo/pull/633) ([olefredrik](https://github.com/olefredrik))
- Spelling changes [\#632](https://github.com/olefredrik/fiftytwo/pull/632) ([alexanderlperez](https://github.com/alexanderlperez))
- Added button for TinyMCE shortcodes with popup window [\#630](https://github.com/olefredrik/fiftytwo/pull/630) ([colin-marshall](https://github.com/colin-marshall))
- Added missing angle bracket [\#629](https://github.com/olefredrik/fiftytwo/pull/629) ([colin-marshall](https://github.com/colin-marshall))
- Added Wordpress Coding Standards Sniffs to Gulp [\#626](https://github.com/olefredrik/fiftytwo/pull/626) ([joshrathke](https://github.com/joshrathke))
- Shortcode implementation [\#625](https://github.com/olefredrik/fiftytwo/pull/625) ([joshrathke](https://github.com/joshrathke))
- Wrap youtube and vimeo vids in flex-video [\#620](https://github.com/olefredrik/fiftytwo/pull/620) ([olefredrik](https://github.com/olefredrik))
- Changed WP sticky post class to .wp-sticky [\#618](https://github.com/olefredrik/fiftytwo/pull/618) ([colin-marshall](https://github.com/colin-marshall))
- Fixed more instances of duplicate class attributes in templates [\#617](https://github.com/olefredrik/fiftytwo/pull/617) ([colin-marshall](https://github.com/colin-marshall))
- Remove duplicate class in single template [\#616](https://github.com/olefredrik/fiftytwo/pull/616) ([olefredrik](https://github.com/olefredrik))
- Closing divs in footer [\#615](https://github.com/olefredrik/fiftytwo/pull/615) ([olefredrik](https://github.com/olefredrik))

## [v2.2.0](https://github.com/olefredrik/fiftytwo/tree/v2.2.0) (2015-12-12)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.1.0...v2.2.0)

**Fixed bugs:**

- Font "reloading" after page load [\#604](https://github.com/olefredrik/fiftytwo/issues/604)
- Problems Mobile and Top Bar in FP6 [\#598](https://github.com/olefredrik/fiftytwo/issues/598)
- console error "typekit" [\#590](https://github.com/olefredrik/fiftytwo/issues/590)

**Closed issues:**

- Less settings than before? [\#602](https://github.com/olefredrik/fiftytwo/issues/602)
- npm WARN cannot run in wd / bower EACCES: permission denied, mkdir [\#596](https://github.com/olefredrik/fiftytwo/issues/596)
- npm ERR! Exit status 8 [\#595](https://github.com/olefredrik/fiftytwo/issues/595)
- npm ERR! argv "node" "/usr/bin/npm" "install" [\#594](https://github.com/olefredrik/fiftytwo/issues/594)
- gulp error [\#589](https://github.com/olefredrik/fiftytwo/issues/589)
- Title and favicon [\#576](https://github.com/olefredrik/fiftytwo/issues/576)
- Question on Gruntfile.js Line 200 [\#575](https://github.com/olefredrik/fiftytwo/issues/575)
- npm run watch taking a long time [\#573](https://github.com/olefredrik/fiftytwo/issues/573)
- BrowserSync not loading styles on mobile and ipad [\#572](https://github.com/olefredrik/fiftytwo/issues/572)
- Failed to load resource on subdirectory host www.example.com/subdir [\#570](https://github.com/olefredrik/fiftytwo/issues/570)

**Merged pull requests:**

- Add v2.2.0 [\#613](https://github.com/olefredrik/fiftytwo/pull/613) ([olefredrik](https://github.com/olefredrik))
- Update settings file [\#612](https://github.com/olefredrik/fiftytwo/pull/612) ([olefredrik](https://github.com/olefredrik))
- Don't render both topbar and offcanvas if no option is set in the cus… [\#611](https://github.com/olefredrik/fiftytwo/pull/611) ([olefredrik](https://github.com/olefredrik))
- Don't make any assumptions on fonts. Use Helvetica Neue as default [\#610](https://github.com/olefredrik/fiftytwo/pull/610) ([olefredrik](https://github.com/olefredrik))
- Update Foundation to v6.0.5 [\#609](https://github.com/olefredrik/fiftytwo/pull/609) ([olefredrik](https://github.com/olefredrik))
- Improved foundation.scss file [\#606](https://github.com/olefredrik/fiftytwo/pull/606) ([colin-marshall](https://github.com/colin-marshall))
- Duplicate $global-margin variable [\#603](https://github.com/olefredrik/fiftytwo/pull/603) ([jcallery](https://github.com/jcallery))
- Update featured-image.php [\#600](https://github.com/olefredrik/fiftytwo/pull/600) ([bej-soan](https://github.com/bej-soan))
- Fixed Undefined Variable Bug Found in \#594 [\#597](https://github.com/olefredrik/fiftytwo/pull/597) ([joshrathke](https://github.com/joshrathke))
- Gulp package task added [\#593](https://github.com/olefredrik/fiftytwo/pull/593) ([colin-marshall](https://github.com/colin-marshall))
- Remove wp versions filter to support cdn caching [\#592](https://github.com/olefredrik/fiftytwo/pull/592) ([KLVTZ](https://github.com/KLVTZ))
- Fixed JavaScript minify [\#591](https://github.com/olefredrik/fiftytwo/pull/591) ([colin-marshall](https://github.com/colin-marshall))
- Add a new site to the showcase [\#588](https://github.com/olefredrik/fiftytwo/pull/588) ([olefredrik](https://github.com/olefredrik))
- Made it easier to understand [\#584](https://github.com/olefredrik/fiftytwo/pull/584) ([alexbohariuc](https://github.com/alexbohariuc))
- Added Size Class Back Into Image Tag Within Content Body [\#574](https://github.com/olefredrik/fiftytwo/pull/574) ([joshrathke](https://github.com/joshrathke))

## [v2.1.0](https://github.com/olefredrik/fiftytwo/tree/v2.1.0) (2015-12-07)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v2.0.0...v2.1.0)

**Closed issues:**

- \[2.0.0\] not seeing offgrid in showcase [\#585](https://github.com/olefredrik/fiftytwo/issues/585)

**Merged pull requests:**

- Documentation [\#587](https://github.com/olefredrik/fiftytwo/pull/587) ([olefredrik](https://github.com/olefredrik))
- Add new sites to showcase [\#586](https://github.com/olefredrik/fiftytwo/pull/586) ([olefredrik](https://github.com/olefredrik))
- Gulp [\#583](https://github.com/olefredrik/fiftytwo/pull/583) ([colin-marshall](https://github.com/colin-marshall))
- Adden Romanian language files [\#582](https://github.com/olefredrik/fiftytwo/pull/582) ([alexbohariuc](https://github.com/alexbohariuc))
- Remove excess closing div [\#581](https://github.com/olefredrik/fiftytwo/pull/581) ([olefredrik](https://github.com/olefredrik))

## [v2.0.0](https://github.com/olefredrik/fiftytwo/tree/v2.0.0) (2015-12-05)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.7.2...v2.0.0)

**Fixed bugs:**

- Gruntfile and fontawesome [\#568](https://github.com/olefredrik/fiftytwo/issues/568)

**Closed issues:**

- Initial Build Erroring [\#558](https://github.com/olefredrik/fiftytwo/issues/558)
- Trouble with the installation process [\#547](https://github.com/olefredrik/fiftytwo/issues/547)

**Merged pull requests:**

- Foundation 6 [\#580](https://github.com/olefredrik/fiftytwo/pull/580) ([olefredrik](https://github.com/olefredrik))
- Add OffGrid Magazine site to showcase [\#579](https://github.com/olefredrik/fiftytwo/pull/579) ([KLVTZ](https://github.com/KLVTZ))
- Remove string replace task [\#569](https://github.com/olefredrik/fiftytwo/pull/569) ([olefredrik](https://github.com/olefredrik))
- Update changelog [\#565](https://github.com/olefredrik/fiftytwo/pull/565) ([olefredrik](https://github.com/olefredrik))

## [v1.7.2](https://github.com/olefredrik/fiftytwo/tree/v1.7.2) (2015-11-20)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.7.1...v1.7.2)

**Fixed bugs:**

- Protocol Relative URL not compatible with CDN Rewrites [\#546](https://github.com/olefredrik/fiftytwo/issues/546)

**Merged pull requests:**

- Specify required version of Node.js [\#564](https://github.com/olefredrik/fiftytwo/pull/564) ([olefredrik](https://github.com/olefredrik))

## [v1.7.1](https://github.com/olefredrik/fiftytwo/tree/v1.7.1) (2015-11-20)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.7.0...v1.7.1)

**Fixed bugs:**

- 1px to much page height \(also in demo\) [\#557](https://github.com/olefredrik/fiftytwo/issues/557)

**Closed issues:**

- Walker\_Nav\_Menu &  Top\_Bar\_Walker class [\#555](https://github.com/olefredrik/fiftytwo/issues/555)
- Major struggles with npm / grunt / node-sass when working with old and new FP projects simultaneously [\#553](https://github.com/olefredrik/fiftytwo/issues/553)
- WooCommerce Login Issue [\#551](https://github.com/olefredrik/fiftytwo/issues/551)
- bower install not running [\#550](https://github.com/olefredrik/fiftytwo/issues/550)
- Different page layouts [\#548](https://github.com/olefredrik/fiftytwo/issues/548)
- Let's use autoprefixer for prefixing [\#453](https://github.com/olefredrik/fiftytwo/issues/453)

**Merged pull requests:**

- Fix the +1px page height issue caused by stickyfooter [\#563](https://github.com/olefredrik/fiftytwo/pull/563) ([olefredrik](https://github.com/olefredrik))
- Disable protocol relative theme assets [\#562](https://github.com/olefredrik/fiftytwo/pull/562) ([olefredrik](https://github.com/olefredrik))
- Add Gitter chat icon to README [\#561](https://github.com/olefredrik/fiftytwo/pull/561) ([olefredrik](https://github.com/olefredrik))
- Exclude WP VIP Restricted Functions in Codesniffer ruleset [\#559](https://github.com/olefredrik/fiftytwo/pull/559) ([olefredrik](https://github.com/olefredrik))
- Update readme: browsersync gruntfile line number [\#552](https://github.com/olefredrik/fiftytwo/pull/552) ([rasmuserik](https://github.com/rasmuserik))
- Portuguese \(pt\_PT\) translation update [\#549](https://github.com/olefredrik/fiftytwo/pull/549) ([pedro-mendonca](https://github.com/pedro-mendonca))
- Update changelog [\#545](https://github.com/olefredrik/fiftytwo/pull/545) ([olefredrik](https://github.com/olefredrik))

## [v1.7.0](https://github.com/olefredrik/fiftytwo/tree/v1.7.0) (2015-11-07)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.6.0...v1.7.0)

**Fixed bugs:**

- npm run package is taking very long time [\#538](https://github.com/olefredrik/fiftytwo/issues/538)

**Closed issues:**

- Home page button highlighted as active [\#537](https://github.com/olefredrik/fiftytwo/issues/537)
- Sourcemaps in chrome not correct [\#521](https://github.com/olefredrik/fiftytwo/issues/521)
- Cannot Clone the repository and install with npm [\#510](https://github.com/olefredrik/fiftytwo/issues/510)
- npm ERR! code ELIFECYCLE / Failed at postinstall script [\#501](https://github.com/olefredrik/fiftytwo/issues/501)
- \_keystrokes.scss does not use global for monospace font [\#476](https://github.com/olefredrik/fiftytwo/issues/476)

**Merged pull requests:**

- Feature/autoprefixer [\#544](https://github.com/olefredrik/fiftytwo/pull/544) ([olefredrik](https://github.com/olefredrik))
- Feature/package [\#539](https://github.com/olefredrik/fiftytwo/pull/539) ([olefredrik](https://github.com/olefredrik))
- Update changelog [\#536](https://github.com/olefredrik/fiftytwo/pull/536) ([olefredrik](https://github.com/olefredrik))

## [v1.6.0](https://github.com/olefredrik/fiftytwo/tree/v1.6.0) (2015-11-01)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.5.1...v1.6.0)

**Closed issues:**

- npm commands = compilation errors [\#530](https://github.com/olefredrik/fiftytwo/issues/530)
- Uncaught TypeError: $ is not a function [\#526](https://github.com/olefredrik/fiftytwo/issues/526)
- NPM recommended version? [\#525](https://github.com/olefredrik/fiftytwo/issues/525)
- Missing CSS/JS files when installed on Wordpress version 4.3.1 [\#523](https://github.com/olefredrik/fiftytwo/issues/523)
- Demo seems broken on IE9 [\#519](https://github.com/olefredrik/fiftytwo/issues/519)
- Grid not working perfectly... [\#516](https://github.com/olefredrik/fiftytwo/issues/516)
- Npm package [\#514](https://github.com/olefredrik/fiftytwo/issues/514)
- npm install errors [\#512](https://github.com/olefredrik/fiftytwo/issues/512)
- Theme not reading css [\#511](https://github.com/olefredrik/fiftytwo/issues/511)
- Button height problem [\#506](https://github.com/olefredrik/fiftytwo/issues/506)
- npm install completion blocked by Windows Firewall [\#495](https://github.com/olefredrik/fiftytwo/issues/495)
- Custom Grids? [\#486](https://github.com/olefredrik/fiftytwo/issues/486)

**Merged pull requests:**

- Feature/browser sync [\#535](https://github.com/olefredrik/fiftytwo/pull/535) ([olefredrik](https://github.com/olefredrik))
- Updated dependencies [\#533](https://github.com/olefredrik/fiftytwo/pull/533) ([olefredrik](https://github.com/olefredrik))
- Translation for Galician [\#529](https://github.com/olefredrik/fiftytwo/pull/529) ([lauantai](https://github.com/lauantai))
- Added grunt-browser-sync [\#528](https://github.com/olefredrik/fiftytwo/pull/528) ([colin-marshall](https://github.com/colin-marshall))
- Fix typo [\#522](https://github.com/olefredrik/fiftytwo/pull/522) ([noskov](https://github.com/noskov))
- Update requirements description in readme [\#515](https://github.com/olefredrik/fiftytwo/pull/515) ([olefredrik](https://github.com/olefredrik))
- Polish i18n [\#513](https://github.com/olefredrik/fiftytwo/pull/513) ([Tymek](https://github.com/Tymek))
- Feature/documentation [\#509](https://github.com/olefredrik/fiftytwo/pull/509) ([olefredrik](https://github.com/olefredrik))
- Reset changes in bower json [\#508](https://github.com/olefredrik/fiftytwo/pull/508) ([olefredrik](https://github.com/olefredrik))

## [v1.5.1](https://github.com/olefredrik/fiftytwo/tree/v1.5.1) (2015-10-10)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.5.0...v1.5.1)

**Fixed bugs:**

- fiftytwo will not install with Node.js version 4.0 [\#461](https://github.com/olefredrik/fiftytwo/issues/461)

**Closed issues:**

- npm run package takes long time an failed [\#497](https://github.com/olefredrik/fiftytwo/issues/497)
- Installed w/ No Issues, but Styling/Layout Not Showing [\#493](https://github.com/olefredrik/fiftytwo/issues/493)
- Installation issues? [\#481](https://github.com/olefredrik/fiftytwo/issues/481)
- posts per page function not working on archive [\#477](https://github.com/olefredrik/fiftytwo/issues/477)
- Incompability issues with Node v.4.x.x [\#475](https://github.com/olefredrik/fiftytwo/issues/475)
- NPM build error [\#468](https://github.com/olefredrik/fiftytwo/issues/468)

**Merged pull requests:**

- Update bower.json [\#507](https://github.com/olefredrik/fiftytwo/pull/507) ([olefredrik](https://github.com/olefredrik))
- Sass not SASS [\#492](https://github.com/olefredrik/fiftytwo/pull/492) ([jpdevries](https://github.com/jpdevries))
-  On pages that have the comments activated an additional JS file is ne… [\#488](https://github.com/olefredrik/fiftytwo/pull/488) ([Larzans](https://github.com/Larzans))
- Update foundation.php [\#487](https://github.com/olefredrik/fiftytwo/pull/487) ([alexbohariuc](https://github.com/alexbohariuc))
- Feature/documentation [\#484](https://github.com/olefredrik/fiftytwo/pull/484) ([olefredrik](https://github.com/olefredrik))
- Feature/sticky footer [\#483](https://github.com/olefredrik/fiftytwo/pull/483) ([olefredrik](https://github.com/olefredrik))
- Updated changelog [\#479](https://github.com/olefredrik/fiftytwo/pull/479) ([olefredrik](https://github.com/olefredrik))

## [v1.5.0](https://github.com/olefredrik/fiftytwo/tree/v1.5.0) (2015-09-23)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.4.0...v1.5.0)

**Fixed bugs:**

- Off-canvas menu defaults not set properly [\#447](https://github.com/olefredrik/fiftytwo/issues/447)
- Woocommerce styles overwriting Foundations [\#263](https://github.com/olefredrik/fiftytwo/issues/263)

**Closed issues:**

- Clearly state what files are needed on server [\#472](https://github.com/olefredrik/fiftytwo/issues/472)
- Search for pages [\#469](https://github.com/olefredrik/fiftytwo/issues/469)
- Error on npm install [\#465](https://github.com/olefredrik/fiftytwo/issues/465)
- npm run watch fails [\#460](https://github.com/olefredrik/fiftytwo/issues/460)
- Files missing from Theme folder? [\#459](https://github.com/olefredrik/fiftytwo/issues/459)

**Merged pull requests:**

- Update/dev dependencies [\#478](https://github.com/olefredrik/fiftytwo/pull/478) ([olefredrik](https://github.com/olefredrik))
- Feature/package theme for deployment [\#474](https://github.com/olefredrik/fiftytwo/pull/474) ([olefredrik](https://github.com/olefredrik))
- Added the package command [\#473](https://github.com/olefredrik/fiftytwo/pull/473) ([clearsitedesigns](https://github.com/clearsitedesigns))
- Fix out-of-the-box behavior of mobile layout [\#471](https://github.com/olefredrik/fiftytwo/pull/471) ([skoldin](https://github.com/skoldin))
- Feature/featured image [\#470](https://github.com/olefredrik/fiftytwo/pull/470) ([olefredrik](https://github.com/olefredrik))
- Tweaked the visual apperance of the front template [\#463](https://github.com/olefredrik/fiftytwo/pull/463) ([olefredrik](https://github.com/olefredrik))
- Updated changelog [\#458](https://github.com/olefredrik/fiftytwo/pull/458) ([olefredrik](https://github.com/olefredrik))

## [v1.4.0](https://github.com/olefredrik/fiftytwo/tree/v1.4.0) (2015-09-07)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.3.0...v1.4.0)

**Fixed bugs:**

- Sticky bar and Admin Bar [\#452](https://github.com/olefredrik/fiftytwo/issues/452)
- Fixed: The off-canvas mobile menu was not working correctly [\#449](https://github.com/olefredrik/fiftytwo/pull/449) ([Larzans](https://github.com/Larzans))

**Closed issues:**

- Isolating frontend dependencies. [\#396](https://github.com/olefredrik/fiftytwo/issues/396)

**Merged pull requests:**

- Updated version number to v1.4.0 [\#457](https://github.com/olefredrik/fiftytwo/pull/457) ([olefredrik](https://github.com/olefredrik))
- Fix issue with wpadminbar overlap sticky topbar [\#456](https://github.com/olefredrik/fiftytwo/pull/456) ([olefredrik](https://github.com/olefredrik))
- Feature/gitignore [\#455](https://github.com/olefredrik/fiftytwo/pull/455) ([olefredrik](https://github.com/olefredrik))
- Folder Structure [\#454](https://github.com/olefredrik/fiftytwo/pull/454) ([THEBRANDYMAN](https://github.com/THEBRANDYMAN))
- Changed wp\_register\_script to wp\_enqueue\_script [\#450](https://github.com/olefredrik/fiftytwo/pull/450) ([JeremyEnglert](https://github.com/JeremyEnglert))
- Updated changelog [\#448](https://github.com/olefredrik/fiftytwo/pull/448) ([olefredrik](https://github.com/olefredrik))

## [v1.3.0](https://github.com/olefredrik/fiftytwo/tree/v1.3.0) (2015-09-03)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.2.0...v1.3.0)

**Fixed bugs:**

- Unable to change bg color of topbar from settings [\#377](https://github.com/olefredrik/fiftytwo/issues/377)
- Main content columns dependent on existence of sidebar [\#325](https://github.com/olefredrik/fiftytwo/issues/325)
- Post Image Aligment [\#110](https://github.com/olefredrik/fiftytwo/issues/110)

**Closed issues:**

- Issues with WordPress Admin Panel [\#441](https://github.com/olefredrik/fiftytwo/issues/441)
- Download \(zip\) not working [\#437](https://github.com/olefredrik/fiftytwo/issues/437)
- Customising the Offcanvas Menu Walker [\#434](https://github.com/olefredrik/fiftytwo/issues/434)
- foundation not a function \(offcanvas\) [\#393](https://github.com/olefredrik/fiftytwo/issues/393)
- Top Bar and Tab Bar Sticky [\#328](https://github.com/olefredrik/fiftytwo/issues/328)

**Merged pull requests:**

- Update version number to v1.3.0 [\#446](https://github.com/olefredrik/fiftytwo/pull/446) ([olefredrik](https://github.com/olefredrik))
- Main content columns no longer dependent on existence of sidebar [\#445](https://github.com/olefredrik/fiftytwo/pull/445) ([olefredrik](https://github.com/olefredrik))
- Fix topbar styling bug [\#444](https://github.com/olefredrik/fiftytwo/pull/444) ([olefredrik](https://github.com/olefredrik))
- Add background position to featured image [\#443](https://github.com/olefredrik/fiftytwo/pull/443) ([olefredrik](https://github.com/olefredrik))
- Add support for featured image on pages [\#442](https://github.com/olefredrik/fiftytwo/pull/442) ([olefredrik](https://github.com/olefredrik))
- Self host static content to be used for demo purposes [\#440](https://github.com/olefredrik/fiftytwo/pull/440) ([olefredrik](https://github.com/olefredrik))
- Add correct svg path [\#439](https://github.com/olefredrik/fiftytwo/pull/439) ([olefredrik](https://github.com/olefredrik))
- Host graphics in assets folder instead of pointing to external ref at… [\#438](https://github.com/olefredrik/fiftytwo/pull/438) ([olefredrik](https://github.com/olefredrik))
- Update and simplify the readme file [\#433](https://github.com/olefredrik/fiftytwo/pull/433) ([olefredrik](https://github.com/olefredrik))
- Updated changelog [\#432](https://github.com/olefredrik/fiftytwo/pull/432) ([olefredrik](https://github.com/olefredrik))

## [v1.2.0](https://github.com/olefredrik/fiftytwo/tree/v1.2.0) (2015-08-27)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.1.0...v1.2.0)

**Closed issues:**

- How to understand the current version? [\#423](https://github.com/olefredrik/fiftytwo/issues/423)
- Sub-menus not working properly [\#417](https://github.com/olefredrik/fiftytwo/issues/417)
- Sub-menus not working properly [\#416](https://github.com/olefredrik/fiftytwo/issues/416)
- Off canvas or top-bar [\#210](https://github.com/olefredrik/fiftytwo/issues/210)
- Hooks overview [\#140](https://github.com/olefredrik/fiftytwo/issues/140)

**Merged pull requests:**

- Feature/protocol relative theme assets [\#430](https://github.com/olefredrik/fiftytwo/pull/430) ([olefredrik](https://github.com/olefredrik))
- Declare WooCommerce support [\#428](https://github.com/olefredrik/fiftytwo/pull/428) ([cyberscribe](https://github.com/cyberscribe))
- Add WooCommerce support [\#427](https://github.com/olefredrik/fiftytwo/pull/427) ([cyberscribe](https://github.com/cyberscribe))
- Correct typo in documentation [\#425](https://github.com/olefredrik/fiftytwo/pull/425) ([olefredrik](https://github.com/olefredrik))
- Feature/gitignore [\#424](https://github.com/olefredrik/fiftytwo/pull/424) ([olefredrik](https://github.com/olefredrik))
- Better pattern match for images to rebuild [\#421](https://github.com/olefredrik/fiftytwo/pull/421) ([cyberscribe](https://github.com/cyberscribe))
- Feature/gitignore [\#419](https://github.com/olefredrik/fiftytwo/pull/419) ([olefredrik](https://github.com/olefredrik))
- Add info to package.json [\#418](https://github.com/olefredrik/fiftytwo/pull/418) ([noskov](https://github.com/noskov))
- Updated changelog with v1.1.0 details [\#414](https://github.com/olefredrik/fiftytwo/pull/414) ([olefredrik](https://github.com/olefredrik))

## [v1.1.0](https://github.com/olefredrik/fiftytwo/tree/v1.1.0) (2015-08-17)
[Full Changelog](https://github.com/olefredrik/fiftytwo/compare/v1.0.0...v1.1.0)

**Closed issues:**

- How to NOT install local bower & grunt? [\#405](https://github.com/olefredrik/fiftytwo/issues/405)
- Error with "npm run watch" [\#399](https://github.com/olefredrik/fiftytwo/issues/399)
- Semantic Versioning [\#395](https://github.com/olefredrik/fiftytwo/issues/395)
- Megamenu in TopBar [\#353](https://github.com/olefredrik/fiftytwo/issues/353)
- PHPCS gives different results than Travis CI when run locally with codesniffer ruleset [\#352](https://github.com/olefredrik/fiftytwo/issues/352)
- top-bar [\#277](https://github.com/olefredrik/fiftytwo/issues/277)
- Topbar data-options Configuration Not Applying [\#238](https://github.com/olefredrik/fiftytwo/issues/238)

**Merged pull requests:**

- Feature/improve mobile navigation customizer [\#413](https://github.com/olefredrik/fiftytwo/pull/413) ([olefredrik](https://github.com/olefredrik))
- Add Customizer Option for Topbar or Offcanvas Mobile Menu [\#411](https://github.com/olefredrik/fiftytwo/pull/411) ([AdamChlan](https://github.com/AdamChlan))
- solve image aligment in posts [\#410](https://github.com/olefredrik/fiftytwo/pull/410) ([alexpetroni](https://github.com/alexpetroni))
- Added the possibility to show the off\_canvas navigation on the right side [\#407](https://github.com/olefredrik/fiftytwo/pull/407) ([Larzans](https://github.com/Larzans))
- Added changelog [\#404](https://github.com/olefredrik/fiftytwo/pull/404) ([olefredrik](https://github.com/olefredrik))
- check if function exists [\#389](https://github.com/olefredrik/fiftytwo/pull/389) ([Stevie-Ray](https://github.com/Stevie-Ray))

## [v1.0.0](https://github.com/olefredrik/fiftytwo/tree/v1.0.0) (2015-08-05)
**Fixed bugs:**

- Menu Icon not showing on mobile menu [\#300](https://github.com/olefredrik/fiftytwo/issues/300)
- add\_filter\('get\_image\_tag', 'fiftytwo\_image\_editor', 0, 4\) is removing the caption of the image [\#276](https://github.com/olefredrik/fiftytwo/issues/276)

**Closed issues:**

- Jquery never registered in enqueue-scripts.php and enqueued twice? [\#397](https://github.com/olefredrik/fiftytwo/issues/397)
- OffCanvas Children Not working When Mobile Nav is set to right [\#394](https://github.com/olefredrik/fiftytwo/issues/394)
- How to insert blog posts onto the home page? [\#391](https://github.com/olefredrik/fiftytwo/issues/391)
- Pass an existing project to another dev [\#390](https://github.com/olefredrik/fiftytwo/issues/390)
- What Modernizr component do we need? [\#388](https://github.com/olefredrik/fiftytwo/issues/388)
- cannot run in wd  [\#387](https://github.com/olefredrik/fiftytwo/issues/387)
- NPM Error - Grunt Build [\#386](https://github.com/olefredrik/fiftytwo/issues/386)
- fiftytwo\_fixed\_img\_caption\_shortcode is being ignored [\#383](https://github.com/olefredrik/fiftytwo/issues/383)
- Backup Buddy Zip Process Fails Since fiftytwo Update [\#381](https://github.com/olefredrik/fiftytwo/issues/381)
- bower\_components Folder is missing [\#380](https://github.com/olefredrik/fiftytwo/issues/380)
- Error with bower\_components not found or unreadable [\#379](https://github.com/olefredrik/fiftytwo/issues/379)
- Top-bar / off-canvas parent link [\#378](https://github.com/olefredrik/fiftytwo/issues/378)
- Button Center [\#376](https://github.com/olefredrik/fiftytwo/issues/376)
- Error while running npm run watch  [\#375](https://github.com/olefredrik/fiftytwo/issues/375)
- To create a blank page [\#374](https://github.com/olefredrik/fiftytwo/issues/374)
- Themes [\#373](https://github.com/olefredrik/fiftytwo/issues/373)
- Header Image not being displayed [\#372](https://github.com/olefredrik/fiftytwo/issues/372)
- \[Feature Request\] Add GitHub Theme URI: olefredrik/fiftytwo to style.css [\#371](https://github.com/olefredrik/fiftytwo/issues/371)
- fiftytwo crashes Netbeans 7.4 \(or makes it stall\) [\#370](https://github.com/olefredrik/fiftytwo/issues/370)
- Off Canvas Close on Click [\#369](https://github.com/olefredrik/fiftytwo/issues/369)
- Duplicating existing menus to create new ones [\#368](https://github.com/olefredrik/fiftytwo/issues/368)
- NPM run watch is not working! [\#367](https://github.com/olefredrik/fiftytwo/issues/367)
- how to change row width? [\#365](https://github.com/olefredrik/fiftytwo/issues/365)
- Pagination not working [\#361](https://github.com/olefredrik/fiftytwo/issues/361)
- Where to put custom functions? [\#360](https://github.com/olefredrik/fiftytwo/issues/360)
- double title tags [\#359](https://github.com/olefredrik/fiftytwo/issues/359)
- Two buttons in top bar [\#358](https://github.com/olefredrik/fiftytwo/issues/358)
- Grunt Vs. Gulp [\#357](https://github.com/olefredrik/fiftytwo/issues/357)
- Top Bar breakpoint [\#355](https://github.com/olefredrik/fiftytwo/issues/355)
- Top Menu and WP 4.3-alpha [\#354](https://github.com/olefredrik/fiftytwo/issues/354)
- How to pull off the transparent-to-fill top bar effect? [\#351](https://github.com/olefredrik/fiftytwo/issues/351)
- "missing script: watch" When Installing [\#345](https://github.com/olefredrik/fiftytwo/issues/345)
- WP admin Top bar showing over the top of the top menu bar  [\#342](https://github.com/olefredrik/fiftytwo/issues/342)
- Foundation not installed when "npm install" is run [\#341](https://github.com/olefredrik/fiftytwo/issues/341)
- How to get top-bar container shadow to show up/take on top-level z-index? [\#340](https://github.com/olefredrik/fiftytwo/issues/340)
- Blog Page double search form [\#333](https://github.com/olefredrik/fiftytwo/issues/333)
- comments\_template gone in Front Page [\#332](https://github.com/olefredrik/fiftytwo/issues/332)
- Watch changes on js files [\#329](https://github.com/olefredrik/fiftytwo/issues/329)
- Closing div row missing for search.php? [\#327](https://github.com/olefredrik/fiftytwo/issues/327)
- Bad stylesheet attribute id [\#326](https://github.com/olefredrik/fiftytwo/issues/326)
- Adding search to top-bar? [\#324](https://github.com/olefredrik/fiftytwo/issues/324)
- Woocommerce Support [\#321](https://github.com/olefredrik/fiftytwo/issues/321)
- Cannot see fiftytwo theme [\#320](https://github.com/olefredrik/fiftytwo/issues/320)
- Top Bar Navigation not showing in 796px width or below. [\#318](https://github.com/olefredrik/fiftytwo/issues/318)
- Missing translation [\#313](https://github.com/olefredrik/fiftytwo/issues/313)
- Removing JS components [\#312](https://github.com/olefredrik/fiftytwo/issues/312)
- Textdomain problem [\#311](https://github.com/olefredrik/fiftytwo/issues/311)
- Fatal error:  [\#308](https://github.com/olefredrik/fiftytwo/issues/308)
- Loading sass.js tasks...ERROR [\#306](https://github.com/olefredrik/fiftytwo/issues/306)
- fiftytwo + Shared Hosting? [\#305](https://github.com/olefredrik/fiftytwo/issues/305)
- Top level menu items redirecting to index.php [\#304](https://github.com/olefredrik/fiftytwo/issues/304)
- .f-topbar-fixed Margin Top of 45px [\#302](https://github.com/olefredrik/fiftytwo/issues/302)
- wp admin bar not there and dropdown doesn't work [\#301](https://github.com/olefredrik/fiftytwo/issues/301)
-  Getting pagination work for a category template [\#299](https://github.com/olefredrik/fiftytwo/issues/299)
- comments.php error [\#297](https://github.com/olefredrik/fiftytwo/issues/297)
- WooThemes Sensei Support [\#296](https://github.com/olefredrik/fiftytwo/issues/296)
- Recommended Portfolio plugin that plays well with fiftytwo? [\#295](https://github.com/olefredrik/fiftytwo/issues/295)
- How to use full-width rows properly? [\#293](https://github.com/olefredrik/fiftytwo/issues/293)
- Issues importing custom scss file/ file to import not found or unreadable [\#292](https://github.com/olefredrik/fiftytwo/issues/292)
- Breakpoints for the top-bar toggle [\#291](https://github.com/olefredrik/fiftytwo/issues/291)
- unbound variable $medium-up on fresh install [\#290](https://github.com/olefredrik/fiftytwo/issues/290)
- Uncaught TypeError: Cannot read property 'topbar' of undefined [\#289](https://github.com/olefredrik/fiftytwo/issues/289)
- Editing sass with CodeKit problem [\#287](https://github.com/olefredrik/fiftytwo/issues/287)
- Pagination [\#286](https://github.com/olefredrik/fiftytwo/issues/286)
- Difficulties making Grunt work [\#284](https://github.com/olefredrik/fiftytwo/issues/284)
- Top item in dropdown shown twice on medium [\#281](https://github.com/olefredrik/fiftytwo/issues/281)
- How to add a Blog feed to a certain part of a page? [\#275](https://github.com/olefredrik/fiftytwo/issues/275)
- Dropping global dependencies for bower & grunt [\#274](https://github.com/olefredrik/fiftytwo/issues/274)
- How can we achieve this top-bar effect? [\#272](https://github.com/olefredrik/fiftytwo/issues/272)
- Javascript ignored by grunt process [\#271](https://github.com/olefredrik/fiftytwo/issues/271)
- How do you implement code into your WordPress pages? [\#267](https://github.com/olefredrik/fiftytwo/issues/267)
- Posts preview in 3 columns [\#265](https://github.com/olefredrik/fiftytwo/issues/265)
- Change breakpoint for topbar/tab-bar [\#260](https://github.com/olefredrik/fiftytwo/issues/260)
- Get typeerror when I tried to use foundation tabs or accordions [\#259](https://github.com/olefredrik/fiftytwo/issues/259)
- Interchange stopped working [\#258](https://github.com/olefredrik/fiftytwo/issues/258)
- How to display images from custom fields in a block grid [\#257](https://github.com/olefredrik/fiftytwo/issues/257)
- Display child pages in a block grid [\#255](https://github.com/olefredrik/fiftytwo/issues/255)
- Button groups shows "ghost margin" on small screens [\#254](https://github.com/olefredrik/fiftytwo/issues/254)
- Off canvas menu didn´t work on start page [\#253](https://github.com/olefredrik/fiftytwo/issues/253)
- where to put my own scss? [\#252](https://github.com/olefredrik/fiftytwo/issues/252)
- Multiple menus in mobile view [\#251](https://github.com/olefredrik/fiftytwo/issues/251)
- Off canavs multi level [\#248](https://github.com/olefredrik/fiftytwo/issues/248)
- Image Cleanup with Captions - Markup Output Issue [\#245](https://github.com/olefredrik/fiftytwo/issues/245)
- Enqueue jQuery before \</head\> ? [\#243](https://github.com/olefredrik/fiftytwo/issues/243)
- Content width on new install [\#242](https://github.com/olefredrik/fiftytwo/issues/242)
- Help understanding enqueue-scripts.php [\#239](https://github.com/olefredrik/fiftytwo/issues/239)
- Foundation Equalizer not working [\#237](https://github.com/olefredrik/fiftytwo/issues/237)
- \[question\] where to place custom SCSS files? [\#235](https://github.com/olefredrik/fiftytwo/issues/235)
- Change class on widget\_search   [\#232](https://github.com/olefredrik/fiftytwo/issues/232)
- Failed at node-sass@1.2.3 [\#231](https://github.com/olefredrik/fiftytwo/issues/231)
- Is there a 'best' way to set up  [\#230](https://github.com/olefredrik/fiftytwo/issues/230)
- Calling fiftytwo\_pagination in a custom query [\#229](https://github.com/olefredrik/fiftytwo/issues/229)
- fiftytwo folder structure [\#228](https://github.com/olefredrik/fiftytwo/issues/228)
- Bower error [\#226](https://github.com/olefredrik/fiftytwo/issues/226)
- customize woo commerce cat and single prod pages [\#223](https://github.com/olefredrik/fiftytwo/issues/223)
- How to customize woocommerce templates? [\#220](https://github.com/olefredrik/fiftytwo/issues/220)
- Examples of fiftytwo sites [\#219](https://github.com/olefredrik/fiftytwo/issues/219)
- Error: Cannot find module 'node-sass' [\#217](https://github.com/olefredrik/fiftytwo/issues/217)
- Where is app.scss in fiftytwo [\#216](https://github.com/olefredrik/fiftytwo/issues/216)
- Foundation press and plugins "revolution slider" [\#213](https://github.com/olefredrik/fiftytwo/issues/213)
- Cannot install npm in fiftytwo dir [\#212](https://github.com/olefredrik/fiftytwo/issues/212)
- Functions Conflict in Child theme [\#211](https://github.com/olefredrik/fiftytwo/issues/211)
- Loading "sass.js" tasks...ERROR [\#209](https://github.com/olefredrik/fiftytwo/issues/209)
- Error when run 'npm install && bower install && grunt build' instruction [\#208](https://github.com/olefredrik/fiftytwo/issues/208)
- Recommended SASS customizations? [\#207](https://github.com/olefredrik/fiftytwo/issues/207)
- Warning: call\_user\_func\(\); comment-template.php on line 1796 [\#205](https://github.com/olefredrik/fiftytwo/issues/205)
- remove whitespace only on start page didn´t work on mobile devices [\#204](https://github.com/olefredrik/fiftytwo/issues/204)
- fiftytwo\_comments function not found? [\#202](https://github.com/olefredrik/fiftytwo/issues/202)
- Sidebar Menu support? [\#200](https://github.com/olefredrik/fiftytwo/issues/200)
- Sourcemap not working [\#199](https://github.com/olefredrik/fiftytwo/issues/199)
- Changing border-radius of input border not working [\#197](https://github.com/olefredrik/fiftytwo/issues/197)
- Stick footer to bottom when page is empty [\#196](https://github.com/olefredrik/fiftytwo/issues/196)
- Strict Standards: Declaration of fiftytwo\_comments::start\_el\(\) should be compatible with Walker\_Comment::start\_el\(\) [\#194](https://github.com/olefredrik/fiftytwo/issues/194)
- Adding Custom Attribute To Menu Item to open modal [\#190](https://github.com/olefredrik/fiftytwo/issues/190)
- Can't disable buttons component [\#188](https://github.com/olefredrik/fiftytwo/issues/188)
- \[Clearing gallery\] Applying Foundation's Fix\#3410 "the image shift"  [\#186](https://github.com/olefredrik/fiftytwo/issues/186)
- comments.php loop error [\#181](https://github.com/olefredrik/fiftytwo/issues/181)
- Don't load jquery 2.x for IE 8 [\#178](https://github.com/olefredrik/fiftytwo/issues/178)
- fiftytwo + Timber [\#177](https://github.com/olefredrik/fiftytwo/issues/177)
- WP Breadcrumb [\#173](https://github.com/olefredrik/fiftytwo/issues/173)
- foundation.css vs app.css [\#172](https://github.com/olefredrik/fiftytwo/issues/172)
- Grunt copies all JS files [\#165](https://github.com/olefredrik/fiftytwo/issues/165)
- errors installing npm & bower [\#164](https://github.com/olefredrik/fiftytwo/issues/164)
- customizing header [\#163](https://github.com/olefredrik/fiftytwo/issues/163)
- how to make my own javascript to work in front end [\#162](https://github.com/olefredrik/fiftytwo/issues/162)
- Editing js files does not update app.js even with grunt in watch mode [\#158](https://github.com/olefredrik/fiftytwo/issues/158)
- Anybody else getting hit with a bug for hide-for-small? [\#156](https://github.com/olefredrik/fiftytwo/issues/156)
- Problem with sticky  Class in wordpress [\#155](https://github.com/olefredrik/fiftytwo/issues/155)
- Child theme [\#154](https://github.com/olefredrik/fiftytwo/issues/154)
- having an issue with the off canvas menu in iOS [\#153](https://github.com/olefredrik/fiftytwo/issues/153)
- ENOTFOUND Package  not found when trying to install from bower [\#151](https://github.com/olefredrik/fiftytwo/issues/151)
- fiftytwo\_pagination generates broken markup [\#149](https://github.com/olefredrik/fiftytwo/issues/149)
- Defer javascript [\#148](https://github.com/olefredrik/fiftytwo/issues/148)
- \[SOLVED\] Conflict with "Easy Foundation Shortcode" plugin [\#147](https://github.com/olefredrik/fiftytwo/issues/147)
- Equalizer [\#146](https://github.com/olefredrik/fiftytwo/issues/146)
- Icon Bar  [\#145](https://github.com/olefredrik/fiftytwo/issues/145)
- \_settings.php missing an asset when compiled [\#142](https://github.com/olefredrik/fiftytwo/issues/142)
- Login Box [\#141](https://github.com/olefredrik/fiftytwo/issues/141)
- Custom JS [\#136](https://github.com/olefredrik/fiftytwo/issues/136)
- Breadcrumbs demo [\#135](https://github.com/olefredrik/fiftytwo/issues/135)
- test2 [\#133](https://github.com/olefredrik/fiftytwo/issues/133)
- Wordpress 4 [\#132](https://github.com/olefredrik/fiftytwo/issues/132)
- Adding uncss option to gruntfile [\#131](https://github.com/olefredrik/fiftytwo/issues/131)
- Adding function checks to make fiftytwo more Child Template friendly. [\#129](https://github.com/olefredrik/fiftytwo/issues/129)
- Sass when you work online [\#128](https://github.com/olefredrik/fiftytwo/issues/128)
- Too much styles default [\#127](https://github.com/olefredrik/fiftytwo/issues/127)
- Child theme or not? [\#125](https://github.com/olefredrik/fiftytwo/issues/125)
- Child Theme outputting duplicate CSS [\#124](https://github.com/olefredrik/fiftytwo/issues/124)
- Joyride init problem [\#123](https://github.com/olefredrik/fiftytwo/issues/123)
- app.min.js [\#122](https://github.com/olefredrik/fiftytwo/issues/122)
- js/vendor? [\#121](https://github.com/olefredrik/fiftytwo/issues/121)
- Child-Theme [\#120](https://github.com/olefredrik/fiftytwo/issues/120)
- How to update to a new version of fiftytwo? [\#118](https://github.com/olefredrik/fiftytwo/issues/118)
- Broken layout for IE9 [\#117](https://github.com/olefredrik/fiftytwo/issues/117)
- Wordpress 4.0 compatible? [\#116](https://github.com/olefredrik/fiftytwo/issues/116)
- Essential JS [\#115](https://github.com/olefredrik/fiftytwo/issues/115)
- error on compile with libsass and foundation 5.4.3 [\#114](https://github.com/olefredrik/fiftytwo/issues/114)
- What's the better way to update? [\#111](https://github.com/olefredrik/fiftytwo/issues/111)
- Accessibility Issue - aria-hidden attribute on Off-Canvas wrap. [\#108](https://github.com/olefredrik/fiftytwo/issues/108)
- Off Canvas flashing with Meta Slider / Flex Slider [\#106](https://github.com/olefredrik/fiftytwo/issues/106)
- npm WARN package.json foundation-libsass-template@0.0.1 No repository field. [\#105](https://github.com/olefredrik/fiftytwo/issues/105)
- Gallery only showing 5 images [\#104](https://github.com/olefredrik/fiftytwo/issues/104)
- number of columns [\#102](https://github.com/olefredrik/fiftytwo/issues/102)
- Thumbnails in grid view  [\#101](https://github.com/olefredrik/fiftytwo/issues/101)
- Adding Livereload for SaSS ? [\#99](https://github.com/olefredrik/fiftytwo/issues/99)
- It's not clear from the docs where to put your own js [\#97](https://github.com/olefredrik/fiftytwo/issues/97)
- Setting Top Bar colors \( topbar-link-bg-active \) is not working [\#96](https://github.com/olefredrik/fiftytwo/issues/96)
- Cannot get Foundation equalizer working [\#94](https://github.com/olefredrik/fiftytwo/issues/94)
- How to create a child theme? [\#92](https://github.com/olefredrik/fiftytwo/issues/92)
- Body class [\#91](https://github.com/olefredrik/fiftytwo/issues/91)
- Compiling everything except the SCSS files? [\#90](https://github.com/olefredrik/fiftytwo/issues/90)
- Button background on hover is always dark blue [\#86](https://github.com/olefredrik/fiftytwo/issues/86)
- Adding button at the end of right menu as list item [\#84](https://github.com/olefredrik/fiftytwo/issues/84)
- Off-canvas Menu Issue [\#82](https://github.com/olefredrik/fiftytwo/issues/82)
- How to compile SASS at end of app.css rather than beginning? [\#81](https://github.com/olefredrik/fiftytwo/issues/81)
- Question: How would I add a menu description to the menu walker? [\#76](https://github.com/olefredrik/fiftytwo/issues/76)
- Source maps for webkit Devel Tools [\#75](https://github.com/olefredrik/fiftytwo/issues/75)
- When creating a child theme the stylesheets and icons are not loaded [\#74](https://github.com/olefredrik/fiftytwo/issues/74)
- Where are the translation file? [\#73](https://github.com/olefredrik/fiftytwo/issues/73)
- $tapbar-hamburger-icon-thickness [\#72](https://github.com/olefredrik/fiftytwo/issues/72)
- footer as real footer [\#71](https://github.com/olefredrik/fiftytwo/issues/71)
- Side bar on the left [\#69](https://github.com/olefredrik/fiftytwo/issues/69)
- SVGs don't show up in Safari [\#68](https://github.com/olefredrik/fiftytwo/issues/68)
- 404.php template is missing row div [\#66](https://github.com/olefredrik/fiftytwo/issues/66)
- Image referencing and paths [\#65](https://github.com/olefredrik/fiftytwo/issues/65)
- Menu disappearing in a category page \(archive too\) [\#64](https://github.com/olefredrik/fiftytwo/issues/64)
- App.scss Syntax error [\#62](https://github.com/olefredrik/fiftytwo/issues/62)
- Flickering Fixed Background Image in Chrome [\#61](https://github.com/olefredrik/fiftytwo/issues/61)
- Custom Starter Theme Creation like underscore site [\#60](https://github.com/olefredrik/fiftytwo/issues/60)
- Mobile and tablet devices' menu not working [\#58](https://github.com/olefredrik/fiftytwo/issues/58)
- Invalid Markup: "Attribute pubdate not allowed on element time at this point." [\#57](https://github.com/olefredrik/fiftytwo/issues/57)
- Entire layout is inside .off-canvas-wrap? [\#56](https://github.com/olefredrik/fiftytwo/issues/56)
- Making comments.php friendly to Jetpack comments [\#55](https://github.com/olefredrik/fiftytwo/issues/55)
- Install on Multisite Not Working Right [\#54](https://github.com/olefredrik/fiftytwo/issues/54)
- Installing Woocommerce plugin knocks out Foundation js [\#53](https://github.com/olefredrik/fiftytwo/issues/53)
- Sticky-Footer [\#52](https://github.com/olefredrik/fiftytwo/issues/52)
- Question With Forms [\#51](https://github.com/olefredrik/fiftytwo/issues/51)
- $\(document\).foundation seemingly called too soon [\#50](https://github.com/olefredrik/fiftytwo/issues/50)
- menu link not working [\#49](https://github.com/olefredrik/fiftytwo/issues/49)
- menu not link [\#48](https://github.com/olefredrik/fiftytwo/issues/48)
- 100% width divs? [\#47](https://github.com/olefredrik/fiftytwo/issues/47)
- Off-Canvas not working [\#46](https://github.com/olefredrik/fiftytwo/issues/46)
- Menu breaks when WooCommerce is installed [\#45](https://github.com/olefredrik/fiftytwo/issues/45)
- Hide-for-small turning inline elements into blocks [\#44](https://github.com/olefredrik/fiftytwo/issues/44)
- jQuery in NoConflict Mode [\#43](https://github.com/olefredrik/fiftytwo/issues/43)
- Menu divider [\#42](https://github.com/olefredrik/fiftytwo/issues/42)
- Top bar with default primary wp menu [\#41](https://github.com/olefredrik/fiftytwo/issues/41)
- WooCommerce compatability [\#40](https://github.com/olefredrik/fiftytwo/issues/40)
- Permission denied \(publickey\). [\#38](https://github.com/olefredrik/fiftytwo/issues/38)
- Targeting list items in mobile off-canvas-toggle menu [\#36](https://github.com/olefredrik/fiftytwo/issues/36)
- Adding custom theme scripts to app.js [\#33](https://github.com/olefredrik/fiftytwo/issues/33)
- Add hooks to inject own code by using a childtheme or a plugin [\#31](https://github.com/olefredrik/fiftytwo/issues/31)
- Documentation fiftytwo [\#30](https://github.com/olefredrik/fiftytwo/issues/30)
- Use Compass [\#29](https://github.com/olefredrik/fiftytwo/issues/29)
- top-bar sticky nav [\#28](https://github.com/olefredrik/fiftytwo/issues/28)
- jQuery in Header Issue [\#27](https://github.com/olefredrik/fiftytwo/issues/27)
- fiftytwo Top Bar Hidden by Wordpress Admin bar when logged in. [\#26](https://github.com/olefredrik/fiftytwo/issues/26)
- foundation script [\#25](https://github.com/olefredrik/fiftytwo/issues/25)
- Loading jQuery in footer - some plugins have issues [\#24](https://github.com/olefredrik/fiftytwo/issues/24)
- Make strings translatable? [\#23](https://github.com/olefredrik/fiftytwo/issues/23)
- Why loop register\_sidebar\(\)?  [\#22](https://github.com/olefredrik/fiftytwo/issues/22)
- Demo Data \[mysql dump or wordpress export file\] [\#21](https://github.com/olefredrik/fiftytwo/issues/21)
- Permission Denied [\#20](https://github.com/olefredrik/fiftytwo/issues/20)
- custom domain\(s\) [\#18](https://github.com/olefredrik/fiftytwo/issues/18)
- Failed to load resource: the server responded with a status of 404 \(Not Found\)  [\#17](https://github.com/olefredrik/fiftytwo/issues/17)
- jQuery conflict? [\#16](https://github.com/olefredrik/fiftytwo/issues/16)
- foundation folder full of component scss files inside the js folder [\#15](https://github.com/olefredrik/fiftytwo/issues/15)
- No Search Results Does Not Load 404.php [\#14](https://github.com/olefredrik/fiftytwo/issues/14)
- jquery issues [\#13](https://github.com/olefredrik/fiftytwo/issues/13)
- Image caption bug [\#12](https://github.com/olefredrik/fiftytwo/issues/12)
- bug with function img\_unautop [\#11](https://github.com/olefredrik/fiftytwo/issues/11)
- topbar-input-height variable missing [\#9](https://github.com/olefredrik/fiftytwo/issues/9)
- Adminbar overlaps mobile menu when width \< 600px [\#8](https://github.com/olefredrik/fiftytwo/issues/8)
- Using CodeKit \(mac\) vs Grunt/Bower, etc... [\#7](https://github.com/olefredrik/fiftytwo/issues/7)
- IE8 support [\#6](https://github.com/olefredrik/fiftytwo/issues/6)
- jquery-ui-datepicker [\#4](https://github.com/olefredrik/fiftytwo/issues/4)

**Merged pull requests:**

- Introduce semantic versioning [\#403](https://github.com/olefredrik/fiftytwo/pull/403) ([olefredrik](https://github.com/olefredrik))
- Add closing div row [\#402](https://github.com/olefredrik/fiftytwo/pull/402) ([olefredrik](https://github.com/olefredrik))
- Update versions for node-sass and grunt-sass. Move time-grunt to devD… [\#400](https://github.com/olefredrik/fiftytwo/pull/400) ([olefredrik](https://github.com/olefredrik))
- change enqueue jquery to register jquery [\#398](https://github.com/olefredrik/fiftytwo/pull/398) ([rebekahmonson](https://github.com/rebekahmonson))
- Add composer file for wordpress-theme install [\#392](https://github.com/olefredrik/fiftytwo/pull/392) ([KLVTZ](https://github.com/KLVTZ))
- Displays XML error messages on production website [\#385](https://github.com/olefredrik/fiftytwo/pull/385) ([cyberscribe](https://github.com/cyberscribe))
- Fix image captions [\#384](https://github.com/olefredrik/fiftytwo/pull/384) ([olefredrik](https://github.com/olefredrik))
- Fix function name misspelling: [\#382](https://github.com/olefredrik/fiftytwo/pull/382) ([ryandasher](https://github.com/ryandasher))
- Housekeeping [\#366](https://github.com/olefredrik/fiftytwo/pull/366) ([olefredrik](https://github.com/olefredrik))
- Added Catalan translations. [\#363](https://github.com/olefredrik/fiftytwo/pull/363) ([olefredrik](https://github.com/olefredrik))
- Added missing check for $separatorclass for single pages [\#356](https://github.com/olefredrik/fiftytwo/pull/356) ([Larzans](https://github.com/Larzans))
- Display login error messages [\#350](https://github.com/olefredrik/fiftytwo/pull/350) ([olefredrik](https://github.com/olefredrik))
- Move custom templates to subfolder [\#349](https://github.com/olefredrik/fiftytwo/pull/349) ([olefredrik](https://github.com/olefredrik))
- Allow space indent [\#348](https://github.com/olefredrik/fiftytwo/pull/348) ([olefredrik](https://github.com/olefredrik))
- Added better file doc comments [\#347](https://github.com/olefredrik/fiftytwo/pull/347) ([olefredrik](https://github.com/olefredrik))
- Breadcrumb helper function [\#346](https://github.com/olefredrik/fiftytwo/pull/346) ([Larzans](https://github.com/Larzans))
- Cleanup wp 4.2 bundled emoji stuff [\#338](https://github.com/olefredrik/fiftytwo/pull/338) ([olefredrik](https://github.com/olefredrik))
- Remove link to outdated screencast [\#337](https://github.com/olefredrik/fiftytwo/pull/337) ([olefredrik](https://github.com/olefredrik))
- Removed link to outdated screencast [\#336](https://github.com/olefredrik/fiftytwo/pull/336) ([olefredrik](https://github.com/olefredrik))
- Correcting validator error \#326 [\#335](https://github.com/olefredrik/fiftytwo/pull/335) ([Eccola](https://github.com/Eccola))
- removed global dependency of bower and grunt - \#274 [\#334](https://github.com/olefredrik/fiftytwo/pull/334) ([stefanjudis](https://github.com/stefanjudis))
- Contributing adding Portuguese/Portugal Translating files [\#331](https://github.com/olefredrik/fiftytwo/pull/331) ([BernardinoRosa](https://github.com/BernardinoRosa))
- Start watching for changes on js/custom folder [\#330](https://github.com/olefredrik/fiftytwo/pull/330) ([igarcez](https://github.com/igarcez))
- Switch menus based on a custom topbar-breakpoint value [\#323](https://github.com/olefredrik/fiftytwo/pull/323) ([olefredrik](https://github.com/olefredrik))
- Update Foundation to latest version \(5.5.2\) [\#322](https://github.com/olefredrik/fiftytwo/pull/322) ([olefredrik](https://github.com/olefredrik))
- Replaced occurrences of Wordpress with WordPress. [\#317](https://github.com/olefredrik/fiftytwo/pull/317) ([glueckpress](https://github.com/glueckpress))
- Add Brazilian Portuguese translation [\#316](https://github.com/olefredrik/fiftytwo/pull/316) ([igarcez](https://github.com/igarcez))
- Bugfix/update text domain [\#315](https://github.com/olefredrik/fiftytwo/pull/315) ([olefredrik](https://github.com/olefredrik))
- Updated docs [\#310](https://github.com/olefredrik/fiftytwo/pull/310) ([olefredrik](https://github.com/olefredrik))
- Improved Method to Check For Direct Access to a File [\#309](https://github.com/olefredrik/fiftytwo/pull/309) ([joshrathke](https://github.com/joshrathke))
- Added link to integration guide for Sensei LMS from WooThemes [\#307](https://github.com/olefredrik/fiftytwo/pull/307) ([olefredrik](https://github.com/olefredrik))
- Updated Action Hooks and Classes for Wordpress Coding Standards [\#298](https://github.com/olefredrik/fiftytwo/pull/298) ([joshrathke](https://github.com/joshrathke))
- Wordpress Coding Standards & Unit Testing Setup via Travis CI [\#288](https://github.com/olefredrik/fiftytwo/pull/288) ([joshrathke](https://github.com/joshrathke))
- Enqueue Main Stylesheet Using wp\_enqueue\_style For WP Coding Standards [\#285](https://github.com/olefredrik/fiftytwo/pull/285) ([joshrathke](https://github.com/joshrathke))
- Multi-level off-canvas menu [\#282](https://github.com/olefredrik/fiftytwo/pull/282) ([Tralapo](https://github.com/Tralapo))
- Shorter header for UI-toolkits in docs [\#279](https://github.com/olefredrik/fiftytwo/pull/279) ([olefredrik](https://github.com/olefredrik))
- Updated docs with tutorial for responsive images [\#278](https://github.com/olefredrik/fiftytwo/pull/278) ([olefredrik](https://github.com/olefredrik))
- Update/docs [\#270](https://github.com/olefredrik/fiftytwo/pull/270) ([olefredrik](https://github.com/olefredrik))
- Swedish language files added [\#269](https://github.com/olefredrik/fiftytwo/pull/269) ([andersju](https://github.com/andersju))
- Gruntfile with task time tracking and livereload [\#268](https://github.com/olefredrik/fiftytwo/pull/268) ([radel](https://github.com/radel))
- corrected the end tag from ul to ol [\#266](https://github.com/olefredrik/fiftytwo/pull/266) ([salaryman-ninja](https://github.com/salaryman-ninja))
- Added Finnish translation files. Thanks to @eccola [\#264](https://github.com/olefredrik/fiftytwo/pull/264) ([olefredrik](https://github.com/olefredrik))
- updated package.json [\#262](https://github.com/olefredrik/fiftytwo/pull/262) ([randmanrjr](https://github.com/randmanrjr))
- Update docs [\#256](https://github.com/olefredrik/fiftytwo/pull/256) ([olefredrik](https://github.com/olefredrik))
- Adjustments on base styling [\#249](https://github.com/olefredrik/fiftytwo/pull/249) ([olefredrik](https://github.com/olefredrik))
- Added link to video tutorial on installing fiftytwo [\#247](https://github.com/olefredrik/fiftytwo/pull/247) ([olefredrik](https://github.com/olefredrik))
- Clarify nodejs/libsass issue and workaround in docs [\#246](https://github.com/olefredrik/fiftytwo/pull/246) ([olefredrik](https://github.com/olefredrik))
- Feature/enqueue scripts [\#244](https://github.com/olefredrik/fiftytwo/pull/244) ([olefredrik](https://github.com/olefredrik))
- List a selection of sites built with FP [\#241](https://github.com/olefredrik/fiftytwo/pull/241) ([olefredrik](https://github.com/olefredrik))
- enqueue-scripts cleanup [\#240](https://github.com/olefredrik/fiftytwo/pull/240) ([olefredrik](https://github.com/olefredrik))
- Added a few more examples on sites built on FP [\#236](https://github.com/olefredrik/fiftytwo/pull/236) ([olefredrik](https://github.com/olefredrik))
- Fix to URL Problem : \#038; replaces & and breaks the navigation [\#233](https://github.com/olefredrik/fiftytwo/pull/233) ([navidkashani](https://github.com/navidkashani))
- A little housekeeping ... [\#225](https://github.com/olefredrik/fiftytwo/pull/225) ([grantnorwood](https://github.com/grantnorwood))
- Feature/font awesome [\#224](https://github.com/olefredrik/fiftytwo/pull/224) ([olefredrik](https://github.com/olefredrik))
- Feature/font awesome [\#222](https://github.com/olefredrik/fiftytwo/pull/222) ([olefredrik](https://github.com/olefredrik))
- Updated the list of examples of sites built using FP [\#221](https://github.com/olefredrik/fiftytwo/pull/221) ([olefredrik](https://github.com/olefredrik))
- Update kitchen-sink.php [\#218](https://github.com/olefredrik/fiftytwo/pull/218) ([modlife](https://github.com/modlife))
- Feature/upgrade [\#214](https://github.com/olefredrik/fiftytwo/pull/214) ([olefredrik](https://github.com/olefredrik))
- Fix issue \#202 [\#203](https://github.com/olefredrik/fiftytwo/pull/203) ([olefredrik](https://github.com/olefredrik))
- fixed typo [\#201](https://github.com/olefredrik/fiftytwo/pull/201) ([themestechnology](https://github.com/themestechnology))
- Added Child Theme Support [\#198](https://github.com/olefredrik/fiftytwo/pull/198) ([themestechnology](https://github.com/themestechnology))
- fixed issue 194 strickt standards [\#195](https://github.com/olefredrik/fiftytwo/pull/195) ([DamianS1987](https://github.com/DamianS1987))
- Update comments.php [\#193](https://github.com/olefredrik/fiftytwo/pull/193) ([Pourcentage](https://github.com/Pourcentage))
- Fix for comments.php [\#192](https://github.com/olefredrik/fiftytwo/pull/192) ([themestechnology](https://github.com/themestechnology))
-  fiftytwo\_comments funcation moved out of comments.php [\#191](https://github.com/olefredrik/fiftytwo/pull/191) ([themestechnology](https://github.com/themestechnology))
- removed bower\_components from git cache [\#189](https://github.com/olefredrik/fiftytwo/pull/189) ([olefredrik](https://github.com/olefredrik))
- Ignore bower\_components [\#187](https://github.com/olefredrik/fiftytwo/pull/187) ([tormjens](https://github.com/tormjens))
- Display comments only on pages and posts [\#182](https://github.com/olefredrik/fiftytwo/pull/182) ([themestechnology](https://github.com/themestechnology))
- Wrapped links in list [\#176](https://github.com/olefredrik/fiftytwo/pull/176) ([olefredrik](https://github.com/olefredrik))
- Updated docs [\#175](https://github.com/olefredrik/fiftytwo/pull/175) ([olefredrik](https://github.com/olefredrik))
- Feature/update dependencies [\#174](https://github.com/olefredrik/fiftytwo/pull/174) ([olefredrik](https://github.com/olefredrik))
- Add Custom header in Appearance [\#171](https://github.com/olefredrik/fiftytwo/pull/171) ([mnuhell](https://github.com/mnuhell))
- Update gitignore [\#170](https://github.com/olefredrik/fiftytwo/pull/170) ([olefredrik](https://github.com/olefredrik))
- Corrected typo from last commit [\#169](https://github.com/olefredrik/fiftytwo/pull/169) ([olefredrik](https://github.com/olefredrik))
- Added sass-cache to gitignore [\#168](https://github.com/olefredrik/fiftytwo/pull/168) ([olefredrik](https://github.com/olefredrik))
- Feature/project cleanup [\#167](https://github.com/olefredrik/fiftytwo/pull/167) ([olefredrik](https://github.com/olefredrik))
- Feature/upgrade [\#166](https://github.com/olefredrik/fiftytwo/pull/166) ([olefredrik](https://github.com/olefredrik))
- Update top-bar.php [\#159](https://github.com/olefredrik/fiftytwo/pull/159) ([linuxbastard](https://github.com/linuxbastard))
- Update kitchen-sink.php [\#157](https://github.com/olefredrik/fiftytwo/pull/157) ([linuxbastard](https://github.com/linuxbastard))
- Fix errors in bower.json [\#152](https://github.com/olefredrik/fiftytwo/pull/152) ([GregRR](https://github.com/GregRR))
- the current code causes a validation error by turning the \</span\> to a \<... [\#150](https://github.com/olefredrik/fiftytwo/pull/150) ([thisismyurl](https://github.com/thisismyurl))
- Add Japanese translation files [\#144](https://github.com/olefredrik/fiftytwo/pull/144) ([megane9988](https://github.com/megane9988))
- Dutch translation files [\#139](https://github.com/olefredrik/fiftytwo/pull/139) ([violacase](https://github.com/violacase))
- Format time and date according to WordPress settings. [\#134](https://github.com/olefredrik/fiftytwo/pull/134) ([mikkelbreum](https://github.com/mikkelbreum))
- Update app.scss [\#119](https://github.com/olefredrik/fiftytwo/pull/119) ([eleirgulen](https://github.com/eleirgulen))
- Added Italian translation [\#113](https://github.com/olefredrik/fiftytwo/pull/113) ([kekkorider](https://github.com/kekkorider))
- Move ARIA Hidden attribute from content container to off-canvas menu [\#109](https://github.com/olefredrik/fiftytwo/pull/109) ([jmbarlow](https://github.com/jmbarlow))
- German language files added [\#100](https://github.com/olefredrik/fiftytwo/pull/100) ([olli0578](https://github.com/olli0578))
- class and id attributes for img caption shortcode [\#98](https://github.com/olefredrik/fiftytwo/pull/98) ([jhodgski](https://github.com/jhodgski))
- Spelling correction [\#93](https://github.com/olefredrik/fiftytwo/pull/93) ([jmotes](https://github.com/jmotes))
- child theme function override for navigation.php [\#88](https://github.com/olefredrik/fiftytwo/pull/88) ([fourhexagons](https://github.com/fourhexagons))
- Spanish language files added [\#87](https://github.com/olefredrik/fiftytwo/pull/87) ([afermon](https://github.com/afermon))
- Update navigation.php [\#85](https://github.com/olefredrik/fiftytwo/pull/85) ([thewebsitedev](https://github.com/thewebsitedev))
- Sidebar on the left - with no file changes! [\#80](https://github.com/olefredrik/fiftytwo/pull/80) ([jmbarlow](https://github.com/jmbarlow))
- Convert spaces to tabs, fix indention, remove trailing whitespace, ensure newline at EOF. [\#79](https://github.com/olefredrik/fiftytwo/pull/79) ([fk](https://github.com/fk))
- Removed extra commas, easier child theming [\#78](https://github.com/olefredrik/fiftytwo/pull/78) ([grantnorwood](https://github.com/grantnorwood))
- French Language files added [\#77](https://github.com/olefredrik/fiftytwo/pull/77) ([dantahoua](https://github.com/dantahoua))
- Fix for bug \#66 [\#67](https://github.com/olefredrik/fiftytwo/pull/67) ([jmotes](https://github.com/jmotes))
- Adding child theme support [\#63](https://github.com/olefredrik/fiftytwo/pull/63) ([katzueno](https://github.com/katzueno))
- Add data-offcanvas attribute [\#59](https://github.com/olefredrik/fiftytwo/pull/59) ([mjaverto](https://github.com/mjaverto))
- Update style.css [\#39](https://github.com/olefredrik/fiftytwo/pull/39) ([adelineyaw](https://github.com/adelineyaw))
- Add a Featured Image to Single Post Template [\#37](https://github.com/olefredrik/fiftytwo/pull/37) ([jmbarlow](https://github.com/jmbarlow))
- has-dropdown class appears when $depth set to 1 [\#35](https://github.com/olefredrik/fiftytwo/pull/35) ([wlanni](https://github.com/wlanni))
- First commit adding do\_action Hooks [\#32](https://github.com/olefredrik/fiftytwo/pull/32) ([PixelbarEupen](https://github.com/PixelbarEupen))
- Add hooks to fiftytwo widgets registration [\#19](https://github.com/olefredrik/fiftytwo/pull/19) ([NejcDraganjec](https://github.com/NejcDraganjec))
- Fixed pagination. [\#5](https://github.com/olefredrik/fiftytwo/pull/5) ([dloranc](https://github.com/dloranc))
- adding child theme override functionality [\#3](https://github.com/olefredrik/fiftytwo/pull/3) ([thetrickster](https://github.com/thetrickster))
- missing '/' in wp\_enqueue\_script [\#2](https://github.com/olefredrik/fiftytwo/pull/2) ([azhsetiawan](https://github.com/azhsetiawan))
- Fixed tiny typo in README [\#1](https://github.com/olefredrik/fiftytwo/pull/1) ([lukerollans](https://github.com/lukerollans))



\* *This Change Log was automatically generated by [github_changelog_generator](https://github.com/skywinder/Github-Changelog-Generator)*
