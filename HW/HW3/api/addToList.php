<?php

    $gameToAdd = $_GET['gameName'];
    
    $game0 = $_GET['game0'];
    
    $game1 = $_GET['game1'];
    
    $game2 = $_GET['game2'];
    
    $game3 = $_GET['game3'];
    
    $game4 = $_GET['game4'];
    
    $validGameAdd = array();
    
    if ($gameToAdd === $game0 || $gameToAdd === $game1 || $gameToAdd === $game2 || $gameToAdd === $game3 || $gameToAdd === $game4)
    {
        $validGameAdd['valid'] = "false";
    }
    else
    {
        $validGameAdd['valid'] = "true";
    }
    
    echo json_encode($validGameAdd);
?>