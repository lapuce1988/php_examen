<?php

class CategoryController extends BaseController{
    protected $name= 'category';
    protected $category;

    public function __construct($category)
    {
        $this->smarty = new SmartyLoader();
        $this->category = $category;
        $this->renderView();
    }

    public function getTriParCategorie($category){
        $pdo = DB::getInstance();
        $req = "SELECT * FROM product WHERE UPPER(category) = UPPER('" . $category . "') ORDER BY name ASC";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultats = $stmt->fetchAll();
        $category = [];

        foreach ($resultats as $key => $resultat){
            $category[] = Product::fromData(new Product(), $resultat);
        }
        return $category;
    }



    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product'=> $this->getTriParCategorie($this->category)
        );
    }



}