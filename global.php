<?php

$title = 'POZDRAV SVIMA!';

$subtitle = 'Dobrodošli na WebProgramiranje Konsultacije. Ovo je jedan test namenjen svima koji žele da nauče nešto novo o kodiranju.';

// This is site content
$content = array(
	'Kodiranje ima svoju etiku, politiku, način pisanja i svoja pravila. Proćićemo danas neke od ovih stvari kroz jedan veoma praktičan rad. Naučimo kako i kada se koristi tab, komentar, razmak, novi red, kako se unosi PHP, JavaScript, CSS i kojim redosledom kroz praktične primere.',
	
	'Koristite ovo praktično znanje dobro, budite kreativni, uporni i lepi :).',
);

function some_function ($x, $y){
	if(is_numeric($x) && is_numeric($y)){
		return $x + $y;
	}
	
	return 0;
}