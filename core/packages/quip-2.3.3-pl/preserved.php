<?php return array (
  '8de2f7af67c37e43738c09b32e7f6ec0' => 
  array (
    'criteria' => 
    array (
      'name' => 'quip',
    ),
    'object' => 
    array (
      'name' => 'quip',
      'path' => '{core_path}components/quip/',
      'assets_path' => NULL,
    ),
  ),
  'ce6b8fb293ad09a86b5aab4bea19f270' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'quip',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 81,
      'namespace' => 'quip',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'quip:default,file',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '002be56dad48d3afe5bd75f17c5d78d2' => 
  array (
    'criteria' => 
    array (
      'text' => 'quip',
    ),
    'object' => 
    array (
      'text' => 'quip',
      'parent' => 'components',
      'action' => 81,
      'description' => 'quip_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
    ),
  ),
  'b814bbfc8a1c7ff7d8b44cfe2439b210' => 
  array (
    'criteria' => 
    array (
      'name' => 'recaptcha',
    ),
    'object' => 
    array (
      'name' => 'recaptcha',
      'path' => '{core_path}components/recaptcha/',
      'assets_path' => '',
    ),
  ),
  '9c861c8bcdd341053c9a2e9a2c5f778d' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsFrom',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsFrom',
      'value' => 'timothyvoice@imcoctave.com',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2013-05-10 09:48:45',
    ),
  ),
  '58d8d5fe6013da519b475eb878abb105' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emails_from_name',
    ),
    'object' => 
    array (
      'key' => 'quip.emails_from_name',
      'value' => 'Quip',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fbd13c82c73e61edd944f70463cef6c6' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsTo',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsTo',
      'value' => 'timothyvoice@imcoctave.com',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2013-05-10 09:48:44',
    ),
  ),
  '3066617d701a08cc9713129e45588941' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsReplyTo',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsReplyTo',
      'value' => 'timothyvoice@imcoctave.com',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2013-05-10 09:48:45',
    ),
  ),
  '4811f2b6385eb8fc6dc99db338bda433' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.allowed_tags',
    ),
    'object' => 
    array (
      'key' => 'quip.allowed_tags',
      'value' => '<b><i><br>',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'Tags',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4031f1d77c58a8728e25e2a7ae77c202' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.public_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.public_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7554274d6c6387cfcbba8d72367afc12' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.private_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.private_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '646698f9f0877143c4313370c23fd797' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.use_ssl',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.use_ssl',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0e183a11fcce356570cb26c303b3a2ee' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipModeratorPolicy',
    ),
    'object' => 
    array (
      'id' => 13,
      'name' => 'QuipModeratorPolicy',
      'description' => 'A policy for moderating Quip comments.',
      'parent' => 0,
      'template' => 10,
      'class' => '',
      'data' => '{"quip.comment_approve":true,"quip.comment_list":true,"quip.comment_list_unapproved":true,"quip.comment_remove":true,"quip.comment_update":true,"quip.thread_list":true,"quip.thread_manage":true,"quip.thread_remove":true,"quip.thread_truncate":true,"quip.thread_view":true,"quip.thread_update":true}',
      'lexicon' => 'quip:permissions',
    ),
  ),
  '290b7ab53637a1e7b5536477ee2b45e9' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipModeratorPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 10,
      'template_group' => 1,
      'name' => 'QuipModeratorPolicyTemplate',
      'description' => 'A policy for moderating Quip comments.',
      'lexicon' => 'quip:permissions',
    ),
  ),
  '08637c79d03892491a095b3aae409115' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.comment_approve',
    ),
    'object' => 
    array (
      'id' => 225,
      'template' => 10,
      'name' => 'quip.comment_approve',
      'description' => 'perm.comment_approve',
      'value' => 1,
    ),
  ),
  'e833c1ffc93092016572dabc0f645125' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.comment_list',
    ),
    'object' => 
    array (
      'id' => 226,
      'template' => 10,
      'name' => 'quip.comment_list',
      'description' => 'perm.comment_list',
      'value' => 1,
    ),
  ),
  '2e05bb6d57ffba0ea80cdd60b12d825e' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.comment_list_unapproved',
    ),
    'object' => 
    array (
      'id' => 227,
      'template' => 10,
      'name' => 'quip.comment_list_unapproved',
      'description' => 'perm.comment_list_unapproved',
      'value' => 1,
    ),
  ),
  'd731b697eef6f4165be1e7b4c7d954c5' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.comment_remove',
    ),
    'object' => 
    array (
      'id' => 228,
      'template' => 10,
      'name' => 'quip.comment_remove',
      'description' => 'perm.comment_remove',
      'value' => 1,
    ),
  ),
  '5c7aa0b7e88f673dcfc11d6d2c64c84b' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.comment_update',
    ),
    'object' => 
    array (
      'id' => 229,
      'template' => 10,
      'name' => 'quip.comment_update',
      'description' => 'perm.comment_update',
      'value' => 1,
    ),
  ),
  '12a842fd46af56004ae14d149b530976' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_list',
    ),
    'object' => 
    array (
      'id' => 230,
      'template' => 10,
      'name' => 'quip.thread_list',
      'description' => 'perm.thread_list',
      'value' => 1,
    ),
  ),
  'eefa709380e0ced59ba267edb3d576d8' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_manage',
    ),
    'object' => 
    array (
      'id' => 231,
      'template' => 10,
      'name' => 'quip.thread_manage',
      'description' => 'perm.thread_manage',
      'value' => 1,
    ),
  ),
  '42ef8ad3a846fdaf1b8654af9bf3508b' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_remove',
    ),
    'object' => 
    array (
      'id' => 232,
      'template' => 10,
      'name' => 'quip.thread_remove',
      'description' => 'perm.thread_remove',
      'value' => 1,
    ),
  ),
  '4f5ae12a5346f45a0da803784740d413' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_truncate',
    ),
    'object' => 
    array (
      'id' => 233,
      'template' => 10,
      'name' => 'quip.thread_truncate',
      'description' => 'perm.thread_truncate',
      'value' => 1,
    ),
  ),
  '97c460d5bf5464de373a48eec41ca3d2' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_update',
    ),
    'object' => 
    array (
      'id' => 234,
      'template' => 10,
      'name' => 'quip.thread_update',
      'description' => 'perm.thread_update',
      'value' => 1,
    ),
  ),
  '9bb5378e0477968fd8cfcc5aa6efe6ea' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'quip.thread_view',
    ),
    'object' => 
    array (
      'id' => 235,
      'template' => 10,
      'name' => 'quip.thread_view',
      'description' => 'perm.thread_view',
      'value' => 1,
    ),
  ),
  '7d7197fb5dbc2c4bde10e664d9624f03' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipResourceCleaner',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipResourceCleaner',
      'description' => 'Cleans up threads when a Resource is removed.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return;

