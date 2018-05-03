<?php
require('fpdf.php');
$conn = new mysqli("localhost", "root", "root", "wbs");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
//Year
$year=$_POST['year'];
$sem=$_POST['sem'];
$eqpt=$_POST['equip'];
if($sem=='First Sem'){
//Business Ad.
$sqldept01 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Business Ad.' group by department;";
$recorddept01 = mysqli_query($conn, $sqldept01) or die(mysql_error());
$rowdept01=mysqli_fetch_array($recorddept01);
//June
$sqljune01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Business Ad.';";
$recordjune01 = mysqli_query($conn, $sqljune01) or die(mysql_error());
$rowjune01=mysqli_fetch_array($recordjune01);
//July
$sqljuly01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Business Ad.';";
$recordjuly01 = mysqli_query($conn, $sqljuly01) or die(mysql_error());
$rowjuly01=mysqli_fetch_array($recordjuly01);
//August
$sqlaugust01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Business Ad.';";
$recordaugust01 = mysqli_query($conn, $sqlaugust01) or die(mysql_error());
$rowaugust01=mysqli_fetch_array($recordaugust01);
//September
$sqlseptember01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Business Ad.';";
$recordseptember01 = mysqli_query($conn, $sqlseptember01) or die(mysql_error());
$rowseptember01=mysqli_fetch_array($recordseptember01);
//October
$sqloctober01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Business Ad.';";
$recordoctober01 = mysqli_query($conn, $sqloctober01) or die(mysql_error());
$rowoctober01=mysqli_fetch_array($recordoctober01);

//CEIS
$sqldept02 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='CEIS' group by department;";
$recorddept02 = mysqli_query($conn, $sqldept02) or die(mysql_error());
$rowdept02=mysqli_fetch_array($recorddept02);
//June
$sqljune02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='CEIS';";
$recordjune02 = mysqli_query($conn, $sqljune02) or die(mysql_error());
$rowjune02=mysqli_fetch_array($recordjune02);
//July
$sqljuly02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='CEIS';";
$recordjuly02 = mysqli_query($conn, $sqljuly02) or die(mysql_error());
$rowjuly02=mysqli_fetch_array($recordjuly02);
//August
$sqlaugust02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='CEIS';";
$recordaugust02 = mysqli_query($conn, $sqlaugust02) or die(mysql_error());
$rowaugust02=mysqli_fetch_array($recordaugust02);
//September
$sqlseptember02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='CEIS';";
$recordseptember02 = mysqli_query($conn, $sqlseptember02) or die(mysql_error());
$rowseptember02=mysqli_fetch_array($recordseptember02);
//October
$sqloctober02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='CEIS';";
$recordoctober02 = mysqli_query($conn, $sqloctober02) or die(mysql_error());
$rowoctober02=mysqli_fetch_array($recordoctober02);

//CSIT
$sqldept03 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='CSIT' group by department;";
$recorddept03 = mysqli_query($conn, $sqldept03) or die(mysql_error());
$rowdept03=mysqli_fetch_array($recorddept03);
//June
$sqljune03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='CSIT';";
$recordjune03 = mysqli_query($conn, $sqljune03) or die(mysql_error());
$rowjune03=mysqli_fetch_array($recordjune03);
//July
$sqljuly03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='CSIT';";
$recordjuly03 = mysqli_query($conn, $sqljuly03) or die(mysql_error());
$rowjuly03=mysqli_fetch_array($recordjuly03);
//August
$sqlaugust03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='CSIT';";
$recordaugust03 = mysqli_query($conn, $sqlaugust03) or die(mysql_error());
$rowaugust03=mysqli_fetch_array($recordaugust03);
//September
$sqlseptember03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='CSIT';";
$recordseptember03 = mysqli_query($conn, $sqlseptember03) or die(mysql_error());
$rowseptember03=mysqli_fetch_array($recordseptember03);
//October
$sqloctober03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='CSIT';";
$recordoctober03 = mysqli_query($conn, $sqloctober03) or die(mysql_error());
$rowoctober03=mysqli_fetch_array($recordoctober03);

//Dentistry
$sqldept04 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Dentistry' group by department;";
$recorddept04 = mysqli_query($conn, $sqldept04) or die(mysql_error());
$rowdept04=mysqli_fetch_array($recorddept04);
//June
$sqljune04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Dentistry';";
$recordjune04 = mysqli_query($conn, $sqljune04) or die(mysql_error());
$rowjune04=mysqli_fetch_array($recordjune04);
//July
$sqljuly04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Dentistry';";
$recordjuly04 = mysqli_query($conn, $sqljuly04) or die(mysql_error());
$rowjuly04=mysqli_fetch_array($recordjuly04);
//August
$sqlaugust04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Dentistry';";
$recordaugust04 = mysqli_query($conn, $sqlaugust04) or die(mysql_error());
$rowaugust04=mysqli_fetch_array($recordaugust04);
//September
$sqlseptember04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Dentistry';";
$recordseptember04 = mysqli_query($conn, $sqlseptember04) or die(mysql_error());
$rowseptember04=mysqli_fetch_array($recordseptember04);
//October
$sqloctober04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Dentistry';";
$recordoctober04 = mysqli_query($conn, $sqloctober04) or die(mysql_error());
$rowoctober04=mysqli_fetch_array($recordoctober04);

//General Education
$sqldept05 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='General Education' group by department;";
$recorddept05 = mysqli_query($conn, $sqldept05) or die(mysql_error());
$rowdept05=mysqli_fetch_array($recorddept05);
//June
$sqljune05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='General Education';";
$recordjune05 = mysqli_query($conn, $sqljune05) or die(mysql_error());
$rowjune05=mysqli_fetch_array($recordjune05);
//July
$sqljuly05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='General Education';";
$recordjuly05 = mysqli_query($conn, $sqljuly05) or die(mysql_error());
$rowjuly05=mysqli_fetch_array($recordjuly05);
//August
$sqlaugust05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='General Education';";
$recordaugust05 = mysqli_query($conn, $sqlaugust05) or die(mysql_error());
$rowaugust05=mysqli_fetch_array($recordaugust05);
//September
$sqlseptember05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='General Education';";
$recordseptember05 = mysqli_query($conn, $sqlseptember05) or die(mysql_error());
$rowseptember05=mysqli_fetch_array($recordseptember05);
//October
$sqloctober05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='General Education';";
$recordoctober05 = mysqli_query($conn, $sqloctober05) or die(mysql_error());
$rowoctober05=mysqli_fetch_array($recordoctober05);

//Graduate School
$sqldept06 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Graduate School' group by department;";
$recorddept06 = mysqli_query($conn, $sqldept06) or die(mysql_error());
$rowdept06=mysqli_fetch_array($recorddept06);
//June
$sqljune06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Graduate School';";
$recordjune06 = mysqli_query($conn, $sqljune06) or die(mysql_error());
$rowjune06=mysqli_fetch_array($recordjune06);
//July
$sqljuly06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Graduate School';";
$recordjuly06 = mysqli_query($conn, $sqljuly06) or die(mysql_error());
$rowjuly06=mysqli_fetch_array($recordjuly06);
//August
$sqlaugust06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Graduate School';";
$recordaugust06 = mysqli_query($conn, $sqlaugust06) or die(mysql_error());
$rowaugust06=mysqli_fetch_array($recordaugust06);
//September
$sqlseptember06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Graduate School';";
$recordseptember06 = mysqli_query($conn, $sqlseptember06) or die(mysql_error());
$rowseptember06=mysqli_fetch_array($recordseptember06);
//October
$sqloctober06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Graduate School';";
$recordoctober06 = mysqli_query($conn, $sqloctober06) or die(mysql_error());
$rowoctober06=mysqli_fetch_array($recordoctober06);

//HRM
$sqldept07 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='HRM' group by department;";
$recorddept07 = mysqli_query($conn, $sqldept07) or die(mysql_error());
$rowdept07=mysqli_fetch_array($recorddept07);
//June
$sqljune07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='HRM';";
$recordjune07 = mysqli_query($conn, $sqljune07) or die(mysql_error());
$rowjune07=mysqli_fetch_array($recordjune07);
//July
$sqljuly07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='HRM';";
$recordjuly07 = mysqli_query($conn, $sqljuly07) or die(mysql_error());
$rowjuly07=mysqli_fetch_array($recordjuly07);
//August
$sqlaugust07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='HRM';";
$recordaugust07 = mysqli_query($conn, $sqlaugust07) or die(mysql_error());
$rowaugust07=mysqli_fetch_array($recordaugust07);
//September
$sqlseptember07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='HRM';";
$recordseptember07 = mysqli_query($conn, $sqlseptember07) or die(mysql_error());
$rowseptember07=mysqli_fetch_array($recordseptember07);
//October
$sqloctober07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='HRM';";
$recordoctober07 = mysqli_query($conn, $sqloctober07) or die(mysql_error());
$rowoctober07=mysqli_fetch_array($recordoctober07);

//Med. Tech
$sqldept08 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Med. Tech' group by department;";
$recorddept08 = mysqli_query($conn, $sqldept08) or die(mysql_error());
$rowdept08=mysqli_fetch_array($recorddept08);
//June
$sqljune08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Med. Tech';";
$recordjune08 = mysqli_query($conn, $sqljune08) or die(mysql_error());
$rowjune08=mysqli_fetch_array($recordjune08);
//July
$sqljuly08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Med. Tech';";
$recordjuly08 = mysqli_query($conn, $sqljuly08) or die(mysql_error());
$rowjuly08=mysqli_fetch_array($recordjuly08);
//August
$sqlaugust08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Med. Tech';";
$recordaugust08 = mysqli_query($conn, $sqlaugust08) or die(mysql_error());
$rowaugust08=mysqli_fetch_array($recordaugust08);
//September
$sqlseptember08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Med. Tech';";
$recordseptember08 = mysqli_query($conn, $sqlseptember08) or die(mysql_error());
$rowseptember08=mysqli_fetch_array($recordseptember08);
//October
$sqloctober08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Med. Tech';";
$recordoctober08 = mysqli_query($conn, $sqloctober08) or die(mysql_error());
$rowoctober08=mysqli_fetch_array($recordoctober08);

//Non-Academic
$sqldept09 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Non-Academic' group by department;";
$recorddept09 = mysqli_query($conn, $sqldept09) or die(mysql_error());
$rowdept09=mysqli_fetch_array($recorddept09);
//June
$sqljune09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Non-Academic';";
$recordjune09 = mysqli_query($conn, $sqljune09) or die(mysql_error());
$rowjune09=mysqli_fetch_array($recordjune09);
//July
$sqljuly09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Non-Academic';";
$recordjuly09 = mysqli_query($conn, $sqljuly09) or die(mysql_error());
$rowjuly09=mysqli_fetch_array($recordjuly09);
//August
$sqlaugust09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Non-Academic';";
$recordaugust09 = mysqli_query($conn, $sqlaugust09) or die(mysql_error());
$rowaugust09=mysqli_fetch_array($recordaugust09);
//September
$sqlseptember09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Non-Academic';";
$recordseptember09 = mysqli_query($conn, $sqlseptember09) or die(mysql_error());
$rowseptember09=mysqli_fetch_array($recordseptember09);
//October
$sqloctober09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Non-Academic';";
$recordoctober09 = mysqli_query($conn, $sqloctober09) or die(mysql_error());
$rowoctober09=mysqli_fetch_array($recordoctober09);

//Nursing
$sqldept10 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Nursing' group by department;";
$recorddept10 = mysqli_query($conn, $sqldept10) or die(mysql_error());
$rowdept10=mysqli_fetch_array($recorddept10);
//June
$sqljune10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Nursing';";
$recordjune10 = mysqli_query($conn, $sqljune10) or die(mysql_error());
$rowjune10=mysqli_fetch_array($recordjune10);
//July
$sqljuly10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Nursing';";
$recordjuly10 = mysqli_query($conn, $sqljuly10) or die(mysql_error());
$rowjuly10=mysqli_fetch_array($recordjuly10);
//August
$sqlaugust10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Nursing';";
$recordaugust10 = mysqli_query($conn, $sqlaugust10) or die(mysql_error());
$rowaugust10=mysqli_fetch_array($recordaugust10);
//September
$sqlseptember10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Nursing';";
$recordseptember10 = mysqli_query($conn, $sqlseptember10) or die(mysql_error());
$rowseptember10=mysqli_fetch_array($recordseptember10);
//October
$sqloctober10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Nursing';";
$recordoctober10 = mysqli_query($conn, $sqloctober10) or die(mysql_error());
$rowoctober10=mysqli_fetch_array($recordoctober10);

//Pharmacy
$sqldept11 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Pharmacy' group by department;";
$recorddept11 = mysqli_query($conn, $sqldept11) or die(mysql_error());
$rowdept11=mysqli_fetch_array($recorddept11);
//June
$sqljune11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Pharmacy';";
$recordjune11 = mysqli_query($conn, $sqljune11) or die(mysql_error());
$rowjune11=mysqli_fetch_array($recordjune11);
//July
$sqljuly11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Pharmacy';";
$recordjuly11 = mysqli_query($conn, $sqljuly11) or die(mysql_error());
$rowjuly11=mysqli_fetch_array($recordjuly11);
//August
$sqlaugust11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Pharmacy';";
$recordaugust11 = mysqli_query($conn, $sqlaugust11) or die(mysql_error());
$rowaugust11=mysqli_fetch_array($recordaugust11);
//September
$sqlseptember11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Pharmacy';";
$recordseptember11 = mysqli_query($conn, $sqlseptember11) or die(mysql_error());
$rowseptember11=mysqli_fetch_array($recordseptember11);
//October
$sqloctober11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Pharmacy';";
$recordoctober11 = mysqli_query($conn, $sqloctober11) or die(mysql_error());
$rowoctober11=mysqli_fetch_array($recordoctober11);

//Psychology
$sqldept12 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Psychology' group by department;";
$recorddept12 = mysqli_query($conn, $sqldept12) or die(mysql_error());
$rowdept12=mysqli_fetch_array($recorddept12);
//June
$sqljune12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Psychology';";
$recordjune12 = mysqli_query($conn, $sqljune12) or die(mysql_error());
$rowjune12=mysqli_fetch_array($recordjune12);
//July
$sqljuly12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Psychology';";
$recordjuly12 = mysqli_query($conn, $sqljuly12) or die(mysql_error());
$rowjuly12=mysqli_fetch_array($recordjuly12);
//August
$sqlaugust12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Psychology';";
$recordaugust12 = mysqli_query($conn, $sqlaugust12) or die(mysql_error());
$rowaugust12=mysqli_fetch_array($recordaugust12);
//September
$sqlseptember12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Psychology';";
$recordseptember12 = mysqli_query($conn, $sqlseptember12) or die(mysql_error());
$rowseptember12=mysqli_fetch_array($recordseptember12);
//October
$sqloctober12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Psychology';";
$recordoctober12 = mysqli_query($conn, $sqloctober12) or die(mysql_error());
$rowoctober12=mysqli_fetch_array($recordoctober12);

//School of Law
$sqldept13 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='School of Law' group by department;";
$recorddept13 = mysqli_query($conn, $sqldept13) or die(mysql_error());
$rowdept13=mysqli_fetch_array($recorddept13);
//June
$sqljune13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='School of Law';";
$recordjune13 = mysqli_query($conn, $sqljune13) or die(mysql_error());
$rowjune13=mysqli_fetch_array($recordjune13);
//July
$sqljuly13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='School of Law';";
$recordjuly13 = mysqli_query($conn, $sqljuly13) or die(mysql_error());
$rowjuly13=mysqli_fetch_array($recordjuly13);
//August
$sqlaugust13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='School of Law';";
$recordaugust13 = mysqli_query($conn, $sqlaugust13) or die(mysql_error());
$rowaugust13=mysqli_fetch_array($recordaugust13);
//September
$sqlseptember13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='School of Law';";
$recordseptember13 = mysqli_query($conn, $sqlseptember13) or die(mysql_error());
$rowseptember13=mysqli_fetch_array($recordseptember13);
//October
$sqloctober13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='School of Law';";
$recordoctober13 = mysqli_query($conn, $sqloctober13) or die(mysql_error());
$rowoctober13=mysqli_fetch_array($recordoctober13);

//Senior High School
$sqldept14 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Senior High School' group by department;";
$recorddept14 = mysqli_query($conn, $sqldept14) or die(mysql_error());
$rowdept14=mysqli_fetch_array($recorddept14);
//June
$sqljune14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Senior High School';";
$recordjune14 = mysqli_query($conn, $sqljune14) or die(mysql_error());
$rowjune14=mysqli_fetch_array($recordjune14);
//July
$sqljuly14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Senior High School';";
$recordjuly14 = mysqli_query($conn, $sqljuly14) or die(mysql_error());
$rowjuly14=mysqli_fetch_array($recordjuly14);
//August
$sqlaugust14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Senior High School';";
$recordaugust14 = mysqli_query($conn, $sqlaugust14) or die(mysql_error());
$rowaugust14=mysqli_fetch_array($recordaugust14);
//September
$sqlseptember14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Senior High School';";
$recordseptember14 = mysqli_query($conn, $sqlseptember14) or die(mysql_error());
$rowseptember14=mysqli_fetch_array($recordseptember14);
//October
$sqloctober14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Senior High School';";
$recordoctober14 = mysqli_query($conn, $sqloctober14) or die(mysql_error());
$rowoctober14=mysqli_fetch_array($recordoctober14);

//Tourism
$sqldept15 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Tourism' group by department;";
$recorddept15 = mysqli_query($conn, $sqldept15) or die(mysql_error());
$rowdept15=mysqli_fetch_array($recorddept15);
//June
$sqljune15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=6 and year(dates)='$year'  and department='Tourism';";
$recordjune15 = mysqli_query($conn, $sqljune15) or die(mysql_error());
$rowjune15=mysqli_fetch_array($recordjune15);
//July
$sqljuly15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=7 and year(dates)='$year' and department='Tourism';";
$recordjuly15 = mysqli_query($conn, $sqljuly15) or die(mysql_error());
$rowjuly15=mysqli_fetch_array($recordjuly15);
//August
$sqlaugust15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=8 and year(dates)='$year' and department='Tourism';";
$recordaugust15 = mysqli_query($conn, $sqlaugust15) or die(mysql_error());
$rowaugust15=mysqli_fetch_array($recordaugust15);
//September
$sqlseptember15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=9 and year(dates)='$year' and department='Tourism';";
$recordseptember15 = mysqli_query($conn, $sqlseptember15) or die(mysql_error());
$rowseptember15=mysqli_fetch_array($recordseptember15);
//October
$sqloctober15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=10 and year(dates)='$year' and department='Tourism';";
$recordoctober15 = mysqli_query($conn, $sqloctober15) or die(mysql_error());
$rowoctober15=mysqli_fetch_array($recordoctober15);

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
$connect = mysqli_connect("localhost", "root", "root", "wbs");  
 $query ="SELECT * FROM equipment where eqid='$eqpt'";  
 $result = mysqli_query($connect, $query);  
 $name=mysqli_fetch_array($result);
 
$year1=$year+1;
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,10,'1st Semester Year '.$year.'-'.$year1,0,0,'C');
$pdf->Ln(15);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,10,$name['eqtype'],0,0,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40, 7, 'Department', 1, 0, 'C');
$pdf->Cell(25, 7, 'June', 1, 0, 'C');
$pdf->Cell(25, 7, 'July', 1, 0, 'C');
$pdf->Cell(25, 7, 'August', 1, 0, 'C');
$pdf->Cell(25, 7, 'September', 1, 0, 'C');
$pdf->Cell(25, 7, 'October', 1, 0, 'C');
$pdf->cell(25, 7, 'Total', 1, 0, 'C');
$pdf->Ln();
//department 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Business Ad.', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune01["COUNT(equipment_id)"]+$rowjuly01["COUNT(equipment_id)"]+$rowaugust01["COUNT(equipment_id)"]+$rowseptember01["COUNT(equipment_id)"]+$rowoctober01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 2
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'CEIS', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune02["COUNT(equipment_id)"]+$rowjuly02["COUNT(equipment_id)"]+$rowaugust02["COUNT(equipment_id)"]+$rowseptember02["COUNT(equipment_id)"]+$rowoctober02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 3
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'CSIT', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune03["COUNT(equipment_id)"]+$rowjuly03["COUNT(equipment_id)"]+$rowaugust03["COUNT(equipment_id)"]+$rowseptember03["COUNT(equipment_id)"]+$rowoctober03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 4
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Dentistry', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune04["COUNT(equipment_id)"]+$rowjuly04["COUNT(equipment_id)"]+$rowaugust04["COUNT(equipment_id)"]+$rowseptember04["COUNT(equipment_id)"]+$rowoctober04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 5
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'General Education', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune05["COUNT(equipment_id)"]+$rowjuly05["COUNT(equipment_id)"]+$rowaugust05["COUNT(equipment_id)"]+$rowseptember05["COUNT(equipment_id)"]+$rowoctober05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 6
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Graduate School', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune06["COUNT(equipment_id)"]+$rowjuly06["COUNT(equipment_id)"]+$rowaugust06["COUNT(equipment_id)"]+$rowseptember06["COUNT(equipment_id)"]+$rowoctober06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 7
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'HRM', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune07["COUNT(equipment_id)"]+$rowjuly07["COUNT(equipment_id)"]+$rowaugust07["COUNT(equipment_id)"]+$rowseptember07["COUNT(equipment_id)"]+$rowoctober07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 8
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Med. Tech', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune08["COUNT(equipment_id)"]+$rowjuly08["COUNT(equipment_id)"]+$rowaugust08["COUNT(equipment_id)"]+$rowseptember08["COUNT(equipment_id)"]+$rowoctober08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 9
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Non-Academic', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune09["COUNT(equipment_id)"]+$rowjuly09["COUNT(equipment_id)"]+$rowaugust09["COUNT(equipment_id)"]+$rowseptember09["COUNT(equipment_id)"]+$rowoctober09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 10
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Nursing', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune10["COUNT(equipment_id)"]+$rowjuly10["COUNT(equipment_id)"]+$rowaugust10["COUNT(equipment_id)"]+$rowseptember10["COUNT(equipment_id)"]+$rowoctober10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 11
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Pharmacy', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune11["COUNT(equipment_id)"]+$rowjuly11["COUNT(equipment_id)"]+$rowaugust11["COUNT(equipment_id)"]+$rowseptember11["COUNT(equipment_id)"]+$rowoctober11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 12
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Psychology', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune12["COUNT(equipment_id)"]+$rowjuly12["COUNT(equipment_id)"]+$rowaugust12["COUNT(equipment_id)"]+$rowseptember12["COUNT(equipment_id)"]+$rowoctober12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 13
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'School of Law', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune13["COUNT(equipment_id)"]+$rowjuly13["COUNT(equipment_id)"]+$rowaugust13["COUNT(equipment_id)"]+$rowseptember13["COUNT(equipment_id)"]+$rowoctober13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 14
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Senior High School', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune14["COUNT(equipment_id)"]+$rowjuly14["COUNT(equipment_id)"]+$rowaugust14["COUNT(equipment_id)"]+$rowseptember14["COUNT(equipment_id)"]+$rowoctober14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 15
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Tourism', 1, 0, 'C');
$pdf->Cell(25, 7,$rowjune15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjuly15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowaugust15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowseptember15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowoctober15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rowjune15["COUNT(equipment_id)"]+$rowjuly15["COUNT(equipment_id)"]+$rowaugust15["COUNT(equipment_id)"]+$rowseptember15["COUNT(equipment_id)"]+$rowoctober15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//total
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40, 7,'Total', 1, 0 ,'C');
//june
$pdf->cell(25, 7,$rowjune01["COUNT(equipment_id)"]+$rowjune02["COUNT(equipment_id)"]+$rowjune03["COUNT(equipment_id)"]+$rowjune04["COUNT(equipment_id)"]+$rowjune05["COUNT(equipment_id)"]+$rowjune06["COUNT(equipment_id)"]+$rowjune07["COUNT(equipment_id)"]+$rowjune08["COUNT(equipment_id)"]+$rowjune09["COUNT(equipment_id)"]+$rowjune10["COUNT(equipment_id)"]+$rowjune11["COUNT(equipment_id)"]+$rowjune12["COUNT(equipment_id)"]+$rowjune13["COUNT(equipment_id)"]+$rowjune14["COUNT(equipment_id)"]+$rowjune15["COUNT(equipment_id)"], 1, 0, 'C');
//july
$pdf->cell(25, 7,$rowjuly01["COUNT(equipment_id)"]+$rowjuly02["COUNT(equipment_id)"]+$rowjuly03["COUNT(equipment_id)"]+$rowjuly04["COUNT(equipment_id)"]+$rowjuly05["COUNT(equipment_id)"]+$rowjuly06["COUNT(equipment_id)"]+$rowjuly07["COUNT(equipment_id)"]+$rowjuly08["COUNT(equipment_id)"]+$rowjuly09["COUNT(equipment_id)"]+$rowjuly10["COUNT(equipment_id)"]+$rowjuly11["COUNT(equipment_id)"]+$rowjuly12["COUNT(equipment_id)"]+$rowjuly13["COUNT(equipment_id)"]+$rowjuly14["COUNT(equipment_id)"]+$rowjuly15["COUNT(equipment_id)"], 1, 0, 'C');
//august
$pdf->cell(25, 7,$rowaugust01["COUNT(equipment_id)"]+$rowaugust02["COUNT(equipment_id)"]+$rowaugust03["COUNT(equipment_id)"]+$rowaugust04["COUNT(equipment_id)"]+$rowaugust05["COUNT(equipment_id)"]+$rowaugust06["COUNT(equipment_id)"]+$rowaugust07["COUNT(equipment_id)"]+$rowaugust08["COUNT(equipment_id)"]+$rowaugust09["COUNT(equipment_id)"]+$rowaugust10["COUNT(equipment_id)"]+$rowaugust11["COUNT(equipment_id)"]+$rowaugust12["COUNT(equipment_id)"]+$rowaugust13["COUNT(equipment_id)"]+$rowaugust14["COUNT(equipment_id)"]+$rowaugust15["COUNT(equipment_id)"], 1, 0, 'C');
//september
$pdf->cell(25, 7,$rowseptember01["COUNT(equipment_id)"]+$rowseptember02["COUNT(equipment_id)"]+$rowseptember03["COUNT(equipment_id)"]+$rowseptember04["COUNT(equipment_id)"]+$rowseptember05["COUNT(equipment_id)"]+$rowseptember06["COUNT(equipment_id)"]+$rowseptember07["COUNT(equipment_id)"]+$rowseptember08["COUNT(equipment_id)"]+$rowseptember09["COUNT(equipment_id)"]+$rowseptember10["COUNT(equipment_id)"]+$rowseptember11["COUNT(equipment_id)"]+$rowseptember12["COUNT(equipment_id)"]+$rowseptember13["COUNT(equipment_id)"]+$rowseptember14["COUNT(equipment_id)"]+$rowseptember15["COUNT(equipment_id)"], 1, 0, 'C');
//october
$pdf->cell(25, 7,$rowoctober01["COUNT(equipment_id)"]+$rowoctober02["COUNT(equipment_id)"]+$rowoctober03["COUNT(equipment_id)"]+$rowoctober04["COUNT(equipment_id)"]+$rowoctober05["COUNT(equipment_id)"]+$rowoctober06["COUNT(equipment_id)"]+$rowoctober07["COUNT(equipment_id)"]+$rowoctober08["COUNT(equipment_id)"]+$rowoctober09["COUNT(equipment_id)"]+$rowoctober10["COUNT(equipment_id)"]+$rowoctober11["COUNT(equipment_id)"]+$rowoctober12["COUNT(equipment_id)"]+$rowoctober13["COUNT(equipment_id)"]+$rowoctober14["COUNT(equipment_id)"]+$rowoctober15["COUNT(equipment_id)"], 1, 0, 'C');
//total
$pdf->cell(25, 7,$rowjune01["COUNT(equipment_id)"]+$rowjune02["COUNT(equipment_id)"]+$rowjune03["COUNT(equipment_id)"]+$rowjune04["COUNT(equipment_id)"]+$rowjune05["COUNT(equipment_id)"]+$rowjune06["COUNT(equipment_id)"]+$rowjune07["COUNT(equipment_id)"]+$rowjune08["COUNT(equipment_id)"]+$rowjune09["COUNT(equipment_id)"]+$rowjune10["COUNT(equipment_id)"]+$rowjune11["COUNT(equipment_id)"]+$rowjune12["COUNT(equipment_id)"]+$rowjune13["COUNT(equipment_id)"]+$rowjune14["COUNT(equipment_id)"]+$rowjune15["COUNT(equipment_id)"]+$rowjuly01["COUNT(equipment_id)"]+$rowjuly02["COUNT(equipment_id)"]+$rowjuly03["COUNT(equipment_id)"]+$rowjuly04["COUNT(equipment_id)"]+$rowjuly05["COUNT(equipment_id)"]+$rowjuly06["COUNT(equipment_id)"]+$rowjuly07["COUNT(equipment_id)"]+$rowjuly08["COUNT(equipment_id)"]+$rowjuly09["COUNT(equipment_id)"]+$rowjuly10["COUNT(equipment_id)"]+$rowjuly11["COUNT(equipment_id)"]+$rowjuly12["COUNT(equipment_id)"]+$rowjuly13["COUNT(equipment_id)"]+$rowjuly14["COUNT(equipment_id)"]+$rowjuly15["COUNT(equipment_id)"]+$rowaugust01["COUNT(equipment_id)"]+$rowaugust02["COUNT(equipment_id)"]+$rowaugust03["COUNT(equipment_id)"]+$rowaugust04["COUNT(equipment_id)"]+$rowaugust05["COUNT(equipment_id)"]+$rowaugust06["COUNT(equipment_id)"]+$rowaugust07["COUNT(equipment_id)"]+$rowaugust08["COUNT(equipment_id)"]+$rowaugust09["COUNT(equipment_id)"]+$rowaugust10["COUNT(equipment_id)"]+$rowaugust11["COUNT(equipment_id)"]+$rowaugust12["COUNT(equipment_id)"]+$rowaugust13["COUNT(equipment_id)"]+$rowaugust14["COUNT(equipment_id)"]+$rowaugust15["COUNT(equipment_id)"]+$rowseptember01["COUNT(equipment_id)"]+$rowseptember02["COUNT(equipment_id)"]+$rowseptember03["COUNT(equipment_id)"]+$rowseptember04["COUNT(equipment_id)"]+$rowseptember05["COUNT(equipment_id)"]+$rowseptember06["COUNT(equipment_id)"]+$rowseptember07["COUNT(equipment_id)"]+$rowseptember08["COUNT(equipment_id)"]+$rowseptember09["COUNT(equipment_id)"]+$rowseptember10["COUNT(equipment_id)"]+$rowseptember11["COUNT(equipment_id)"]+$rowseptember12["COUNT(equipment_id)"]+$rowseptember13["COUNT(equipment_id)"]+$rowseptember14["COUNT(equipment_id)"]+$rowseptember15["COUNT(equipment_id)"]+$rowoctober01["COUNT(equipment_id)"]+$rowoctober02["COUNT(equipment_id)"]+$rowoctober03["COUNT(equipment_id)"]+$rowoctober04["COUNT(equipment_id)"]+$rowoctober05["COUNT(equipment_id)"]+$rowoctober06["COUNT(equipment_id)"]+$rowoctober07["COUNT(equipment_id)"]+$rowoctober08["COUNT(equipment_id)"]+$rowoctober09["COUNT(equipment_id)"]+$rowoctober10["COUNT(equipment_id)"]+$rowoctober11["COUNT(equipment_id)"]+$rowoctober12["COUNT(equipment_id)"]+$rowoctober13["COUNT(equipment_id)"]+$rowoctober14["COUNT(equipment_id)"]+$rowoctober15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Output();}

