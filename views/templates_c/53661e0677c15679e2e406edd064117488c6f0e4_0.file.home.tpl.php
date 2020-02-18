<?php
/* Smarty version 3.1.33, created on 2020-02-18 14:11:15
  from 'C:\wamp64\www\examen_php\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4bf083bf1e17_08458282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53661e0677c15679e2e406edd064117488c6f0e4' => 
    array (
      0 => 'C:\\wamp64\\www\\examen_php\\views\\templates\\home.tpl',
      1 => 1582035061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4bf083bf1e17_08458282 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExempleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExempleIndicators" data-slide-to="1" ></li>
                <li data-target="#carouselExempleIndicators" data-slide-to="2" ></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./views/img/sliders/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./views/img/sliders/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./views/img/sliders/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <br>
    <div class="row">
        <blockquote class="blockquote mx-auto">
            <p class="mb-0">"Hé, salut, tu veux pas rentrer dans ma Guilde ?"</p>
            <footer class="blockquote-footer">Sparadrap</footer>
        </blockquote>
    </div>
    <br>

    <h3>BEST SELLERS</h3>
    <div class="row product_list ">

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
    <br>

</div><?php }
}
