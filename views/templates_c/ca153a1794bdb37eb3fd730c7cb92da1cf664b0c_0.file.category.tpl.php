<?php
/* Smarty version 3.1.33, created on 2020-02-23 21:07:50
  from 'C:\wamp64\www\examen_php\views\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e52e9a6976439_25547860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca153a1794bdb37eb3fd730c7cb92da1cf664b0c' => 
    array (
      0 => 'C:\\wamp64\\www\\examen_php\\views\\templates\\category.tpl',
      1 => 1582491783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e52e9a6976439_25547860 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row product_list ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
            <div class="col-md-3 product_card ">
                <div class="card">
                    <a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" rel="categorie choisi">
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
                                <a href="#" class="btn btn-danger add-to-cart mx-auto"><i class="fa fa-cart"></i><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/img/panier.png"></a>
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
    <br>
</div><?php }
}