//SECOND SEM
elseif($sem=="Second Sem"){
//Business Ad.
$sqldept01 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Business Ad.' group by department;";
$recorddept01 = mysqli_query($conn, $sqldept01) or die(mysql_error());
$rowdept01=mysqli_fetch_array($recorddept01);
//nov
$sqlnov01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Business Ad.';";
$recordnov01 = mysqli_query($conn, $sqlnov01) or die(mysql_error());
$rownov01=mysqli_fetch_array($recordnov01);
//dec
$sqldec01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Business Ad.';";
$recorddec01 = mysqli_query($conn, $sqldec01) or die(mysql_error());
$rowdec01=mysqli_fetch_array($recorddec01);
//jan
$sqljan01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Business Ad.';";
$recordjan01 = mysqli_query($conn, $sqljan01) or die(mysql_error());
$rowjan01=mysqli_fetch_array($recordjan01);
//feb
$sqlfeb01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Business Ad.';";
$recordfeb01 = mysqli_query($conn, $sqlfeb01) or die(mysql_error());
$rowfeb01=mysqli_fetch_array($recordfeb01);
//mar
$sqlmar01 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Business Ad.';";
$recordmar01 = mysqli_query($conn, $sqlmar01) or die(mysql_error());
$rowmar01=mysqli_fetch_array($recordmar01);

//CEIS
$sqldept02 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='CEIS' group by department;";
$recorddept02 = mysqli_query($conn, $sqldept02) or die(mysql_error());
$rowdept02=mysqli_fetch_array($recorddept02);
//nov
$sqlnov02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='CEIS';";
$recordnov02 = mysqli_query($conn, $sqlnov02) or die(mysql_error());
$rownov02=mysqli_fetch_array($recordnov02);
//dec
$sqldec02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='CEIS';";
$recorddec02 = mysqli_query($conn, $sqldec02) or die(mysql_error());
$rowdec02=mysqli_fetch_array($recorddec02);
//jan
$sqljan02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='CEIS';";
$recordjan02 = mysqli_query($conn, $sqljan02) or die(mysql_error());
$rowjan02=mysqli_fetch_array($recordjan02);
//feb
$sqlfeb02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='CEIS';";
$recordfeb02 = mysqli_query($conn, $sqlfeb02) or die(mysql_error());
$rowfeb02=mysqli_fetch_array($recordfeb02);
//mar
$sqlmar02 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='CEIS';";
$recordmar02 = mysqli_query($conn, $sqlmar02) or die(mysql_error());
$rowmar02=mysqli_fetch_array($recordmar02);

//CSIT
$sqldept03 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='CSIT' group by department;";
$recorddept03 = mysqli_query($conn, $sqldept03) or die(mysql_error());
$rowdept03=mysqli_fetch_array($recorddept03);
//nov
$sqlnov03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='CSIT';";
$recordnov03 = mysqli_query($conn, $sqlnov03) or die(mysql_error());
$rownov03=mysqli_fetch_array($recordnov03);
//dec
$sqldec03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='CSIT';";
$recorddec03 = mysqli_query($conn, $sqldec03) or die(mysql_error());
$rowdec03=mysqli_fetch_array($recorddec03);
//jan
$sqljan03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='CSIT';";
$recordjan03 = mysqli_query($conn, $sqljan03) or die(mysql_error());
$rowjan03=mysqli_fetch_array($recordjan03);
//feb
$sqlfeb03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='CSIT';";
$recordfeb03 = mysqli_query($conn, $sqlfeb03) or die(mysql_error());
$rowfeb03=mysqli_fetch_array($recordfeb03);
//mar
$sqlmar03 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='CSIT';";
$recordmar03 = mysqli_query($conn, $sqlmar03) or die(mysql_error());
$rowmar03=mysqli_fetch_array($recordmar03);

//Dentistry
$sqldept04 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Dentistry' group by department;";
$recorddept04 = mysqli_query($conn, $sqldept04) or die(mysql_error());
$rowdept04=mysqli_fetch_array($recorddept04);
//nov
$sqlnov04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Dentistry';";
$recordnov04 = mysqli_query($conn, $sqlnov04) or die(mysql_error());
$rownov04=mysqli_fetch_array($recordnov04);
//dec
$sqldec04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Dentistry';";
$recorddec04 = mysqli_query($conn, $sqldec04) or die(mysql_error());
$rowdec04=mysqli_fetch_array($recorddec04);
//jan
$sqljan04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Dentistry';";
$recordjan04 = mysqli_query($conn, $sqljan04) or die(mysql_error());
$rowjan04=mysqli_fetch_array($recordjan04);
//feb
$sqlfeb04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Dentistry';";
$recordfeb04 = mysqli_query($conn, $sqlfeb04) or die(mysql_error());
$rowfeb04=mysqli_fetch_array($recordfeb04);
//mar
$sqlmar04 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Dentistry';";
$recordmar04 = mysqli_query($conn, $sqlmar04) or die(mysql_error());
$rowmar04=mysqli_fetch_array($recordmar04);

//General Education
$sqldept05 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='General Education' group by department;";
$recorddept05 = mysqli_query($conn, $sqldept05) or die(mysql_error());
$rowdept05=mysqli_fetch_array($recorddept05);
//nov
$sqlnov05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='General Education';";
$recordnov05 = mysqli_query($conn, $sqlnov05) or die(mysql_error());
$rownov05=mysqli_fetch_array($recordnov05);
//dec
$sqldec05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='General Education';";
$recorddec05 = mysqli_query($conn, $sqldec05) or die(mysql_error());
$rowdec05=mysqli_fetch_array($recorddec05);
//jan
$sqljan05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='General Education';";
$recordjan05 = mysqli_query($conn, $sqljan05) or die(mysql_error());
$rowjan05=mysqli_fetch_array($recordjan05);
//feb
$sqlfeb05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='General Education';";
$recordfeb05 = mysqli_query($conn, $sqlfeb05) or die(mysql_error());
$rowfeb05=mysqli_fetch_array($recordfeb05);
//mar
$sqlmar05 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='General Education';";
$recordmar05 = mysqli_query($conn, $sqlmar05) or die(mysql_error());
$rowmar05=mysqli_fetch_array($recordmar05);

//Graduate School
$sqldept06 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Graduate School' group by department;";
$recorddept06 = mysqli_query($conn, $sqldept06) or die(mysql_error());
$rowdept06=mysqli_fetch_array($recorddept06);
//nov
$sqlnov06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Graduate School';";
$recordnov06 = mysqli_query($conn, $sqlnov06) or die(mysql_error());
$rownov06=mysqli_fetch_array($recordnov06);
//dec
$sqldec06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Graduate School';";
$recorddec06 = mysqli_query($conn, $sqldec06) or die(mysql_error());
$rowdec06=mysqli_fetch_array($recorddec06);
//jan
$sqljan06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Graduate School';";
$recordjan06 = mysqli_query($conn, $sqljan06) or die(mysql_error());
$rowjan06=mysqli_fetch_array($recordjan06);
//feb
$sqlfeb06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Graduate School';";
$recordfeb06 = mysqli_query($conn, $sqlfeb06) or die(mysql_error());
$rowfeb06=mysqli_fetch_array($recordfeb06);
//mar
$sqlmar06 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Graduate School';";
$recordmar06 = mysqli_query($conn, $sqlmar06) or die(mysql_error());
$rowmar06=mysqli_fetch_array($recordmar06);

//HRM
$sqldept07 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='HRM' group by department;";
$recorddept07 = mysqli_query($conn, $sqldept07) or die(mysql_error());
$rowdept07=mysqli_fetch_array($recorddept07);
//nov
$sqlnov07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='HRM';";
$recordnov07 = mysqli_query($conn, $sqlnov07) or die(mysql_error());
$rownov07=mysqli_fetch_array($recordnov07);
//dec
$sqldec07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='HRM';";
$recorddec07 = mysqli_query($conn, $sqldec07) or die(mysql_error());
$rowdec07=mysqli_fetch_array($recorddec07);
//jan
$sqljan07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='HRM';";
$recordjan07 = mysqli_query($conn, $sqljan07) or die(mysql_error());
$rowjan07=mysqli_fetch_array($recordjan07);
//feb
$sqlfeb07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='HRM';";
$recordfeb07 = mysqli_query($conn, $sqlfeb07) or die(mysql_error());
$rowfeb07=mysqli_fetch_array($recordfeb07);
//mar
$sqlmar07 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='HRM';";
$recordmar07 = mysqli_query($conn, $sqlmar07) or die(mysql_error());
$rowmar07=mysqli_fetch_array($recordmar07);

//Med. Tech
$sqldept08 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Med. Tech' group by department;";
$recorddept08 = mysqli_query($conn, $sqldept08) or die(mysql_error());
$rowdept08=mysqli_fetch_array($recorddept08);
//nov
$sqlnov08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Med. Tech';";
$recordnov08 = mysqli_query($conn, $sqlnov08) or die(mysql_error());
$rownov08=mysqli_fetch_array($recordnov08);
//dec
$sqldec08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Med. Tech';";
$recorddec08 = mysqli_query($conn, $sqldec08) or die(mysql_error());
$rowdec08=mysqli_fetch_array($recorddec08);
//jan
$sqljan08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Med. Tech';";
$recordjan08 = mysqli_query($conn, $sqljan08) or die(mysql_error());
$rowjan08=mysqli_fetch_array($recordjan08);
//feb
$sqlfeb08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Med. Tech';";
$recordfeb08 = mysqli_query($conn, $sqlfeb08) or die(mysql_error());
$rowfeb08=mysqli_fetch_array($recordfeb08);
//mar
$sqlmar08 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Med. Tech';";
$recordmar08 = mysqli_query($conn, $sqlmar08) or die(mysql_error());
$rowmar08=mysqli_fetch_array($recordmar08);

//Non-Academic
$sqldept09 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Non-Academic' group by department;";
$recorddept09 = mysqli_query($conn, $sqldept09) or die(mysql_error());
$rowdept09=mysqli_fetch_array($recorddept09);
//nov
$sqlnov09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Non-Academic';";
$recordnov09 = mysqli_query($conn, $sqlnov09) or die(mysql_error());
$rownov09=mysqli_fetch_array($recordnov09);
//dec
$sqldec09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Non-Academic';";
$recorddec09 = mysqli_query($conn, $sqldec09) or die(mysql_error());
$rowdec09=mysqli_fetch_array($recorddec09);
//jan
$sqljan09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Non-Academic';";
$recordjan09 = mysqli_query($conn, $sqljan09) or die(mysql_error());
$rowjan09=mysqli_fetch_array($recordjan09);
//feb
$sqlfeb09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Non-Academic';";
$recordfeb09 = mysqli_query($conn, $sqlfeb09) or die(mysql_error());
$rowfeb09=mysqli_fetch_array($recordfeb09);
//mar
$sqlmar09 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Non-Academic';";
$recordmar09 = mysqli_query($conn, $sqlmar09) or die(mysql_error());
$rowmar09=mysqli_fetch_array($recordmar09);

//Nursing
$sqldept10 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Nursing' group by department;";
$recorddept10 = mysqli_query($conn, $sqldept10) or die(mysql_error());
$rowdept10=mysqli_fetch_array($recorddept10);
//nov
$sqlnov10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Nursing';";
$recordnov10 = mysqli_query($conn, $sqlnov10) or die(mysql_error());
$rownov10=mysqli_fetch_array($recordnov10);
//dec
$sqldec10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Nursing';";
$recorddec10 = mysqli_query($conn, $sqldec10) or die(mysql_error());
$rowdec10=mysqli_fetch_array($recorddec10);
//jan
$sqljan10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Nursing';";
$recordjan10 = mysqli_query($conn, $sqljan10) or die(mysql_error());
$rowjan10=mysqli_fetch_array($recordjan10);
//feb
$sqlfeb10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Nursing';";
$recordfeb10 = mysqli_query($conn, $sqlfeb10) or die(mysql_error());
$rowfeb10=mysqli_fetch_array($recordfeb10);
//mar
$sqlmar10 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Nursing';";
$recordmar10 = mysqli_query($conn, $sqlmar10) or die(mysql_error());
$rowmar10=mysqli_fetch_array($recordmar10);

//Pharmacy
$sqldept11 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Pharmacy' group by department;";
$recorddept11 = mysqli_query($conn, $sqldept11) or die(mysql_error());
$rowdept11=mysqli_fetch_array($recorddept11);
//nov
$sqlnov11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Pharmacy';";
$recordnov11 = mysqli_query($conn, $sqlnov11) or die(mysql_error());
$rownov11=mysqli_fetch_array($recordnov11);
//dec
$sqldec11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Pharmacy';";
$recorddec11 = mysqli_query($conn, $sqldec11) or die(mysql_error());
$rowdec11=mysqli_fetch_array($recorddec11);
//jan
$sqljan11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Pharmacy';";
$recordjan11 = mysqli_query($conn, $sqljan11) or die(mysql_error());
$rowjan11=mysqli_fetch_array($recordjan11);
//feb
$sqlfeb11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Pharmacy';";
$recordfeb11 = mysqli_query($conn, $sqlfeb11) or die(mysql_error());
$rowfeb11=mysqli_fetch_array($recordfeb11);
//mar
$sqlmar11 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Pharmacy';";
$recordmar11 = mysqli_query($conn, $sqlmar11) or die(mysql_error());
$rowmar11=mysqli_fetch_array($recordmar11);

//Psychology
$sqldept12 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Psychology' group by department;";
$recorddept12 = mysqli_query($conn, $sqldept12) or die(mysql_error());
$rowdept12=mysqli_fetch_array($recorddept12);
//nov
$sqlnov12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Psychology';";
$recordnov12 = mysqli_query($conn, $sqlnov12) or die(mysql_error());
$rownov12=mysqli_fetch_array($recordnov12);
//dec
$sqldec12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Psychology';";
$recorddec12 = mysqli_query($conn, $sqldec12) or die(mysql_error());
$rowdec12=mysqli_fetch_array($recorddec12);
//jan
$sqljan12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Psychology';";
$recordjan12 = mysqli_query($conn, $sqljan12) or die(mysql_error());
$rowjan12=mysqli_fetch_array($recordjan12);
//feb
$sqlfeb12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Psychology';";
$recordfeb12 = mysqli_query($conn, $sqlfeb12) or die(mysql_error());
$rowfeb12=mysqli_fetch_array($recordfeb12);
//mar
$sqlmar12 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Psychology';";
$recordmar12 = mysqli_query($conn, $sqlmar12) or die(mysql_error());
$rowmar12=mysqli_fetch_array($recordmar12);

//School of Law
$sqldept13 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='School of Law' group by department;";
$recorddept13 = mysqli_query($conn, $sqldept13) or die(mysql_error());
$rowdept13=mysqli_fetch_array($recorddept13);
//nov
$sqlnov13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='School of Law';";
$recordnov13 = mysqli_query($conn, $sqlnov13) or die(mysql_error());
$rownov13=mysqli_fetch_array($recordnov13);
//dec
$sqldec13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='School of Law';";
$recorddec13 = mysqli_query($conn, $sqldec13) or die(mysql_error());
$rowdec13=mysqli_fetch_array($recorddec13);
//jan
$sqljan13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='School of Law';";
$recordjan13 = mysqli_query($conn, $sqljan13) or die(mysql_error());
$rowjan13=mysqli_fetch_array($recordjan13);
//feb
$sqlfeb13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='School of Law';";
$recordfeb13 = mysqli_query($conn, $sqlfeb13) or die(mysql_error());
$rowfeb13=mysqli_fetch_array($recordfeb13);
//mar
$sqlmar13 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='School of Law';";
$recordmar13 = mysqli_query($conn, $sqlmar13) or die(mysql_error());
$rowmar13=mysqli_fetch_array($recordmar13);

//Senior High School
$sqldept14 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Senior High School' group by department;";
$recorddept14 = mysqli_query($conn, $sqldept14) or die(mysql_error());
$rowdept14=mysqli_fetch_array($recorddept14);
//nov
$sqlnov14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Senior High School';";
$recordnov14 = mysqli_query($conn, $sqlnov14) or die(mysql_error());
$rownov14=mysqli_fetch_array($recordnov14);
//dec
$sqldec14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Senior High School';";
$recorddec14 = mysqli_query($conn, $sqldec14) or die(mysql_error());
$rowdec14=mysqli_fetch_array($recorddec14);
//jan
$sqljan14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Senior High School';";
$recordjan14 = mysqli_query($conn, $sqljan14) or die(mysql_error());
$rowjan14=mysqli_fetch_array($recordjan14);
//feb
$sqlfeb14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Senior High School';";
$recordfeb14 = mysqli_query($conn, $sqlfeb14) or die(mysql_error());
$rowfeb14=mysqli_fetch_array($recordfeb14);
//mar
$sqlmar14 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Senior High School';";
$recordmar14 = mysqli_query($conn, $sqlmar14) or die(mysql_error());
$rowmar14=mysqli_fetch_array($recordmar14);

//Tourism
$sqldept15 = "SELECT * FROM RESERVATION where equipment_id='$eqpt' and department='Tourism' group by department;";
$recorddept15 = mysqli_query($conn, $sqldept15) or die(mysql_error());
$rowdept15=mysqli_fetch_array($recorddept15);
//nov
$sqlnov15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=11 and year(dates)='$year'  and department='Tourism';";
$recordnov15 = mysqli_query($conn, $sqlnov15) or die(mysql_error());
$rownov15=mysqli_fetch_array($recordnov15);
//dec
$sqldec15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=12 and year(dates)='$year' and department='Tourism';";
$recorddec15 = mysqli_query($conn, $sqldec15) or die(mysql_error());
$rowdec15=mysqli_fetch_array($recorddec15);
//jan
$sqljan15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=1 and year(dates)='$year' and department='Tourism';";
$recordjan15 = mysqli_query($conn, $sqljan15) or die(mysql_error());
$rowjan15=mysqli_fetch_array($recordjan15);
//feb
$sqlfeb15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=2 and year(dates)='$year' and department='Tourism';";
$recordfeb15 = mysqli_query($conn, $sqlfeb15) or die(mysql_error());
$rowfeb15=mysqli_fetch_array($recordfeb15);
//mar
$sqlmar15 = "SELECT COUNT(equipment_id) FROM reservation WHERE equipment_id='$eqpt' and month(dates)=3 and year(dates)='$year' and department='Tourism';";
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
$pdf->Cell(40, 7, 'Department', 1, 0, 'C');
$pdf->Cell(25, 7, 'November', 1, 0, 'C');
$pdf->Cell(25, 7, 'December', 1, 0, 'C');
$pdf->Cell(25, 7, 'January', 1, 0, 'C');
$pdf->Cell(25, 7, 'February', 1, 0, 'C');
$pdf->Cell(25, 7, 'March', 1, 0, 'C');
$pdf->cell(25, 7, 'Total', 1, 0, 'C');
$pdf->Ln();
//department 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Business Ad.', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov01["COUNT(equipment_id)"]+$rowdec01["COUNT(equipment_id)"]+$rowjan01["COUNT(equipment_id)"]+$rowfeb01["COUNT(equipment_id)"]+$rowmar01["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 2
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'CEIS', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov02["COUNT(equipment_id)"]+$rowdec02["COUNT(equipment_id)"]+$rowjan02["COUNT(equipment_id)"]+$rowfeb02["COUNT(equipment_id)"]+$rowmar02["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 3
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'CSIT', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov03["COUNT(equipment_id)"]+$rowdec03["COUNT(equipment_id)"]+$rowjan03["COUNT(equipment_id)"]+$rowfeb03["COUNT(equipment_id)"]+$rowmar03["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 4
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Dentistry', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov04["COUNT(equipment_id)"]+$rowdec04["COUNT(equipment_id)"]+$rowjan04["COUNT(equipment_id)"]+$rowfeb04["COUNT(equipment_id)"]+$rowmar04["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 5
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'General Education', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov05["COUNT(equipment_id)"]+$rowdec05["COUNT(equipment_id)"]+$rowjan05["COUNT(equipment_id)"]+$rowfeb05["COUNT(equipment_id)"]+$rowmar05["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 6
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Graduate School', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov06["COUNT(equipment_id)"]+$rowdec06["COUNT(equipment_id)"]+$rowjan06["COUNT(equipment_id)"]+$rowfeb06["COUNT(equipment_id)"]+$rowmar06["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 7
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'HRM', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov07["COUNT(equipment_id)"]+$rowdec07["COUNT(equipment_id)"]+$rowjan07["COUNT(equipment_id)"]+$rowfeb07["COUNT(equipment_id)"]+$rowmar07["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 8
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Med. Tech', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov08["COUNT(equipment_id)"]+$rowdec08["COUNT(equipment_id)"]+$rowjan08["COUNT(equipment_id)"]+$rowfeb08["COUNT(equipment_id)"]+$rowmar08["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 9
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Non-Academic', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov09["COUNT(equipment_id)"]+$rowdec09["COUNT(equipment_id)"]+$rowjan09["COUNT(equipment_id)"]+$rowfeb09["COUNT(equipment_id)"]+$rowmar09["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 10
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Nursing', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov10["COUNT(equipment_id)"]+$rowdec10["COUNT(equipment_id)"]+$rowjan10["COUNT(equipment_id)"]+$rowfeb10["COUNT(equipment_id)"]+$rowmar10["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 11
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Pharmacy', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov11["COUNT(equipment_id)"]+$rowdec11["COUNT(equipment_id)"]+$rowjan11["COUNT(equipment_id)"]+$rowfeb11["COUNT(equipment_id)"]+$rowmar11["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 12
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Psychology', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov12["COUNT(equipment_id)"]+$rowdec12["COUNT(equipment_id)"]+$rowjan12["COUNT(equipment_id)"]+$rowfeb12["COUNT(equipment_id)"]+$rowmar12["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 13
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'School of Law', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov13["COUNT(equipment_id)"]+$rowdec13["COUNT(equipment_id)"]+$rowjan13["COUNT(equipment_id)"]+$rowfeb13["COUNT(equipment_id)"]+$rowmar13["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 14
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Senior High School', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov14["COUNT(equipment_id)"]+$rowdec14["COUNT(equipment_id)"]+$rowjan14["COUNT(equipment_id)"]+$rowfeb14["COUNT(equipment_id)"]+$rowmar14["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//department 15
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 7,'Tourism', 1, 0, 'C');
$pdf->Cell(25, 7,$rownov15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowdec15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowjan15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowfeb15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Cell(25, 7,$rowmar15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->cell(25, 7,$rownov15["COUNT(equipment_id)"]+$rowdec15["COUNT(equipment_id)"]+$rowjan15["COUNT(equipment_id)"]+$rowfeb15["COUNT(equipment_id)"]+$rowmar15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Ln();
//total
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40, 7,'Total', 1, 0 ,'C');
//nov
$pdf->cell(25, 7,$rownov01["COUNT(equipment_id)"]+$rownov02["COUNT(equipment_id)"]+$rownov03["COUNT(equipment_id)"]+$rownov04["COUNT(equipment_id)"]+$rownov05["COUNT(equipment_id)"]+$rownov06["COUNT(equipment_id)"]+$rownov07["COUNT(equipment_id)"]+$rownov08["COUNT(equipment_id)"]+$rownov09["COUNT(equipment_id)"]+$rownov10["COUNT(equipment_id)"]+$rownov11["COUNT(equipment_id)"]+$rownov12["COUNT(equipment_id)"]+$rownov13["COUNT(equipment_id)"]+$rownov14["COUNT(equipment_id)"]+$rownov15["COUNT(equipment_id)"], 1, 0, 'C');
//dec
$pdf->cell(25, 7,$rowdec01["COUNT(equipment_id)"]+$rowdec02["COUNT(equipment_id)"]+$rowdec03["COUNT(equipment_id)"]+$rowdec04["COUNT(equipment_id)"]+$rowdec05["COUNT(equipment_id)"]+$rowdec06["COUNT(equipment_id)"]+$rowdec07["COUNT(equipment_id)"]+$rowdec08["COUNT(equipment_id)"]+$rowdec09["COUNT(equipment_id)"]+$rowdec10["COUNT(equipment_id)"]+$rowdec11["COUNT(equipment_id)"]+$rowdec12["COUNT(equipment_id)"]+$rowdec13["COUNT(equipment_id)"]+$rowdec14["COUNT(equipment_id)"]+$rowdec15["COUNT(equipment_id)"], 1, 0, 'C');
//jan
$pdf->cell(25, 7,$rowjan01["COUNT(equipment_id)"]+$rowjan02["COUNT(equipment_id)"]+$rowjan03["COUNT(equipment_id)"]+$rowjan04["COUNT(equipment_id)"]+$rowjan05["COUNT(equipment_id)"]+$rowjan06["COUNT(equipment_id)"]+$rowjan07["COUNT(equipment_id)"]+$rowjan08["COUNT(equipment_id)"]+$rowjan09["COUNT(equipment_id)"]+$rowjan10["COUNT(equipment_id)"]+$rowjan11["COUNT(equipment_id)"]+$rowjan12["COUNT(equipment_id)"]+$rowjan13["COUNT(equipment_id)"]+$rowjan14["COUNT(equipment_id)"]+$rowjan15["COUNT(equipment_id)"], 1, 0, 'C');
//feb
$pdf->cell(25, 7,$rowfeb01["COUNT(equipment_id)"]+$rowfeb02["COUNT(equipment_id)"]+$rowfeb03["COUNT(equipment_id)"]+$rowfeb04["COUNT(equipment_id)"]+$rowfeb05["COUNT(equipment_id)"]+$rowfeb06["COUNT(equipment_id)"]+$rowfeb07["COUNT(equipment_id)"]+$rowfeb08["COUNT(equipment_id)"]+$rowfeb09["COUNT(equipment_id)"]+$rowfeb10["COUNT(equipment_id)"]+$rowfeb11["COUNT(equipment_id)"]+$rowfeb12["COUNT(equipment_id)"]+$rowfeb13["COUNT(equipment_id)"]+$rowfeb14["COUNT(equipment_id)"]+$rowfeb15["COUNT(equipment_id)"], 1, 0, 'C');
//mar
$pdf->cell(25, 7,$rowmar01["COUNT(equipment_id)"]+$rowmar02["COUNT(equipment_id)"]+$rowmar03["COUNT(equipment_id)"]+$rowmar04["COUNT(equipment_id)"]+$rowmar05["COUNT(equipment_id)"]+$rowmar06["COUNT(equipment_id)"]+$rowmar07["COUNT(equipment_id)"]+$rowmar08["COUNT(equipment_id)"]+$rowmar09["COUNT(equipment_id)"]+$rowmar10["COUNT(equipment_id)"]+$rowmar11["COUNT(equipment_id)"]+$rowmar12["COUNT(equipment_id)"]+$rowmar13["COUNT(equipment_id)"]+$rowmar14["COUNT(equipment_id)"]+$rowmar15["COUNT(equipment_id)"], 1, 0, 'C');
//total
$pdf->cell(25, 7,$rownov01["COUNT(equipment_id)"]+$rownov02["COUNT(equipment_id)"]+$rownov03["COUNT(equipment_id)"]+$rownov04["COUNT(equipment_id)"]+$rownov05["COUNT(equipment_id)"]+$rownov06["COUNT(equipment_id)"]+$rownov07["COUNT(equipment_id)"]+$rownov08["COUNT(equipment_id)"]+$rownov09["COUNT(equipment_id)"]+$rownov10["COUNT(equipment_id)"]+$rownov11["COUNT(equipment_id)"]+$rownov12["COUNT(equipment_id)"]+$rownov13["COUNT(equipment_id)"]+$rownov14["COUNT(equipment_id)"]+$rownov15["COUNT(equipment_id)"]+$rowdec01["COUNT(equipment_id)"]+$rowdec02["COUNT(equipment_id)"]+$rowdec03["COUNT(equipment_id)"]+$rowdec04["COUNT(equipment_id)"]+$rowdec05["COUNT(equipment_id)"]+$rowdec06["COUNT(equipment_id)"]+$rowdec07["COUNT(equipment_id)"]+$rowdec08["COUNT(equipment_id)"]+$rowdec09["COUNT(equipment_id)"]+$rowdec10["COUNT(equipment_id)"]+$rowdec11["COUNT(equipment_id)"]+$rowdec12["COUNT(equipment_id)"]+$rowdec13["COUNT(equipment_id)"]+$rowdec14["COUNT(equipment_id)"]+$rowdec15["COUNT(equipment_id)"]+$rowjan01["COUNT(equipment_id)"]+$rowjan02["COUNT(equipment_id)"]+$rowjan03["COUNT(equipment_id)"]+$rowjan04["COUNT(equipment_id)"]+$rowjan05["COUNT(equipment_id)"]+$rowjan06["COUNT(equipment_id)"]+$rowjan07["COUNT(equipment_id)"]+$rowjan08["COUNT(equipment_id)"]+$rowjan09["COUNT(equipment_id)"]+$rowjan10["COUNT(equipment_id)"]+$rowjan11["COUNT(equipment_id)"]+$rowjan12["COUNT(equipment_id)"]+$rowjan13["COUNT(equipment_id)"]+$rowjan14["COUNT(equipment_id)"]+$rowjan15["COUNT(equipment_id)"]+$rowfeb01["COUNT(equipment_id)"]+$rowfeb02["COUNT(equipment_id)"]+$rowfeb03["COUNT(equipment_id)"]+$rowfeb04["COUNT(equipment_id)"]+$rowfeb05["COUNT(equipment_id)"]+$rowfeb06["COUNT(equipment_id)"]+$rowfeb07["COUNT(equipment_id)"]+$rowfeb08["COUNT(equipment_id)"]+$rowfeb09["COUNT(equipment_id)"]+$rowfeb10["COUNT(equipment_id)"]+$rowfeb11["COUNT(equipment_id)"]+$rowfeb12["COUNT(equipment_id)"]+$rowfeb13["COUNT(equipment_id)"]+$rowfeb14["COUNT(equipment_id)"]+$rowfeb15["COUNT(equipment_id)"]+$rowmar01["COUNT(equipment_id)"]+$rowmar02["COUNT(equipment_id)"]+$rowmar03["COUNT(equipment_id)"]+$rowmar04["COUNT(equipment_id)"]+$rowmar05["COUNT(equipment_id)"]+$rowmar06["COUNT(equipment_id)"]+$rowmar07["COUNT(equipment_id)"]+$rowmar08["COUNT(equipment_id)"]+$rowmar09["COUNT(equipment_id)"]+$rowmar10["COUNT(equipment_id)"]+$rowmar11["COUNT(equipment_id)"]+$rowmar12["COUNT(equipment_id)"]+$rowmar13["COUNT(equipment_id)"]+$rowmar14["COUNT(equipment_id)"]+$rowmar15["COUNT(equipment_id)"], 1, 0, 'C');
$pdf->Output();}
?>