<?php
   $servername = "localhost";
   $database = "blog..php";
   $username = "root";
   $password = "";
   // Создаем соединение
   $conn = mysqli_connect($servername, $username, $password, $database);
   $conn->set_charset("utf8");
   // Проверяем соединение
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }