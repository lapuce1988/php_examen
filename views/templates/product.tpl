
{*<div class="col-md-3 product_card ">*}
{*    <div class="card">*}
{*        <a href="product/{$product->getId()}" rel="Vous avez choisi">*}
{*            <img src="images/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">*}
{*        </a>*}
{*        <div class="card-body">*}
{*            <h5 class="card-title">{$product->getName()}</h5>*}
{*            <p class="card-text">{$product->getShortDescription()}</p>*}
{*            <div class="row">*}
{*                <div class="col-sm-6">*}
{*                    <a href="#" class="btn btn-primary add-to-cart mx-auto"><i class="fa fa-cart"></i> Add to cart</a>*}
{*                </div>*}
{*                <div class="col-sm-6 price">*}
{*                    {$product->getPrice()|number_format:2}€*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*    </div>*}
{*</div>*}
<p>Test Bonjour</p>

<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bd-title">{$product->getName()}</h2>
            <h6 class="bd-lead">{$product->getShortDescription()}</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="./views/img/products/{$product->getId()}.jpg" alt="{$product->getName()}">
        </div>
        <div class="col-md-5">
            <p>
                {$product->getLongDescription()}
            </p>
        </div>
        <div class="col-md-3 bg-primary">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label>{$product->getPrice()}€</label><br>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            Quantité :
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Number</label>
                            <div class="col-4">
                                <input class="form-control" type="number" value="42" id="example-number-input">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>