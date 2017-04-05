<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createpdf extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function pdf()
{
    $this->load->helper('pdf_helper');
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
    $data=array();
    
    define ('K_PATH_IMAGES', dirname(__FILE__).'/../../');
    tcpdf();
    
    
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData("assets/logo_ucv2.png", 45, "", "");
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
    $this->load->view('pdfreport', $data);
    
    
    $content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');


// start a new layer
$obj_pdf->startLayer('layer_en', true, true);
// Address
$obj_pdf->SetXY(20,100);
$obj_pdf->Cell(35, 5, 'Address:');

// close the current layer
$obj_pdf->endLayer();



// start a new layer
$obj_pdf->startLayer('layer_ro', true, false); //view=false, since it's not default language!
//$obj_pdf->setv
// Address
$obj_pdf->SetXY(20,100);
$obj_pdf->Cell(35, 5, 'Adresa:');

// close the current layer
$obj_pdf->endLayer();


// start a new layer
//$obj_pdf->startLayer('layer_fields', true, true);
$obj_pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dv'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'));
$obj_pdf->Ln(19);




// Button 
$obj_pdf->Button('langEN', 30, 10, 'EN', 'langEN()', array('lineWidth'=>2, 'borderStyle'=>'beveled', 'fillColor'=>array(128, 196, 255), 'strokeColor'=>array(64, 64, 64)));

$obj_pdf->Button('langRO', 30, 10, 'RO', 'langRO()', array('lineWidth'=>2, 'borderStyle'=>'beveled', 'fillColor'=>array(128, 196, 255), 'strokeColor'=>array(64, 64, 64)));


// Form validation functions
$js = <<<EOD
function CheckField(name,message) {
    var f = getField(name);
    if(f.value == '') {
        app.alert(message);
        f.setFocus();
        return false;
    }
    return true;
}
function Print() {
    //if(!CheckField('firstname','First name is mandatory')) {return;}
    //if(!CheckField('lastname','Last name is mandatory')) {return;}
    //if(!CheckField('gender','Gender is mandatory')) {return;}
    if(!CheckField('address','Address is mandatory')) {return;}
    print();
}
function ChangeLayer(layerName){
    var layers = this.getOCGs();
    if (layers!=null && layers.length!=0) {
        for (var i in layers) {
            if (layers[i].name==layerName) {
                layers[i].state = true;
            } else {
                layers[i].state = false;
            }
        }
    }    
}
function langEN(){
    ChangeLayer("layer_en");
}
function langRO(){
    ChangeLayer("layer_ro");
}
        
langEN();        
        
EOD;


// Add Javascript code
$obj_pdf->IncludeJS($js); 

//$obj_pdf->Annotation(85, 27, 5, 5, 'text file', array('Subtype'=>'FileAttachment', 'Name' => 'PushPin', 'FS' => 'data/utf8test.txt'));

$obj_pdf->Output('output.pdf', 'I');

}

}

?>