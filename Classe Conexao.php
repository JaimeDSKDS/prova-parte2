<?php
class Conexao {
var $host="localhost";
var $user="root";
var $password="";
var $database="registros";

  public function conecta()
  {
    var $run = mysqli_connect($this->database, $this->host,$this->user,$this->password);
    return $run;
  }
}
