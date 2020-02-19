<?php
/* Smarty version 3.1.33, created on 2020-02-19 04:32:01
  from 'C:\wamp64\www\examen_php\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4cba41483798_83645332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327f32eb50fe022ec28451d6b0a5da198f2f5579' => 
    array (
      0 => 'C:\\wamp64\\www\\examen_php\\views\\templates\\product.tpl',
      1 => 1582086721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4cba41483798_83645332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col">
            <h2 class="bd-title text-center"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getName());?>
</h2>
        </div>
    </div>
    <div class="row">
        <h6 class="bd-lead"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getShortDescription());?>
</h6>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="../views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" alt="<?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getName());?>
" class="img-thumbnail">
        </div>
        <div class="col">
            <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getLongDescription());?>
</p>
            <div class="col">
                <h6>Quantité restante : <?php echo $_smarty_tpl->tpl_vars['product']->value->getStock();?>
</h6>
                <h4 class="text-right">Prix : <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
€</h4>
            </div>
            <div class="col">
                <a href="#" class="btn btn-danger add-to-cart text-right"><i class="fa fa-cart"></i><img src="../views/img/panier.png"></a>
            </div>
        </div>

    </div>
</div>
<?php }
}
