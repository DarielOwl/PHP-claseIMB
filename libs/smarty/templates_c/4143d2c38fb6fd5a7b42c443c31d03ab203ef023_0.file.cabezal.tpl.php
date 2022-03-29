<?php
/* Smarty version 4.1.0, created on 2022-03-30 01:27:54
  from 'C:\xampp\htdocs\framework_upload\vistas\cabezal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624395fa530292_62812802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4143d2c38fb6fd5a7b42c443c31d03ab203ef023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework_upload\\vistas\\cabezal.tpl',
      1 => 1585089006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624395fa530292_62812802 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
pelicula/listado/">Peliculas</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">Cerrar Sesión</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/buscar/">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav><?php }
}
