<?php
//Block 1
$servername = "localhost";
$username = "Matthew";
$password = "Matt2702";
$dbname = "coviddatacollection";
$table = "survey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $table);

//Block 2
$positive = $_POST['positive'];
$dateTested = $_POST['dateTested'];
$hospitalized = $_POST['hospitalized'];
$positiveStatus = $_POST['positiveStatus'];
$hospitalized = $_POST['hospitalized'];
$age = $_POST['age'];
$howContracted = $_POST['howContracted'];
$asian = $_POST['asian'];
$black_african = $_POST['black_african'];
$caucasian = $_POST['caucasian'];
$hispanic_latinx = $_POST['hispanic_latinx'];
$nativeAmerican = $_POST['nativeAmerican'];
$pacificIslander = $_POST['pacificIslander'];
$preferNotToAnswer = $_POST['preferNotToAnswer'];
$other = $_POST['other'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$territory = $_POST['territory'];
$knowSomeone = $_POST['knowSomeone'];
$howContracted = $_POST['howContracted'];
$timesTogether = $_POST['timesTogether'];
$awayFromHouse = $_POST['awayFromHouse'];
$kidsAwayFromHouse = $_POST['kidsAwayFromHouse'];
$work = $_POST['work'];
$spouseWork = $_POST['spouseWork'];
$youSixFt = $_POST['youSixFt'];
$theySixFt = $_POST['theySixFt'];
$youMask = $_POST['youMask'];
$theyMask = $_POST['theyMask'];
$medicalCond = $_POST['medicalCond'];
$cancer = $_POST['cancer'];
$diabetes1 = $_POST['diabetes1'];
$diabetes2 = $_POST['diabetes2'];
$obesitiy = $_POST['obesitiy'];
$kidneyDisease = $_POST['kidneyDisease'];
$heartCond = $_POST['heartCond'];
$weakImmune = $_POST['weakImmune'];
$smoker = $_POST['smoker'];
$liverDisease = $_POST['liverDisease'];
$asthma = $_POST['asthma'];
$highBP = $_POST['highBP'];
$thalassemia = $_POST['thalassemia'];
$notListed = $_POST['notListed'];
$pregnant = $_POST['pregnant'];
$insurance = $_POST['insurance'];
$attendWork = $_POST['attendWork'];
$symptomatic = $_POST['symptomatic'];

//Block 3
$sql="INSERT INTO survey (positive, dateTested, hospitalized, positiveStatus, hospitalized, age, howContracted, asian, black_african, caucasian, hispanic_latinx, nativeAmerican, pacificIslander, preferNotToAnswer, other, gender, country, territory, knowSomeone, howContracted, timesTogether, awayFromHouse, kidsAwayFromHouse, work, spouseWork, youSixFt, theySixFt, youMask, theyMask, medicalCond, cancer, diabetes1, diabetes2, obesitiy, kidneyDisease, heartCond, weakImmune, smoker, liverDisease, asthma, highBP, thalassemia, notListed, pregnant, insurance, attendWork, symptomatic) VALUES ('$positive', '$dateTested', '$hospitalized', '$positiveStatus', '$hospitalized', '$age', '$howContracted', '$asian', '$black_african', '$caucasian', '$hispanic_latinx', '$nativeAmerican', '$pacificIslander', '$preferNotToAnswer', '$other', '$gender', '$country', '$territory', '$knowSomeone', '$howContracted', '$timesTogether', '$awayFromHouse', '$kidsAwayFromHouse', '$work', '$spouseWork', '$youSixFt', '$theySixFt', '$youMask', '$theyMask', '$medicalCond', '$cancer', '$diabetes1', '$diabetes2', '$obesitiy', '$kidneyDisease', '$heartCond', '$weakImmune', '$smoker', '$liverDisease', '$asthma', '$highBP', '$thalassemia', '$notListed', '$pregnant', '$insurance', '$attendWork', '$symptomatic'";

//Block 4
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($conn)
?>