<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="bd-title text-center">{$product->getName()|utf8_encode}</h2>
        </div>
    </div>
    <div class="row">
        <h6 class="bd-lead">{$product->getShortDescription()|utf8_encode}</h6>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="../views/img/products/{$product->getId()}.jpg" alt="{$product->getName()|utf8_encode}" class="img-thumbnail">
        </div>
        <div class="col">
            <p>{$product->getLongDescription()|utf8_encode}</p>
            <div class="col">
                <h6>Quantité restante : {$product->getStock()}</h6>
                <h4 class="text-right">Prix : {$product->getPrice()}€</h4>
            </div>
            <div class="col">
                <a href="#" class="btn btn-danger add-to-cart text-right"><i class="fa fa-cart"></i><img src="../views/img/panier.png"></a>
            </div>
        </div>

    </div>
</div>
