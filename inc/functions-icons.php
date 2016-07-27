<?php
/**
 * Font icon functions used in the theme.
 *
 * @package    Extant
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2015, Justin Tadlock
 * @link       http://themehybrid.com/themes/extant
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Returns the font icon code (e.g., `f001`).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return string
 */
function extant_get_font_icon_code( $name ) {

	$icons = extant_get_font_icons();

	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/**
 * Returns the font icon HTML character (e.g., `&#xf001`).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return string
 */
function extant_get_font_icon_text( $name ) {

	$icon = extant_get_font_icon_code( $name );

	return $icon ? "&#x{$icon}" : '';
}

/**
 * Returns the font icon HTML element.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return string
 */
function extant_get_font_icon_html( $name ) {

	return sprintf( '<i class="%s" aria-hidden="true"></i>', sanitize_html_class( $name ) );
}

/**
 * Returns the font icon code for use in CSS (e.g., `\f001`).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return string
 */
function extant_get_font_icon_css( $name ) {

	$icon = extant_get_font_icon_code( $name );

	return $icon ? "\\{$icon}" : '';
}

/**
 * Checks if a font icon exists.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return bool
 */
function extant_font_icon_exists( $name ) {

	$icons = extant_get_font_icons();

	return isset( $icons[ $name ] );
}

/**
 * Validation function for font icons.  Checks if the icon exists.  If so,
 * it returns the icon.  Else, it returns the fallback.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $icon
 * @return string
 */
function extant_validate_font_icon( $icon ) {

	return extant_font_icon_exists( $icon ) ? $icon : '';
}

/**
 * Returns an array of font icon class names (key) and codes (value).  By default,
 * this uses Font Awesome.  However, devs can plug in their preferred icon set.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function extant_get_font_icons() {

	$icons = array(
		'icon-glass'                               => 'f000',
		'icon-music'                               => 'f001',
		'icon-search'                              => 'f002',
		'icon-envelope-o'                          => 'f003',
		'icon-heart'                               => 'f004',
		'icon-star'                                => 'f005',
		'icon-star-o'                              => 'f006',
		'icon-user'                                => 'f007',
		'icon-film'                                => 'f008',
		'icon-th-large'                            => 'f009',
		'icon-th'                                  => 'f00a',
		'icon-th-list'                             => 'f00b',
		'icon-check'                               => 'f00c',
		'icon-times'                               => 'f00d',
		'icon-search-plus'                         => 'f00e',
		'icon-search-minus'                        => 'f010',
		'icon-power-off'                           => 'f011',
		'icon-signal'                              => 'f012',
		'icon-cog'                                 => 'f013',
		'icon-trash-o'                             => 'f014',
		'icon-home'                                => 'f015',
		'icon-file-o'                              => 'f016',
		'icon-clock-o'                             => 'f017',
		'icon-road'                                => 'f018',
		'icon-download'                            => 'f019',
		'icon-arrow-circle-o-down'                 => 'f01a',
		'icon-arrow-circle-o-up'                   => 'f01b',
		'icon-inbox'                               => 'f01c',
		'icon-play-circle-o'                       => 'f01d',
		'icon-repeat'                              => 'f01e',
		'icon-refresh'                             => 'f021',
		'icon-list-alt'                            => 'f022',
		'icon-lock'                                => 'f023',
		'icon-flag'                                => 'f024',
		'icon-headphones'                          => 'f025',
		'icon-volume-off'                          => 'f026',
		'icon-volume-down'                         => 'f027',
		'icon-volume-up'                           => 'f028',
		'icon-qrcode'                              => 'f029',
		'icon-barcode'                             => 'f02a',
		'icon-tag'                                 => 'f02b',
		'icon-tags'                                => 'f02c',
		'icon-book'                                => 'f02d',
		'icon-bookmark'                            => 'f02e',
		'icon-print'                               => 'f02f',
		'icon-camera'                              => 'f030',
		'icon-font'                                => 'f031',
		'icon-bold'                                => 'f032',
		'icon-italic'                              => 'f033',
		'icon-text-height'                         => 'f034',
		'icon-text-width'                          => 'f035',
		'icon-align-left'                          => 'f036',
		'icon-align-center'                        => 'f037',
		'icon-align-right'                         => 'f038',
		'icon-align-justify'                       => 'f039',
		'icon-list'                                => 'f03a',
		'icon-outdent'                             => 'f03b',
		'icon-indent'                              => 'f03c',
		'icon-video-camera'                        => 'f03d',
		'icon-picture-o'                           => 'f03e',
		'icon-pencil'                              => 'f040',
		'icon-map-marker'                          => 'f041',
		'icon-adjust'                              => 'f042',
		'icon-tint'                                => 'f043',
		'icon-pencil-square-o'                     => 'f044',
		'icon-share-square-o'                      => 'f045',
		'icon-check-square-o'                      => 'f046',
		'icon-arrows'                              => 'f047',
		'icon-step-backward'                       => 'f048',
		'icon-fast-backward'                       => 'f049',
		'icon-backward'                            => 'f04a',
		'icon-play'                                => 'f04b',
		'icon-pause'                               => 'f04c',
		'icon-stop'                                => 'f04d',
		'icon-forward'                             => 'f04e',
		'icon-fast-forward'                        => 'f050',
		'icon-step-forward'                        => 'f051',
		'icon-eject'                               => 'f052',
		'icon-chevron-left'                        => 'f053',
		'icon-chevron-right'                       => 'f054',
		'icon-plus-circle'                         => 'f055',
		'icon-minus-circle'                        => 'f056',
		'icon-times-circle'                        => 'f057',
		'icon-check-circle'                        => 'f058',
		'icon-question-circle'                     => 'f059',
		'icon-info-circle'                         => 'f05a',
		'icon-crosshairs'                          => 'f05b',
		'icon-times-circle-o'                      => 'f05c',
		'icon-check-circle-o'                      => 'f05d',
		'icon-ban'                                 => 'f05e',
		'icon-arrow-left'                          => 'f060',
		'icon-arrow-right'                         => 'f061',
		'icon-arrow-up'                            => 'f062',
		'icon-arrow-down'                          => 'f063',
		'icon-share'                               => 'f064',
		'icon-expand'                              => 'f065',
		'icon-compress'                            => 'f066',
		'icon-plus'                                => 'f067',
		'icon-minus'                               => 'f068',
		'icon-asterisk'                            => 'f069',
		'icon-exclamation-circle'                  => 'f06a',
		'icon-gift'                                => 'f06b',
		'icon-leaf'                                => 'f06c',
		'icon-fire'                                => 'f06d',
		'icon-eye'                                 => 'f06e',
		'icon-eye-slash'                           => 'f070',
		'icon-exclamation-triangle'                => 'f071',
		'icon-plane'                               => 'f072',
		'icon-calendar'                            => 'f073',
		'icon-random'                              => 'f074',
		'icon-comment'                             => 'f075',
		'icon-magnet'                              => 'f076',
		'icon-chevron-up'                          => 'f077',
		'icon-chevron-down'                        => 'f078',
		'icon-retweet'                             => 'f079',
		'icon-shopping-cart'                       => 'f07a',
		'icon-folder'                              => 'f07b',
		'icon-folder-open'                         => 'f07c',
		'icon-arrows-v'                            => 'f07d',
		'icon-arrows-h'                            => 'f07e',
		'icon-bar-chart'                           => 'f080',
		'icon-twitter-square'                      => 'f081',
		'icon-facebook-square'                     => 'f082',
		'icon-camera-retro'                        => 'f083',
		'icon-key'                                 => 'f084',
		'icon-cogs'                                => 'f085',
		'icon-comments'                            => 'f086',
		'icon-thumbs-o-up'                         => 'f087',
		'icon-thumbs-o-down'                       => 'f088',
		'icon-star-half'                           => 'f089',
		'icon-heart-o'                             => 'f08a',
		'icon-sign-out'                            => 'f08b',
		'icon-linkedin-square'                     => 'f08c',
		'icon-thumb-tack'                          => 'f08d',
		'icon-external-link'                       => 'f08e',
		'icon-sign-in'                             => 'f090',
		'icon-trophy'                              => 'f091',
		'icon-github-square'                       => 'f092',
		'icon-upload'                              => 'f093',
		'icon-lemon-o'                             => 'f094',
		'icon-phone'                               => 'f095',
		'icon-square-o'                            => 'f096',
		'icon-bookmark-o'                          => 'f097',
		'icon-phone-square'                        => 'f098',
		'icon-twitter'                             => 'f099',
		'icon-facebook'                            => 'f09a',
		'icon-github'                              => 'f09b',
		'icon-unlock'                              => 'f09c',
		'icon-credit-card'                         => 'f09d',
		'icon-rss'                                 => 'f09e',
		'icon-hdd-o'                               => 'f0a0',
		'icon-bullhorn'                            => 'f0a1',
		'icon-bell'                                => 'f0f3',
		'icon-certificate'                         => 'f0a3',
		'icon-hand-o-right'                        => 'f0a4',
		'icon-hand-o-left'                         => 'f0a5',
		'icon-hand-o-up'                           => 'f0a6',
		'icon-hand-o-down'                         => 'f0a7',
		'icon-arrow-circle-left'                   => 'f0a8',
		'icon-arrow-circle-right'                  => 'f0a9',
		'icon-arrow-circle-up'                     => 'f0aa',
		'icon-arrow-circle-down'                   => 'f0ab',
		'icon-globe'                               => 'f0ac',
		'icon-wrench'                              => 'f0ad',
		'icon-tasks'                               => 'f0ae',
		'icon-filter'                              => 'f0b0',
		'icon-briefcase'                           => 'f0b1',
		'icon-arrows-alt'                          => 'f0b2',
		'icon-users'                               => 'f0c0',
		'icon-link'                                => 'f0c1',
		'icon-cloud'                               => 'f0c2',
		'icon-flask'                               => 'f0c3',
		'icon-scissors'                            => 'f0c4',
		'icon-files-o'                             => 'f0c5',
		'icon-paperclip'                           => 'f0c6',
		'icon-floppy-o'                            => 'f0c7',
		'icon-square'                              => 'f0c8',
		'icon-bars'                                => 'f0c9',
		'icon-list-ul'                             => 'f0ca',
		'icon-list-ol'                             => 'f0cb',
		'icon-strikethrough'                       => 'f0cc',
		'icon-underline'                           => 'f0cd',
		'icon-table'                               => 'f0ce',
		'icon-magic'                               => 'f0d0',
		'icon-truck'                               => 'f0d1',
		'icon-pinterest'                           => 'f0d2',
		'icon-pinterest-square'                    => 'f0d3',
		'icon-google-plus-square'                  => 'f0d4',
		'icon-google-plus'                         => 'f0d5',
		'icon-money'                               => 'f0d6',
		'icon-caret-down'                          => 'f0d7',
		'icon-caret-up'                            => 'f0d8',
		'icon-caret-left'                          => 'f0d9',
		'icon-caret-right'                         => 'f0da',
		'icon-columns'                             => 'f0db',
		'icon-sort'                                => 'f0dc',
		'icon-sort-desc'                           => 'f0dd',
		'icon-sort-asc'                            => 'f0de',
		'icon-envelope'                            => 'f0e0',
		'icon-linkedin'                            => 'f0e1',
		'icon-undo'                                => 'f0e2',
		'icon-gavel'                               => 'f0e3',
		'icon-tachometer'                          => 'f0e4',
		'icon-comment-o'                           => 'f0e5',
		'icon-comments-o'                          => 'f0e6',
		'icon-bolt'                                => 'f0e7',
		'icon-sitemap'                             => 'f0e8',
		'icon-umbrella'                            => 'f0e9',
		'icon-clipboard'                           => 'f0ea',
		'icon-lightbulb-o'                         => 'f0eb',
		'icon-exchange'                            => 'f0ec',
		'icon-cloud-download'                      => 'f0ed',
		'icon-cloud-upload'                        => 'f0ee',
		'icon-user-md'                             => 'f0f0',
		'icon-stethoscope'                         => 'f0f1',
		'icon-suitcase'                            => 'f0f2',
		'icon-bell-o'                              => 'f0a2',
		'icon-coffee'                              => 'f0f4',
		'icon-cutlery'                             => 'f0f5',
		'icon-file-text-o'                         => 'f0f6',
		'icon-building-o'                          => 'f0f7',
		'icon-hospital-o'                          => 'f0f8',
		'icon-ambulance'                           => 'f0f9',
		'icon-medkit'                              => 'f0fa',
		'icon-fighter-jet'                         => 'f0fb',
		'icon-beer'                                => 'f0fc',
		'icon-h-square'                            => 'f0fd',
		'icon-plus-square'                         => 'f0fe',
		'icon-angle-double-left'                   => 'f100',
		'icon-angle-double-right'                  => 'f101',
		'icon-angle-double-up'                     => 'f102',
		'icon-angle-double-down'                   => 'f103',
		'icon-angle-left'                          => 'f104',
		'icon-angle-right'                         => 'f105',
		'icon-angle-up'                            => 'f106',
		'icon-angle-down'                          => 'f107',
		'icon-desktop'                             => 'f108',
		'icon-laptop'                              => 'f109',
		'icon-tablet'                              => 'f10a',
		'icon-mobile'                              => 'f10b',
		'icon-circle-o'                            => 'f10c',
		'icon-quote-left'                          => 'f10d',
		'icon-quote-right'                         => 'f10e',
		'icon-spinner'                             => 'f110',
		'icon-circle'                              => 'f111',
		'icon-reply'                               => 'f112',
		'icon-github-alt'                          => 'f113',
		'icon-folder-o'                            => 'f114',
		'icon-folder-open-o'                       => 'f115',
		'icon-smile-o'                             => 'f118',
		'icon-frown-o'                             => 'f119',
		'icon-meh-o'                               => 'f11a',
		'icon-gamepad'                             => 'f11b',
		'icon-keyboard-o'                          => 'f11c',
		'icon-flag-o'                              => 'f11d',
		'icon-flag-checkered'                      => 'f11e',
		'icon-terminal'                            => 'f120',
		'icon-code'                                => 'f121',
		'icon-reply-all'                           => 'f122',
		'icon-star-half-o'                         => 'f123',
		'icon-location-arrow'                      => 'f124',
		'icon-crop'                                => 'f125',
		'icon-code-fork'                           => 'f126',
		'icon-chain-broken'                        => 'f127',
		'icon-question'                            => 'f128',
		'icon-info'                                => 'f129',
		'icon-exclamation'                         => 'f12a',
		'icon-superscript'                         => 'f12b',
		'icon-subscript'                           => 'f12c',
		'icon-eraser'                              => 'f12d',
		'icon-puzzle-piece'                        => 'f12e',
		'icon-microphone'                          => 'f130',
		'icon-microphone-slash'                    => 'f131',
		'icon-shield'                              => 'f132',
		'icon-calendar-o'                          => 'f133',
		'icon-fire-extinguisher'                   => 'f134',
		'icon-rocket'                              => 'f135',
		'icon-maxcdn'                              => 'f136',
		'icon-chevron-circle-left'                 => 'f137',
		'icon-chevron-circle-right'                => 'f138',
		'icon-chevron-circle-up'                   => 'f139',
		'icon-chevron-circle-down'                 => 'f13a',
		'icon-html5'                               => 'f13b',
		'icon-css3'                                => 'f13c',
		'icon-anchor'                              => 'f13d',
		'icon-unlock-alt'                          => 'f13e',
		'icon-bullseye'                            => 'f140',
		'icon-ellipsis-h'                          => 'f141',
		'icon-ellipsis-v'                          => 'f142',
		'icon-rss-square'                          => 'f143',
		'icon-play-circle'                         => 'f144',
		'icon-ticket'                              => 'f145',
		'icon-minus-square'                        => 'f146',
		'icon-minus-square-o'                      => 'f147',
		'icon-level-up'                            => 'f148',
		'icon-level-down'                          => 'f149',
		'icon-check-square'                        => 'f14a',
		'icon-pencil-square'                       => 'f14b',
		'icon-external-link-square'                => 'f14c',
		'icon-share-square'                        => 'f14d',
		'icon-compass'                             => 'f14e',
		'icon-caret-square-o-down'                 => 'f150',
		'icon-caret-square-o-up'                   => 'f151',
		'icon-caret-square-o-right'                => 'f152',
		'icon-eur'                                 => 'f153',
		'icon-gbp'                                 => 'f154',
		'icon-usd'                                 => 'f155',
		'icon-inr'                                 => 'f156',
		'icon-jpy'                                 => 'f157',
		'icon-rub'                                 => 'f158',
		'icon-krw'                                 => 'f159',
		'icon-btc'                                 => 'f15a',
		'icon-file'                                => 'f15b',
		'icon-file-text'                           => 'f15c',
		'icon-sort-alpha-asc'                      => 'f15d',
		'icon-sort-alpha-desc'                     => 'f15e',
		'icon-sort-amount-asc'                     => 'f160',
		'icon-sort-amount-desc'                    => 'f161',
		'icon-sort-numeric-asc'                    => 'f162',
		'icon-sort-numeric-desc'                   => 'f163',
		'icon-thumbs-up'                           => 'f164',
		'icon-thumbs-down'                         => 'f165',
		'icon-youtube-square'                      => 'f166',
		'icon-youtube'                             => 'f167',
		'icon-xing'                                => 'f168',
		'icon-xing-square'                         => 'f169',
		'icon-youtube-play'                        => 'f16a',
		'icon-dropbox'                             => 'f16b',
		'icon-stack-overflow'                      => 'f16c',
		'icon-instagram'                           => 'f16d',
		'icon-flickr'                              => 'f16e',
		'icon-adn'                                 => 'f170',
		'icon-bitbucket'                           => 'f171',
		'icon-bitbucket-square'                    => 'f172',
		'icon-tumblr'                              => 'f173',
		'icon-tumblr-square'                       => 'f174',
		'icon-long-arrow-down'                     => 'f175',
		'icon-long-arrow-up'                       => 'f176',
		'icon-long-arrow-left'                     => 'f177',
		'icon-long-arrow-right'                    => 'f178',
		'icon-apple'                               => 'f179',
		'icon-windows'                             => 'f17a',
		'icon-android'                             => 'f17b',
		'icon-linux'                               => 'f17c',
		'icon-dribbble'                            => 'f17d',
		'icon-skype'                               => 'f17e',
		'icon-foursquare'                          => 'f180',
		'icon-trello'                              => 'f181',
		'icon-female'                              => 'f182',
		'icon-male'                                => 'f183',
		'icon-gratipay'                            => 'f184',
		'icon-sun-o'                               => 'f185',
		'icon-moon-o'                              => 'f186',
		'icon-archive'                             => 'f187',
		'icon-bug'                                 => 'f188',
		'icon-vk'                                  => 'f189',
		'icon-weibo'                               => 'f18a',
		'icon-renren'                              => 'f18b',
		'icon-pagelines'                           => 'f18c',
		'icon-stack-exchange'                      => 'f18d',
		'icon-arrow-circle-o-right'                => 'f18e',
		'icon-arrow-circle-o-left'                 => 'f190',
		'icon-caret-square-o-left'                 => 'f191',
		'icon-dot-circle-o'                        => 'f192',
		'icon-wheelchair'                          => 'f193',
		'icon-vimeo-square'                        => 'f194',
		'icon-try'                                 => 'f195',
		'icon-plus-square-o'                       => 'f196',
		'icon-space-shuttle'                       => 'f197',
		'icon-slack'                               => 'f198',
		'icon-envelope-square'                     => 'f199',
		'icon-wordpress'                           => 'f19a',
		'icon-openid'                              => 'f19b',
		'icon-university'                          => 'f19c',
		'icon-graduation-cap'                      => 'f19d',
		'icon-yahoo'                               => 'f19e',
		'icon-google'                              => 'f1a0',
		'icon-reddit'                              => 'f1a1',
		'icon-reddit-square'                       => 'f1a2',
		'icon-stumbleupon-circle'                  => 'f1a3',
		'icon-stumbleupon'                         => 'f1a4',
		'icon-delicious'                           => 'f1a5',
		'icon-digg'                                => 'f1a6',
		'icon-pied-piper-pp'                       => 'f1a7',
		'icon-pied-piper-alt'                      => 'f1a8',
		'icon-drupal'                              => 'f1a9',
		'icon-joomla'                              => 'f1aa',
		'icon-language'                            => 'f1ab',
		'icon-fax'                                 => 'f1ac',
		'icon-building'                            => 'f1ad',
		'icon-child'                               => 'f1ae',
		'icon-paw'                                 => 'f1b0',
		'icon-spoon'                               => 'f1b1',
		'icon-cube'                                => 'f1b2',
		'icon-cubes'                               => 'f1b3',
		'icon-behance'                             => 'f1b4',
		'icon-behance-square'                      => 'f1b5',
		'icon-steam'                               => 'f1b6',
		'icon-steam-square'                        => 'f1b7',
		'icon-recycle'                             => 'f1b8',
		'icon-car'                                 => 'f1b9',
		'icon-taxi'                                => 'f1ba',
		'icon-tree'                                => 'f1bb',
		'icon-spotify'                             => 'f1bc',
		'icon-deviantart'                          => 'f1bd',
		'icon-soundcloud'                          => 'f1be',
		'icon-database'                            => 'f1c0',
		'icon-file-pdf-o'                          => 'f1c1',
		'icon-file-word-o'                         => 'f1c2',
		'icon-file-excel-o'                        => 'f1c3',
		'icon-file-powerpoint-o'                   => 'f1c4',
		'icon-file-image-o'                        => 'f1c5',
		'icon-file-archive-o'                      => 'f1c6',
		'icon-file-audio-o'                        => 'f1c7',
		'icon-file-video-o'                        => 'f1c8',
		'icon-file-code-o'                         => 'f1c9',
		'icon-vine'                                => 'f1ca',
		'icon-codepen'                             => 'f1cb',
		'icon-jsfiddle'                            => 'f1cc',
		'icon-life-ring'                           => 'f1cd',
		'icon-circle-o-notch'                      => 'f1ce',
		'icon-rebel'                               => 'f1d0',
		'icon-empire'                              => 'f1d1',
		'icon-git-square'                          => 'f1d2',
		'icon-git'                                 => 'f1d3',
		'icon-hacker-news'                         => 'f1d4',
		'icon-tencent-weibo'                       => 'f1d5',
		'icon-qq'                                  => 'f1d6',
		'icon-weixin'                              => 'f1d7',
		'icon-paper-plane'                         => 'f1d8',
		'icon-paper-plane-o'                       => 'f1d9',
		'icon-history'                             => 'f1da',
		'icon-circle-thin'                         => 'f1db',
		'icon-header'                              => 'f1dc',
		'icon-paragraph'                           => 'f1dd',
		'icon-sliders'                             => 'f1de',
		'icon-share-alt'                           => 'f1e0',
		'icon-share-alt-square'                    => 'f1e1',
		'icon-bomb'                                => 'f1e2',
		'icon-futbol-o'                            => 'f1e3',
		'icon-tty'                                 => 'f1e4',
		'icon-binoculars'                          => 'f1e5',
		'icon-plug'                                => 'f1e6',
		'icon-slideshare'                          => 'f1e7',
		'icon-twitch'                              => 'f1e8',
		'icon-yelp'                                => 'f1e9',
		'icon-newspaper-o'                         => 'f1ea',
		'icon-wifi'                                => 'f1eb',
		'icon-calculator'                          => 'f1ec',
		'icon-paypal'                              => 'f1ed',
		'icon-google-wallet'                       => 'f1ee',
		'icon-cc-visa'                             => 'f1f0',
		'icon-cc-mastercard'                       => 'f1f1',
		'icon-cc-discover'                         => 'f1f2',
		'icon-cc-amex'                             => 'f1f3',
		'icon-cc-paypal'                           => 'f1f4',
		'icon-cc-stripe'                           => 'f1f5',
		'icon-bell-slash'                          => 'f1f6',
		'icon-bell-slash-o'                        => 'f1f7',
		'icon-trash'                               => 'f1f8',
		'icon-copyright'                           => 'f1f9',
		'icon-at'                                  => 'f1fa',
		'icon-eyedropper'                          => 'f1fb',
		'icon-paint-brush'                         => 'f1fc',
		'icon-birthday-cake'                       => 'f1fd',
		'icon-area-chart'                          => 'f1fe',
		'icon-pie-chart'                           => 'f200',
		'icon-line-chart'                          => 'f201',
		'icon-lastfm'                              => 'f202',
		'icon-lastfm-square'                       => 'f203',
		'icon-toggle-off'                          => 'f204',
		'icon-toggle-on'                           => 'f205',
		'icon-bicycle'                             => 'f206',
		'icon-bus'                                 => 'f207',
		'icon-ioxhost'                             => 'f208',
		'icon-angellist'                           => 'f209',
		'icon-cc'                                  => 'f20a',
		'icon-ils'                                 => 'f20b',
		'icon-meanpath'                            => 'f20c',
		'icon-buysellads'                          => 'f20d',
		'icon-connectdevelop'                      => 'f20e',
		'icon-dashcube'                            => 'f210',
		'icon-forumbee'                            => 'f211',
		'icon-leanpub'                             => 'f212',
		'icon-sellsy'                              => 'f213',
		'icon-shirtsinbulk'                        => 'f214',
		'icon-simplybuilt'                         => 'f215',
		'icon-skyatlas'                            => 'f216',
		'icon-cart-plus'                           => 'f217',
		'icon-cart-arrow-down'                     => 'f218',
		'icon-diamond'                             => 'f219',
		'icon-ship'                                => 'f21a',
		'icon-user-secret'                         => 'f21b',
		'icon-motorcycle'                          => 'f21c',
		'icon-street-view'                         => 'f21d',
		'icon-heartbeat'                           => 'f21e',
		'icon-venus'                               => 'f221',
		'icon-mars'                                => 'f222',
		'icon-mercury'                             => 'f223',
		'icon-transgender'                         => 'f224',
		'icon-transgender-alt'                     => 'f225',
		'icon-venus-double'                        => 'f226',
		'icon-mars-double'                         => 'f227',
		'icon-venus-mars'                          => 'f228',
		'icon-mars-stroke'                         => 'f229',
		'icon-mars-stroke-v'                       => 'f22a',
		'icon-mars-stroke-h'                       => 'f22b',
		'icon-neuter'                              => 'f22c',
		'icon-genderless'                          => 'f22d',
		'icon-facebook-official'                   => 'f230',
		'icon-pinterest-p'                         => 'f231',
		'icon-whatsapp'                            => 'f232',
		'icon-server'                              => 'f233',
		'icon-user-plus'                           => 'f234',
		'icon-user-times'                          => 'f235',
		'icon-bed'                                 => 'f236',
		'icon-viacoin'                             => 'f237',
		'icon-train'                               => 'f238',
		'icon-subway'                              => 'f239',
		'icon-medium'                              => 'f23a',
		'icon-y-combinator'                        => 'f23b',
		'icon-optin-monster'                       => 'f23c',
		'icon-opencart'                            => 'f23d',
		'icon-expeditedssl'                        => 'f23e',
		'icon-battery-full'                        => 'f240',
		'icon-battery-three-quarters'              => 'f241',
		'icon-battery-half'                        => 'f242',
		'icon-battery-quarter'                     => 'f243',
		'icon-battery-empty'                       => 'f244',
		'icon-mouse-pointer'                       => 'f245',
		'icon-i-cursor'                            => 'f246',
		'icon-object-group'                        => 'f247',
		'icon-object-ungroup'                      => 'f248',
		'icon-sticky-note'                         => 'f249',
		'icon-sticky-note-o'                       => 'f24a',
		'icon-cc-jcb'                              => 'f24b',
		'icon-cc-diners-club'                      => 'f24c',
		'icon-clone'                               => 'f24d',
		'icon-balance-scale'                       => 'f24e',
		'icon-hourglass-o'                         => 'f250',
		'icon-hourglass-start'                     => 'f251',
		'icon-hourglass-half'                      => 'f252',
		'icon-hourglass-end'                       => 'f253',
		'icon-hourglass'                           => 'f254',
		'icon-hand-rock-o'                         => 'f255',
		'icon-hand-paper-o'                        => 'f256',
		'icon-hand-scissors-o'                     => 'f257',
		'icon-hand-lizard-o'                       => 'f258',
		'icon-hand-spock-o'                        => 'f259',
		'icon-hand-pointer-o'                      => 'f25a',
		'icon-hand-peace-o'                        => 'f25b',
		'icon-trademark'                           => 'f25c',
		'icon-registered'                          => 'f25d',
		'icon-creative-commons'                    => 'f25e',
		'icon-gg'                                  => 'f260',
		'icon-gg-circle'                           => 'f261',
		'icon-tripadvisor'                         => 'f262',
		'icon-odnoklassniki'                       => 'f263',
		'icon-odnoklassniki-square'                => 'f264',
		'icon-get-pocket'                          => 'f265',
		'icon-wikipedia-w'                         => 'f266',
		'icon-safari'                              => 'f267',
		'icon-chrome'                              => 'f268',
		'icon-firefox'                             => 'f269',
		'icon-opera'                               => 'f26a',
		'icon-internet-explorer'                   => 'f26b',
		'icon-television'                          => 'f26c',
		'icon-contao'                              => 'f26d',
		'icon-500px'                               => 'f26e',
		'icon-amazon'                              => 'f270',
		'icon-calendar-plus-o'                     => 'f271',
		'icon-calendar-minus-o'                    => 'f272',
		'icon-calendar-times-o'                    => 'f273',
		'icon-calendar-check-o'                    => 'f274',
		'icon-industry'                            => 'f275',
		'icon-map-pin'                             => 'f276',
		'icon-map-signs'                           => 'f277',
		'icon-map-o'                               => 'f278',
		'icon-map'                                 => 'f279',
		'icon-commenting'                          => 'f27a',
		'icon-commenting-o'                        => 'f27b',
		'icon-houzz'                               => 'f27c',
		'icon-vimeo'                               => 'f27d',
		'icon-black-tie'                           => 'f27e',
		'icon-fonticons'                           => 'f280',
		'icon-reddit-alien'                        => 'f281',
		'icon-edge'                                => 'f282',
		'icon-credit-card-alt'                     => 'f283',
		'icon-codiepie'                            => 'f284',
		'icon-modx'                                => 'f285',
		'icon-fort-awesome'                        => 'f286',
		'icon-usb'                                 => 'f287',
		'icon-product-hunt'                        => 'f288',
		'icon-mixcloud'                            => 'f289',
		'icon-scribd'                              => 'f28a',
		'icon-pause-circle'                        => 'f28b',
		'icon-pause-circle-o'                      => 'f28c',
		'icon-stop-circle'                         => 'f28d',
		'icon-stop-circle-o'                       => 'f28e',
		'icon-shopping-bag'                        => 'f290',
		'icon-shopping-basket'                     => 'f291',
		'icon-hashtag'                             => 'f292',
		'icon-bluetooth'                           => 'f293',
		'icon-bluetooth-b'                         => 'f294',
		'icon-percent'                             => 'f295',
		'icon-gitlab'                              => 'f296',
		'icon-wpbeginner'                          => 'f297',
		'icon-wpforms'                             => 'f298',
		'icon-envira'                              => 'f299',
		'icon-universal-access'                    => 'f29a',
		'icon-wheelchair-alt'                      => 'f29b',
		'icon-question-circle-o'                   => 'f29c',
		'icon-blind'                               => 'f29d',
		'icon-audio-description'                   => 'f29e',
		'icon-volume-control-phone'                => 'f2a0',
		'icon-braille'                             => 'f2a1',
		'icon-assistive-listening-systems'         => 'f2a2',
		'icon-american-sign-language-interpreting' => 'f2a3',
		'icon-deaf'                                => 'f2a4',
		'icon-glide'                               => 'f2a5',
		'icon-glide-g'                             => 'f2a6',
		'icon-sign-language'                       => 'f2a7',
		'icon-low-vision'                          => 'f2a8',
		'icon-viadeo'                              => 'f2a9',
		'icon-viadeo-square'                       => 'f2aa',
		'icon-snapchat'                            => 'f2ab',
		'icon-snapchat-ghost'                      => 'f2ac',
		'icon-snapchat-square'                     => 'f2ad',
		'icon-pied-piper'                          => 'f2ae',
		'icon-first-order'                         => 'f2b0',
		'icon-yoast'                               => 'f2b1',
		'icon-themeisle'                           => 'f2b2',
		'icon-google-plus-official'                => 'f2b3',
		'icon-font-awesome'                        => 'f2b4'
	);

	return apply_filters( 'extant_font_icons', $icons );
}
