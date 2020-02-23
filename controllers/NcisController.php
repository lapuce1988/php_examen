<?php

class NcisController extends BaseController{
    protected $name='Ncis';

    public function getTriParNom(){
        $pdo = DB::getInstance(); //Instance db
        $req = "SELECT * FROM product  WHERE UPPER(name) like UPPER('%" . $_POST["ncis"] . "%')";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultats = $stmt->fetchAll();
        $products = [];

        foreach ($resultats as $key => $resultat) {
            $products[] = Product::fromData(new Product(), $resultat);
        }
        return $products;
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "category" => $this->getTriParNom()

        );
    }
}