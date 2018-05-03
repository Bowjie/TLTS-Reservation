<?php
require('fpdf.php');
$conn = new mysqli("localhost", "root", "root", "wbs");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
//Year
$year=$_POST['year'];
//Business Ad.
$sqldept01 = "SELECT * FROM RESERVATION where department='Business Ad.' group by department;";
$recorddept01 = mysqli_query($conn, $sqldept01) or die(mysql_error());
$rowdept01=mysqli_fetch_array($recorddept01);
//nov
$sqlnov01 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Business Ad.';";
$recordnov01 = mysqli_query($conn, $sqlnov01) or die(mysql_error());
$rownov01=mysqli_fetch_array($recordnov01);
//dec
$sqldec01 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Business Ad.';";
$recorddec01 = mysqli_query($conn, $sqldec01) or die(mysql_error());
$rowdec01=mysqli_fetch_array($recorddec01);
//jan
$sqljan01 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Business Ad.';";
$recordjan01 = mysqli_query($conn, $sqljan01) or die(mysql_error());
$rowjan01=mysqli_fetch_array($recordjan01);
//feb
$sqlfeb01 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Business Ad.';";
$recordfeb01 = mysqli_query($conn, $sqlfeb01) or die(mysql_error());
$rowfeb01=mysqli_fetch_array($recordfeb01);
//mar
$sqlmar01 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Business Ad.';";
$recordmar01 = mysqli_query($conn, $sqlmar01) or die(mysql_error());
$rowmar01=mysqli_fetch_array($recordmar01);

//CEIS
$sqldept02 = "SELECT * FROM RESERVATION where department='CEIS' group by department;";
$recorddept02 = mysqli_query($conn, $sqldept02) or die(mysql_error());
$rowdept02=mysqli_fetch_array($recorddept02);
//nov
$sqlnov02 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='CEIS';";
$recordnov02 = mysqli_query($conn, $sqlnov02) or die(mysql_error());
$rownov02=mysqli_fetch_array($recordnov02);
//dec
$sqldec02 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='CEIS';";
$recorddec02 = mysqli_query($conn, $sqldec02) or die(mysql_error());
$rowdec02=mysqli_fetch_array($recorddec02);
//jan
$sqljan02 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='CEIS';";
$recordjan02 = mysqli_query($conn, $sqljan02) or die(mysql_error());
$rowjan02=mysqli_fetch_array($recordjan02);
//feb
$sqlfeb02 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='CEIS';";
$recordfeb02 = mysqli_query($conn, $sqlfeb02) or die(mysql_error());
$rowfeb02=mysqli_fetch_array($recordfeb02);
//mar
$sqlmar02 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='CEIS';";
$recordmar02 = mysqli_query($conn, $sqlmar02) or die(mysql_error());
$rowmar02=mysqli_fetch_array($recordmar02);

//CSIT
$sqldept03 = "SELECT * FROM RESERVATION where department='CSIT' group by department;";
$recorddept03 = mysqli_query($conn, $sqldept03) or die(mysql_error());
$rowdept03=mysqli_fetch_array($recorddept03);
//nov
$sqlnov03 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='CSIT';";
$recordnov03 = mysqli_query($conn, $sqlnov03) or die(mysql_error());
$rownov03=mysqli_fetch_array($recordnov03);
//dec
$sqldec03 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='CSIT';";
$recorddec03 = mysqli_query($conn, $sqldec03) or die(mysql_error());
$rowdec03=mysqli_fetch_array($recorddec03);
//jan
$sqljan03 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='CSIT';";
$recordjan03 = mysqli_query($conn, $sqljan03) or die(mysql_error());
$rowjan03=mysqli_fetch_array($recordjan03);
//feb
$sqlfeb03 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='CSIT';";
$recordfeb03 = mysqli_query($conn, $sqlfeb03) or die(mysql_error());
$rowfeb03=mysqli_fetch_array($recordfeb03);
//mar
$sqlmar03 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='CSIT';";
$recordmar03 = mysqli_query($conn, $sqlmar03) or die(mysql_error());
$rowmar03=mysqli_fetch_array($recordmar03);

