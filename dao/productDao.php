<?php
    include 'config/dbclass.php';
    include 'model/product.php';

    class ProductDao {

        public function getAllProduct (){
            $arr = array();

            if( DBConnect::connectedDB() ) {
                $sql = "SELECT * FROM products";
                $result = DBConnect::$con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $p = new Product($row);
                        array_push($arr, $p);
                    }
                } else {
                    echo "0 results";
                }
                DBConnect::$con->close();
            } else {
                echo 'Fail connect';
            }

            return $arr;
        }
    }
?>