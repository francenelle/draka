<?php
  $to = 'francenelletankeu@gmail.com' ; 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$adresse = $_POST['adresse'];
$post_code = $_POST['post_code'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$install_alarm = $_POST['install_alarm'];
$amored = $_POST['amored'];
$windows_protect = $_POST['windows_protect'];
$areas_protect = $_POST['areas_protect'];
$checkbox1=$_POST['secondary_accesses'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
$checkbox2=$_POST['shield'];  
   $chk_shield="";  
   foreach($checkbox2 as $chk_shield2)  
	  {  
		 $chk_shield .= $chk_shield2.",";  
	  }    
  $message1 = 'First name: '.$first_name."\n";
  $message2 = 'Last name : '.$last_name."\n";
  $message3 = 'Adresse: '.$adresse."\n";
  $message4 = 'Post code : '.$post_code."\n";
  $message5 = 'City : '.$city."\n";
  $message6 = 'Country ' .$country."\n";
  $message7 = 'email : '.$email."\n";
  $message8 = 'Phone : '.$phone."\n";
  $message9 = 'Where do you need to install the alarm? : '.$install_alarm."\n";
  $message10 = 'Do you have the armored door. If yes, how many ? :'.$amored."\n";
  $message11 = ' How many windows do you want to protect ? :' .$windows_protect."\n";
  $message12 = ' How many areas do you want to protect ? : '.$areas_protect."\n";
  $message13 = ' Does the house have secondary accesses? :'.$chk."\n";
  $message14 = ' choice alarm :'. $chk_shield;
  $message = $message1.$message2.$message3.$message4.$message5.$message6.$message7.$message8.$message9.$message10.$message11.$message12.$message13.$message14;
  $from = 'Ce message a été envoyé par   ' .$_POST['email'];
  $cc = 'Inscription des utilisateurs dans le site draka.com';
  
 $retour = mail( $to, $cc, $message, $from);
  if($retour){
	  $success = 'bravo votre message a bien été envoyé';
	echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
  }else{
	  $echec = 'erreur lors de l\'envoi, veillez reessayer plus tard';
	  echo '<div class="alert alert-danger" role="alert">'.$success.'</div>';
  }
?>