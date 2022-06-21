<?php
class Complaint extends Conexao
{
  public function ComplaintRegistration($table, $values)
  {
    mysqli_query($this->conecta, "INSERT INTO " . $table . " SET " . $values . "");
  }

  public function SearchComplaint($table, $id)
  {
    mysqli_query($this->conecta, "SELECT * FROM " . $table . " WHERE id = " . $id . "");
  }
}