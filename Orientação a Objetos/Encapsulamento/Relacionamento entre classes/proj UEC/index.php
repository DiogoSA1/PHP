<?php
   require_once "Lutador.php";
   require_once("Luta.php");

   $l = [];
   $l[0] = new Lutador('Pretty Boy', "França",30, 1.75, 68.9, 11, 2, 1);
   
   $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

   $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

   $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);

   $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

   $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

$UEC1 = new Luta();
$UEC1->marcarLuta($l[2], $l[3]); 
$UEC1->lutar();
$l[2]->status();
  
   