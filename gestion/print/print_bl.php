<?php
require('fpdf.php');
	include("../../model/global.php");
	$_client;
$dette ;
class PDF extends FPDF
{
// En-tte

function Header()
{
	
}
// Pied de page
function Footer()
{
	// Positionnement  1,5 cm du bas
	$this->SetY(-8);
	// Police Arial italique 8
	$this->SetFont('Arial','I',8);
	// Numro de page
	$this->Cell(0,10,'Page N:  '.$this->PageNo().' / {nb}',0,0,'C');
}
function BasicTable($header,$link)
{	
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',7);	
	$id_bl;
	$montant_ht;
    if(isset($_GET['id']))
	$id_bl=$_GET['id'];
	$requ= mysqli_query($link,"select * from bl where id= '".$id_bl."'");
	$date_bl = "";
	$_SESSION['id']=$id_bl;
	$num = mysqli_num_rows($requ);
	if($num)
	{
		while($row = mysqli_fetch_array($requ))
		{		
			$montant_ht=$row['montant_ht'];
			$_client = $row['_client'];
			$_SESSION['_client']=$_client;
			$date_bl = $row['date'];;
			
			}
		}
		
			
	$remise_pourcent= 0;	
		$remise_bl=0;
		 $req_remise_bl=mysqli_query($link,"select * from bl where id =  '".$id_bl."'")or die(mysqli_error($link));
if(mysqli_num_rows($req_remise_bl))
{
	$row_remise_bl=mysqli_fetch_array($req_remise_bl); 
	$remise_bl=$row_remise_bl["montant_remise"];
	$remise_pourcent = $row_remise_bl["remise"];
		}
		$data1 = array('Total de la commande : ',number_format($montant_ht, 2, ',', ' ')." DA");

if ($remise_bl!=0)
	$data2 = array(' Remise : '.number_format($remise_pourcent, 2, ',', ' ').' %',' '.number_format($remise_bl, 2, ',', ' ').' DA');
	/*else
	$data2 = array(' Remise : ',' '.number_format($remise_bl, 2, ',', ' ').' DA');*/
	$req=mysqli_query($link,"select * from clients where id = '".$_client."'");
		while($row=mysqli_fetch_array($req))
	$dette =	$row["dette"];
	$this->SetFont('Arial','B',8);
$date ;
	$rz = mysqli_query ($link,"SELECT SUM(montant_remise) AS rem from bl WHERE _client = '".$_client."'  and id_bl != '".$id_bl."' AND  DATEDIFF(date,'".$date_bl."')<0") or die(mysqli_error($link));
 $numeerz = mysqli_num_rows($rz);
$sommmrz = 0;
 if($numeerz)
 {
	 while ($rowwwrz = mysqli_fetch_array($rz))
	 {
		 $sommmrz = $rowwwrz['rem'];
			 }
	 }
 $re = mysqli_query ($link,"SELECT SUM(montant_ht) AS somme  FROM  bl WHERE  _client = '".$_client."' and id_bl != '".$id_bl."' AND  DATEDIFF(date,'".$date_bl."')<0")or die(mysqli_error($link));
$nume = mysqli_num_rows($re);
$somm ;
 if($nume)
 {
	$roww = mysqli_fetch_array($re);
		 $somm = $roww['somme'] +$dette- $sommmrz;
	 }
$rest ;
$req_montant= mysqli_query($link,"select  COALESCE(SUM(reglement.montant),0) as total_versement  from bl,reglement where bl.id_bl = reglement.id_bl and bl._client = $_client and bl.id_bl != $id_bl AND  DATEDIFF(bl.date,'".$date_bl."')<0")or die (mysqli_error($link));

if( mysqli_num_rows($req_montant))
{
$row_req_montant = mysqli_fetch_array($req_montant);
$somm = $somm-$row_req_montant["total_versement"];

}
$rest = $somm;

$detedatereq= mysqli_query ($link,"SELECT * FROM  bl WHERE  _client = '"
 .$_client."' and id_bl != '".$id_bl."' and  DATEDIFF(date,'".$date_bl."')<0 ORDER BY  `bl`.`date` DESC 
LIMIT 0 , 1")or die(mysqli_error($link));
$datenum = mysqli_num_rows($detedatereq);
if($datenum)
{
$rowdate= mysqli_fetch_array($detedatereq);
$detedate = $rowdate['date'];
}
else
$detedate =$date_bl;
$data3 = array('Dette Du '.date("d/m/Y", strtotime($detedate))." : ",number_format($somm, 2, ',', ' ').' DA');	 	 	 	 


$header = array();
$header[] = $data1;
if ($remise_bl!=0){
	$header[] = $data2;
}
if ($_client!="1"){
	$header[] = $data3;
} else {
	$somm = 0;
}
$requeteVersements = mysqli_query($link,"select * from reglement where id_bl = '".$id_bl."' order by date ASC ")or die(mysqli_error($link));
$versementNum = mysqli_num_rows($requeteVersements);
$sommm = $somm +$montant_ht -$remise_bl;
if ($versementNum)
{


while($rowVersement=mysqli_fetch_array($requeteVersements))
{
	 
$sommm = $sommm-$rowVersement['montant'];
$data =array('Verser le '.date("d-m-Y", strtotime($rowVersement['date'])) .' : ',' '.number_format($rowVersement['montant'], 2, ',', ' ')." DA");
$header[]= $data;
}
}
$sommm = number_format($sommm, 2, ',', ' ');
if ($sommm  )
	$data7 = array(' Reste  : ',$sommm." DA");	
	else
	$data7 = array(' Credit client  : ',-$sommm." DA");	
if ($_client!="1")
	$header[] = $data7;

 $i=0;
  do {
	$this->Cell(40,5,' ',0,0);
	$this->Ln();
 }while ($i++<5);
// $this->SetY(-50);
	foreach($header as $cool)
   {
	   $this->SetX(120);
	    foreach($cool as $col)
		$this->Cell(40,5,$col,1,0,'R');
	$this->Ln();
	}
 }
function FancyTable($header,$link)
{

	$header = array('N','Ref :','Designation :','Qte :','P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');	 	 	 	 	 
	// Logo
	$this->SetY(3);
$logo="";
 $req = mysqli_query($link, "select * from   `etablissement` ")or die (mysqli_error($link));
  
  if (mysqli_num_rows($req))
  {
  while($row=mysqli_fetch_array($req))
{  
$logo=$row["logo"];
}  
 if ($logo=="logo") 
$logo="..\\company\\images\\logo.png"; 
else
  $logo= "..\\company\\images\\".$logo; 
  
  }$this->Image($logo,20,03,40);

// Police Arial gras 15
$this->SetFont('Times','',10);
$req=mysqli_query($link,"select * from etablissement where id = '0'");
while($row=mysqli_fetch_array($req))
{
	
$paragraph=$row["type"]." ".utf8_decode($row["societe"])." - ".utf8_decode($row["adresse"])." , ". utf8_decode($row["Ville"])." - W ".utf8_decode($row["Wilaya"]);
$this->Cell(80,10);
$this->Cell(80,5,$paragraph,0,1);
$para2="";
if (!empty($row["Tel"]))
$para2.="Tel : ".$row["Tel"];
if (!empty($row["Fax"]))
$para2 .=" - Fax : ".$row["Fax"];
$this->Cell(105,10);
$this->Cell(105,5,$para2,0,1);
//$this->Cell(40,5,,0,1);
//$this->Cell(40,5,,0,1);
$para3 = "";
if (!empty($row["nrc"]))
$para3.="N RC : ".$row["nrc"];
if (!empty($row["Nif"]))
$para3.=" - N NIF : ".$row["Nif"];
if (!empty($row["Art"]))
$para3.=" - N ART : ".$row["Art"];
$this->Cell(75,10);
$this->Cell(75,5,$para3,0,1);
$para4="";
if (!empty($row["Email"]))
$para4.="Email : ".$row['Email'];

if (!empty($row["Web"]))
$para4 .=" - Web : ".$row['Web'];
$this->Cell(87,10);
$this->Cell(87,5,$para4,0,1);
$this->Cell(75,10);
$this->Cell(75,5,"  ",0,1);
}
$this->SetFont('Arial','B',15);
// Dcalage  droite
$this->Cell(70);
// Titre	
$this->Cell(60,10,'Bon de Livraison',1,0,'C');
// Saut de ligne
$this->Ln(20);
$this->SetFont('','',8);
$id_bl;
if(isset($_GET["id_bl"]))
$id_bl=$_GET["id_bl"];
$_SESSION["id_bl"]=$_GET["id_bl"];

$_client;
$date;
$req5= mysqli_query($link,"select * from bl where id_bl = '$id_bl' ");
if(mysqli_num_rows($req5))
{
	while($row2=mysqli_fetch_array($req5))
	{
		$date = $row2['date'];
		$_client = $row2['_client'];
		}
	}
$req4= mysqli_query($link,"select * from clients where id = '$_client' ");
if(mysqli_num_rows($req4))
{
	while($row4=mysqli_fetch_array($req4))
	{
		$dette = $row4["dette"];
$this->Cell(5,10);
$x = $this->GetX();
$this->SetX(120);
$this->SetFont('','B',10);
$y= $this->GetY();
$_SESSION["societe"] = $row4["Societe"];
$this->Cell(5,5,$row4['Societe'],0,1);
$this->SetFont('','',8);
$this->Cell(5,10);
$this->SetX(120);
$this->Cell(5,5,$row4['adresse'],0,1);
$this->Cell(5,10);
$yY= $this->GetY();
$this->SetY($yY+5);
$this->SetX(120);
if (!empty($row4['nrc']))
	$this->Cell(5,5,"N RC :        ".$row4['nrc'],0,1);
$this->Cell(5,10);
$this->SetX(120);
if (!empty($row4['nif']))
	$this->Cell(5,5,"N IF :          ".$row4['nif'],0,1);
$this->Cell(5,10);
$this->SetX(120);
if (!empty($row4['N_ART']))
	$this->Cell(5,5,"N ART :      ".$row4['N_ART'],0,1);
$this->SetX($x);
$this->Cell(0,5);
$this->SetY($y);
$this->Ln();
$head = array('BL N : ',$id_bl , 'Date De Livraison: ',date("d-m-Y", strtotime($date)),'Reference Client  : ',$row4['id']);
$w = array(30,30);
$j= 0;
for($i=0;$i<count($head);$i++)
	{
			$this->Cell(30,7,$head[$i],1,0,'C',false);
	if($i%2)
{
	$this->Ln();
//$this->Ln();
}
	}
//$this->Cell(35,5,"BL N : ".$id_bl,1,1);
//$this->Cell(5,10);
//$this->Cell(35,5,"".,1,1);
//$this->Cell(5,10);
//$this->Cell(35,5,"  ".,1,1);
	//$this->Ln();
	$this->Ln();
//$this->Cell(5,0);
$this->SetFillColor(255);
	$this->SetTextColor(0);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B',7);
	// En-tte
	$w = array(8,27, 85, 10, 15,15,15,15);
	$header = array('N','Ref :','Designation :','Qte :','P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');	 	 	 	 	 
	for($i=0;$i<count($header);$i++)
	{
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	}
	$this->Ln();
$y= $this->GetY();
 // $this->SetY($y);
//$this->Cell(5,5," ",0,1);
		}
	}
	// Couleurs, paisseur du trait et police grasse
	$this->SetFillColor(0,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.2);
	$this->SetFont('','B',7);
	// En-tte
	$w = array(8,27, 85, 10, 15,15,15,15);
//	for($i=0;$i<count($header);$i++)
	//	$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
//	$this->Ln();
	// Restauration des couleurs et de la police
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',7);
	// Donnes
	$fill = false;
	$id_bl;
	if(isset($_GET["id_bl"]))
	$id_bl=$_GET["id_bl"];
	$req = mysqli_query($link,"select * from  detail_bl where id_bl = '".$id_bl."'");
	$i=1;
	while($row= mysqli_fetch_array($req))
	{
		$req1=mysqli_query($link,"select * from articles where id_article = '".$row["id_article"]."'");
		if(mysqli_num_rows($req1))
			$large = 75 ;
			$hauteur = 6;
			while($row2 = mysqli_fetch_array($req1))
		{
			//$hauteur = 6;
			$taille = strlen ($row2["designation"]);
			//{	
			$hauteur = 6;
		$r=$this->GetY();
//echo("".$r);
if ($r> 275){
	$b=0;
	if($b==0)
	{
		$this->Cell(array_sum($w),0,'','T');
	$this->SetY(-5);
//$this->SetY($r);
//echo("".$r);
	$b++;
	}//$r = 310;
$ii=0;
while($ii++<2)
	{
			$this->Ln();
		}
	//$this->Cell(array_sum($w),0,'','T');
	}
		$this->Cell($w[0],$hauteur,$i++,'LR',0,'C',$fill);		
		$this->Cell($w[1],$hauteur,$row2["reference"],'LR',0,'C',$fill);
			$large ;	
			//}
		$XX = $this->GetX();
		$YY = $this->GetY();
				if ($taille> 64)
			//{	
			$hauteur = 3;
		$this->MultiCell($w[2],$hauteur ,$row2["designation"],'LR','L',$fill);
		$this->SetY($YY);
		$this->SetX($XX+$w[2]);
		//{	
			$hauteur = 6;
		$this->Cell($w[3],$hauteur ,$row["quantite"],'LR',0,'C',$fill);
		
		$Prix_HT =0;
		if ($row["Remise"])
		{
			
			 	$Prix_HT = $row["Montant"]/ $row["quantite"]+($row["Remise"]);
			
		}
		else
		$Prix_HT = $row["Montant"]/$row["quantite"];
		
		$Prix_HT = number_format($Prix_HT, 2, ',', ' ');

		
		
		$this->Cell($w[4],$hauteur ,"".$Prix_HT ,'LR',0,'R',$fill);
	
	
	
	if ($row["Remise"])
		$this->Cell($w[5],$hauteur ,$row["Remise"]." ",'LR',0,'R',$fill);
else
	$this->Cell($w[5],$hauteur ,"",'LR',0,'R',$fill);

	
	
		$prix = $row["Montant"] /$row["quantite"];
		$prix = number_format($prix, 2, ',', ' ');
		
		$this->Cell($w[6],$hauteur ,$prix."" ,'LR',0,'R',$fill);
		
		$Montant = number_format($row["Montant"], 2, ',', ' ');
		
		$this->Cell($w[7],$hauteur ,$Montant."" ,'LR',0,'R',$fill);
		}
		$this->Ln();
		$fill = !$fill;
	}
	// Trait de terminaison
	$this->Cell(array_sum($w),0,'','T');
	// $this->SetY(-55);
$this->BasicTable($header,$link);
//$this->Cell(5,5);
}
}
// Instanciation de la classe drive
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
	$header = array('N','Ref :','Designation :','Qte :','P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');	 	 	 	 	 
// Chargement des donnes
$pdf->SetFont('Arial','',6);
$pdf->FancyTable($header,$link);


$deja_regle;
$ca =$_SESSION["Societe"]."-".$_GET['id_bl'];
//if(isset($_GET["deja_regle"]))
//{
	//$deja_regle=$_GET["deja_regle"];
//$_client=$_SESSION['_client'];
//$id_bl=$_SESSION['id_bl'];

 
//if($_GET['deja_regle'])
//$sql = mysqli_query($link,"INSERT INTO reglement (date,montant,id_bl) VALUES ('".$_SESSION['date']."','".
//$_GET['deja_regle']."','$id_bl')")or die(mysqli_error($link));

//}
//else 
//{
	
	//die();
	
//	}
$pdf->Output($ca);
	//echo("".$da);
?>