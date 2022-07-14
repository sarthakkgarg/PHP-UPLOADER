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
    $sql = "INSERT INTO `ws-php`.`demo` (`name`, `age`) VALUES ('$name', '$age');";

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



<html>
<head>
  <meta charset="utf-8">
  <title>Simple Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="login-root">
  <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
   <div
  class="box-root flex-flex flex-direction--column"
  style="min-height: 100vh; flex-grow: 1"
>
  <div class="loginbackground box-background--white padding-top--64">
    <div class="loginbackground-gridContainer">
      <div class="box-root flex-flex" style="grid-area: top / start / 8 / end">
        <div
          class="box-root"
          style="
            background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%);
            flex-grow: 1;
          "
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5">
        <div
          class="box-root box-divider--light-all-2 animationLeftRight tans3s"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2">
        <div
          class="box-root box-background--blue800"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4">
        <div
          class="box-root box-background--blue animationLeftRight"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6">
        <div
          class="box-root box-background--gray100 animationLeftRight tans3s"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end">
        <div
          class="box-root box-background--cyan200 animationRightLeft tans4s"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end">
        <div
          class="box-root box-background--blue animationRightLeft"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20">
        <div
          class="box-root box-background--gray100 animationRightLeft tans4s"
          style="flex-grow: 1"
        ></div>
      </div>
      <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17">
        <div
          class="box-root box-divider--light-all-2 animationRightLeft tans3s"
          style="flex-grow: 1"
        ></div>
      </div>
    </div>
  </div>
  <div
    class="box-root padding-top--24 flex-flex flex-direction--column"
    style="flex-grow: 1; z-index: 9"
  >
    <div
      class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center"
    >
      <h1>Form</h1>
    </div>
    <div class="formbg-outer">
      <div class="formbg">
        <div class="formbg-inner padding-horizontal--48">
          <span class="padding-bottom--15">Enter your details here</span>
          <form id="stripe-login" action="index.php" method="post">
            <div class="field padding-bottom--24">
              <label for="email">Name</label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter your name"
              />
            </div>
            <div class="field padding-bottom--24">
              <label for="age">Age</label>
              <input
                type="text"
                name="age"
                id="age"
                placeholder="Enter your Age"
              />
            </div>

            <div class="field padding-bottom--24">
              <input class="btn" type="submit" name="submit" value="Submit" />
            </div>
          </form>

          <form
            id="stripe-login"
            action="upload.php"
            method="post"
            enctype="multipart/form-data"
          >
            <label for="file">Select file to Upload</label>
            <input type="file" name="image" />
            <div class="field padding-bottom--24">
              <input 
                class="btn"
                type="submit"
                value="Upload"
                name="submit"
              />
            </div>
          </form>

          <form
            id="stripe-login"
            action="getData.php"
            method="post"
            enctype="multipart/form-data"
          >
            <label for="file">View Database</label>
            <div class="field padding-bottom--24">
              <input
                class="btn"
                type="submit"
                value="Database"
                name="submit"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</body>

</html>

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