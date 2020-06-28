<?php
$connc = new mysqli("localhost", "root", "", "Control_Panel");
$stmt = $connc->prepare("select * from Contor_PanelT");

if ($connc->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

else {
$stmt->execute();
$result = $stmt->get_result();
if (isset($_POST['forward'])) {
  // output data of each row
  while($row=$result->fetch_assoc()) {
    echo "$row[Up]";
  }
}
if (isset($_POST['backward'])) {
  // output data of each row
  while($row=$result->fetch_assoc()) {
    echo "$row[Down]";
  }
}
if (isset($_POST['right'])) {
  // output data of each row
  while($row=$result->fetch_assoc()) {
    echo "$row[Rightt]";
  }
}
if (isset($_POST['left'])) {
  // output data of each row
  while($row=$result->fetch_assoc()) {
    echo "$row[Leftt]";
  }
}

if (isset($_POST['stop'])) {
  // output data of each row
  while($row=$result->fetch_assoc()) {
    echo "$row[Stop]";}
}




}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br><br>
    <button type="button" name="button"Onclick=go()>Home Page</button>
      </body>
      <script type="text/javascript">
      function go(){
        window.history.back();

      }

      </script>
</html>