//Dentistry
$sqldept04 = "SELECT * FROM RESERVATION where department='Dentistry' group by department;";
$recorddept04 = mysqli_query($conn, $sqldept04) or die(mysql_error());
$rowdept04=mysqli_fetch_array($recorddept04);
//nov
$sqlnov04 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Dentistry';";
$recordnov04 = mysqli_query($conn, $sqlnov04) or die(mysql_error());
$rownov04=mysqli_fetch_array($recordnov04);
//dec
$sqldec04 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Dentistry';";
$recorddec04 = mysqli_query($conn, $sqldec04) or die(mysql_error());
$rowdec04=mysqli_fetch_array($recorddec04);
//jan
$sqljan04 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Dentistry';";
$recordjan04 = mysqli_query($conn, $sqljan04) or die(mysql_error());
$rowjan04=mysqli_fetch_array($recordjan04);
//feb
$sqlfeb04 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Dentistry';";
$recordfeb04 = mysqli_query($conn, $sqlfeb04) or die(mysql_error());
$rowfeb04=mysqli_fetch_array($recordfeb04);
//mar
$sqlmar04 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Dentistry';";
$recordmar04 = mysqli_query($conn, $sqlmar04) or die(mysql_error());
$rowmar04=mysqli_fetch_array($recordmar04);

//General Education
$sqldept05 = "SELECT * FROM RESERVATION where department='General Education' group by department;";
$recorddept05 = mysqli_query($conn, $sqldept05) or die(mysql_error());
$rowdept05=mysqli_fetch_array($recorddept05);
//nov
$sqlnov05 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='General Education';";
$recordnov05 = mysqli_query($conn, $sqlnov05) or die(mysql_error());
$rownov05=mysqli_fetch_array($recordnov05);
//dec
$sqldec05 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='General Education';";
$recorddec05 = mysqli_query($conn, $sqldec05) or die(mysql_error());
$rowdec05=mysqli_fetch_array($recorddec05);
//jan
$sqljan05 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='General Education';";
$recordjan05 = mysqli_query($conn, $sqljan05) or die(mysql_error());
$rowjan05=mysqli_fetch_array($recordjan05);
//feb
$sqlfeb05 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='General Education';";
$recordfeb05 = mysqli_query($conn, $sqlfeb05) or die(mysql_error());
$rowfeb05=mysqli_fetch_array($recordfeb05);
//mar
$sqlmar05 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='General Education';";
$recordmar05 = mysqli_query($conn, $sqlmar05) or die(mysql_error());
$rowmar05=mysqli_fetch_array($recordmar05);

//Graduate School
$sqldept06 = "SELECT * FROM RESERVATION where department='Graduate School' group by department;";
$recorddept06 = mysqli_query($conn, $sqldept06) or die(mysql_error());
$rowdept06=mysqli_fetch_array($recorddept06);
//nov
$sqlnov06 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Graduate School';";
$recordnov06 = mysqli_query($conn, $sqlnov06) or die(mysql_error());
$rownov06=mysqli_fetch_array($recordnov06);
//dec
$sqldec06 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Graduate School';";
$recorddec06 = mysqli_query($conn, $sqldec06) or die(mysql_error());
$rowdec06=mysqli_fetch_array($recorddec06);
//jan
$sqljan06 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Graduate School';";
$recordjan06 = mysqli_query($conn, $sqljan06) or die(mysql_error());
$rowjan06=mysqli_fetch_array($recordjan06);
//feb
$sqlfeb06 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Graduate School';";
$recordfeb06 = mysqli_query($conn, $sqlfeb06) or die(mysql_error());
$rowfeb06=mysqli_fetch_array($recordfeb06);
//mar
$sqlmar06 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Graduate School';";
$recordmar06 = mysqli_query($conn, $sqlmar06) or die(mysql_error());
$rowmar06=mysqli_fetch_array($recordmar06);

