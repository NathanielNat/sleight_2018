<?php

class Dbh {
  private $server_name;
  private $user_name;
  private $password;
  private $dbname;
  private $charset;

 public function connect() {
   $this->server_name = "localhost";
   $this->user_name = "root";
   $this->password = "";
   $this->dbname = "project_php";
   $this->charset = "utf8mb4";

   try {
     $dsn ="mysql:host=".$this->server_name.";dbname=".$this->dbname.";charset=".$this->charset;
     $pdo= new PDO($dsn, $this->user_name,  $this->password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // $created_at = date("Y-m-d");

     // $sql = "INSERT INTO users (email) VALUES ('psalmnat@gmail.com')";
     $sql = "INSERT INTO users (email,password,created_at) VALUES ('mensah@gmail.com','roij09323gt',$created_at)";

     $pdo->exec($sql);

   } catch (PDOException $e) {
     echo "Connection Failed: ".$e->getMessage();
   }

 }
}
