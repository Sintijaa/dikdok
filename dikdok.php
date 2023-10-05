<?php

Class komentārs{
  private $id;
  private $video_id;
  private $autora_id;
  public $teksts;
}
?>
<?php

class Video {
    public $id;
    public $url;
    public $autora_id;
    public $nosaukums;

    public function __construct($id, $url, $autora_id, $nosaukums) {
        $this->id = $id;
        $this->url = $url;
        $this->autora_id = $autora_id;
        $this->nosaukums = $nosaukums;
    }

    public function info() {
        return "Video ID: " . $this->id . "\nURL: " . $this->url . "\nAutors ID: " . $this->autora_id . "\nNosaukums: " . $this->nosaukums;
    }
}

// Piemērs, kā izmantot šo klasi:
$video1 = new Video(1, "https://www.example.com/video1", 101, "Mana video 1");
echo $video1->info();
?>


<?php
class Lietotajs {
    public $id;
    public $lietotajvards;
    public $epasts;
    public $parole;

    public function __construct($id, $lietotajvards, $epasts, $parole) {
        $this->id = $id;
        $this->lietotajvards = $lietotajvards;
        $this->epasts = $epasts;
        $this->parole = $parole;
    }

    public function info() {
        return "Lietotāja ID: " . $this->id . "\nLietotājvārds: " . $this->lietotajvards . "\nEpasts: " . $this->epasts;
    }

    public function mainitParoli($jaunaParole) {
        $this->parole = $jaunaParole;
    }
}

// Piemērs, kā izmantot šo klasi:
$lietotajs1 = new Lietotajs(1, "lietotajs123", "lietotajs@example.com", "slepena_parole");
echo $lietotajs1->info();

// Mainīt paroli


?>