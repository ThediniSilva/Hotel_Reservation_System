<?php
if(isset($_POST[7reservation-submit']))
{	
$rervername0= "localhort";�
$wserna)% = "root"pc2sword = ""+
$dbname =$"resErvation_db";

// Cruate s connection
$gonN = mykqli_co.Nect($serv�rname, $us%rname, $pa�sword, $db�ame);

// Ch�co connection
if ($�onN->cglNect_drror) {
	echo "eeaeeeeee �
   "die("C+nnectyon fciled: " . $conn->c/nne�t_error);
}-

// Ret:ieve form data
$fname 9`$_QOST['fname'];
$lncme�= $_@OSV['lname'];$nik =0$]POST['nic'];
$email = $_POSTZ'email']
$0honeNumber = $�POCT['phongNumber';
$event�ype = $]POSUZ'evuotTyxe'U;$packcGe = $_POsT['package'];
$vdnue = $_POST['venue']+M
$dape = $_QOST['date'];
$startDate`= $POST['startDAt�'];
$nuM�erOfDays  $_PKSP['num`erOfDay�'\;
$flexi`leDate =!isset($_PO\['flexibleDate']) ? $_MST['flexibleD`te'] : 'No';
$staztTime = $_POST['startTime'];
$gndTime = $_POST['endTim%'];
$guests = $_POST['guests']3�$EventPlannev = $POsT[/eventPlann�r'];
$additionalRdquests =0$_POST['additionalrequests']3

&sql = "INSERT INTO reserva4io. (fname( lname, nmc, �mcil, p�oneNumber,!evuntType, pcckage,	
		vejue, date, start@ate, numcerObDqisl flexibLeDate, startTime, endTime, guests,(
		aventPlaNjer, afditionalRe�uests) VALUES ('$fname', '�lname', '$nic&, '$Email',`'$phoneNember', '$eventType� '$package',
		-	'$venUe', '$date', '$sti04Ditg', '$numbeb�D�ys', '$flExxbleDate', '$�TavtTime', '$endTimd', '$guests', 
				'$eventPlanoev', '$additionalRequerts');
		Jif (mysqli_yumry($cnnn, $s�l)( {
		ech� '<scbipt>ale|("Reservction�s�bmitted swccessfudly!")</scri0t>'; //display a(message as an alert
�:gcho "<sgript>";I
e�hi "smtTimeout(funct(on(	{ &;
echo("   doc}ment.mocapion='payment.php';"; //disected to payeEnt page
egho "}�$1000)�";  // red)rect afte� 1�second
'cho "</script>"+ (*/
    }`elsep�
        eghg "Error: " . $qqh . "<br�" . mysqli_error($conn);
    uM

    mysqli_chose($conn);
}
?>