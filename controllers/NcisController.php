<?php
require_once('./controllers/BaseController.php');//sert à charger la classe parent dont on a besoin
require_once ('./classes/Product.php');
class NcisController extends BaseController{
    protected $name='ncis';

    public function getTriParNom(){
        $result = Db::getInstance()->query("SELECT * FROM product  WHERE name like '%" . $_POST["productName"] . "%'")->fetchAll();
        $products = [];

        foreach ($result as $key => $row) {
            $products[] = Product::fromRow(new Product(), $row); //on crée un nouvel objet product dans lequel on vient injecter la valeur contenue dans $row

        }

        return $products;
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "products" => $this->getTriParNom()    //"" = nom des variables qui seront utilisées dans le template

        );
    }
}