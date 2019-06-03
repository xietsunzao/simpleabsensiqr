<?php

class Dashboard_model extends Ci_Model{

  public function total($table)


  {
      $query = $this->db->get($table)->num_rows();
      return $query;
  }


}

 ?>
