<?php /* Smarty version Smarty-3.0.4, created on 2013-11-22 10:28:35
         compiled from "/Applications/mampstack-5.3.17-0/apache2/htdocs/living_octave_research/manager/templates/default/element/tv/renders/inputproperties/resourcelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669704468528fa25392a3d3-88222131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '673f97b3b8a5251783ef03dee125fa85308ef1a6' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/living_octave_research/manager/templates/default/element/tv/renders/inputproperties/resourcelist.tpl',
      1 => 1383951456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669704468528fa25392a3d3-88222131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/mampstack-5.3.17-0/apache2/htdocs/living_octave_research/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,labelAlign: 'top'
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? 0 : 1
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('shownone')
        ,description: MODx.expandHelp ? '' : _('shownone_desc')
        ,name: 'inopt_showNone'
        ,hiddenName: 'inopt_showNone'
        ,id: 'inopt_showNone<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['showNone'] == 0 || params['showNone'] == 'false' ? 0 : 1
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_showNone<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('shownone_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('resourcelist_parents')
        ,description: MODx.expandHelp ? '' : _('resourcelist_parents_desc')
        ,name: 'inopt_parents'
        ,id: 'inopt_parents<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['parents'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_parents<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_parents_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('resourcelist_depth')
        ,description: MODx.expandHelp ? '' : _('resourcelist_depth_desc')
        ,name: 'inopt_depth'
        ,id: 'inopt_depth<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['depth'] || 10
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_depth<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_depth_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('resourcelist_includeparent')
        ,description: MODx.expandHelp ? '' : _('resourcelist_includeparent_desc')
        ,name: 'inopt_includeParent'
        ,hiddenName: 'inopt_includeParent'
        ,id: 'inopt_includeParent<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['includeParent'] == 0 || params['includeParent'] == 'false' ? 0 : 1
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_includeParent<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_includeparent_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('resourcelist_limitrelatedcontext')
        ,description: MODx.expandHelp ? '' : _('resourcelist_limitrelatedcontext_desc')
        ,name: 'inopt_limitRelatedContext'
        ,hiddenName: 'inopt_limitRelatedContext'
        ,id: 'inopt_limitRelatedContext<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['limitRelatedContext'] == 1 || params['limitRelatedContext'] == 'true' ? 1 : 0
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_limitRelatedContext<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_limitrelatedcontext_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textarea'
        ,fieldLabel: _('resourcelist_where')
        ,description: MODx.expandHelp ? '' : _('resourcelist_where_desc')
        ,name: 'inopt_where'
        ,id: 'inopt_where<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['where'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_where<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_where_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'numberfield'
        ,fieldLabel: _('resourcelist_limit')
        ,description: MODx.expandHelp ? '' : _('resourcelist_limit_desc')
        ,name: 'inopt_limit'
        ,id: 'inopt_limit<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['limit'] || 0
        ,allowNegative: false
        ,allowDecimals: false
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_limit<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('resourcelist_limit_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

