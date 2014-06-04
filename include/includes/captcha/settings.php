<?php
/**
 * Captcha für www.ilch.de
 * @author T0P0LIN0
 * thanks to uwe slick! http://www.deruwe.de/captcha.html - his thoughts
 */


$imagewidth         = 200;
$imageheight        = 60;
$fontsize           = 20;
//Anzahl von Zeichen im Hintergrund
$bgintensity        = 0;
$bgfonttype         = 0;
//kurze Striche einfügen (amoumt -> Anzahl)
$scratches          = 0;
$scratchamount      = 0;
//Länge des Captchas
$passphraselenght   = 4;
//Hintegrundgerüst
$addagrid           = 1;
$addhorizontallines = 1;
//Zufällige Farben benutzen
$useRandomColors    = 1;
$minsize            = 20;
$maxsize            = 30;
//maximaler Drehungswinkel für Zeichen
$angle              = 30;
