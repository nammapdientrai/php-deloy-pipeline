<?php
class Product {
    // table name
    private $table_name = "products";

    // table columns
    private $id;
    private $name;
    private $description;
    private $price;
    private $category_id;

    public function __construct($row){
        $this->id = $row["id"];
        $this->name = $row["name"];
        $this->description = $row["description"];
        $this->price = $row["price"];
        $this->category_id = $row["category_id"];
    }



    /* CALCULATOR : START */
    public function calcuTotal() {
        return ($this->price * 5);
    }
    /* CALCULATOR : END */



    /* GET - SET ID : START */
    public function get_id() {		
        return $this->id;		
    }

    public function set_id($id) {
        $this->id = $id;
    }	
    /* GET - SET ID : END */



    /* GET - SET NAME : START */
    public function get_name() {		
        return $this->name;		
    }
    
    public function set_name($name) {
        $this->name = $name;
    }	
    /* GET - SET NAME : END */



    /* GET - SET DESCRIPTION : START */
    public function get_description() {		
        return $this->description;		
    }
    
    public function set_description($description) {
        $this->description = $description;
    }	
    /* GET - SET DESCRIPTION : END */



    /* GET - SET PRICE : START */
    public function get_price() {		
        return $this->price;		
    }
    
    public function set_price($price) {
        $this->price = $price;
    }	
    /* GET - SET PRICE : END */



    /* GET - SET CATEGORY : START */
    public function get_category_id() {		
        return $this->category_id;		
    }
    
    public function set_category_id($category_id) {
        $this->category_id = $category_id;
    }	
    /* GET - SET CATEGORY : END */
}
?>