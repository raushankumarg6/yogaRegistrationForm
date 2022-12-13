<?php
        error_reporting(0) ; 
        // Credentials 
        $servername = "localhost" ; 
        $username = "root" ;  
        $password="" ; 
        $dbname = "yoga-registration-form" ; 

        // Establishing conn
        $connection = mysqli_connect($servername , $username , $password , $dbname) ; 
        if($connection){
            // echo "Connection Ok!! " ; 
        }
        else{
            echo "Connection Failed !!".mysqli_connect_error() ; 
        }

        // Inserting data of the form 
        if($_POST['submit-btn']) 
            {
                // Selecting input field by name of the form 
                $email = $_POST['email'] ; 
                $name = $_POST['name'] ; 
                $age = $_POST['age'] ; 
                $timing = $_POST['timing'] ; 
                $insertQuery = "INSERT INTO userdetails VALUES('$email' ,'$name','$age' ,'$timing')" ;

                $data = mysqli_query($connection , $insertQuery) ; 
                if($data)
                {
                    // echo "Data inserted in to the database !!"; 
                }
                else{
                    // echo "Failed !!" ; 
                }
            }

?>