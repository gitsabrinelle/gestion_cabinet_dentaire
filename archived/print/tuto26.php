<?php
// Inclusion des librairies
include "../fpdf.php";
define("TVA",0.196);
 
/**
 * Classe PDF h�rite de fpdf, permet de g�n�rer des fichiers PDF
 */
 
class pdf extends fpdf{
 
/**
* Constructeur
*/
 
function pdf(){
	parent::fpdf();
	$this->SetCreator("Damien BARRERE, www.crac-design.com");
}
 
//En-t�te de la facture
function hautDePage(){
	$position=0;
 
	//Logo
	$this->Image('../canaillou.jpg',15,3,200);
	
 
	//adresse
	$this->SetFont('Arial','B',12);
	$this->SetTextColor(0,0,200);
	$this->SetXY(10,30);
	$this->Cell(50,6,"www.Crac-Design.com",0,2,'',false);
	$this->SetFont('Arial','',12);
	$this->SetTextColor(0,0,0);
	$this->MultiCell(50,5,"Adresse de l'entreprise\nCP VILLE\nTel: 05.00.00.00.00\nFax: 05.00.00.00.01",0,'L',false);
 
	//Informations Facture
	$this->SetXY(60,30);
	$this->SetFillColor(200,200,200);
	$this->SetFont('Arial','B',15);
	$this->Cell(140,6,"FACTURE",1,2,'C',true);
	$this->SetFont('Arial','',12);
	$this->SetXY(60,38);
	$this->MultiCell(130,5,"Facture n� : Votre num�ro de facture\nDate de commande : ".date("m.d.y")."\nMode de paiement : Carte Bancaire",'','L',false);
	$this->SetTitle("Facture n� : Votre num�ro de facture");
 
 
	//adresse de Facturation
	$this->SetXY(10,60);
	$this->SetFillColor(200,200,200);
	$this->SetFont('Arial','B',12);
	$this->Cell(90,6,"Adresse de facturation",1,2,'C',true);
	$this->SetFont('Arial','',12);
	$this->MultiCell(90,5,"Client NOM Pr�nom\nAdresse 1\nAdresse 2\nCode Postal Ville",'LRB','L',false);
	$position=$this->getY();
 
	//Adresse de livraison
	$this->SetXY(110,60);
	$this->SetFillColor(200,200,200);
	$this->SetFont('Arial','B',12);
	$this->Cell(90,6,"Adresse de livraison",1,2,'C',true);
	$this->SetFont('Arial','',12);
 
	$this->MultiCell(90,5,"Livraison � l'adresse de facturation",'LRB','L',false);
 
	if($this->getY()>$position){
		$position=$this->getY();
	}
	$this->SetXY(10,$position+5);
}
 
//Pr�paration de la g�n�ration de la table
function tableArticles(){
	$position=0;
	$prixTotal=0;
 
	//Cr�ation des donn�es qui seront contenues la table
	$datas = array();
	$prixTotalHorsTaxes=0;
	for($ij=0;$ij<50;$ij++){
		$datas[] = array("ABCD","D�signation de l'article $ij","10".chr(128),"2","20".chr(128));
		$prixTotalHorsTaxes+=20;
	}
 
	//Tableau contenant les titres des colonnes
	$header=array('R�f','D�signation','Prix Unitaire HT','Qt�','Prix Total HT');
	//Tableau contenant la largeur des colonnes
	$w=array(20,102,25,20,23);
	//Tableau contenant le centrage des colonnes
	$al=array('C','L','C','C','C');
 
	//G�n�ration de la table � proprement dite
	$this->table($header,$w,$al,$datas);
 
	//On se positionne en dessous de la table pour �crire le total
	$this->SetY($this->GetY()+5);
 
	$this->setX(108);
	$this->Cell(74,6,"Total Hors Taxes",1,0,'L');
	$this->Cell(19,6,$prixTotalHorsTaxes.chr(128),1,2,'C');
 
	$this->setX(108);
	$this->Cell(74,6,"TVA � ".(TVA*100)." %",1,0,'L');
	$totalTVA = $prixTotalHorsTaxes*(TVA).chr(128);
	$this->Cell(19,6,$totalTVA,1,2,'C');
 
	$this->setX(108);
	$this->Cell(74,6,"Total TTC",1,0,'L');
	$this->Cell(19,6,$prixTotalHorsTaxes+$totalTVA.chr(128),1,2,'C');
 
}
 
//Pied de page
function Footer(){
	//Positionnement � 1,5 cm du bas
	$this->SetY(-15);
	//Police Arial italique 8
	$this->SetFont('Arial','I',8);
	//Num�ro de page
	$this->Cell(0,4,'Page '.$this->PageNo().'/{nb}',0,2,'C');
	$this->MultiCell(0,4,"www.Crac-Design.com\n",0,'C',false);
}
 
 
//Impression de l'ent�te du tableau
function printTableHeader($header,$w){
	//Couleurs, �paisseur du trait et police grasse
	$this->SetFillColor(200,200,200);
	$this->SetTextColor(0);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',1);
	$this->Ln();
	//Restauration des couleurs et de la police pour les donn�es du tableau
	$this->SetFillColor(245,245,245);
	$this->SetTextColor(0);
	$this->SetFont('Arial');
 
}
 
//G�n�ration du tableau
// table(donn�es de l'ent�te tableau, largeur des colonnes, alignement des colonnes, donn�es)
function table($header,$w,$al,$datas){
	//Impression de l'ent�te tableau
	$this->SetLineWidth(.3);
	$this->printTableHeader($header,$w);
 
	$posStartX=$this->getX();	
	$posBeforeX=$posStartX;
 
	$posBeforeY=$this->getY();
	$posAfterY=$posBeforeY;
	$posStartY=$posBeforeY;
 
	//On parcours le tableau des donn�es
	foreach($datas as $row){
		$posBeforeX=$posStartX;
		$posBeforeY=$posAfterY;
 
		//On v�rifie qu'il n'y a pas d�bordement de page.
		$nb=0;
		for($i=0;$i<count($header);$i++){
			$nb=max($nb,$this->NbLines($w[$i],$row[$i]));
		}
		$h=6*$nb;
 
		//Effectue un saut de page si il y a d�bordement
		$resultat = $this->CheckPageBreak($h,$w,$header,$posStartX,$posStartY,$posAfterY);
		if($resultat>0){
			$posAfterY=$resultat;
			$posBeforeY=$resultat;
			$posStartY=$resultat;
		}
 
		//Impression de la ligne
		for($i=0;$i<count($header);$i++){
			$this->MultiCell($w[$i],6,strip_tags($row[$i]),'',$al[$i],false);
			//On enregistre la plus grande hauteur de cellule
			if($posAfterY<$this->getY()){
				$posAfterY=$this->getY();
			}
			$posBeforeX+=$w[$i];
			$this->setXY($posBeforeX,$posBeforeY);
		}
		//Trac� de la ligne du dessous
		$this->Line($posStartX,$posAfterY,$posBeforeX,$posAfterY);
		$this->setXY($posStartX,$posAfterY);
	}
 
	//Trac� des colonnes
	$this->PrintCols($w,$posStartX,$posStartY,$posAfterY);
}
 
//Trac� des colonnes
function PrintCols($w,$posStartX,$posStartY,$posAfterY){
	$this->Line($posStartX,$posStartY,$posStartX,$posAfterY);
	$colX=$posStartX;
	//On trace la ligne pour chaque colonne
	foreach($w as $row){
		$colX+=$row;
		$this->Line($colX,$posStartY,$colX,$posAfterY);
	}
}
 
//V�rification du d�bordement de page
function CheckPageBreak($h,$w,$header,$posStartX,$posStartY,$posAfterY){
	//Si la hauteur h provoque un d�bordement, saut de page manuel
	if($this->GetY()+$h>$this->PageBreakTrigger){
		//On imprime les colonnes de la page actuelle
		$this->PrintCols($w,$posStartX,$posStartY,$posAfterY);
		//On ajoute une page
		$this->AddPage();
		//On r�imprime l'ent�te du tableau
		$this->printTableHeader($header,$w);
		//On renvoi la position courante sur la nouvelle page
		return $this->GetY();
	}
	//On a pas effectu� de saut on revoie 0
	return 0;
}
 
//Calcule le nombre de lignes qu'occupe un MultiCell de largeur w
function NbLines($w,$txt){
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}
 
}
 
//Instanciation de la classe
$pdf = new pdf;
$pdf->AliasNbPages();
$pdf->Open();
$pdf->AddPage();
$pdf->hautDePage();
$pdf->tableArticles();
$pdf->Output("brahim");
 
?>