//HRM
$sqldept07 = "SELECT * FROM RESERVATION where department='HRM' group by department;";
$recorddept07 = mysqli_query($conn, $sqldept07) or die(mysql_error());
$rowdept07=mysqli_fetch_array($recorddept07);
//nov
$sqlnov07 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='HRM';";
$recordnov07 = mysqli_query($conn, $sqlnov07) or die(mysql_error());
$rownov07=mysqli_fetch_array($recordnov07);
//dec
$sqldec07 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='HRM';";
$recorddec07 = mysqli_query($conn, $sqldec07) or die(mysql_error());
$rowdec07=mysqli_fetch_array($recorddec07);
//jan
$sqljan07 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='HRM';";
$recordjan07 = mysqli_query($conn, $sqljan07) or die(mysql_error());
$rowjan07=mysqli_fetch_array($recordjan07);
//feb
$sqlfeb07 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='HRM';";
$recordfeb07 = mysqli_query($conn, $sqlfeb07) or die(mysql_error());
$rowfeb07=mysqli_fetch_array($recordfeb07);
//mar
$sqlmar07 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='HRM';";
$recordmar07 = mysqli_query($conn, $sqlmar07) or die(mysql_error());
$rowmar07=mysqli_fetch_array($recordmar07);

//Med. Tech
$sqldept08 = "SELECT * FROM RESERVATION where department='Med. Tech' group by department;";
$recorddept08 = mysqli_query($conn, $sqldept08) or die(mysql_error());
$rowdept08=mysqli_fetch_array($recorddept08);
//nov
$sqlnov08 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Med. Tech';";
$recordnov08 = mysqli_query($conn, $sqlnov08) or die(mysql_error());
$rownov08=mysqli_fetch_array($recordnov08);
//dec
$sqldec08 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Med. Tech';";
$recorddec08 = mysqli_query($conn, $sqldec08) or die(mysql_error());
$rowdec08=mysqli_fetch_array($recorddec08);
//jan
$sqljan08 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Med. Tech';";
$recordjan08 = mysqli_query($conn, $sqljan08) or die(mysql_error());
$rowjan08=mysqli_fetch_array($recordjan08);
//feb
$sqlfeb08 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Med. Tech';";
$recordfeb08 = mysqli_query($conn, $sqlfeb08) or die(mysql_error());
$rowfeb08=mysqli_fetch_array($recordfeb08);
//mar
$sqlmar08 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Med. Tech';";
$recordmar08 = mysqli_query($conn, $sqlmar08) or die(mysql_error());
$rowmar08=mysqli_fetch_array($recordmar08);

//Non-Academic
$sqldept09 = "SELECT * FROM RESERVATION where department='Non-Academic' group by department;";
$recorddept09 = mysqli_query($conn, $sqldept09) or die(mysql_error());
$rowdept09=mysqli_fetch_array($recorddept09);
//nov
$sqlnov09 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Non-Academic';";
$recordnov09 = mysqli_query($conn, $sqlnov09) or die(mysql_error());
$rownov09=mysqli_fetch_array($recordnov09);
//dec
$sqldec09 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Non-Academic';";
$recorddec09 = mysqli_query($conn, $sqldec09) or die(mysql_error());
$rowdec09=mysqli_fetch_array($recorddec09);
//jan
$sqljan09 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Non-Academic';";
$recordjan09 = mysqli_query($conn, $sqljan09) or die(mysql_error());
$rowjan09=mysqli_fetch_array($recordjan09);
//feb
$sqlfeb09 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Non-Academic';";
$recordfeb09 = mysqli_query($conn, $sqlfeb09) or die(mysql_error());
$rowfeb09=mysqli_fetch_array($recordfeb09);
//mar
$sqlmar09 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Non-Academic';";
$recordmar09 = mysqli_query($conn, $sqlmar09) or die(mysql_error());
$rowmar09=mysqli_fetch_array($recordmar09);

//Nursing
$sqldept10 = "SELECT * FROM RESERVATION where department='Nursing' group by department;";
$recorddept10 = mysqli_query($conn, $sqldept10) or die(mysql_error());
$rowdept10=mysqli_fetch_array($recorddept10);
//nov
$sqlnov10 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Nursing';";
$recordnov10 = mysqli_query($conn, $sqlnov10) or die(mysql_error());
$rownov10=mysqli_fetch_array($recordnov10);
//dec
$sqldec10 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Nursing';";
$recorddec10 = mysqli_query($conn, $sqldec10) or die(mysql_error());
$rowdec10=mysqli_fetch_array($recorddec10);
//jan
$sqljan10 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Nursing';";
$recordjan10 = mysqli_query($conn, $sqljan10) or die(mysql_error());
$rowjan10=mysqli_fetch_array($recordjan10);
//feb
$sqlfeb10 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Nursing';";
$recordfeb10 = mysqli_query($conn, $sqlfeb10) or die(mysql_error());
$rowfeb10=mysqli_fetch_array($recordfeb10);
//mar
$sqlmar10 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Nursing';";
$recordmar10 = mysqli_query($conn, $sqlmar10) or die(mysql_error());
$rowmar10=mysqli_fetch_array($recordmar10);

