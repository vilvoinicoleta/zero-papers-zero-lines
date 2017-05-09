<?php
$jsondata = file_get_contents("diploma.json");
$json = json_decode($jsondata,true);
$output ="<ul>";
if (is_array($json) || is_object($json)){
foreach ($json['diplome'] as $diploma_de_inginer) {

   $output .= "<li>Seria:".$diploma_de_inginer['Seria']."</li>";
   $output .= "<li>Nr:".$diploma_de_inginer['Nr']."</li>";
   $output .= "<li>Universitate:".$diploma_de_inginer['Universitate']."</li>";
   $output .= "<li>Pe baza promovarii examenului din sesiunea:".$diploma_de_inginer['Pe_baza_promovarii_examenului_din_sesiunea']."</li>";
   $output .= "<li>Anul:" .$diploma_de_inginer['Anul']."</li>";
   $output .= "<li>La propunerea facultatii:".$diploma_de_inginer['La_propunerea_facultatii_de']."</li>";
   $output .= "<li>D-lui:".$diploma_de_inginer['Dl']."</li>";
   $output .= "<li>Nascut in anul:".$diploma_de_inginer['Nascut_in_anul']."</li>";
   $output .= "<li>Luna:".$diploma_de_inginer['Luna']."</li>";
   $output .= "<li>Ziua:".$diploma_de_inginer['Ziua']."</li>";
   $output .= "<li>In Localitatea:".$diploma_de_inginer['In_Localitatea']."</li>";
   $output .= "<li>Judetul:".$diploma_de_inginer['Judetul']."</li>";
   $output .= "<li>Tara:".$diploma_de_inginer['Tara']."</li>";
   $output .= "<li>Absolvent al:".$diploma_de_inginer['Absolvent_al']."</li>";
   $output .= "<li>titlul de:".$diploma_de_inginer['titlul_de']."</li>";
   $output .= "<li>In domeniul:".$diploma_de_inginer['In_domeniul']."</li>";
   $output .= "<li>Specializarea:".$diploma_de_inginer['Specializarea']."</li>";
   $output .= "<li>Durata studiilor:".$diploma_de_inginer['Durata_studiilor']."</li>";
   $output .= "<li>Titularului acestei diplome i se acorda:".$diploma_de_inginer['Titularului_acestei_diplome_i_se_acorda']."</li>";
   $output .= "<li>RECTOR:".$diploma_de_inginer['RECTOR']."</li>";
   $output .= "<li>SECRETAR SEF:".$diploma_de_inginer['SECRETAR_SEF']."</li>";
   $output .= "<li>DECAN:".$diploma_de_inginer['DECAN']."</li>";
   $output .= "<li>Nr:".$diploma_de_inginer['Nr']."</li>";
   $output .= "<li>Din:".$diploma_de_inginer['Din']."</li>";

}
}
$output .="</ul>";
echo $output;


?>