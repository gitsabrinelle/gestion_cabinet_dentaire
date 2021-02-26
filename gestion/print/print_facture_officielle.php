<?php
require('fpdf.php');
	include("global.php");
	$id;
		include("../factures/chiffre.php");
function get_info_from_facture($request)
{
	$result="";
	
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
if ($request=="id_facture")
	{
	if(isset($_GET['id_facture']))
	$result = $_GET['id_facture'];	
		}

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

	

	if ($request=="name_facture")
	{
				$id_facture = get_info_from_facture("id_facture");
		$req_name=mysqli_query($link,"select * from facture where id_facture='".$id_facture."'")or die(mysqli_error($link));
	$row_name=mysqli_fetch_array($req_name);
$result= trim($row_name["name_facture"]);
		}

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////


	if ($request=="montant_ht")
	{
				$id_facture = get_info_from_facture("id_facture");
$requ= mysqli_query($link,"select * from facture where id_facture = '".$id_facture."'")or die (mysqli_error($link));
	$num = mysqli_num_rows($requ);
	if($num)
	{
		while($row = mysqli_fetch_array($requ))
		{		
			$result=$row['montant_ht'];
		}
		}
	
	}

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////	
	
	if ($request=="id")
	{
				$id_facture = get_info_from_facture("id_facture");
$requ= mysqli_query($link,"select * from facture where id_facture = '".$id_facture."'")or die (mysqli_error($link));
	$num = mysqli_num_rows($requ);
	if($num)
	{
		while($row = mysqli_fetch_array($requ))
		{		
			$result = $row['_client'];
			}
		}
	
	}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////	
	
	if ($request=="date_facture")
	{
		$id_facture = get_info_from_facture("id_facture");
		
$requ= mysqli_query($link,"select * from facture where id_facture = '".$id_facture."'")or die (mysqli_error($link));
	$num = mysqli_num_rows($requ);
	if($num)
	{
		while($row = mysqli_fetch_array($requ))
		{		
			
		$result = $row['date'];
			}
		}
	
	}
		

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////		
	
	

	
	
	if ($request=="dette_depart")
	{
		$ref_client = get_info_from_facture("_client");
$req=mysqli_query($link,"select * from clients where id = '".$id."'");
		while($row=mysqli_fetch_array($req))
	$result =	$row["dette"];	
	}
	
	
	
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
if ($request=="somme")
	{
$a = new chiffreEnLettre();

$montant_ht = get_info_from_facture("montant_ht");

$b=number_format($montant_ht, 2, '.', '');
$result= $a->ConvNumberLetter($b,1,0);
	}
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////

	if ($request=="timbre")
	{
$timbre=0;
$montant_ht = get_info_from_facture("montant_ht");
 $montant_htt = $montant_ht +$montant_ht * 0.17;
		$id_facture = get_info_from_facture("id_facture");
$re= mysqli_query($link,"select * from facture where id_facture = '".$id_facture."' ")or die (mysqli_error($link));

if(mysqli_num_rows($re))
{
	$row222=mysqli_fetch_array($re);
	$mode=$row222["method_paym"];
	if ($mode != "Espece")
		
	$mode = "VIREMENT BANCAIRE";
	else
	{
		$timbre=$montant_htt * 0.01;
	
	if ($timbre>2500)
	$timbre = 2500;
	}

$result = $timbre;
}
	}		
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
if ($request=="mode")
	{
			$id_facture = get_info_from_facture("id_facture");
		$re= mysqli_query($link,"select * from facture where id_facture = '".$id_facture."' ")or die (mysqli_error($link));

if(mysqli_num_rows($re))
{
	$row222=mysqli_fetch_array($re);
	$mode=$row222["method_paym"];
	if ($mode != "Espece")
	$mode = "VIREMENT BANCAIRE";
	$result = $mode;
	
	}

}
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
	
	
		
	return $result;
	}

