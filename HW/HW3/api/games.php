<?php

    $returnGame = array();
    
    $games = array("Red Dead Redemption II. ", "God of War" , "Far Cry 5", "Assassin's Creed Odyssey", "Spider-Man ");
    
    $searchGame = $_GET['gameName'];
    
    for($i = 0; $i<5; $i++)
    
    {
        $pos = stripos($games[$i], $searchGame);
        
        if ($pos === false)
        {
            
        }
        
        else
        {
            $returnGame['title']=$games[$i];            
        }
    }
    
    echo json_encode($returnGame);
?>