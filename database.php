<?php

CREATE TABLE `card_data` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
`card_type` varchar(200) NOT NULL,
`type` varchar(200) NOT NULL,
`family` varchar(200) NOT NULL,
`atk` int(10) NOT NULL,
`def` int(10) NOT NULL,
`level` int(10) NOT NULL,
`property` varchar(200)  NULL,
  PRIMARY KEY (`id`),
)

    $name = $_GET['name'];
    $text = $_GET['text'];
    $card_type = $_GET['card_type'];
    $type = $_GET['type'];
    $family = $_GET['family'];    
	$atk = $_GET['atk'];
    $def = $_GET['def'];
    $level = $_GET['level'];
    $property = $_GET['property'];

$sql = "INSERT INTO card_data (name, text, card_type, type, family, atk, def, level, property) VALUES ($name, $tet, $card_type, $type, $family, $atk, $def, $level, $property)";
