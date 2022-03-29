<?php
/* Smarty version 4.1.0, created on 2022-03-30 01:46:01
  from 'C:\xampp\htdocs\framework\vistas\peliculas_listado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62439a39bd27f8_19476209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a0e63a2971dc40a6b4c02c10e03e79a11f9a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\vistas\\peliculas_listado.tpl',
      1 => 1585081261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_62439a39bd27f8_19476209 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    
    
  </head>

  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Peliculas</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Año</th>
                  <th>Póster</th>
                  <th>Título</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->getAnio();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->getTitulo();?>
</td>
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->getPoster();?>
" class="img-fluid img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->getTitulo();?>
"></td>
                    <td>
                      <input type="button" value="Para Ver" class="btn btn-info" onClick="javascript:paraVer('<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->getId();?>
');"/>
                     
                      
                    </td>
                  </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }
}
