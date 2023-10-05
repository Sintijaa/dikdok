<?php
Class komentārs{
  private $id;
  private $video_id;
  private $autora_id;

  public $teksts;

  public function __construct($db)
  {
    $this->conn = $db;
  }
}
?>
