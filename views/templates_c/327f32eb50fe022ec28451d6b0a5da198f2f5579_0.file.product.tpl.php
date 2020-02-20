<?php
/* Smarty version 3.1.33, created on 2020-02-20 07:35:29
  from 'C:\wamp64\www\examen_php\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e36c13c7754_06410381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327f32eb50fe022ec28451d6b0a5da198f2f5579' => 
    array (
      0 => 'C:\\wamp64\\www\\examen_php\\views\\templates\\product.tpl',
      1 => 1582184129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e36c13c7754_06410381 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h2 class="bd-title text-center"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getName());?>
</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" alt="<?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getName());?>
" class="img-thumbnail">
        </div>
        <div class="col">
            <h6 class="bd-lead"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getShortDescription());?>
</h6>
            <br>
            <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getLongDescription());?>
</p>
            <br>
            <div class="col">
                <h6>Quantité restante : <?php echo $_smarty_tpl->tpl_vars['product']->value->getStock();?>
</h6>
                <h4 class="text-right">Prix : <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
€</h4>
            </div>
            <div class="col">
                <a href="#" class="btn btn-danger add-to-cart text-right"><i class="fa fa-cart"></i><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/img/panier.png"></a>
                <br><br>
            </div>
        </div>

    </div>
</div>
<?php }
}
