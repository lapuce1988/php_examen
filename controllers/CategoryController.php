<?php

class CategoryController extends BaseController{
    protected $name= 'category';
    protected $id;

    public function getTriParCategorie($id){
        $pdo = DB::getInstance(); //Instance db
        $req = "SELECT * FROM product  WHERE id_category = " . $id . " ORDER BY name";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultats = $stmt->fetchAll();
        $products = [];

        foreach ($resultats as $key => $resultat) {
            $products[] = Product::fromData(new Product(), $resultat);
        }
        var_dump($products);
        return $products;
    }



     protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product'=> $this->getTriParCategorie($_GET['id'])
        );
    }



}