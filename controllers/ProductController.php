<?php
class ProductController extends BaseController{
    protected $name = 'Product';
    protected $id;

    public function __construct($id)
    {
        $this->smarty = new SmartyLoader();
        $this->id = $id;
        $this->renderView();
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "product" => new Product($this->id)
        );
    }

    public function getProduct($id){
        return new Product($id);
    }
    public static function getProducts(){
        $pdo = DB::getInstance();
        $req="SELECT * FROM product";

        $stmt = $pdo->prepare($req);
        $stmt->execute();

        $resultats = $stmt->fetchAll();
        $products = [];

        foreach ($resultats as $key => $resultat){
            $products[] = Product::fromData(new Product(), $resultat);
        }
        return $products;
    }

}