switch ($modx->event->name) {
    case \'OnEmptyTrash\':
        foreach ($scriptProperties[\'ids\'] as $id) {
            if (empty($id)) continue;

            $threads = $modx->getCollection(\'quipThread\',array(\'resource\' => $id));
            foreach ($threads as $thread) {
                $modx->log(modX::LOG_LEVEL_INFO,\'[Quip] Removing thread: \'.$thread->get(\'name\'));
                $thread->remove();
            }
        }
        break;
}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return;

switch ($modx->event->name) {
    case \'OnEmptyTrash\':
        foreach ($scriptProperties[\'ids\'] as $id) {
            if (empty($id)) continue;

            $threads = $modx->getCollection(\'quipThread\',array(\'resource\' => $id));
            foreach ($threads as $thread) {
                $modx->log(modX::LOG_LEVEL_INFO,\'[Quip] Removing thread: \'.$thread->get(\'name\'));
                $thread->remove();
            }
        }
        break;
}
return;',
    ),
  ),
  '61626bb424bda3bd21b4da9b2c7b3c0f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 6,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 6,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0c1327b5981d424147e1b1dd22cb7407' => 
  array (
    'criteria' => 
    array (
      'category' => 'Quip',
    ),
    'object' => 
    array (
      'id' => 13,
      'parent' => 0,
      'category' => 'Quip',
    ),
    'files' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/livingoctaveresearch/assets/components',
    ),
  ),
  'ae2cf36efe5d70cd2f1ae68fe90359fc' => 
  array (
    'criteria' => 
    array (
      'name' => 'Quip',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Quip',
      'description' => 'A simple commenting component.',
      'editor_type' => 0,
      'category' => 13,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Quip
 *
 * A simple comments component.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @name Quip
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
/** @var Quip $quip */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));

$controller = $quip->loadController(\'Thread\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:50:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:21:"quip.prop_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"parent";a:7:{s:4:"name";s:6:"parent";s:4:"desc";s:21:"quip.prop_parent_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"threaded";a:7:{s:4:"name";s:8:"threaded";s:4:"desc";s:23:"quip.prop_threaded_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"maxDepth";a:7:{s:4:"name";s:8:"maxDepth";s:4:"desc";s:23:"quip.prop_maxdepth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:15:"replyResourceId";a:7:{s:4:"name";s:15:"replyResourceId";s:4:"desc";s:30:"quip.prop_replyresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:18:"threadedPostMargin";a:7:{s:4:"name";s:18:"threadedPostMargin";s:4:"desc";s:33:"quip.prop_threadedpostmargin_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:15;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"requireAuth";a:7:{s:4:"name";s:11:"requireAuth";s:4:"desc";s:26:"quip.prop_requireauth_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"requireUsergroups";a:7:{s:4:"name";s:17:"requireUsergroups";s:4:"desc";s:32:"quip.prop_requireusergroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"closed";a:7:{s:4:"name";s:6:"closed";s:4:"desc";s:21:"quip.prop_closed_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"closeAfter";a:7:{s:4:"name";s:10:"closeAfter";s:4:"desc";s:25:"quip.prop_closeafter_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:14;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:25:"quip.prop_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"useMargins";a:7:{s:4:"name";s:10:"useMargins";s:4:"desc";s:25:"quip.prop_usemargins_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"useCss";a:7:{s:4:"name";s:6:"useCss";s:4:"desc";s:21:"quip.prop_usecss_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"rowCss";a:7:{s:4:"name";s:6:"rowCss";s:4:"desc";s:21:"quip.prop_rowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quip-comment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"altRowCss";a:7:{s:4:"name";s:9:"altRowCss";s:4:"desc";s:24:"quip.prop_altrowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quip-comment-alt";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"olCss";a:7:{s:4:"name";s:5:"olCss";s:4:"desc";s:20:"quip.prop_olcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"quip-comment-parent";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"unapprovedCss";a:7:{s:4:"name";s:13:"unapprovedCss";s:4:"desc";s:28:"quip.prop_unapprovedcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"quip-unapproved";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"authorTpl";a:7:{s:4:"name";s:9:"authorTpl";s:4:"desc";s:24:"quip.prop_authortpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"quipAuthorTpl";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"nameField";a:7:{s:4:"name";s:9:"nameField";s:4:"desc";s:24:"quip.prop_namefield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"username";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"showAnonymousName";a:7:{s:4:"name";s:17:"showAnonymousName";s:4:"desc";s:32:"quip.prop_showanonymousname_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"anonymousName";a:7:{s:4:"name";s:13:"anonymousName";s:4:"desc";s:28:"quip.prop_anonymousname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"allowRemove";a:7:{s:4:"name";s:11:"allowRemove";s:4:"desc";s:26:"quip.prop_allowremove_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:15:"removeThreshold";a:7:{s:4:"name";s:15:"removeThreshold";s:4:"desc";s:30:"quip.prop_removethreshold_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:3;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"allowReportAsSpam";a:7:{s:4:"name";s:17:"allowReportAsSpam";s:4:"desc";s:32:"quip.prop_allowreportasspam_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"useGravatar";a:7:{s:4:"name";s:11:"useGravatar";s:4:"desc";s:26:"quip.prop_usegravatar_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:27:"quip.prop_gravataricon_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"identicon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:27:"quip.prop_gravatarsize_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:50;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:21:"quip.prop_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"rank";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:26:"quip.prop_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:22:"quip.prop_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:28:"quip.prop_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:32:"quip.prop_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"quip";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"tplComment";a:7:{s:4:"name";s:10:"tplComment";s:4:"desc";s:25:"quip.prop_tplcomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplCommentOptions";a:7:{s:4:"name";s:17:"tplCommentOptions";s:4:"desc";s:32:"quip.prop_tplcommentoptions_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipCommentOptions";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"tplComments";a:7:{s:4:"name";s:11:"tplComments";s:4:"desc";s:26:"quip.prop_tplcomments_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quipComments";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"tplReport";a:7:{s:4:"name";s:9:"tplReport";s:4:"desc";s:24:"quip.prop_tplreport_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"quipReport";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"reportAction";a:7:{s:4:"name";s:12:"reportAction";s:4:"desc";s:27:"quip.prop_reportaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip_report";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"removeAction";a:7:{s:4:"name";s:12:"removeAction";s:4:"desc";s:27:"quip.prop_removeaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip_remove";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"idPrefix";a:7:{s:4:"name";s:8:"idPrefix";s:4:"desc";s:23:"quip.prop_idprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"qcom";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:20:"quip.prop_debug_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"debugUser";a:7:{s:4:"name";s:9:"debugUser";s:4:"desc";s:24:"quip.prop_debuguser_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"debugUserId";a:7:{s:4:"name";s:11:"debugUserId";s:4:"desc";s:26:"quip.prop_debuguserid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:20:"quip.prop_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:20:"quip.prop_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"tplPagination";a:7:{s:4:"name";s:13:"tplPagination";s:4:"desc";s:28:"quip.prop_tplpagination_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipPagination";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplPaginationItem";a:7:{s:4:"name";s:17:"tplPaginationItem";s:4:"desc";s:32:"quip.prop_tplpaginationitem_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipPaginationItem";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"tplPaginationCurrentItem";a:7:{s:4:"name";s:24:"tplPaginationCurrentItem";s:4:"desc";s:39:"quip.prop_tplpaginationcurrentitem_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:25:"quipPaginationCurrentItem";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"paginationCls";a:7:{s:4:"name";s:13:"paginationCls";s:4:"desc";s:28:"quip.prop_paginationcls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"quip-pagination";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"pageCls";a:7:{s:4:"name";s:7:"pageCls";s:4:"desc";s:22:"quip.prop_pagecls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quip-page-number";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"currentPageCls";a:7:{s:4:"name";s:14:"currentPageCls";s:4:"desc";s:29:"quip.prop_currentpagecls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:17:"quip-page-current";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Quip
 *
 * A simple comments component.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @name Quip
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
/** @var Quip $quip */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));

$controller = $quip->loadController(\'Thread\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '5432956812aa2ceff2ba28f3e14d6aa4' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipCount',
    ),
    'object' => 
    array (
      'id' => 37,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipCount',
      'description' => 'An assistance snippet for getting thread/user comment counts.',
      'editor_type' => 0,
      'category' => 13,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:5:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:25:"quip.prop_count_type_desc";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:11:"quip.thread";s:5:"value";s:6:"thread";}i:1;a:2:{s:4:"text";s:9:"quip.user";s:5:"value";s:4:"user";}i:2;a:2:{s:4:"text";s:11:"quip.family";s:5:"value";s:6:"family";}}s:5:"value";s:6:"thread";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:27:"quip.prop_count_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:25:"quip.prop_count_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:27:"quip.prop_count_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:34:"quip.prop_count_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  'd76dd6baa08d95639f5425eb73ce33ee' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipLatestComments',
    ),
    'object' => 
    array (
      'id' => 38,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipLatestComments',
      'description' => 'An assistance snippet for getting the latest comments for the whole site or a thread or user.',
      'editor_type' => 0,
      'category' => 13,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:18:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"quip.prop_late_type_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"all";s:4:"text";s:8:"quip.all";}i:1;a:2:{s:5:"value";s:6:"thread";s:4:"text";s:11:"quip.thread";}i:2;a:2:{s:5:"value";s:6:"family";s:4:"text";s:11:"quip.family";}i:3;a:2:{s:5:"value";s:4:"user";s:4:"text";s:9:"quip.user";}}s:5:"value";s:3:"all";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"quip.prop_late_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:17:"quipLatestComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:26:"quip.prop_late_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:24:"quip.prop_late_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:26:"quip.prop_late_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"stripTags";a:7:{s:4:"name";s:9:"stripTags";s:4:"desc";s:29:"quip.prop_late_striptags_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:30:"quip.prop_late_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"bodyLimit";a:7:{s:4:"name";s:9:"bodyLimit";s:4:"desc";s:29:"quip.prop_late_bodylimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:30;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"rowCss";a:7:{s:4:"name";s:6:"rowCss";s:4:"desc";s:26:"quip.prop_late_rowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"quip-latest-comment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"altRowCss";a:7:{s:4:"name";s:9:"altRowCss";s:4:"desc";s:29:"quip.prop_late_altrowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:23:"quip-latest-comment-alt";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"quip.prop_late_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:25:"quip.prop_late_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:26:"quip.prop_late_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"createdon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:31:"quip.prop_late_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:27:"quip.prop_late_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:28:"quip.prop_late_contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:33:"quip.prop_late_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:37:"quip.prop_late_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip.latest";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '9ef48f516983d5a669c5919923f8a6c1' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipReply',
    ),
    'object' => 
    array (
      'id' => 39,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipReply',
      'description' => 'Displays a reply form for comments.',
      'editor_type' => 0,
      'category' => 13,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Displays a reply form for a thread
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipReply
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadReply\');
$output = $controller->run($scriptProperties);
return $output;

/* get thread */
$thread = $modx->getOption(\'quip_thread\',$_REQUEST,$modx->getOption(\'thread\',$scriptProperties,\'\'));
if (empty($thread)) return \'\';
$thread = $modx->getObject(\'quipThread\',array(\'name\' => $thread));
if (!$thread) return \'\';

/* sync properties with thread row values */
$thread->sync($scriptProperties);
$ps = $thread->get(\'quipreply_call_params\');
if (!empty($ps)) {
    $diff = array_diff_assoc($ps,$scriptProperties);
    if (empty($diff)) $diff = array_diff_assoc($scriptProperties,$ps);
}
if (empty($_REQUEST[\'quip_thread\']) && (!empty($diff) || empty($ps))) { /* only sync call params if not on threaded reply page */
    $thread->set(\'quipreply_call_params\',$scriptProperties);
    $thread->save();
}
/* if in threaded reply page, get the original passing values to QuipReply in the thread\'s main page and use those */
if (!empty($_REQUEST[\'quip_thread\']) && is_array($ps) && !empty($ps)) $scriptProperties = array_merge($scriptProperties,$ps);
unset($ps,$diff);

/* setup default properties */
$requireAuth = $modx->getOption(\'requireAuth\',$scriptProperties,false);
$requireUsergroups = $modx->getOption(\'requireUsergroups\',$scriptProperties,false);
$addCommentTpl = $modx->getOption(\'tplAddComment\',$scriptProperties,\'quipAddComment\');
$loginToCommentTpl = $modx->getOption(\'tplLoginToComment\',$scriptProperties,\'quipLoginToComment\');
$previewTpl = $modx->getOption(\'tplPreview\',$scriptProperties,\'quipPreviewComment\');
$closeAfter = $modx->getOption(\'closeAfter\',$scriptProperties,14);
$requirePreview = $modx->getOption(\'requirePreview\',$scriptProperties,false);
$previewAction = $modx->getOption(\'previewAction\',$scriptProperties,\'quip-preview\');
$postAction = $modx->getOption(\'postAction\',$scriptProperties,\'quip-post\');
$allowedTags = $modx->getOption(\'quip.allowed_tags\',$scriptProperties,\'<br><b><i>\');
$preHooks = $modx->getOption(\'preHooks\',$scriptProperties,\'\');
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$unsubscribeAction = $modx->getOption(\'unsubscribeAction\',$scriptProperties,\'quip_unsubscribe\');

/* get parent and auth */
$parent = $modx->getOption(\'quip_parent\',$_REQUEST,$modx->getOption(\'parent\',$scriptProperties,0));
$hasAuth = $modx->user->hasSessionContext($modx->context->get(\'key\')) || $modx->getOption(\'debug\',$scriptProperties,false) || empty($requireAuth);
if (!empty($requireUsergroups)) {
    $requireUsergroups = explode(\',\',$requireUsergroups);
    $hasAuth = $modx->user->isMember($requireUsergroups);
}

/* setup default placeholders */
$placeholders = array();
$p = $modx->request->getParameters();
unset($p[\'reported\'],$p[\'quip_approved\']);
$placeholders[\'parent\'] = $parent;
$placeholders[\'thread\'] = $thread->get(\'name\');
$placeholders[\'url\'] = $modx->makeUrl($modx->resource->get(\'id\'),\'\',$p);
$placeholders[\'idprefix\'] = $thread->get(\'idprefix\');

/* handle POST */
$fields = array();
$hasPreview = false;
if (!empty($_POST)) {
    foreach ($_POST as $k => $v) {
        $fields[$k] = str_replace(array(\'[\',\']\'),array(\'&#91;\',\'&#93;\'),$v);
    }
    
    $fields[\'name\'] = strip_tags($fields[\'name\']);
    $fields[\'email\'] = strip_tags($fields[\'email\']);
    $fields[\'website\'] = strip_tags($fields[\'website\']);
    
    /* verify a message was posted */
    if (empty($fields[\'comment\'])) $errors[\'comment\'] = $modx->lexicon(\'quip.message_err_ns\');
    if (empty($fields[\'name\'])) $errors[\'name\'] = $modx->lexicon(\'quip.name_err_ns\');
    if (empty($fields[\'email\'])) $errors[\'email\'] = $modx->lexicon(\'quip.email_err_ns\');
    
    if (!empty($_POST[$postAction]) && empty($errors)) {
        $comment = include_once $quip->config[\'processorsPath\'].\'web/comment/create.php\';
        if (is_object($comment) && $comment instanceof quipComment) {
            $params = $modx->request->getParameters();
            unset($params[$postAction],$params[\'quip_parent\'],$params[\'quip_thread\']);
            $params[\'quip_approved\'] = $comment->get(\'approved\') ? 1 : 0;
            $url = $comment->makeUrl(\'\',$params);

            /* if not approved, remove # and replace with success message #
             * since comment is not yet visible
             */
            if (!$comment->get(\'approved\')) {
                $url = str_replace(\'#\'.$thread->get(\'idprefix\').$comment->get(\'id\'),\'#quip-success-\'.$thread->get(\'idprefix\'),$url);
            }
            $modx->sendRedirect($url);
        } else if (is_array($comment)) {
            $errors = array_merge($errors,$comment);
        }
        $fields[$previewAction] = true;
    }
    /* handle preview */
    else if (!empty($fields[$previewAction]) && empty($errors)) {
        $errors = include_once $quip->config[\'processorsPath\'].\'web/comment/preview.php\';
    }
    if (!empty($errors)) {
        $placeholders[\'error\'] = implode("<br />\\n",$errors);
        foreach ($errors as $k => $v) {
            $placeholders[\'error.\'.$k] = $v;
        }
        $placeholders = array_merge($placeholders,$fields);
    }
}
/* display moderated success message */
if (isset($_GET[\'quip_approved\']) && $_GET[\'quip_approved\'] == 0) {
    $placeholders[\'successMsg\'] = $modx->lexicon(\'quip.comment_will_be_moderated\');
}

/* handle unsubscribing from thread */
if (!empty($_GET[$unsubscribeAction]) && $modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    if ($profile) {
        $notify = $modx->getObject(\'quipCommentNotify\',array(
            \'email\' => $profile->get(\'email\'),
            \'thread\' => $thread,
        ));
        if ($notify && $notify->remove()) {
            $placeholders[\'successMsg\'] = $modx->lexicon(\'quip.unsubscribed\');
        }
    }
}

/* if using recaptcha, load recaptcha html if user is not logged in */
$disableRecaptchaWhenLoggedIn = (boolean)$modx->getOption(\'disableRecaptchaWhenLoggedIn\',$scriptProperties,true);
$useRecaptcha = (boolean)$modx->getOption(\'recaptcha\',$scriptProperties,false);
if ($useRecaptcha && !($disableRecaptchaWhenLoggedIn && $hasAuth) && !$hasPreview) {
    $recaptcha = $modx->getService(\'recaptcha\',\'reCaptcha\',$quip->config[\'modelPath\'].\'recaptcha/\');
    if ($recaptcha instanceof reCaptcha) {
        $recaptchaTheme = $modx->getOption(\'recaptchaTheme\',$scriptProperties,\'clean\');
        $html = $recaptcha->getHtml($recaptchaTheme);
        $modx->setPlaceholder(\'quip.recaptcha_html\',$html);
    } else {
        return $modx->lexicon(\'quip.recaptcha_err_load\');
    }
}

/* build reply form */
$replyForm = \'\';

$stillOpen = $thread->checkIfStillOpen($closeAfter) && !$modx->getOption(\'closed\',$scriptProperties,false);
if ($hasAuth && $stillOpen) {
    $phs = array_merge($placeholders,array(
        \'username\' => $modx->user->get(\'username\'),
    ));
    $phs[\'unsubscribe\'] = \'\';

    /* prefill fields */
    $profile = $modx->user->getOne(\'Profile\');
    if ($profile) {
        $phs[\'name\'] = !empty($fields[\'name\']) ? $fields[\'name\'] : $profile->get(\'fullname\');
        $phs[\'email\'] = !empty($fields[\'email\']) ? $fields[\'email\'] : $profile->get(\'email\');
        $phs[\'website\'] = !empty($fields[\'website\']) ? $fields[\'website\'] : $profile->get(\'website\');

        /* allow for unsubscribing for logged-in users */
        if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
            $notify = $modx->getObject(\'quipCommentNotify\',array(
                \'email\' => $profile->get(\'email\'),
                \'thread\' => $thread,
            ));
            if ($notify) {
                $phs[\'notifyId\'] = $notify->get(\'id\');
                $phs[\'unsubscribe\'] = $quip->getChunk(\'quipUnsubscribe\',$phs);
                $params = $modx->request->getParameters();
                $params[$unsubscribeAction] = 1;
                $phs[\'unsubscribeUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'),\'\',$params);
            }
        }
    }

    /* if requirePreview == false, auto-can post */
    if (!$requirePreview) {
        $phs[\'can_post\'] = true;
    }
    $phs[\'post_action\'] = $postAction;
    $phs[\'preview_action\'] = $previewAction;
    $phs[\'allowed_tags\'] = $allowedTags;
    $phs[\'notifyChecked\'] = !empty($fields[\'notify\']) ? \' checked="checked"\' : \'\';

    $replyForm = $quip->getChunk($addCommentTpl,$phs);
} else if (!$stillOpen) {
    $replyForm = $modx->lexicon(\'quip.thread_autoclosed\');
} else {
    $replyForm = $quip->getChunk($loginToCommentTpl,$placeholders);
}

/* output or set to placeholder */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$replyForm);
    return \'\';
}
return $replyForm;',
      'locked' => 0,
      'properties' => 'a:34:{s:11:"requireAuth";a:7:{s:4:"name";s:11:"requireAuth";s:4:"desc";s:32:"quip.prop_reply_requireauth_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"requireUsergroups";a:7:{s:4:"name";s:17:"requireUsergroups";s:4:"desc";s:38:"quip.prop_reply_requireusergroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"requirePreview";a:7:{s:4:"name";s:14:"requirePreview";s:4:"desc";s:35:"quip.prop_reply_requirepreview_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"closed";a:7:{s:4:"name";s:6:"closed";s:4:"desc";s:27:"quip.prop_reply_closed_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"closeAfter";a:7:{s:4:"name";s:10:"closeAfter";s:4:"desc";s:31:"quip.prop_reply_closeafter_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:14;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"moderate";a:7:{s:4:"name";s:8:"moderate";s:4:"desc";s:29:"quip.prop_reply_moderate_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:21:"moderateAnonymousOnly";a:7:{s:4:"name";s:21:"moderateAnonymousOnly";s:4:"desc";s:42:"quip.prop_reply_moderateanonymousonly_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:21:"moderateFirstPostOnly";a:7:{s:4:"name";s:21:"moderateFirstPostOnly";s:4:"desc";s:42:"quip.prop_reply_moderatefirstpostonly_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"moderators";a:7:{s:4:"name";s:10:"moderators";s:4:"desc";s:31:"quip.prop_reply_moderators_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"moderatorGroup";a:7:{s:4:"name";s:14:"moderatorGroup";s:4:"desc";s:35:"quip.prop_reply_moderatorgroup_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"Administrator";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"dontModerateManagerUsers";a:7:{s:4:"name";s:24:"dontModerateManagerUsers";s:4:"desc";s:45:"quip.prop_reply_dontmoderatemanagerusers_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:31:"quip.prop_reply_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"useCss";a:7:{s:4:"name";s:6:"useCss";s:4:"desc";s:27:"quip.prop_reply_usecss_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"notifyEmails";a:7:{s:4:"name";s:12:"notifyEmails";s:4:"desc";s:33:"quip.prop_reply_notifyemails_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"recaptcha";a:7:{s:4:"name";s:9:"recaptcha";s:4:"desc";s:30:"quip.prop_reply_recaptcha_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"recaptchaTheme";a:7:{s:4:"name";s:14:"recaptchaTheme";s:4:"desc";s:35:"quip.prop_reply_recaptchatheme_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:4:"text";s:12:"quip.opt_red";s:5:"value";s:3:"red";}i:1;a:2:{s:4:"text";s:14:"quip.opt_white";s:5:"value";s:5:"white";}i:2;a:2:{s:4:"text";s:14:"quip.opt_clean";s:5:"value";s:5:"clean";}i:3;a:2:{s:4:"text";s:19:"quip.opt_blackglass";s:5:"value";s:10:"blackglass";}}s:5:"value";s:5:"clean";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:28:"disableRecaptchaWhenLoggedIn";a:7:{s:4:"name";s:28:"disableRecaptchaWhenLoggedIn";s:4:"desc";s:49:"quip.prop_reply_disablerecaptchawhenloggedin_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:16:"autoConvertLinks";a:7:{s:4:"name";s:16:"autoConvertLinks";s:4:"desc";s:37:"quip.prop_reply_autoconvertlinks_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"extraAutoLinksAttributes";a:7:{s:4:"name";s:24:"extraAutoLinksAttributes";s:4:"desc";s:45:"quip.prop_reply_extraautolinksattributes_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"useGravatar";a:7:{s:4:"name";s:11:"useGravatar";s:4:"desc";s:32:"quip.prop_reply_usegravatar_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:33:"quip.prop_reply_gravataricon_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"identicon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:33:"quip.prop_reply_gravatarsize_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:50;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"tplAddComment";a:7:{s:4:"name";s:13:"tplAddComment";s:4:"desc";s:34:"quip.prop_reply_tpladdcomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipAddComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplLoginToComment";a:7:{s:4:"name";s:17:"tplLoginToComment";s:4:"desc";s:38:"quip.prop_reply_tpllogintocomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipLoginToComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"tplPreview";a:7:{s:4:"name";s:10:"tplPreview";s:4:"desc";s:31:"quip.prop_reply_tplpreview_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipPreviewComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"tplReport";a:7:{s:4:"name";s:9:"tplReport";s:4:"desc";s:30:"quip.prop_reply_tplreport_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"quipReport";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"postAction";a:7:{s:4:"name";s:10:"postAction";s:4:"desc";s:31:"quip.prop_reply_postaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"quip-post";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"previewAction";a:7:{s:4:"name";s:13:"previewAction";s:4:"desc";s:34:"quip.prop_reply_previewaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quip-preview";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"idPrefix";a:7:{s:4:"name";s:8:"idPrefix";s:4:"desc";s:29:"quip.prop_reply_idprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"qcom";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:31:"quip.prop_reply_redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"redirectToUrl";a:7:{s:4:"name";s:13:"redirectToUrl";s:4:"desc";s:34:"quip.prop_reply_redirecttourl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:26:"quip.prop_reply_debug_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"debugUser";a:7:{s:4:"name";s:9:"debugUser";s:4:"desc";s:30:"quip.prop_reply_debuguser_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"debugUserId";a:7:{s:4:"name";s:11:"debugUserId";s:4:"desc";s:32:"quip.prop_reply_debuguserid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Displays a reply form for a thread
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipReply
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadReply\');
$output = $controller->run($scriptProperties);
return $output;

/* get thread */
$thread = $modx->getOption(\'quip_thread\',$_REQUEST,$modx->getOption(\'thread\',$scriptProperties,\'\'));
if (empty($thread)) return \'\';
$thread = $modx->getObject(\'quipThread\',array(\'name\' => $thread));
if (!$thread) return \'\';

/* sync properties with thread row values */
$thread->sync($scriptProperties);
$ps = $thread->get(\'quipreply_call_params\');
if (!empty($ps)) {
    $diff = array_diff_assoc($ps,$scriptProperties);
    if (empty($diff)) $diff = array_diff_assoc($scriptProperties,$ps);
}
if (empty($_REQUEST[\'quip_thread\']) && (!empty($diff) || empty($ps))) { /* only sync call params if not on threaded reply page */
    $thread->set(\'quipreply_call_params\',$scriptProperties);
    $thread->save();
}
/* if in threaded reply page, get the original passing values to QuipReply in the thread\'s main page and use those */
if (!empty($_REQUEST[\'quip_thread\']) && is_array($ps) && !empty($ps)) $scriptProperties = array_merge($scriptProperties,$ps);
unset($ps,$diff);

/* setup default properties */
$requireAuth = $modx->getOption(\'requireAuth\',$scriptProperties,false);
$requireUsergroups = $modx->getOption(\'requireUsergroups\',$scriptProperties,false);
$addCommentTpl = $modx->getOption(\'tplAddComment\',$scriptProperties,\'quipAddComment\');
$loginToCommentTpl = $modx->getOption(\'tplLoginToComment\',$scriptProperties,\'quipLoginToComment\');
$previewTpl = $modx->getOption(\'tplPreview\',$scriptProperties,\'quipPreviewComment\');
$closeAfter = $modx->getOption(\'closeAfter\',$scriptProperties,14);
$requirePreview = $modx->getOption(\'requirePreview\',$scriptProperties,false);
$previewAction = $modx->getOption(\'previewAction\',$scriptProperties,\'quip-preview\');
$postAction = $modx->getOption(\'postAction\',$scriptProperties,\'quip-post\');
$allowedTags = $modx->getOption(\'quip.allowed_tags\',$scriptProperties,\'<br><b><i>\');
$preHooks = $modx->getOption(\'preHooks\',$scriptProperties,\'\');
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$unsubscribeAction = $modx->getOption(\'unsubscribeAction\',$scriptProperties,\'quip_unsubscribe\');

/* get parent and auth */
$parent = $modx->getOption(\'quip_parent\',$_REQUEST,$modx->getOption(\'parent\',$scriptProperties,0));
$hasAuth = $modx->user->hasSessionContext($modx->context->get(\'key\')) || $modx->getOption(\'debug\',$scriptProperties,false) || empty($requireAuth);
if (!empty($requireUsergroups)) {
    $requireUsergroups = explode(\',\',$requireUsergroups);
    $hasAuth = $modx->user->isMember($requireUsergroups);
}

/* setup default placeholders */
$placeholders = array();
$p = $modx->request->getParameters();
unset($p[\'reported\'],$p[\'quip_approved\']);
$placeholders[\'parent\'] = $parent;
$placeholders[\'thread\'] = $thread->get(\'name\');
$placeholders[\'url\'] = $modx->makeUrl($modx->resource->get(\'id\'),\'\',$p);
$placeholders[\'idprefix\'] = $thread->get(\'idprefix\');

/* handle POST */
$fields = array();
$hasPreview = false;
if (!empty($_POST)) {
    foreach ($_POST as $k => $v) {
        $fields[$k] = str_replace(array(\'[\',\']\'),array(\'&#91;\',\'&#93;\'),$v);
    }
    
    $fields[\'name\'] = strip_tags($fields[\'name\']);
    $fields[\'email\'] = strip_tags($fields[\'email\']);
    $fields[\'website\'] = strip_tags($fields[\'website\']);
    
    /* verify a message was posted */
    if (empty($fields[\'comment\'])) $errors[\'comment\'] = $modx->lexicon(\'quip.message_err_ns\');
    if (empty($fields[\'name\'])) $errors[\'name\'] = $modx->lexicon(\'quip.name_err_ns\');
    if (empty($fields[\'email\'])) $errors[\'email\'] = $modx->lexicon(\'quip.email_err_ns\');
    
    if (!empty($_POST[$postAction]) && empty($errors)) {
        $comment = include_once $quip->config[\'processorsPath\'].\'web/comment/create.php\';
        if (is_object($comment) && $comment instanceof quipComment) {
            $params = $modx->request->getParameters();
            unset($params[$postAction],$params[\'quip_parent\'],$params[\'quip_thread\']);
            $params[\'quip_approved\'] = $comment->get(\'approved\') ? 1 : 0;
            $url = $comment->makeUrl(\'\',$params);

            /* if not approved, remove # and replace with success message #
             * since comment is not yet visible
             */
            if (!$comment->get(\'approved\')) {
                $url = str_replace(\'#\'.$thread->get(\'idprefix\').$comment->get(\'id\'),\'#quip-success-\'.$thread->get(\'idprefix\'),$url);
            }
            $modx->sendRedirect($url);
        } else if (is_array($comment)) {
            $errors = array_merge($errors,$comment);
        }
        $fields[$previewAction] = true;
    }
    /* handle preview */
    else if (!empty($fields[$previewAction]) && empty($errors)) {
        $errors = include_once $quip->config[\'processorsPath\'].\'web/comment/preview.php\';
    }
    if (!empty($errors)) {
        $placeholders[\'error\'] = implode("<br />\\n",$errors);
        foreach ($errors as $k => $v) {
            $placeholders[\'error.\'.$k] = $v;
        }
        $placeholders = array_merge($placeholders,$fields);
    }
}
/* display moderated success message */
if (isset($_GET[\'quip_approved\']) && $_GET[\'quip_approved\'] == 0) {
    $placeholders[\'successMsg\'] = $modx->lexicon(\'quip.comment_will_be_moderated\');
}

/* handle unsubscribing from thread */
if (!empty($_GET[$unsubscribeAction]) && $modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    if ($profile) {
        $notify = $modx->getObject(\'quipCommentNotify\',array(
            \'email\' => $profile->get(\'email\'),
            \'thread\' => $thread,
        ));
        if ($notify && $notify->remove()) {
            $placeholders[\'successMsg\'] = $modx->lexicon(\'quip.unsubscribed\');
        }
    }
}

/* if using recaptcha, load recaptcha html if user is not logged in */
$disableRecaptchaWhenLoggedIn = (boolean)$modx->getOption(\'disableRecaptchaWhenLoggedIn\',$scriptProperties,true);
$useRecaptcha = (boolean)$modx->getOption(\'recaptcha\',$scriptProperties,false);
if ($useRecaptcha && !($disableRecaptchaWhenLoggedIn && $hasAuth) && !$hasPreview) {
    $recaptcha = $modx->getService(\'recaptcha\',\'reCaptcha\',$quip->config[\'modelPath\'].\'recaptcha/\');
    if ($recaptcha instanceof reCaptcha) {
        $recaptchaTheme = $modx->getOption(\'recaptchaTheme\',$scriptProperties,\'clean\');
        $html = $recaptcha->getHtml($recaptchaTheme);
        $modx->setPlaceholder(\'quip.recaptcha_html\',$html);
    } else {
        return $modx->lexicon(\'quip.recaptcha_err_load\');
    }
}

/* build reply form */
$replyForm = \'\';

$stillOpen = $thread->checkIfStillOpen($closeAfter) && !$modx->getOption(\'closed\',$scriptProperties,false);
if ($hasAuth && $stillOpen) {
    $phs = array_merge($placeholders,array(
        \'username\' => $modx->user->get(\'username\'),
    ));
    $phs[\'unsubscribe\'] = \'\';

    /* prefill fields */
    $profile = $modx->user->getOne(\'Profile\');
    if ($profile) {
        $phs[\'name\'] = !empty($fields[\'name\']) ? $fields[\'name\'] : $profile->get(\'fullname\');
        $phs[\'email\'] = !empty($fields[\'email\']) ? $fields[\'email\'] : $profile->get(\'email\');
        $phs[\'website\'] = !empty($fields[\'website\']) ? $fields[\'website\'] : $profile->get(\'website\');

        /* allow for unsubscribing for logged-in users */
        if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
            $notify = $modx->getObject(\'quipCommentNotify\',array(
                \'email\' => $profile->get(\'email\'),
                \'thread\' => $thread,
            ));
            if ($notify) {
                $phs[\'notifyId\'] = $notify->get(\'id\');
                $phs[\'unsubscribe\'] = $quip->getChunk(\'quipUnsubscribe\',$phs);
                $params = $modx->request->getParameters();
                $params[$unsubscribeAction] = 1;
                $phs[\'unsubscribeUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'),\'\',$params);
            }
        }
    }

    /* if requirePreview == false, auto-can post */
    if (!$requirePreview) {
        $phs[\'can_post\'] = true;
    }
    $phs[\'post_action\'] = $postAction;
    $phs[\'preview_action\'] = $previewAction;
    $phs[\'allowed_tags\'] = $allowedTags;
    $phs[\'notifyChecked\'] = !empty($fields[\'notify\']) ? \' checked="checked"\' : \'\';

    $replyForm = $quip->getChunk($addCommentTpl,$phs);
} else if (!$stillOpen) {
    $replyForm = $modx->lexicon(\'quip.thread_autoclosed\');
} else {
    $replyForm = $quip->getChunk($loginToCommentTpl,$placeholders);
}

/* output or set to placeholder */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$replyForm);
    return \'\';
}
return $replyForm;',
    ),
  ),
  '87d5190bf088477c6946204c4fe9f731' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipRss',
    ),
    'object' => 
    array (
      'id' => 40,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipRss',
      'description' => 'Generates an RSS of latest comments for a thread or by a user.',
      'editor_type' => 0,
      'category' => 13,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Generates an RSS of latest comments for a thread or by a user.
 *
 * @var Quip $quip
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @name QuipRss
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

/* setup default properties */
$type = $modx->getOption(\'type\',$scriptProperties,\'all\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'quipRssComment\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'quipRssContainer\');
$limit = $modx->getOption(\'limit\',$scriptProperties,5);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'createdon\');
$sortByAlias = $modx->getOption(\'sortByAlias\',$scriptProperties,\'quipComment\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');

$dateFormat = $modx->getOption(\'dateFormat\',$scriptProperties,\'%b %d, %Y at %I:%M %p\');
$stripTags = $modx->getOption(\'stripTags\',$scriptProperties,true);
$bodyLimit = $modx->getOption(\'bodyLimit\',$scriptProperties,30);

$pagetitle = $modx->getOption(\'pagetitle\',$scriptProperties,\'\');

/* build query by type */
$c = $modx->newQuery(\'quipComment\');
$c->select($modx->getSelectColumns(\'quipComment\',\'quipComment\'));
$c->select(array(
    \'Resource.pagetitle\',
));
$c->leftJoin(\'modUser\',\'Author\');
$c->leftJoin(\'modResource\',\'Resource\');
switch ($type) {
    case \'user\':
        if (empty($scriptProperties[\'user\'])) return \'\';
        if (is_numeric($scriptProperties[\'user\'])) {
            $c->where(array(
                \'Author.id\' => $scriptProperties[\'user\'],
            ));
        } else {
            $c->where(array(
                \'Author.username\' => $scriptProperties[\'user\'],
            ));
        }
        break;
    case \'thread\':
        if (empty($scriptProperties[\'thread\'])) return \'\';
        $c->where(array(
            \'quipComment.thread\' => $scriptProperties[\'thread\'],
        ));
        break;
    case \'family\':
        if (empty($scriptProperties[\'family\'])) return \'\';
        $c->where(array(
            \'quipComment.thread:LIKE\' => $scriptProperties[\'family\'],
        ));
        break;
    case \'all\':
    default:
        break;
}
$contexts = $modx->getOption(\'contexts\',$scriptProperties,\'\');
if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => explode(\',\',$contexts),
    ));
}
$c->where(array(
    \'quipComment.deleted\' => false,
    \'quipComment.approved\' => true,
));
$c->sortby(\'`\'.$sortByAlias.\'`.`\'.$sortBy.\'`\',$sortDir);
$c->limit($limit,$start);
$comments = $modx->getCollection(\'quipComment\',$c);

/* iterate */
$pagePlaceholders = array();
$output = array();
$alt = false;
$commentArray = array();
/** @var quipComment $comment */
foreach ($comments as $comment) {
    $commentArray = $comment->toArray();
    $commentArray[\'bodyLimit\'] = $bodyLimit;
    $commentArray[\'url\'] = $comment->makeUrl(0,array(),array(
        \'scheme\' => \'full\',
    ));

    if (!empty($stripTags)) { $commentArray[\'body\'] = strip_tags($commentArray[\'body\']); }

    $commentArray[\'ago\'] = $quip->getTimeAgo($commentArray[\'createdon\']);

    $output[] = $quip->getChunk($tpl,$commentArray);
    $alt = !$alt;
}

/* set page placeholders */
$pagePlaceholders = array();
$pagePlaceholders[\'resource\'] = $commentArray[\'resource\'];
$pagePlaceholders[\'pagetitle\'] = empty($pagetitle)? $commentArray[\'pagetitle\'] : $pagetitle;
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'quip.latest\');
$modx->toPlaceholders($pagePlaceholders,$placeholderPrefix);

/* generate output and wrap */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);

if (!empty($containerTpl)) {
    $output = $quip->getChunk($containerTpl,array(
        \'comments\' => $output,
    ));
}

/* set to placeholder or return output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
      'locked' => 0,
      'properties' => 'a:17:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"quip.prop_late_type_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"all";s:4:"text";s:8:"quip.all";}i:1;a:2:{s:5:"value";s:6:"thread";s:4:"text";s:11:"quip.thread";}i:2;a:2:{s:5:"value";s:6:"family";s:4:"text";s:11:"quip.family";}i:3;a:2:{s:5:"value";s:4:"user";s:4:"text";s:9:"quip.user";}}s:5:"value";s:3:"all";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:22:"quip.prop_rss_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipRssComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"containerTpl";a:7:{s:4:"name";s:12:"containerTpl";s:4:"desc";s:31:"quip.prop_rss_containertpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quipRssContainer";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:26:"quip.prop_late_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:24:"quip.prop_late_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:26:"quip.prop_late_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"stripTags";a:7:{s:4:"name";s:9:"stripTags";s:4:"desc";s:29:"quip.prop_late_striptags_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:30:"quip.prop_late_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"bodyLimit";a:7:{s:4:"name";s:9:"bodyLimit";s:4:"desc";s:29:"quip.prop_late_bodylimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:30;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"quip.prop_late_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:25:"quip.prop_late_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:26:"quip.prop_late_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"createdon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:31:"quip.prop_late_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:27:"quip.prop_late_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:28:"quip.prop_late_contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:33:"quip.prop_late_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:36:"quip.prop_rss_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip.latest";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Generates an RSS of latest comments for a thread or by a user.
 *
 * @var Quip $quip
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @name QuipRss
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

/* setup default properties */
$type = $modx->getOption(\'type\',$scriptProperties,\'all\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'quipRssComment\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'quipRssContainer\');
$limit = $modx->getOption(\'limit\',$scriptProperties,5);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'createdon\');
$sortByAlias = $modx->getOption(\'sortByAlias\',$scriptProperties,\'quipComment\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');

$dateFormat = $modx->getOption(\'dateFormat\',$scriptProperties,\'%b %d, %Y at %I:%M %p\');
$stripTags = $modx->getOption(\'stripTags\',$scriptProperties,true);
$bodyLimit = $modx->getOption(\'bodyLimit\',$scriptProperties,30);

$pagetitle = $modx->getOption(\'pagetitle\',$scriptProperties,\'\');

/* build query by type */
$c = $modx->newQuery(\'quipComment\');
$c->select($modx->getSelectColumns(\'quipComment\',\'quipComment\'));
$c->select(array(
    \'Resource.pagetitle\',
));
$c->leftJoin(\'modUser\',\'Author\');
$c->leftJoin(\'modResource\',\'Resource\');
switch ($type) {
    case \'user\':
        if (empty($scriptProperties[\'user\'])) return \'\';
        if (is_numeric($scriptProperties[\'user\'])) {
            $c->where(array(
                \'Author.id\' => $scriptProperties[\'user\'],
            ));
        } else {
            $c->where(array(
                \'Author.username\' => $scriptProperties[\'user\'],
            ));
        }
        break;
    case \'thread\':
        if (empty($scriptProperties[\'thread\'])) return \'\';
        $c->where(array(
            \'quipComment.thread\' => $scriptProperties[\'thread\'],
        ));
        break;
    case \'family\':
        if (empty($scriptProperties[\'family\'])) return \'\';
        $c->where(array(
            \'quipComment.thread:LIKE\' => $scriptProperties[\'family\'],
        ));
        break;
    case \'all\':
    default:
        break;
}
$contexts = $modx->getOption(\'contexts\',$scriptProperties,\'\');
if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => explode(\',\',$contexts),
    ));
}
$c->where(array(
    \'quipComment.deleted\' => false,
    \'quipComment.approved\' => true,
));
$c->sortby(\'`\'.$sortByAlias.\'`.`\'.$sortBy.\'`\',$sortDir);
$c->limit($limit,$start);
$comments = $modx->getCollection(\'quipComment\',$c);

/* iterate */
$pagePlaceholders = array();
$output = array();
$alt = false;
$commentArray = array();
/** @var quipComment $comment */
foreach ($comments as $comment) {
    $commentArray = $comment->toArray();
    $commentArray[\'bodyLimit\'] = $bodyLimit;
    $commentArray[\'url\'] = $comment->makeUrl(0,array(),array(
        \'scheme\' => \'full\',
    ));

    if (!empty($stripTags)) { $commentArray[\'body\'] = strip_tags($commentArray[\'body\']); }

    $commentArray[\'ago\'] = $quip->getTimeAgo($commentArray[\'createdon\']);

    $output[] = $quip->getChunk($tpl,$commentArray);
    $alt = !$alt;
}

/* set page placeholders */
$pagePlaceholders = array();
$pagePlaceholders[\'resource\'] = $commentArray[\'resource\'];
$pagePlaceholders[\'pagetitle\'] = empty($pagetitle)? $commentArray[\'pagetitle\'] : $pagetitle;
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'quip.latest\');
$modx->toPlaceholders($pagePlaceholders,$placeholderPrefix);

/* generate output and wrap */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);

if (!empty($containerTpl)) {
    $output = $quip->getChunk($containerTpl,array(
        \'comments\' => $output,
    ));
}

/* set to placeholder or return output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
    ),
  ),
);