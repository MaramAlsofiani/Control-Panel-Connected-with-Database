<?php

// Create connection
$conn = new mysqli("localhost", "root", "");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";




// Create database
$sql = "CREATE DATABASE Control_Panel";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn1 = new mysqli("localhost", "root","" ,"Control_Panel");

// sql to create table
$sql = "CREATE TABLE Contor_PanelT (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Up VARCHAR(30),
Down VARCHAR(30),
Rightt VARCHAR(30),
Leftt VARCHAR(30),
Stop VARCHAR(30)
)";

if ($conn1->query($sql) === TRUE) {
  echo "Table Contor_PanelT created successfully";


} else {
  echo "Error creating table: " . $conn1->error;
}
$conn2 = new mysqli("localhost", "root","" ,"Control_Panel");

$sql2 = "INSERT INTO Contor_PanelT (Up, Down, Rightt, Leftt, Stop)
VALUES ('Forward', 'Backward', 'Right','Left','Stop')";

if ($conn2->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn2->error;
}
$conn2->close();

$conn1->close();

$conn->close();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    button {
      color:purple;
    font-family: verdana;
    border: 2px solid purple;
           font-weight: bold;
background-color: rgb(234, 238, 234);

  }

      #R{
position: absolute;
        top:80px;
        left:200px;



      }
      #l{
        position: absolute;
                top:80px;



      }
      #s{
        position: absolute;
                top:80px;
                left:100px;
                color:red;
                  border: 4px solid red;

      }
      #f{
        position: absolute;
                left:100px;
                animation:f 2s infinite;
                animation-play-state: paused

      }
      #b{
position: absolute;
top:150px;
left: 90px;
animation:b 2s infinite;
animation-play-state: paused

      }
      #name{
          position: absolute;
        top:450px;
        left :100px;

        font-weight: bold;
      }


      body{

       background-image: url("back.jpg");
       background-repeat: no-repeat
      }


    </style>
  </head>

  <body>
    <form  action="Go.php" method="post">
      <button id="R" type="submit" name="right" >Right</button>
              <button id="f" type="submit" name="forward">Forward</button>
              <button id="b" type="submit" name"backward">Backward</button>
              <button id="s" type="submit" name"stop">STOP</button>
              <button id="l" type="submit" name"left" >Left</button>

    </form>

            <p id="name">Done by: Maram Al-Sofiani</p>
<script>

</script>
  </body>
</html>
