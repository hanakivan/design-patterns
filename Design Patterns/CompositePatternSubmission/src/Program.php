<?php

require_once "./Playlist.php";
require_once "./Song.php";

class Program {

    public function __construct()
    {
        $avaMaxKingsQueens = new Song("Kings & Queens", "Ava Max");
        $avaMaxMyHeadAndHeart = new Song("My Head and Heart", "Ava Max");

        $popMusic = new Playlist("Pop Music 21");
        $popMusic->add($avaMaxMyHeadAndHeart);
        $popMusic->add($avaMaxKingsQueens);
    }
}