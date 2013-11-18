<?php /* Smarty version Smarty-3.0.4, created on 2013-11-18 13:25:42
         compiled from "/Applications/mampstack-5.3.17-0/apache2/htdocs/living_octave_research/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:686962290528a85d669d2d5-51139575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d230cde7687ba0086e25e820e49adc1f87c7505' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/living_octave_research/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1383951453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686962290528a85d669d2d5-51139575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('urls')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
?>
	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null)==$_smarty_tpl->getVariable('selected')->value){?>selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
</option>
<?php }} ?>
</select>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text"
    style="width: 70%;"
	value="<?php echo $_smarty_tpl->getVariable('tv')->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
/>
<script type="text/javascript">
Ext.onReady(function() {
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
});
</script>