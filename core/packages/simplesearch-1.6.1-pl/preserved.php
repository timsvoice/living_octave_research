<?php return array (
  '5d6130990ec50816c6576881f64d23da' => 
  array (
    'criteria' => 
    array (
      'name' => 'sisea',
    ),
    'object' => 
    array (
      'name' => 'sisea',
      'path' => '{core_path}components/simplesearch/',
      'assets_path' => NULL,
    ),
  ),
  '57655d377b903f8317f943f77c5e959f' => 
  array (
    'criteria' => 
    array (
      'name' => 'SimpleSearchIndexer',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SimpleSearchIndexer',
      'description' => 'Automatically indexes Resources into Solr.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || !($search->driver instanceof SimpleSearchDriverSolr)) return;

/**
 * helper method for missing params in events
 * @param modX $modx
 * @param array $children
 * @param id $parent
 * @return boolean
 */
function SimpleSearchGetChildren(&$modx,&$children,$parent) {
    $success = false;
    $kids = $modx->getCollection(\'modResource\',array(
        \'parent\' => $parent,
    ));
    if (!empty($kids)) {
        /** @var modResource $kid */
        foreach ($kids as $kid) {
            $children[] = $kid->toArray();
            SimpleSearchGetChildren($modx,$children,$kid->get(\'id\'));
        }
    }
    return $success;
}

$action = \'index\';
$resourcesToIndex = array();
switch ($modx->event->name) {
    case \'OnDocFormSave\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        foreach ($_POST as $k => $v) {
            if (substr($k,0,2) == \'tv\') {
                $id = str_replace(\'tv\',\'\',$k);
                /** @var modTemplateVar $tv */
                $tv = $modx->getObject(\'modTemplateVar\',$id);
                if ($tv) {
                    $resourceArray[$tv->get(\'name\')] = $tv->renderOutput($resource->get(\'id\'));
                    $modx->log(modX::LOG_LEVEL_DEBUG,\'Indexing \'.$tv->get(\'name\').\': \'.$resourceArray[$tv->get(\'name\')]);
                }
                unset($resourceArray[$k]);
            }
        }
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocPublished\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocUnpublished\':
    case \'OnDocUnPublished\':
        $action = \'removeIndex\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnResourceDuplicate\':
        $action = \'index\';
        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$newResource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceDelete\':
        $action = \'removeIndex\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceUndelete\':
        $action = \'index\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray[\'id\'])) {
        if ($action == \'index\') {
            $search->driver->index($resourceArray);
        } else if ($action == \'removeIndex\') {
            $search->driver->removeIndex($resourceArray[\'id\']);
        }
    }
}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || !($search->driver instanceof SimpleSearchDriverSolr)) return;

/**
 * helper method for missing params in events
 * @param modX $modx
 * @param array $children
 * @param id $parent
 * @return boolean
 */
function SimpleSearchGetChildren(&$modx,&$children,$parent) {
    $success = false;
    $kids = $modx->getCollection(\'modResource\',array(
        \'parent\' => $parent,
    ));
    if (!empty($kids)) {
        /** @var modResource $kid */
        foreach ($kids as $kid) {
            $children[] = $kid->toArray();
            SimpleSearchGetChildren($modx,$children,$kid->get(\'id\'));
        }
    }
    return $success;
}

$action = \'index\';
$resourcesToIndex = array();
switch ($modx->event->name) {
    case \'OnDocFormSave\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        foreach ($_POST as $k => $v) {
            if (substr($k,0,2) == \'tv\') {
                $id = str_replace(\'tv\',\'\',$k);
                /** @var modTemplateVar $tv */
                $tv = $modx->getObject(\'modTemplateVar\',$id);
                if ($tv) {
                    $resourceArray[$tv->get(\'name\')] = $tv->renderOutput($resource->get(\'id\'));
                    $modx->log(modX::LOG_LEVEL_DEBUG,\'Indexing \'.$tv->get(\'name\').\': \'.$resourceArray[$tv->get(\'name\')]);
                }
                unset($resourceArray[$k]);
            }
        }
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocPublished\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocUnpublished\':
    case \'OnDocUnPublished\':
        $action = \'removeIndex\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnResourceDuplicate\':
        $action = \'index\';
        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$newResource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceDelete\':
        $action = \'removeIndex\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceUndelete\':
        $action = \'index\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray[\'id\'])) {
        if ($action == \'index\') {
            $search->driver->index($resourceArray);
        } else if ($action == \'removeIndex\') {
            $search->driver->removeIndex($resourceArray[\'id\']);
        }
    }
}
return;',
    ),
  ),
  '25fbcf917d0fd3187286a2a3178ba196' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'eda4729adba04e72e91afd2136a80294' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocPublished',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocPublished',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '2e50ee08e99513c0c1f5c1099269ba44' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocUnPublished',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocUnPublished',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '26ee8a198c53f133e50281796d5d1dd1' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceDuplicate',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceDuplicate',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0486f80d76338b158db8af75350824a6' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceDelete',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceDelete',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '4e317f7328b470f392cbd2813dde47cf' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceUndelete',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnResourceUndelete',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'bbecf89452ece5fe93ede0cc473c45d1' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.driver_class',
    ),
    'object' => 
    array (
      'key' => 'sisea.driver_class',
      'value' => 'SimpleSearchDriverBasic',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Drivers',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '939d768c4f9ac3011688db2d5c98298a' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.driver_class_path',
    ),
    'object' => 
    array (
      'key' => 'sisea.driver_class_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Drivers',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b153520380e78e619c4fc752629130e9' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.driver_db_specific',
    ),
    'object' => 
    array (
      'key' => 'sisea.driver_db_specific',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'sisea',
      'area' => 'Drivers',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '404fd8fcf2ccb8fae58ca287c5055073' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.hostname',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.hostname',
      'value' => '127.0.0.1',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '212cd40dbe784349c41e280fd4bf84bb' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.port',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.port',
      'value' => '8983',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e83e8e39fd68088355079ea5d4c26336' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.path',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3c23c473f5aa944143fb1ece26d3b406' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.username',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.username',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '953810fe36f2e768a45bb32a1bf32098' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.password',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.password',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a94974358b38ae526fa4384fa8f929a8' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.timeout',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.timeout',
      'value' => '30',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e9864bc8919c7189512725b3a2d1fab9' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3ee40e6de3f766255fe27b13a2869d76' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl_cert',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl_cert',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9d2d0045e3aabadadf60d2f5ad891379' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl_key',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd3742990d091a67dc733761d2dab6bcb' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl_keypassword',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl_keypassword',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd9e0c1e1cf7ff3d2600f0155a1320058' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl_cainfo',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl_cainfo',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fba45640c0a212111daf8c7e554f53c3' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.ssl_capath',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.ssl_capath',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '30b9f7dc2d5e7bc5abba2ba1eb7a5f12' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.proxy_host',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.proxy_host',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fff95e4905a05b8d23a818f34b5e9d2e' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.proxy_port',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.proxy_port',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '181b57fc1a53ccb683ba52c00b19e045' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.proxy_username',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.proxy_username',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9f58cc7377038b1806125c9703f24112' => 
  array (
    'criteria' => 
    array (
      'key' => 'sisea.solr.proxy_password',
    ),
    'object' => 
    array (
      'key' => 'sisea.solr.proxy_password',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'sisea',
      'area' => 'Solr',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'eae83aa04196953df7c4c1228e4f4e05' => 
  array (
    'criteria' => 
    array (
      'category' => 'SimpleSearch',
    ),
    'object' => 
    array (
      'id' => 9,
      'parent' => 0,
      'category' => 'SimpleSearch',
    ),
    'files' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/livingoctaveresearch/core/components',
    ),
  ),
  '8bfec4071cd2f2e7e2a71b1eb390883b' => 
  array (
    'criteria' => 
    array (
      'name' => 'SimpleSearch',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SimpleSearch',
      'description' => '',
      'editor_type' => 0,
      'category' => 9,
      'cache_type' => 0,
      'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx);
        }
        if ($showExtract) {
            $extract = array_pop($search->searchArray);
            $extract = $search->createExtract($resourceArray[\'content\'],$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode("\\n",$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
      'locked' => 0,
      'properties' => 'a:43:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:14:"sisea.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"SearchResult";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:12:"containerTpl";a:7:{s:4:"name";s:12:"containerTpl";s:4:"desc";s:23:"sisea.containertpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"SearchResults";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"useAllWords";a:7:{s:4:"name";s:11:"useAllWords";s:4:"desc";s:22:"sisea.useallwords_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:8:"maxWords";a:7:{s:4:"name";s:8:"maxWords";s:4:"desc";s:19:"sisea.maxwords_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:7;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:8:"minChars";a:7:{s:4:"name";s:8:"minChars";s:4:"desc";s:19:"sisea.minchars_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:3;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"searchStyle";a:7:{s:4:"name";s:11:"searchStyle";s:4:"desc";s:22:"sisea.searchstyle_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:13:"sisea.partial";s:5:"value";s:7:"partial";}i:1;a:2:{s:4:"text";s:11:"sisea.match";s:5:"value";s:5:"match";}}s:5:"value";s:7:"partial";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:7:"perPage";a:7:{s:4:"name";s:7:"perPage";s:4:"desc";s:18:"sisea.perpage_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:10;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"showExtract";a:7:{s:4:"name";s:11:"showExtract";s:4:"desc";s:22:"sisea.showextract_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:13:"extractLength";a:7:{s:4:"name";s:13:"extractLength";s:4:"desc";s:24:"sisea.extractlength_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:200;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:15:"extractEllipsis";a:7:{s:4:"name";s:15:"extractEllipsis";s:4:"desc";s:26:"sisea.extractellipsis_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"...";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:21:"sisea.includetvs_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:21:"sisea.processtvs_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:16:"highlightResults";a:7:{s:4:"name";s:16:"highlightResults";s:4:"desc";s:27:"sisea.highlightresults_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:14:"highlightClass";a:7:{s:4:"name";s:14:"highlightClass";s:4:"desc";s:25:"sisea.highlightclass_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"sisea-highlight";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:12:"highlightTag";a:7:{s:4:"name";s:12:"highlightTag";s:4:"desc";s:23:"sisea.highlighttag_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"span";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:9:"pageLimit";a:7:{s:4:"name";s:9:"pageLimit";s:4:"desc";s:20:"sisea.pagelimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:7:"pageTpl";a:7:{s:4:"name";s:7:"pageTpl";s:4:"desc";s:18:"sisea.pagetpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"PageLink";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:12:"pageFirstTpl";a:7:{s:4:"name";s:12:"pageFirstTpl";s:4:"desc";s:23:"sisea.pagefirsttpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"pageLastTpl";a:7:{s:4:"name";s:11:"pageLastTpl";s:4:"desc";s:22:"sisea.pagelasttpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"pagePrevTpl";a:7:{s:4:"name";s:11:"pagePrevTpl";s:4:"desc";s:22:"sisea.pageprevtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"pageNextTpl";a:7:{s:4:"name";s:11:"pageNextTpl";s:4:"desc";s:22:"sisea.pagenexttpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:14:"currentPageTpl";a:7:{s:4:"name";s:14:"currentPageTpl";s:4:"desc";s:25:"sisea.currentpagetpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"CurrentPageLink";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:15:"pagingSeparator";a:7:{s:4:"name";s:15:"pagingSeparator";s:4:"desc";s:26:"sisea.pagingseparator_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:" | ";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:3:"ids";a:7:{s:4:"name";s:3:"ids";s:4:"desc";s:14:"sisea.ids_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:6:"idType";a:7:{s:4:"name";s:6:"idType";s:4:"desc";s:17:"sisea.idtype_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:13:"sisea.parents";s:5:"value";s:7:"parents";}i:1;a:2:{s:4:"text";s:15:"sisea.documents";s:5:"value";s:9:"documents";}}s:5:"value";s:7:"parents";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:7:"exclude";a:7:{s:4:"name";s:7:"exclude";s:4:"desc";s:18:"sisea.exclude_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:16:"sisea.depth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:10;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:8:"hideMenu";a:7:{s:4:"name";s:8:"hideMenu";s:4:"desc";s:19:"sisea.hidemenu_desc";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:22:"sisea.hidemenu_visible";s:5:"value";i:0;}i:1;a:2:{s:4:"text";s:21:"sisea.hidemenu_hidden";s:5:"value";i:1;}i:2;a:2:{s:4:"text";s:19:"sisea.hidemenu_both";s:5:"value";i:2;}}s:5:"value";i:2;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:19:"sisea.contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"searchIndex";a:7:{s:4:"name";s:11:"searchIndex";s:4:"desc";s:22:"sisea.searchindex_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"search";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"offsetIndex";a:7:{s:4:"name";s:11:"offsetIndex";s:4:"desc";s:22:"sisea.offsetindex_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"sisea_offset";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:28:"sisea.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"sisea.";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:24:"sisea.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:8:"andTerms";a:7:{s:4:"name";s:8:"andTerms";s:4:"desc";s:19:"sisea.andterms_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:13:"matchWildcard";a:7:{s:4:"name";s:13:"matchWildcard";s:4:"desc";s:24:"sisea.matchwildcard_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:9:"docFields";a:7:{s:4:"name";s:9:"docFields";s:4:"desc";s:20:"sisea.docfields_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:55:"pagetitle,longtitle,alias,description,introtext,content";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:12:"fieldPotency";a:7:{s:4:"name";s:12:"fieldPotency";s:4:"desc";s:23:"sisea.fieldpotency_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:9:"urlScheme";a:7:{s:4:"name";s:9:"urlScheme";s:4:"desc";s:20:"sisea.urlscheme_desc";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:18:"sisea.url_relative";s:5:"value";i:-1;}i:1;a:2:{s:4:"text";s:18:"sisea.url_absolute";s:5:"value";s:3:"abs";}i:2;a:2:{s:4:"text";s:14:"sisea.url_full";s:5:"value";s:4:"full";}}s:5:"value";i:-1;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:9:"postHooks";a:7:{s:4:"name";s:9:"postHooks";s:4:"desc";s:20:"sisea.posthooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"activeFacet";a:7:{s:4:"name";s:11:"activeFacet";s:4:"desc";s:22:"sisea.activefacet_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"default";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:10:"facetLimit";a:7:{s:4:"name";s:10:"facetLimit";s:4:"desc";s:21:"sisea.facetlimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:17:"sisea.sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:18:"sisea.sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:15:"sisea.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:16:"sisea.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx);
        }
        if ($showExtract) {
            $extract = array_pop($search->searchArray);
            $extract = $search->createExtract($resourceArray[\'content\'],$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode("\\n",$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
    ),
  ),
  '4d449f20ea63f021695a0e6f9f1005ef' => 
  array (
    'criteria' => 
    array (
      'name' => 'SimpleSearchForm',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SimpleSearchForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 9,
      'cache_type' => 0,
      'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
      'locked' => 0,
      'properties' => 'a:5:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:19:"sisea.tpl_form_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"SearchForm";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:7:"landing";a:7:{s:4:"name";s:7:"landing";s:4:"desc";s:18:"sisea.landing_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:11:"searchIndex";a:7:{s:4:"name";s:11:"searchIndex";s:4:"desc";s:22:"sisea.searchindex_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"search";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:6:"method";a:7:{s:4:"name";s:6:"method";s:4:"desc";s:17:"sisea.method_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:9:"sisea.get";s:5:"value";s:3:"get";}i:1;a:2:{s:4:"text";s:10:"sisea.post";s:5:"value";s:4:"post";}}s:5:"value";s:3:"get";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:24:"sisea.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"sisea:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
    ),
  ),
  '51c83eecd2fd3f2eb35d80faf8c9ff52' => 
  array (
    'criteria' => 
    array (
      'name' => 'SimpleSearchIndexAll',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SimpleSearchIndexAll',
      'description' => '',
      'editor_type' => 0,
      'category' => 9,
      'cache_type' => 0,
      'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearchIndexAll snippet, used for indexing all resources with alternate search drivers
 *
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);
$search->loadDriver($scriptProperties);

$memoryLimit = $modx->getOption(\'memory_limit\',$scriptProperties,\'512M\');
@ini_set(\'memory_limit\',$memoryLimit);
@set_time_limit(0);

$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,true);
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,true);

/* build query */
$c = $modx->newQuery(\'modResource\');
$c->where(array(
    \'searchable\' => true,
    \'deleted\' => false,
    \'published\' => true,
));
$c->sortby(\'id\',\'ASC\');
$resources = $modx->getIterator(\'modResource\',$c);

$i = 0;
foreach ($resources as $resource) {
    $resourceArray = $resource->toArray();
    $templateVars =& $resource->getMany(\'TemplateVars\');
    if (!empty($templateVars) && $includeTVs) {
        foreach ($templateVars as $tvId => $templateVar) {
            $resourceArray[$templateVar->get(\'name\')] = !empty($processTVs) ? $templateVar->renderOutput($resource->get(\'id\')) : $templateVar->get(\'value\');
        }
    }

    if ($search->driver->index($resourceArray,false)) {
        $modx->log(modX::LOG_LEVEL_INFO,\'[SimpleSearch] Indexing Resource: \'.$resourceArray[\'pagetitle\']);
        $i++;
    }
}

return $modx->lexicon(\'sisea.index_finished\',array(\'total\' => $i));',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearchIndexAll snippet, used for indexing all resources with alternate search drivers
 *
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);
$search->loadDriver($scriptProperties);

$memoryLimit = $modx->getOption(\'memory_limit\',$scriptProperties,\'512M\');
@ini_set(\'memory_limit\',$memoryLimit);
@set_time_limit(0);

$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,true);
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,true);

/* build query */
$c = $modx->newQuery(\'modResource\');
$c->where(array(
    \'searchable\' => true,
    \'deleted\' => false,
    \'published\' => true,
));
$c->sortby(\'id\',\'ASC\');
$resources = $modx->getIterator(\'modResource\',$c);

$i = 0;
foreach ($resources as $resource) {
    $resourceArray = $resource->toArray();
    $templateVars =& $resource->getMany(\'TemplateVars\');
    if (!empty($templateVars) && $includeTVs) {
        foreach ($templateVars as $tvId => $templateVar) {
            $resourceArray[$templateVar->get(\'name\')] = !empty($processTVs) ? $templateVar->renderOutput($resource->get(\'id\')) : $templateVar->get(\'value\');
        }
    }

    if ($search->driver->index($resourceArray,false)) {
        $modx->log(modX::LOG_LEVEL_INFO,\'[SimpleSearch] Indexing Resource: \'.$resourceArray[\'pagetitle\']);
        $i++;
    }
}

return $modx->lexicon(\'sisea.index_finished\',array(\'total\' => $i));',
    ),
  ),
);