//Pharmacy
$sqldept11 = "SELECT * FROM RESERVATION where department='Pharmacy' group by department;";
$recorddept11 = mysqli_query($conn, $sqldept11) or die(mysql_error());
$rowdept11=mysqli_fetch_array($recorddept11);
//nov
$sqlnov11 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Pharmacy';";
$recordnov11 = mysqli_query($conn, $sqlnov11) or die(mysql_error());
$rownov11=mysqli_fetch_array($recordnov11);
//dec
$sqldec11 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Pharmacy';";
$recorddec11 = mysqli_query($conn, $sqldec11) or die(mysql_error());
$rowdec11=mysqli_fetch_array($recorddec11);
//jan
$sqljan11 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Pharmacy';";
$recordjan11 = mysqli_query($conn, $sqljan11) or die(mysql_error());
$rowjan11=mysqli_fetch_array($recordjan11);
//feb
$sqlfeb11 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Pharmacy';";
$recordfeb11 = mysqli_query($conn, $sqlfeb11) or die(mysql_error());
$rowfeb11=mysqli_fetch_array($recordfeb11);
//mar
$sqlmar11 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Pharmacy';";
$recordmar11 = mysqli_query($conn, $sqlmar11) or die(mysql_error());
$rowmar11=mysqli_fetch_array($recordmar11);

//Psychology
$sqldept12 = "SELECT * FROM RESERVATION where department='Psychology' group by department;";
$recorddept12 = mysqli_query($conn, $sqldept12) or die(mysql_error());
$rowdept12=mysqli_fetch_array($recorddept12);
//nov
$sqlnov12 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Psychology';";
$recordnov12 = mysqli_query($conn, $sqlnov12) or die(mysql_error());
$rownov12=mysqli_fetch_array($recordnov12);
//dec
$sqldec12 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Psychology';";
$recorddec12 = mysqli_query($conn, $sqldec12) or die(mysql_error());
$rowdec12=mysqli_fetch_array($recorddec12);
//jan
$sqljan12 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Psychology';";
$recordjan12 = mysqli_query($conn, $sqljan12) or die(mysql_error());
$rowjan12=mysqli_fetch_array($recordjan12);
//feb
$sqlfeb12 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Psychology';";
$recordfeb12 = mysqli_query($conn, $sqlfeb12) or die(mysql_error());
$rowfeb12=mysqli_fetch_array($recordfeb12);
//mar
$sqlmar12 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Psychology';";
$recordmar12 = mysqli_query($conn, $sqlmar12) or die(mysql_error());
$rowmar12=mysqli_fetch_array($recordmar12);

//School of Law
$sqldept13 = "SELECT * FROM RESERVATION where department='School of Law' group by department;";
$recorddept13 = mysqli_query($conn, $sqldept13) or die(mysql_error());
$rowdept13=mysqli_fetch_array($recorddept13);
//nov
$sqlnov13 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='School of Law';";
$recordnov13 = mysqli_query($conn, $sqlnov13) or die(mysql_error());
$rownov13=mysqli_fetch_array($recordnov13);
//dec
$sqldec13 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='School of Law';";
$recorddec13 = mysqli_query($conn, $sqldec13) or die(mysql_error());
$rowdec13=mysqli_fetch_array($recorddec13);
//jan
$sqljan13 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='School of Law';";
$recordjan13 = mysqli_query($conn, $sqljan13) or die(mysql_error());
$rowjan13=mysqli_fetch_array($recordjan13);
//feb
$sqlfeb13 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='School of Law';";
$recordfeb13 = mysqli_query($conn, $sqlfeb13) or die(mysql_error());
$rowfeb13=mysqli_fetch_array($recordfeb13);
//mar
$sqlmar13 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='School of Law';";
$recordmar13 = mysqli_query($conn, $sqlmar13) or die(mysql_error());
$rowmar13=mysqli_fetch_array($recordmar13);

