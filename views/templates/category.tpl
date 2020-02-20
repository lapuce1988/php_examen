<div class="container">
    <br>
    <div class="row product_list ">
        {foreach $products as $product}
            <div class="col-md-3 product_card ">
                <div class="card">
                    <a href="product/{$product->getId()}" rel="Vous avez choisi">
                        <img src="{$url}/views/img/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{$product->getName()|utf8_encode}</h5>
                        <p class="card-text">{$product->getShortDescription()|utf8_encode}</p>
                        <div class="row">
                            <div class="col-sm">
                                <a href="#" class="btn btn-danger add-to-cart mx-auto"><i class="fa fa-cart"></i><img src="{$url}/views/img/panier.png"></a>
                            </div>
                            <div class="col-sm-6 price mx-auto">
                                {$product->getPrice()|number_format:2}€
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    <br>
</div>