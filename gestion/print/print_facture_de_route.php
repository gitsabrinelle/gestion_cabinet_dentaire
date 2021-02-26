<?php
require('fpdf.php');
include("../global.php");
$ref_client;

class PDF extends FPDF
{
// En-t�te

    function Header($link = null)
    {
    }

// Pied de page
    function Footer()
    {
        // Positionnement � 1,5 cm du bas
        $this->SetY(-8);
        // Police Arial italique 8
        $this->SetFont('Arial', 'I', 8);
        // Num�ro de page
        $this->Cell(0, 10, 'EURL DAP : Page N� :  ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');
    }

    function BasicTable($header)
    {
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('', '', 7);
        $id_bl;
        $montant_ht;
        if (isset($_GET['id_bl']))
            $id_bl = $_GET['id_bl'];
        $requ = mysqli_query($link, "select * from bl where id_bl= '" . $id_bl . "'");
        $_SESSION['id_bl'] = $id_bl;
        $num = mysqli_num_rows($requ);
        if ($num) {
            while ($row = mysqli_fetch_array($requ)) {
                $montant_ht = $row['montant_ht'];
                $ref_client = $row['ref_client'];
                $_SESSION['ref_client'] = $ref_client;
            }
        }
        //	$remise_bl=$_GET['remise_bl'];
        //	$ref_client = $row['ref_client'];
        //	 if(isset($_GET['deja_regle2']))
        //$deja_regle = $_GET['deja_regle2']+ $_GET['deja_regle'] ;
        $data1 = array('Total HT : ', $montant_ht . " DA");
//	$data2 = array(' Remise : ',' '.$remise_bl.' DA');
        $req = mysqli_query($link, "select * from clients where ref_client = '" . $ref_client . "'");
        while ($row = mysqli_fetch_array($req))
            $dette = $row["dette"];
        $this->SetFont('Arial', 'B', 8);
        $this->SetFont('Arial', '', 8);
        $data2 = array(' TVA 17% : ', $montant_ht * 0.17 . ' DA');
        $montant_htt = $montant_ht + $montant_ht * 0.17;
        $data7 = array(' Total TTC  : ', $montant_htt . " DA");
        $header = array($data1, $data2, $data7);
        $i = 0;
        /* do {
            $this->Cell(40,5,' ',0,0);
            $this->Ln();
         }while ($i++<5);
         *///  $this->SetX(70);

        $i = 0;

        do {
            $this->Cell(40, 5, ' ', 0, 0);
            $this->Ln();
        } while ($i++ < 5);


        $this->SetY(-48);


        foreach ($header as $cool) {
            $this->SetX(130);
            foreach ($cool as $col)
                $this->Cell(30, 7, $col, 1, 0, 'R');
            $this->Ln();
        }
    }

    function FancyTable($header)
    {
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.2);
        $this->SetFont('', 'B', 7);
        $w = array(10, 27, 70, 10, 20, 18, 20, 20);
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('', '', 7);
        $fill = false;
        $id_bl;
        if (isset($_GET["id_bl"]))
            $id_bl = $_GET["id_bl"];
        $req = mysqli_query($link, "select * from  detail_bl where id_bl = '" . $id_bl . "'");
        $i = 1;
        while ($row = mysqli_fetch_array($req)) {
            $req1 = mysqli_query($link, "select * from articles where id_article = '" . $row["id_article"] . "'");
            if (mysqli_num_rows($req1))
                $large = 75;
            $hauteur = 6;
            while ($row2 = mysqli_fetch_array($req1)) {
                $taille = strlen($row2["designation"]);
                $hauteur = 6;
                $r = $this->GetY();
                if ($r > 320) {
                    $b = 0;
                    if ($b == 0) {
                        $this->Cell(array_sum($w), 0, '', 'T');
                        $this->SetY(-5);
                        $b++;
                    }
                    $ii = 0;
                    while ($ii++ < 2) {
                        $this->Ln();
                    }
                }
                $this->Cell($w[0], $hauteur, $i++, 'LR', 0, 'C', $fill);
                $this->Cell($w[1], $hauteur, $row2["reference"], 'LR', 0, 'C', $fill);
                $large;
                //}
                $XX = $this->GetX();
                $YY = $this->GetY();
                if ($taille > 60)
                    //{
                    $hauteur = 3;
                $this->MultiCell($w[2], $hauteur, $row2["designation"], 'LR', 'C', $fill);
                $this->SetY($YY);
                $this->SetX($XX + $w[2]);
                //{
                $hauteur = 6;
                $this->Cell($w[3], $hauteur, $row["quantite"], 'LR', 0, 'C', $fill);
                $this->Cell($w[4], $hauteur, $row2["Prix_HT"] . " DA", 'LR', 0, 'C', $fill);
                $this->Cell($w[5], $hauteur, $row["Remise"] . " %", 'LR', 0, 'C', $fill);
                $prix = $row2["Prix_HT"] - $row2["Prix_HT"] * ($row["Remise"] / 100);
                $this->Cell($w[6], $hauteur, $prix . " DA", 'LR', 0, 'C', $fill);
                $this->Cell($w[7], $hauteur, $row["Montant"] . " DA", 'LR', 0, 'C', $fill);
            }
            $this->Ln();
            $fill = !$fill;
        }
        // Trait de terminaison
        $this->Cell(array_sum($w), 0, '', 'T');
        // $this->SetY(-35);
        $this->BasicTable($header);
        $this->Cell(5, 5);
    }
}

// Instanciation de la classe d�riv�e
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$header = array('N�', 'Ref :', 'Designation :', 'Qte :', 'P.U Brut:', 'Remise :', 'P.U Net:', 'Montant :');
// Chargement des donn�es
$pdf->SetFont('Arial', '', 6);
$pdf->FancyTable($header);
$pdf->Output($_SESSION["name_bl"] . "-" . $_SESSION["id_bl"], '');


$deja_regle;

?>