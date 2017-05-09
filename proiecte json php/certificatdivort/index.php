<?php
$jsondata = file_get_contents("certificat.json");
$json = json_decode($jsondata,true);
$output ="<ul>";
if (is_array($json) || is_object($json)){
foreach ($json['certificate'] as $certificat_de_divort) {
  
   $output .= "<li>Numarul:".$certificat_de_divort['Numarul']."</li>";
   $output .= "<li>Din data de:".$certificat_de_divort['Din_data_de']."</li>";
   $output .= "<li>Casatoria inregistrata la Primaria:".$certificat_de_divort['Casatoria_inregistrata_la_Primaria']."</li>";
   $output .= "<li>Judetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>Numarul actului de casatorie:".$certificat_de_divort['Numarul_actului_de_casatorie']."</li>";
   $output .= "<li> Din data de:".$certificat_de_divort['Din_data_de']."</li>";
   $output .= "<liPrivind pe sotul:".$certificat_de_divort['Privind_pe_sotul']."</li>";
   $output .= "<li>Nascut la data de:".$certificat_de_divort['Nascut_la_data_de']."</li>";
   $output .= "<li>In Localitatea:".$certificat_de_divort['In_Localitatea']."</li>";
   $output .= "<liJudetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>CNP:".$certificat_de_divort['CNP']."</li>";
   $output .= "<li>Fiul lui:".$certificat_de_divort['Fiul_lui']."</li>";
   $output .= "<li>Domiciuliul:".$certificat_de_divort['Domiciuliul']."</li>";
   $output .= "<li>Judetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>Si sotia:".$certificat_de_divort['Si_sotia']."</li>";
   $output .= "<li>Nascuta la data de:".$certificat_de_divort['Nascuta_la_data_de']."</li>";
   $output .= "<li>In Localitatea:".$certificat_de_divort['In_Localitatea']."</li>";
   $output .= "<li>Judetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>CNP:".$certificat_de_divort['CNP']."</li>";
   $output .= "<li>Fiica lui:".$certificat_de_divort['Fiica_lui']."</li>";
   $output .= "<li>Domiciuliul:".$certificat_de_divort['Domiciuliul']."</li>";
   $output .= "<li>Judetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>Este desfacut in temeiul art.38*1 din Codul Familiei cu modificarile si completarile anterioare:".$certificat_de_divort['Este_desfacut_in_temeiul_art.38*1_din_Codul_Familiei_cu modificarile_si_completarile_anterioare']."</li>";
   $output .= "<li>Divortul a fost inregistrat la Primaria:".$certificat_de_divort['Divortul_a_fost_inregistrat_la_Primaria']."</li>";
   $output .= "<li>Judetul:".$certificat_de_divort['Judetul']."</li>";
   $output .= "<li>Numele dupa divort fostul sot:".$certificat_de_divort['Numele_dupa_divort_fostul_sot']."</li>";
   $output .= "<li>Numele dupa divort fosta sotie:".$certificat_de_divort['Numele_dupa_divort_fosta_sotie']."</li>";
   $output .= "<li>Prezentul certificat de divort produce efecte intre parti de azi:".$certificat_de_divort['Prezentul_certificat_de_divort_produce_efecte_intre_parti_de_azi']."</li>";
   $output .= "<li>Semnatura Ofiter de stare civila:".$certificat_de_divort['Semnatura_Ofiter_de_stare_civila']."</li>";
   $output .= "<li>Semnatura fostul sot:".$certificat_de_divort['Semnatura_fostul_sot']."</li>";
   $output .= "<li>Semnatura fosta sotie:".$certificat_de_divort['Semnatura_fosta_sotie']."</li>";





}
}
$output .="</ul>";
echo $output;


?>