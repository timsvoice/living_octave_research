<?php return array (
  '55669405562c63ff2fc16a812e81667d' => 
  array (
    'criteria' => 
    array (
      'name' => 'breadcrumbs',
    ),
    'object' => 
    array (
      'name' => 'breadcrumbs',
      'path' => '{core_path}components/breadcrumbs/',
      'assets_path' => '',
    ),
  ),
  'adc358a5c5488f7302764cfbcd6d8a27' => 
  array (
    'criteria' => 
    array (
      'category' => 'Breadcrumbs',
    ),
    'object' => 
    array (
      'id' => 8,
      'parent' => 0,
      'category' => 'Breadcrumbs',
    ),
    'files' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/livingoctaveresearch/core/components',
    ),
  ),
  '0b55466d2c3a449e525581fa3c60f8d0' => 
  array (
    'criteria' => 
    array (
      'name' => 'Breadcrumbs',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Breadcrumbs',
      'description' => '',
      'editor_type' => 0,
      'category' => 8,
      'cache_type' => 0,
      'snippet' => '/**
 * BreadCrumbs
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun+bc@modx.com>
 *
 * BreadCrumbs is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumbs is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumbs; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumbs
 */
/**
 * @name BreadCrumbs
 * @version 0.9f
 * @created 2006-06-12
 * @since 2009-05-11
 * @author Jared <jaredc@honeydewdesign.com>
 * @editor Bill Wilson
 * @editor wendy@djamoer.net
 * @editor grad
 * @editor Shaun McCormick <shaun@collabpad.com>
 * @editor Shawn Wilkerson <shawn@shawnwilkerson.com>
 * @editor Wieger Sloot, Sterc.nl <wieger@sterc.nl>
 * @tester Bob Ray
 * @package breadcrumbs
 *
 * This snippet was designed to show the path through the various levels of site
 * structure back to the root. It is NOT necessarily the path the user took to
 * arrive at a given page.
 *
 * @see breadcrumbs.class.php for config settings
 *
 * Included classes
 * .B_crumbBox Span that surrounds all crumb output
 * .B_hideCrumb Span surrounding the "..." if there are more crumbs than will be shown
 * .B_currentCrumb Span or A tag surrounding the current crumb
 * .B_firstCrumb Span that always surrounds the first crumb, whether it is "home" or not
 * .B_lastCrumb Span surrounding last crumb, whether it is the current page or not .
 * .B_crumb Class given to each A tag surrounding the intermediate crumbs (not home, or
 * hide)
 * .B_homeCrumb Class given to the home crumb
 */
require_once $modx->getOption(\'breadcrumbs.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumbs/\').\'model/breadcrumbs/breadcrumbs.class.php\';
$bc = new BreadCrumbs($modx,$scriptProperties);
return $bc->run();',
      'locked' => 0,
      'properties' => '',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * BreadCrumbs
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun+bc@modx.com>
 *
 * BreadCrumbs is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumbs is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumbs; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumbs
 */
/**
 * @name BreadCrumbs
 * @version 0.9f
 * @created 2006-06-12
 * @since 2009-05-11
 * @author Jared <jaredc@honeydewdesign.com>
 * @editor Bill Wilson
 * @editor wendy@djamoer.net
 * @editor grad
 * @editor Shaun McCormick <shaun@collabpad.com>
 * @editor Shawn Wilkerson <shawn@shawnwilkerson.com>
 * @editor Wieger Sloot, Sterc.nl <wieger@sterc.nl>
 * @tester Bob Ray
 * @package breadcrumbs
 *
 * This snippet was designed to show the path through the various levels of site
 * structure back to the root. It is NOT necessarily the path the user took to
 * arrive at a given page.
 *
 * @see breadcrumbs.class.php for config settings
 *
 * Included classes
 * .B_crumbBox Span that surrounds all crumb output
 * .B_hideCrumb Span surrounding the "..." if there are more crumbs than will be shown
 * .B_currentCrumb Span or A tag surrounding the current crumb
 * .B_firstCrumb Span that always surrounds the first crumb, whether it is "home" or not
 * .B_lastCrumb Span surrounding last crumb, whether it is the current page or not .
 * .B_crumb Class given to each A tag surrounding the intermediate crumbs (not home, or
 * hide)
 * .B_homeCrumb Class given to the home crumb
 */
require_once $modx->getOption(\'breadcrumbs.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumbs/\').\'model/breadcrumbs/breadcrumbs.class.php\';
$bc = new BreadCrumbs($modx,$scriptProperties);
return $bc->run();',
    ),
  ),
);