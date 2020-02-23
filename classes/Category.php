<?php
class Category extends BaseEntity{
    protected $id;
    protected $category;

    public static $definition = array(
        'table' => "category",
        'primary'=>'id',
        'fields' => array(
            'id',
            'category'
        )
    );

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    public static function getCategories(){
        $pdo = Db::getInstance();
        $req = 'SELECT * FROM'.static::$definition['table'];
        $stmt = $pdo->query($req);
        $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultats as $resultat){
            $categories[] = new self($resultat['id']);
        }
        return $categories;
    }


    /**
     * @return array
     */
    public static function getDefinition()
    {
        return self::$definition;
    }

   public static function getFields(){
        return self::$definition['fields'];
   }

}