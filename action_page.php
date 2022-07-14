<?php
    $insert = false;
    if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

      // Create a database connection
      $con = mysqli_connect($server, $username, $password);

      // Check for connection success
      if(!$con){
          die("connection to this database failed due to" . mysqli_connect_error());
      }
      echo "succesfully Connected <br> ";


    $name = $_POST['name'];
    $age = $_POST['age'];
    $sql = "INSERT INTO `workshopphp`.`demo` (`name`, `age`) VALUES ('$name', '$age');";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
    }

?>

<?php

    class Human{
        private $gender;
        public function setName($gender){
        $this->gender = $gender;
        }
        public function getName(){
        return 'Gender : = '. $this->gender;
        }
    }
    $Human = new Human();
    $Human->setName('Male');
    $gender = $Human->getName();
    echo $gender;


    class student extends Human {
        private $name;
      public function setName($name){
         $this->name = $name;
      }
      public function getName(){
         return 'welocme'. $this->name;
      }
   }
    
?>

