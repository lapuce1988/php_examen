<div class="container">
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

        {foreach $products as $product}
            <div class="col-md-3 product_card ">
                <div class="card">
                    <a href="product/{$product->getId()}" rel="Vous avez choisi">
                        <img src="./views/img/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{$product->getName()|utf8_encode}</h5>
                        <p class="card-text">{$product->getShortDescription()|utf8_encode}</p>
                        <div class="row">
                            <div class="col-sm">
                                <a href="#" class="btn btn-danger add-to-cart mx-auto"><i class="fa fa-cart"></i><img src="./views/img/panier.png"></a>
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