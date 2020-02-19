<?php
/* Smarty version 3.1.33, created on 2020-02-19 04:52:59
  from 'C:\wamp64\www\examen_php\views\templates\ncis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4cbf2b8d6ae2_89250752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e34bf98cd33f2b539b0d27e16d2898a1b82b86f' => 
    array (
      0 => 'C:\\wamp64\\www\\examen_php\\views\\templates\\ncis.tpl',
      1 => 1582086533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4cbf2b8d6ae2_89250752 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row product_list ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="col-md-3 product_card ">
            <div class="card">
                <a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" rel="Vous avez choisi">
                    <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getName());?>
</h5>
                    <p class="card-text"><?php echo utf8_encode($_smarty_tpl->tpl_vars['product']->value->getShortDescription());?>
</p>
                    <div class="row">
                        <div class="col-sm">
                            <a href="#" class="btn btn-danger add-to-cart mx-auto"><i class="fa fa-cart"></i><img src="./views/img/panier.png"></a>
                        </div>
                        <div class="col-sm-6 price mx-auto">
                            <?php echo number_format($_smarty_tpl->tpl_vars['product']->value->getPrice(),2);?>
€
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<br><?php }
}
