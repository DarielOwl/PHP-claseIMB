<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-05 20:59:05
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32573606b7a19a3a0b8-51583323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3035c30423fd637e785696db9779eb056c0562' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1585089006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32573606b7a19a3a0b8-51583323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'proyecto' => 0,
    'url_base' => 0,
    'url_logout' => 0,
    'controller' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_606b7a19a93e41_78413849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606b7a19a93e41_78413849')) {function content_606b7a19a93e41_78413849($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
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
    </nav><?php }} ?>
