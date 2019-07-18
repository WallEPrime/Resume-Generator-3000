<?php

require_once __DIR__ . '/vendor/autoload.php';

//Declare variables to print

/* Intro user */
$name = $_POST['name'];
$fonction = $_POST['fonction'];
$about = $_POST['about'];

/* details user */

$adresse = $_POST['adresse'];
$postalcode = $_POST['codepostal'];
$ville = $_POST['ville'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];














// Generate PDF

$mpdf = new \Mpdf\Mpdf();




$data = ' '; /*storage */
$data .= '<h1  style="text-align:center; padding-top: -40px; padding-bot:-40px;">' . $name . '</h1><br/>';
$data .= '<h2  style="text-align:center; padding-top: -40px; padding-bot:-40px;">' . $fonction . '</h2><br/>';


$data .= '<p  style="text-align:center; padding-top: -40px; padding-bot:-40px;">'. $adresse  . ' / ' .$postalcode . '-' . $ville  . '</p><br/>';

$data .=  '<p  style="text-align:center; padding-top: -40px; padding-bot:-40px;">' .$telephone . ' / ' .$email . '</p> <br/>';

/* Education user */
/*
$data .=  '<h3> Education </h3> <br/>'.'<strong>'.$duration.'</strong>' . ':' . $ecole . '<br/>'; */

$data .= "<h3 style='text-align:center;' >Education</h3><br />";

for($i = 0; $i < count($_POST['duration']); $i++){

$duration = $_POST['duration'][$i];

$ecole = $_POST['ecole'][$i];

$data .= "<ul><li style='padding-top: -20px; padding-bot:-20px;'><strong>{$duration}</strong>: {$ecole}</li></ul><br />";

}



/* Workplaces user */

$data .= "<h3 style='text-align:center;' >Experiences  professionnelles</h3><br />";

for($i = 0; $i < count($_POST['durationWork']); $i++){

$durationwork = $_POST['durationWork'][$i];

$workplaceName = $_POST['nameWorkplace'][$i];

$data .= "<ul><li style='padding-top: -20px; padding-bot:-20px;'><strong>{$durationwork}</strong>: {$workplaceName}</li></ul><br />";

}


/*Hobbies user */

$data .= "<h3 style='text-align:center; padding-top: -40px; padding-bot:-40px;' >Hobbies</h3><br />";

for($i = 0; $i < count($_POST['hobby']); $i++){

$hobby = $_POST['hobby'][$i];

$data .= "<ul><li style='padding-top: -20px; padding-bot:-20px;'>{$hobby}</li></ul><br />";

}



if ($about) {

    $data .=  '<h3 style="text-align:center; padding-top: -40px; padding-bot:-40px; "> A propos </h3> <br/> <p style="white-space: pre-wrap; font-size:12px; padding-top: -30px; padding-bot:-30px; ">' . $about . '</p><br/>';
}




//Export PDF

$mpdf->WriteHTML($data);
$mpdf->Output('cv.pdf', 'D');
