<?php

class Games
{
private $id;
private $page_name;
private $game_desc;
private $category;
private $requirments;
private $multiplayer;
private $visual_effects;
private $game_play;
private $video_link;
private $release_date;

public function __construct() {
        
}

public function viewGames($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instinct_games";
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    
    $sql = "SELECT * FROM pages WHERE id = '$page_id'";
    $rows = mysqli_query($conn,$sql);
    $page = mysqli_fetch_assoc($rows);

    $page_images = "SELECT * FROM page_images WHERE page_id = '$page_id'";
    $rowss = mysqli_query($conn,$page_images);
    $images = mysqli_fetch_assoc($rowss);

}



}








?>