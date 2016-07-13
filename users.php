<?php

if(!preg_match('/^[0-9]+/', $_GET["id"])){
  die("int değer gönder hacı :D ");
}
$sql =  "Select * From users where id=";
$sql .= $_GET["id"];

$result =  mysql_query($sql);

if($result) {
?>
  <table class="table table-hover">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>username</th>
    </tr>
  </table>
<?php
while($row = mysql_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['username']."</td>";
  echo "</tr>";
}

?>
