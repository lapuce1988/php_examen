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

    public static function getProducts(){
        $pdo = DB::getInstance();
        $requete="SELECT * FROM product";


        $stmt = $pdo->prepare($requete);
        $stmt->execute();

        $rows = $stmt->fetchAll();
        $products = [];

        foreach ($rows as $key => $row){
            $products[] = Product::fromRow(new Product(), $row);
        }
        return $products;
    }

}