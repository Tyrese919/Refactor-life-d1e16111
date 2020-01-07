<?php

  $geld = $argv[1];

  $geld = round (($geld*100)/5)*5/100;

  define( "BILJETEN", array (50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05));

  function uitrekenen($geldDelen, $biljet)
  {
    if ($geldDelen > 0) {
      if ($biljet < 1) {
        $cent = $biljet * 100;
        echo "$geldDelen X $cent cent".PHP_EOL;
      } else {
          echo "$geldDelen X $biljet euro".PHP_EOL;
      }
    }
  }

  foreach (BILJETEN as $biljet) {
      $geld = round ($geld, 2);
      $geldDelen = floor ($geld / $biljet);
      $geld = $geld - ($geldDelen * $biljet);
      uitrekenen($geldDelen, $biljet);
}
