<?php
    include 'dao/productDao.php';

    class ProductService {
        public function getAllProduct(){
            $productDao = new ProductDao();
            
            return $productDao->getAllProduct();
        }
    }
?>