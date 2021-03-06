<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 22:03:22
  from 'C:\xampp\htdocs\onlineStore\app\views\Registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef7a60a766181_68469701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8fb0ce7003a751895cf2d59aed2b6e1bc14ac97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Registration.tpl',
      1 => 1593288200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7a60a766181_68469701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10056094485ef7a60a75d152_13162482', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16033873635ef7a60a761e50_75111612', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2360414525ef7a60a762c66_07213944', "menuRegistration");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14174749695ef7a60a763950_54647442', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_10056094485ef7a60a75d152_13162482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_10056094485ef7a60a75d152_13162482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuLogIn"} */
class Block_16033873635ef7a60a761e50_75111612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_16033873635ef7a60a761e50_75111612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a></li>
<?php
}
}
/* {/block "menuLogIn"} */
/* {block "menuRegistration"} */
class Block_2360414525ef7a60a762c66_07213944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_2360414525ef7a60a762c66_07213944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow">Zarejestruj</a></li>
<?php
}
}
/* {/block "menuRegistration"} */
/* {block "content"} */
class Block_14174749695ef7a60a763950_54647442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14174749695ef7a60a763950_54647442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" style="width: 400px; margin-top: 1%" method="post">
            <h3>Zarejestruj się</h3>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" placeholder="Nazwa użytkownika" /><br>
                <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" placeholder="Hasło" /><br>
                <input type="text" name="first_name" id="first_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->first_name;?>
" placeholder="Imię" /><br>
                <input type="text" name="last_name" id="last_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->last_name;?>
" placeholder="Nazwisko" /><br>
                <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" placeholder="Adres email" /><br>
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
