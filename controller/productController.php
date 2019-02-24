<?php
    include 'service/productService.php';

    class ProductController {
        public function getAllProduct(){
            $productService = new ProductService();

            return $productService->getAllProduct();
        }
    }
?>