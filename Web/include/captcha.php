<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by SeToY & |PJ|ShOrTy

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/


// Session starten
session_start();

// Größe des Bildes
$size_x = 160;
$size_y = 40;

// Zufallszahl der Session-Variablen übergeben
$zufallszahl = $_SESSION["captcha_code"];

// Erstelle das Bild mit der angegebenen Größe!
$bild = imageCreate($size_x, $size_y);

// Erstelle einen weißen Hintergrund
imageColorAllocate($bild, 255, 255, 255);

// Zufallsfarbe (RGB) erstellen
$farbe1 = mt_rand("0", "100");
$farbe2 = mt_rand("0", "100");
$farbe3 = mt_rand("0", "100");

// Verteile die Farben
$rahmen = imageColorAllocate($bild, 0, 0, 0); // Rahmenfarbe
$farbe  = imageColorAllocate($bild, $farbe1, $farbe2, $farbe3); // Textfarbe

// Hole die Zahlen der Punkte zum Zeichnen
$alle_punkte = ($size_x * $size_y)/15;

// Zeichne viele Punkte mit der selben Farbe des Textes
for ($zaehler = 0; $zaehler < $alle_punkte; $zaehler++) {

 // Erzeuge die Zufallspositionen der Punkte
 $pos_x = mt_rand("0", $size_x);
 $pos_y = mt_rand("0", $size_y);

 // Zeichne die Punkte
 imageSetPixel($bild, $pos_x, $pos_y, $farbe);
};

// Zeichne den Rahmen
imageRectangle($bild, 0, 0, $size_x-1, $size_y-1, $rahmen);

// Koordinaten der Position von der Zufallszahl
$pos_x = 50; // links
$pos_y = 10; // oben

// Zeichne die Zufallszahl
imageString($bild, 5, $pos_x, $pos_y, $zufallszahl, $farbe);

// Sende "browser header"
header("Content-Type: image/png");

// Sende das Bild zum Browser
echo imagePNG($bild);

// Lösche das Bild
imageDestroy($bild);
?>