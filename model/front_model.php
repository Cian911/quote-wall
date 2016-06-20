<?php

class FrontModel extends Model {

  public function __construct() {
    parent::__construct();
  }

  public function getQuotes() {
    $sql = "SELECT * FROM `quotes` ORDER BY `date` DESC";
    $query = $this->db->prepare( $sql );
    $result = $query->execute();

    if ( $result ) {
      return $data = $query->fetchAll();
    } else {
      return false;
    }
  }

  public function addQuote( $data ) {
    $sql = "INSERT INTO quotes (author, quote_title, text, date) VALUES ( '".$data['author']."', '".$data['title']."', '".$data['text']."', NOW() )";
    $query = $this->db->prepare( $sql );
    $result = $query->execute();

    if ( $result ) {
      return true;
    } else {
      return false;
    }
  }

  public function addVotes() {}

  public function getVotes() {}

}