class PDF extends FPDF
{
// En-t�te

function Header()
{
}
// Pied de page
function Footer()
{
	// Positionnement � 1,5 cm du bas
	//$this->SetY(-18);
	// Police Arial italique 8
	$this->SetFont('Arial','I',8);

	
	$this->SetY(-8);
	// Num�ro de page
	$this->SetX(10);
	$name_facture="";
	$name_facture = get_info_from_facture("name_facture");
	$this->Cell(0,10,$name_facture,0,0,'L');
		$this->SetX(30);
	$this->Cell(0,10,'Page N� :  '.$this->PageNo().' / {nb}',0,0,'C');
}
function BasicTable($header)
{	
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',7);	

	$montant_ht=get_info_from_facture("montant_ht");
   
	$id_facture = get_info_from_facture("id_facture");
	
	$id=get_info_from_facture("_client");


		$data1 = array('Total HT : ',number_format( $montant_ht, 2, '.', ' ')." DA");


	$dette =	get_info_from_facture("dette_depart");
	$this->SetFont('Arial','B',8);
	$this->SetFont('Arial','',8);
	$data2 = array('TVA 17% : ',number_format($montant_ht * 0.17, 2, '.', ' ').' DA');	 	 	 	 
 $montant_htt = $montant_ht +$montant_ht * 0.17;
	$data7 = array('Total TTC  : ',number_format($montant_htt, 2, '.', ' ')." DA");	 	
	
$this->SetFont('Arial','I',9);
$timbre=get_info_from_facture("timbre");


	$data8 = array('Timbre Fiscal 1% DU TTC  : ',number_format($timbre, 2, '.', ' ')." DA");
$data9 = array('MONTANT TOTAL A PAYER   : ',number_format($montant_htt+$timbre, 2, '.', ' ')." DA");	 
$header = array($data1,$data2,$data8,$data9);
 $i=0;

$i=0;
 
 do {
	$this->Cell(40,3,' ',0,0);
	$this->Ln();
 }while ($i++<5);
	$this->SetY(-48);
	$s=30;
	$a='R';
	foreach($header as $cool)
   {
	   $this->SetX(120);
	    foreach($cool as $col)
		{
			if($s==50)
			{$a='R';
				$s=30;
			}else{
$s=50;
$a='L';			}
$this->Cell($s,5,$col,1,0,$a);
		}
	$this->Ln();
	}
}
function FancyTable($header)
{
	$header = array('N�','Ref :','Designation :','Qte :','P.U :', 'facture :', 'P.U Net:', 'Montant :');	 	 	 	 	 
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
  
  }
$this->Image($logo,20,03,40);
// Police Arial gras 15
$this->SetFont('Times','',10);
$req=mysqli_query($link,"select * from etablissement where id = '0'");
while($row=mysqli_fetch_array($req))
{
$paragraph=$row["type"]." ".utf8_decode($row["societe"])." - ".utf8_decode($row["adresse"])." , ". utf8_decode($row["Ville"])." - W ".utf8_decode($row["Wilaya"]);

$yY= $this->GetY();

$this->SetX(85);
$this->Cell(121,24,'',1,0,'C');

$this->SetY($yY+2);
$this->SetX(90);
$this->Cell(80,5,$paragraph,0,1);

$para2="Tel : ".$row["Tel"]." - Fax : ".$row["Fax"];
$this->SetX(90);
$this->Cell(105,5,$para2,0,1);
$para3="N� RC : ".$row["nrc"]." - N� NIF : ".$row["Nif"]." - N� ART : ".$row["Art"];
$this->SetX(90);
$this->Cell(75,5,$para3,0,1);
$para4="Email : ".$row['Email']." - Web : ".$row['Web'];
$this->SetX(90);
$this->Cell(87,5,$para4,0,1);


}

$this->SetFont('Arial','B',15);

$name_facture = get_info_from_facture("name_facture");
	$this->Ln();$this->Ln();$this->Ln();$this->Ln();
$this->Cell(72,10,'Facture N� : '.$name_facture,1,0,'C');
$this->Ln();
$this->SetFont('','',8);


$id_facture = get_info_from_facture("id_facture");
$_client=get_info_from_facture("_client");
$date=get_info_from_facture("date_facture");	



$req4= mysqli_query($link,"select * from clients where id = '$_client' ")or die (mysqli_error($link));
if(mysqli_num_rows($req4))
{
	while($row4=mysqli_fetch_array($req4))
	{

$x = $this->GetX();

$this->SetFont('','B',10);

$yY= $this->GetY();

$this->SetY($yY-26);


$of = " ( ".ucwords ( utf8_decode ( trim(rtrim(ltrim($row4['societe'])))))." ) ";
$ref=" Client N�  ".$row4['id']." : ";
$heada = array($ref,$of);

//$this->SetX(100);
//$this->Cell(5,5,$of,0,0,'C',false);
//$this->Cell(5,5,$of,0,1);

//$this->SetY($y);
$this->SetX(75);
//$this->Cell(5,5,$ref,0,0,'C',false);
//$this->Cell(5,5,,0,FALSE);
for($i=0;$i<count($heada);$i++)
	{
			$this->Cell(40,7,$heada[$i],0,0,'C',false);
	if($i%2)
{
	$this->Ln();
}
	}
	$this->SetFont('','',8);


$this->SetX(85);
$adr = trim(rtrim(ltrim(ucwords (utf8_encode($row4['adresse'])))));
$ville = trim(rtrim(ltrim(ucwords (utf8_encode($row4['Ville'])))));
$ville=utf8_encode($row4['Ville']);
$wilaya= trim(rtrim(ltrim(ucwords ($row4['Wilaya']))));
$this->Cell(5,5,  $adr." , ".$ville." ".$wilaya,0,1);
$this->Cell(5,10);
$yY= $this->GetY();

$this->SetY($yY+3);
$this->SetX(130);
$this->Cell(5,5,"N� RC       :        ".utf8_decode (rtrim(ltrim($row4['nrc']))),0,1);
$this->Cell(5,10);
$this->SetX(130);
$this->Cell(5,5,"N� IF         :        ".ucwords ( utf8_decode ( trim(rtrim(ltrim($row4['nif']))))),0,1);
$this->Cell(5,10);
$this->SetX(130);
$this->Cell(5,5,"N� ART     :        ".ucwords ( utf8_decode ( trim(rtrim(ltrim($row4['N_ART']))))),0,1);
$this->SetX($x);
$this->Cell(0,5);
$this->SetY(35);
$this->Ln();
$name_facture = get_info_from_facture("name_facture");

$this->SetFont('','',12);

$head = array('','Le : '.date("d / m / Y", strtotime($date)));
$w = array(30,30);
$j= 0;
$yY= $this->GetY();

$this->SetY($yY+16);
$this->SetX(23);
for($i=0;$i<count($head);$i++)
	{
			$this->Cell(30,7,$head[$i],0,0,'C',false);
	if($i%2)
{
	$this->Ln();
}
	}
		
	$this->SetFillColor(0,0,0);
	$this->SetTextColor(0);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B',9);
	$w = array(10,27, 100, 10, 20,25);
	$header = array('N�','R�f�rence :','D�signation :','Qtt :','P.U HT :', 'Montant HT :');	 	 	 	 	 
	for($i=0;$i<count($header);$i++)
	{
			$this->Cell($w[$i],7,$header[$i],1,0,'C',False);
	}
	$this->Ln();
$y= $this->GetY();
		}
	}
	$this->SetFillColor(0,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.2);