//Senior High School
$sqldept14 = "SELECT * FROM RESERVATION where department='Senior High School' group by department;";
$recorddept14 = mysqli_query($conn, $sqldept14) or die(mysql_error());
$rowdept14=mysqli_fetch_array($recorddept14);
//nov
$sqlnov14 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Senior High School';";
$recordnov14 = mysqli_query($conn, $sqlnov14) or die(mysql_error());
$rownov14=mysqli_fetch_array($recordnov14);
//dec
$sqldec14 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Senior High School';";
$recorddec14 = mysqli_query($conn, $sqldec14) or die(mysql_error());
$rowdec14=mysqli_fetch_array($recorddec14);
//jan
$sqljan14 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Senior High School';";
$recordjan14 = mysqli_query($conn, $sqljan14) or die(mysql_error());
$rowjan14=mysqli_fetch_array($recordjan14);
//feb
$sqlfeb14 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Senior High School';";
$recordfeb14 = mysqli_query($conn, $sqlfeb14) or die(mysql_error());
$rowfeb14=mysqli_fetch_array($recordfeb14);
//mar
$sqlmar14 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Senior High School';";
$recordmar14 = mysqli_query($conn, $sqlmar14) or die(mysql_error());
$rowmar14=mysqli_fetch_array($recordmar14);

//Tourism
$sqldept15 = "SELECT * FROM RESERVATION where department='Tourism' group by department;";
$recorddept15 = mysqli_query($conn, $sqldept15) or die(mysql_error());
$rowdept15=mysqli_fetch_array($recorddept15);
//nov
$sqlnov15 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=11 and year(dates)='$year'  and department='Tourism';";
$recordnov15 = mysqli_query($conn, $sqlnov15) or die(mysql_error());
$rownov15=mysqli_fetch_array($recordnov15);
//dec
$sqldec15 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=12 and year(dates)='$year' and department='Tourism';";
$recorddec15 = mysqli_query($conn, $sqldec15) or die(mysql_error());
$rowdec15=mysqli_fetch_array($recorddec15);
//jan
$sqljan15 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=1 and year(dates)='$year' and department='Tourism';";
$recordjan15 = mysqli_query($conn, $sqljan15) or die(mysql_error());
$rowjan15=mysqli_fetch_array($recordjan15);
//feb
$sqlfeb15 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=2 and year(dates)='$year' and department='Tourism';";
$recordfeb15 = mysqli_query($conn, $sqlfeb15) or die(mysql_error());
$rowfeb15=mysqli_fetch_array($recordfeb15);
//mar
$sqlmar15 = "SELECT COUNT(equipment_id) FROM reservation WHERE month(dates)=3 and year(dates)='$year' and department='Tourism';";
$recordmar15 = mysqli_query($conn, $sqlmar15) or die(mysql_error());
$rowmar15=mysqli_fetch_array($recordmar15);

class PDF extends FPDF
{
function Header()
{
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
    $this->Image('logo.png',10,10,200,60);
    $this->Ln(55);
}
}

$year1=$year+1;
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,10,'2nd Semester Year '.$year.'-'.$year1,0,0,'C');
$pdf->Ln(8);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50, 7, 'Department', 1, 0, 'C');
$pdf->Cell(28, 7, 'nov', 1, 0, 'C');
$pdf->Cell(28, 7, 'dec', 1, 0, 'C');
$pdf->Cell(28, 7, 'jan', 1, 0, 'C');
$pdf->Cell(28, 7, 'feb', 1, 0, 'C');
$pdf->Cell(28, 7, 'mar', 1, 0, 'C');
$pdf->Ln();
//department 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept01["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 2
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept02["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 3
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept03["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 4
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept04["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 5
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept05["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 6
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept06["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 7
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept07["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 8
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept08["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 9
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept09["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 10
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept10["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 11
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept11["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 12
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept12["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 13
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept13["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 14
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept14["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 15
$pdf->SetFont('Arial','',10);
$pdf->Cell(50, 7,$rowdept15["department"], 1, 0, 'C');
$pdf->Cell(28, 7,$rownov15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowdec15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowjan15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowfeb15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(28, 7,$rowmar15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
$pdf->Output();
?>