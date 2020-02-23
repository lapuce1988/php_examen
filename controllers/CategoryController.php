<?php

class CategoryController extends BaseController{
    protected $name= 'category';


    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product'=> $this->Product::getTriCategory($_GET['category'])
        );
    }



}