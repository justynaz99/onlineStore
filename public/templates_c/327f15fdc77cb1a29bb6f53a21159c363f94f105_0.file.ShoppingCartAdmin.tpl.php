<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 08:57:09
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCartSeller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edf32c50378c3_51859681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327f15fdc77cb1a29bb6f53a21159c363f94f105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCartSeller.tpl',
      1 => 1591605860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edf32c50378c3_51859681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4341051985edf32c5013278_98093425', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10780546145edf32c5024088_16434140', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19673950265edf32c5025523_98551191', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17524786915edf32c50265f1_99104495', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15325287045edf32c5027539_72469474', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_4341051985edf32c5013278_98093425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_4341051985edf32c5013278_98093425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_10780546145edf32c5024088_16434140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_10780546145edf32c5024088_16434140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeAdmin">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuShoppingCart"} */
class Block_19673950265edf32c5025523_98551191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_19673950265edf32c5025523_98551191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shoppingCartShow">Koszyk</a></li>
<?php
}
}
/* {/block "menuShoppingCart"} */
/* {block "menuLogOut"} */
class Block_17524786915edf32c50265f1_99104495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_17524786915edf32c50265f1_99104495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
<?php
}
}
/* {/block "menuLogOut"} */
/* {block "content"} */
class Block_15325287045edf32c5027539_72469474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15325287045edf32c5027539_72469474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 20px">
        <h4>Twój koszyk:</h4>
        <div class="table-wrapper" style="width: 600px">
            <table>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value["name_product"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["price_product"];?>
</td>
                        <td align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteItem/<?php echo $_smarty_tpl->tpl_vars['row']->value["id_product"];?>
" class="button">Usuń</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
