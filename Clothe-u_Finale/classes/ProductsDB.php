<?php

class ProductsDB {

  public $id;
  public $name;
  public $photo;
  public $brand;
  public $price;
  public $description;
  public $rating;

  public function __construct($id, $name,$photo,$brand, $price, $description,$rating){
    $this->id = (int)$id;
    $this->nome = $name;
    $this->foto = $photo;
    $this->marca = $brand;
    $this->prezzo = (float)$price;
    $this->descrizione = $description;
    $this->rating = (float)$rating;
  }
}

class ProductManager extends DBManager {

  public function __construct(){
    parent::__construct();
    $this->columns = array( 'id', 'nome', 'foto','marca','prezzo', 'descrizione', 'rating' );
    $this->tableName = 'prodotti';
  }
}