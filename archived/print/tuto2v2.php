<?php
require('../fpdf.php');
	include("global.php");
	$ref_client;
$dette ;
class PDF extends FPDF
{
// En-t�te

function Header()
{}
// Pied de page
function Footer()
{
	// Positionnement � 1,5 cm du bas
	$this->SetY(-8);
	// Police Arial italique 8
	$this->SetFont('Arial','I',8);
	// Num�ro de page
	$this->Cell(0,10,'EURL DAP : Page N� :  '.$this->PageNo().' / {nb}' .'  ',0,0,'C');
}
function BasicTable($header)
{	
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',8);	
	$id_bl;
	$montant_ht;
    if(isset($_GET['id_bl']))
	$id_bl=$_GET['id_bl'];
	$requ= mysqli_query($link,"select * from bl where id_bl= '".$id_bl."'");
	$_SESSION['id_bl']=$id_bl;
	$num = mysqli_num_rows($requ);
	if($num)
	{
		while($row = mysqli_fetch_array($requ))
		{		
			$montant_ht=$row['montant_ht'];
			$ref_client = $row['ref_client'];
			$_SESSION['ref_client']=$ref_client;
			$_SESSION['date']=$row['date'];;
			
			}
		}
		
			
		
		$req_remise_bl= mysqli_query($link,"select * from remise_bl where id_bl='".$id_bl."'");
		
		
		$row_remise_bl=mysqli_fetch_array($req_remise_bl);
		
		$remise_bl = $row_remise_bl["montant"];
		
		
	
	
		
		
		
		//	$ref_client = $row['ref_client'];
			
			
			
$deja_regle =0 ;
$montant_ht = number_format($montant_ht, 2, ',', ' ');
	//$montant_ht
	$data1 = array('Montant : ',$montant_ht." DA");
$remise_bl = number_format($remise_bl, 2, ',', ' ');

	$data2 = array(' Remise : ',' '.$remise_bl.' DA');
$req=mysqli_query($link,"select * from clients where ref_client = '".$ref_client."'");
		while($row=mysqli_fetch_array($req))
	$dette =	$row["dette"];
	$this->SetFont('Arial','B',8);
	$ttc= $montant_ht - $remise_bl;
	$remise_bl = number_format($ttc, 2, ',', ' ');
	
	$data4 = array('Total a regler a reception  : ',$ttc.' DA');	 	 	 	 	 
	$this->SetFont('Arial','',8);
$date ;
	$rz = mysql_query ("SELECT SUM(Remise_bl) AS rem from bl WHERE ref_client = '".$ref_client."'  and id_bl != '".$id_bl."' AND  DATEDIFF(date,'".$_SESSION['date']."')<0") or die(mysqli_error($link));
 $numeerz = mysqli_num_rows($rz);

$sommmrz = 0;
 if($numeerz)
 {
	 while ($rowwwrz = mysqli_fetch_array($rz))
	 {
		 $sommmrz = $rowwwrz['rem'];
		// echo("hh". $rowww['somme']." h". $rowww['somme2']);
		//die();
		 }
	 }

 $re = mysql_query ("SELECT sum( reglement.montant ) AS somme, sum( bl.montant_ht ) AS somme2,bl.ref_client FROM  reglement,bl where bl.id_bl = reglement.id_bl  and bl.ref_client = 
 '".$ref_client."' and bl.id_bl != '".$id_bl."' AND  DATEDIFF(bl.date,'".$_SESSION['date']."')<0")or die(mysqli_error($link));

 
 //SELECT SUM( montant_ht ) AS somme , SUM( deja_regle ) AS somme2 FROM bl WHERE ref_client =
 $nume = mysqli_num_rows($re);
$somm ;
 if($nume)
 {
	 while ($roww = mysqli_fetch_array($re))
	 {
		 $somm = $roww['somme'] - $roww['somme2']+$dette- $sommmrz;
		// echo($roww['somme']." h  ".$roww['somme2']);
		// die();
		 }
	 }
//	$reqqq= mysqli_query($link,"UPDATE bl SET deja_regle = '$deja_regle' WHERE id_bl = '$id_bl'") or die (mysqli_error($link));
$rest = $montant_ht - $remise_bl - $deja_regle - $remise_bl; 
//	$data3 = array(' Ancien Versements ( BL ) : ',$deja_regle." DA");

$deja = number_format(0, 2, ',', ' ');
$data4 = array(' Verser a reception : ',$deja." DA");
$somm = number_format($somm, 2, ',', ' ');

$detedatereq= mysql_query ("SELECT * FROM  bl WHERE  ref_client = '"
 .$ref_client."' and id_bl != '".$id_bl."' and  DATEDIFF(date,'".$_SESSION['date']."')<=0 ORDER BY  `bl`.`date` DESC 
LIMIT 0 , 1")or die(mysqli_error($link));
$datenum = mysqli_num_rows($detedatereq);
if($datenum)
{
$rowdate= mysqli_fetch_array($detedatereq);
$detedate = $rowdate['date'];
}
else
$detedate =$_SESSION['date'];
$data3 = array(' Dette Du '.date("  d/m/Y ", strtotime($detedate))." : ",$somm.' DA');	 	 	 	 
//	$data5 = array(' Reste ( BL ) : ',$rest.' DA');	 	 	 	 
 
 $rz = mysql_query ("SELECT SUM(Remise_bl) AS rem from bl WHERE ref_client = '".$ref_client."' AND  DATEDIFF(date,'".$_SESSION['date']."')<=0")
 or die(mysqli_error($link));
 $numeerz = mysqli_num_rows($rz);
$sommmrz = 0;
 if($numeerz)
 {
	 while ($rowwwrz = mysqli_fetch_array($rz))
	 {
		 $sommmrz = $rowwwrz['rem'];
		// echo("hh". $rowww['somme']." h". $rowww['somme2']);
		//die();
		 }
	 }

 $rett = mysql_query ("SELECT SUM(montant_ht) AS somme , SUM(deja_regle) AS somme2 FROM  bl WHERE  ref_client = '".$ref_client."'AND  DATEDIFF(date,'".$_SESSION['date']."')<=0")or die(mysqli_error($link));
 
 $numee = mysqli_num_rows($rett);
$sommm = 0;
 if($numee)
 {
	 while ($rowww = mysqli_fetch_array($rett))
	 {
		 $sommm = $rowww['somme'] - $rowww['somme2']+$dette - $sommmrz;
		// echo("hh". $rowww['somme']." h". $rowww['somme2']);
		//die();
		 }
	 }
$sommm = number_format($sommm, 2, ',', ' ');
	
	$data7 = array(' Reste  : ',$sommm." DA");	 	 	 	 
//$header = array($data1,$data2,$data3,$data4, $data7);
$header = array();
$header[] = $data1;
$header[] = $data2;

$header[] = $data3;
$requeteVersements = mysqli_query($link,"select * from reglement where id_bl = '".$id_bl."'")or die(mysqli_error($link));
$versementNum = mysqli_num_rows($requeteVersements);
if ($versementNum)
{


while($rowVersement=mysqli_fetch_array($requeteVersements))
{
	 

	$data =array('Verser le '.$rowVersement['date'] .' : ',' '.number_format($rowVersement['montant'], 2, ',', ' '));
$header[]= $data;
}
}


$header[] = $data4;
$header[] = $data7;
//$header[] = $data1;
// En-t�te
 //   $this->SetX(70);
 $i=0;
 
 
 
 do {
	$this->Cell(40,5,' ',0,0);
	$this->Ln();
 }while ($i++<5);
 
 //$this->SetY(-50);
//$this->SetY($r);
//echo("".$r);
//die();
	foreach($header as $cool)
   {
	   $this->SetX(120);
	    foreach($cool as $col)
		$this->Cell(40,5,$col,1,0,'R');
	$this->Ln();
	}
   // Donn�es



}
function FancyTable($header)
{
	
 	 	 	 
	// Logo
$this->Image('dap_fishing.jpg',15,15,40);
// Police Arial gras 15
$this->SetFont('Times','',8);
$req=mysqli_query($link,"select * from info_eurl where id = '0'");
while($row=mysqli_fetch_array($req))
{
	
$paragraph=$row["Societe"]." - ".$row["adresse"]." , ". $row["Ville"]." - W ".$row["Wilaya"];
$this->Cell(80,10);
$this->Cell(80,5,$paragraph,0,1);
$para2="Tel : ".$row["Tel"]." - Fax : ".$row["Fax"];
$this->Cell(105,10);
$this->Cell(105,5,$para2,0,1);
//$this->Cell(40,5,,0,1);
//$this->Cell(40,5,,0,1);
$para3="N� RC : ".$row["nrc"]." - N� NIF : ".$row["Nif"]." - N� ART : ".$row["Art"];
$this->Cell(75,10);
$this->Cell(75,5,$para3,0,1);
$para4="Email : ".$row['Email']." - Web : ".$row['Web'];
$this->Cell(87,10);
$this->Cell(87,5,$para4,0,1);
$this->Cell(75,10);
$this->Cell(75,5,"  ",0,1);
}
$this->SetFont('Arial','B',10);
// D�calage � droite
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

$ref_client;
$date;
$req5= mysqli_query($link,"select * from bl where id_bl = '$id_bl' ");
if(mysqli_num_rows($req5))
{
	while($row2=mysqli_fetch_array($req5))
	{
		$date = $row2['date'];
		$ref_client = $row2['ref_client'];
		}
	}
$req4= mysqli_query($link,"select * from clients where ref_client = '$ref_client' ");
if(mysqli_num_rows($req4))
{
	while($row4=mysqli_fetch_array($req4))
	{
		$dette = $row4["dette"];
$this->Cell(5,10);
$x = $this->GetX();
$this->SetX(120);
$this->SetFont('','B',8);
$y= $this->GetY();
$_SESSION["Societe"] = $row4["Societe"];
$this->Cell(5,5,$row4['Societe'],0,1);
$this->SetFont('','',8);
$this->Cell(5,10);
$this->SetX(120);
$this->Cell(5,5,$row4['adresse'],0,1);
$this->Cell(5,10);
$yY= $this->GetY();
$this->SetY($yY+3);
$this->SetX(120);
$this->Cell(5,5,"N� RC :        ".$row4['nrc'],0,1);
$this->Cell(5,10);
$this->SetX(120);
$this->Cell(5,5,"N� IF :          ".$row4['nif'],0,1);
$this->Cell(5,10);
$this->SetX(120);
$this->Cell(5,5,"N� ART :      ".$row4['N_ART'],0,1);
$this->SetX($x);
$this->Cell(0,5);
$this->SetY($y);
$this->Ln();
$head = array('BL N� : ',$id_bl , 'Date : ',date("d-m-Y", strtotime($date)),'Reference Client  : ',$row4['ref_client']);
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
//$this->Cell(35,5,"BL N� : ".$id_bl,1,1);
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
	$this->SetFont('','B',8);
	// En-t�te
	$w = array(8,27, 85, 10, 15,15,15,15);
	$header = array('N�','Ref :','Designation :','Qte :','P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');	 	 	 	 	 
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

	// Couleurs, �paisseur du trait et police grasse
	$this->SetFillColor(0,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.2);
	$this->SetFont('','B',8);
	// En-t�te
	$w = array(8,27, 85, 10, 15,15,15,15);
//	for($i=0;$i<count($header);$i++)
	//	$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
//	$this->Ln();
	// Restauration des couleurs et de la police
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',5);
	// Donn�es
	$fill = false;
	$id_bl;
	if(isset($_GET["id_bl"]))
	$id_bl=$_fet["id_bl"];
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
				if ($taille> 100)
			//{	
			$hauteur = 3;
		$this->MultiCell($w[2],$hauteur ,$row2["designation"],'LR','L',$fill);
		$this->SetY($YY);
		$this->SetX($XX+$w[2]);
		//{	
			$hauteur = 6;
		$this->Cell($w[3],$hauteur ,$row["quantite"],'LR',0,'C',$fill);
				if ($row["Remise"])
		{
			$Prix_HT = ($row["Montant"] / $row["quantite"])/(1-$row["Remise"]/100);
		}
		else
		$Prix_HT = $row["Montant"]/$row["quantite"];
		$Prix_HT = number_format($Prix_HT, 2, ',', ' ');
	$this->Cell($w[4],$hauteur ,$Prix_HT ,'LR',0,'R',$fill);
		if ($row["Remise"])
		$this->Cell($w[5],$hauteur ,$row["Remise"]." %",'LR',0,'R',$fill);
else
	$this->Cell($w[5],$hauteur ,"",'LR',0,'R',$fill);

	if($row["quantite"])
	{
		$prix = $row["Montant"] /$row["quantite"];
		$prix = number_format($prix, 2, ',', ' ');
		}else 
	$prix = 0;
		
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
$this->BasicTable($header);
//$this->Cell(5,5);

	}
	}
// Instanciation de la classe d�riv�e
global $id_bl;
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
	$header = array('N�','Ref :','Designation :','Qte :','P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');	 	 	 	 	 
// Chargement des donn�es
$pdf->SetFont('Arial','',8);
$pdf->FancyTable($header);
$ref_client=$_SESSION['ref_client'];
$id_bl=$_SESSION['id_bl'];
$ca =$_SESSION["Societe"]."-".$_SESSION['id_bl'];
 


$pdf->Output($ca);
	//echo("".$da);
?>