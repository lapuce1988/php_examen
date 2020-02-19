<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h2 class="bd-title text-center">{$product->getName()|utf8_encode}</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="../views/img/products/{$product->getId()}.jpg" alt="{$product->getName()|utf8_encode}" class="img-thumbnail">
        </div>
        <div class="col">
            <h6 class="bd-lead">{$product->getShortDescription()|utf8_encode}</h6>
            <br>
            <p>{$product->getLongDescription()|utf8_encode}</p>
            <br>
            <div class="col">
                <h6>Quantité restante : {$product->getStock()}</h6>
                <h4 class="text-right">Prix : {$product->getPrice()}€</h4>
            </div>
            <div class="col">
                <a href="#" class="btn btn-danger add-to-cart text-right"><i class="fa fa-cart"></i><img src="../views/img/panier.png"></a>
                <br><br>
            </div>
        </div>

    </div>
</div>
