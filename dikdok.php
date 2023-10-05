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

