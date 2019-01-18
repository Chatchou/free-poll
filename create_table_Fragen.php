<?php
 $mysqli = new mysqli('localhost','root','', 'free-poll');
    if($mysqli->connect_error){
         echo 'fehler bei der verbindung:' . mysqli_connect_error();
         exit();
    }
  
    if (!$mysqli->set_charset ('utf8')) {
       echo 'Fehler bein Laden von UTF-8:' .mysqli_error();
    }


$sql = 'CREATE TABLE IF NOT EXISTS fragen  ( 
    id INT(6) NOT NULL AUTO_INCREMENT,
    question VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)'; 


$sql = 'INSERT INTO fragen
       (question)
       Values("Warum sind sie Hier gekommen")'; 

       $sql = 'INSERT INTO fragen
       (question)
       Values("Wer werden Sie am nächsten Bundestag auswaehlen")'; 


if ($mysqli->query($sql)){
    echo 'SQL-Befehlt ausgeführt';
} else {
    echo 'Fehler';
}



$mysqli->close();
?>