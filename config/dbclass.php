<?php
    class DBConnect {
        static $con = null;

        static function connectedDB() {
            self::$con = mysqli_connect("172.17.0.3:3306/","root","123456789","test");

            // Check connection
            if (mysqli_connect_errno()){
                return false;
            } else{
                return true;
            }
        }
    }

    /*$con = mysqli_connect("localhost:3306","root","","test");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else{
        echo "Success to connect to MySQL"."<br>";

        $sql = "SELECT id, name FROM products";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $con->close();
    }*/
?>