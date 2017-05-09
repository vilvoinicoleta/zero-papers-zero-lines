<?php
$jsondata = file_get_contents("permis.json");
$json = json_decode($jsondata,true);
$output ="<ul>";
if (is_array($json) || is_object($json)){
foreach ($json['permise'] as $permis_auto) {

   $output .= "<li>Numele titularului:".$permis_auto['Numele_titularului']."</li>";
   $output .= "<li>Prenumele titularului:".$permis_auto['Prenumele_titularului']."</li>";
   $output .= "<li>Adresa titularului:".$permis_auto['Adresa_titularului']."</li>";
   $output .= "<li>Data si locul nasterii:".$permis_auto['Data_si_locul_nasterii']."</li>";
   $output .= "<li>Data eliberarii permisului:".$permis_auto['Data_eliberarii_permisului']."</li>";
   $output .= "<li>Data expirarii permisului:".$permis_auto['Data_expirari_permisului']."</li>";
   $output .= "<li>Numarul permisului:".$permis_auto['Numarul_permisului']."</li>";
   $output .= "<li>Fotografia titularului:".$permis_auto['Fotografia_titularului']."</li>";
   $output .= "<li>Semnatura titularului:".$permis_auto['Semnatura_titularului']."</li>";
   $output .= "<li>Categoria de autovehicule:".$permis_auto['Categoria_de_autovehicule']."</li>";
   


 
 

}
}
$output .="</ul>";
echo $output;


?>