	$w = array(10,27, 100, 10, 20,25);
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','',8);
	$fill = false;
	$id_facture;
	if(isset($_GET["id_facture"]))
	$id_facture=$_GET["id_facture"];
	$req = mysqli_query($link,"select * from  detail_facture where id_facture = '".$id_facture."'")or die (mysqli_error($link));
	$i=1;
	while($row= mysqli_fetch_array($req))
	{
		$req1=mysqli_query($link,"select * from articles where id_article = '".$row["id_article"]."'")or die (mysqli_error($link));
		if(mysqli_num_rows($req1))
			$large = 75 ;
			$hauteur = 6;
			while($row2 = mysqli_fetch_array($req1))
		{
			$taille = strlen ($row2["designation"]);
			$hauteur = 6;
			$r=$this->GetY();
if ($r> 270|| $r<10){
	$b=0;
	if($b==0)
	{
		$this->Cell(array_sum($w),0,'','T');
	if ($r<10)$this->SetY(20);
	else $this->SetY(-5);

	$b++;
	}
$ii=0;
while($ii++<2)
	{
			$this->Ln();
		}
	$p=$this->GetX();
	
	$this->Cell(array_sum($w),0,'','T');
	$this->Ln();
//$this->SetX=($p);
	}
		$this->Cell($w[0],$hauteur,$i++,'LR',0,'C',$fill);		
		$this->Cell($w[1],$hauteur,$row2["reference"],'LR',0,'L',$fill);
			$large ;	
			//}
		$XX = $this->GetX();
		$YY = $this->GetY();
				if ($taille> 75)
			//{	
			$hauteur = 3;
		$this->MultiCell($w[2],$hauteur ,utf8_decode (rtrim(ltrim(ucwords ( trim($row2["designation"]))))),'LR','L',$fill);
		$this->SetY($YY);
		$this->SetX($XX+$w[2]);
		//{	
			$hauteur = 6;
		$this->Cell($w[3],$hauteur ,$row["quantite"],'LR',0,'C',$fill);
	if ($row["quantite"])	
	$this->Cell($w[4],$hauteur ,number_format($row["Montant"]/$row["quantite"], 2, '.', ' ')."" ,'LR',0,'R',$fill);
		$prix = $row2["Prix_HT"] ;
		$this->Cell($w[5],$hauteur ,number_format($row["Montant"], 2, '.', ' ')."" ,'LR',0,'R',$fill);
		}
		$this->Ln();
		$fill = !$fill;
	}
$this->Cell(array_sum($w),0,'','T');
$this->SetFont('Arial','BU',11);	
$this->Ln();
$this->Cell(20,10,'Arr�ter la pr�sente facture � la somme de :',0,0,'L');
$this->Ln();
$this->Setx(10);	
$this->SetFont('Arial','I',10);	


$somme =get_info_from_facture("somme");



$this->MultiCell(192,5,' '.ucwords ( $somme),0,'C',false);
$this->Ln();
$this->Setx(11);	
$this->SetFont('Arial','BU',10);	
$this->Cell(20,10,'MODE DE PAIEMENT :',0,0,'L');
$this->Ln();
$this->SetFont('Arial','I',9);

$mode = get_info_from_facture("mode");

$this->MultiCell(102,5,' '.ucwords ($mode),1,'C',true);
$this->BasicTable($header);
$this->Cell(5,5);
}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
	$header = array('N�','Ref :','Designation :','Qte :','P.U Brut:', 'facture :', 'P.U Net:', 'Montant :');	 	 	 	 	 
$pdf->SetFont('Arial','',6);
$pdf->FancyTable($header);
$pdf->Output("-",'');


$deja_regle;

?>