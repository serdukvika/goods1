<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goods";
// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("set names utf8");
// Проверка соединения 
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT good_name, good_price, good_sales FROM goods";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    echo "<table>";
    echo  "<tr><td>Name:</td>" . " <td>Цена:</td>" . "<td>Продажи: </td></tr>";
     // output data of each row
     while ($row = $result->fetch_assoc()) {
         echo  "<tr><td>" $row["good_name"] "</td><td> ". $row["good_price"] . "</td><td>" . $row["good_sales"] . "</td></tr>";
     }
     echo "</table>";
 } else {
     echo "0 results";
 } $conn->close();
