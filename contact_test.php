<?php
// To


$to = 'francenelletankeu@gmail.com';
 
// Subject
$subject = 'Developpez.com - Test Mail';
 
// Headers
$headers = 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "\r\n";
 
// Message
$photo = $_POST['photosreen'];
$tofs = $_FILES['photosreen']['tmp_name'];
echo $tofs;
echo '<img src='.$photo.'/ alt="">';
$msg = '<strong>Developpez.com a verifier '.$photo.'</strong><img src='.$photo.'/ alt=""> - Message du mail ...';
 
// Function mail()
mail($to, $subject, $msg, $headers);

  //$to = 'francenelletankeu@gmail.com' ; 
/*  $boundary = md5(uniqid(microtime(), TRUE));
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$product_name = $_POST['product_name'];
$version_number = $_POST['version_number'];
$activation_code = $_POST['activation_code'];
$file_name = $_POST['screenshoot'];


if (file_exists($file_name))
{
	$file_type = filetype($file_name);
	$file_size = filesize($file_name);
 
	$handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
	$content = fread($handle, $file_size);
	$content = chunk_split(base64_encode($content));
	$f = fclose($handle);
 
	$msg = '--'.$boundary."\r\n";
	$msg .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
	$msg .= 'Content-transfer-encoding:base64'."\r\n";
	$msg .= $content."\r\n";
}
var_dump($content);
*/
/*
$message_contact=$_POST['message_contact'];  
  
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

*/

  /*
  
   $url = 'https://waytolearnx.com/wp-content/uploads/2018/09/cropped-logoWeb.png'; 
    
  // Initialiser la session cURL
  $session = curl_init($url); 
    
  // Inintialiser le nom de répertoire où le fichier sera sauvegardé
  $dir = './'; 
    
  $file_name = basename($url); 
    
  // Enregistrer le fichier
  $save = $dir . $file; 
    
  // Ouvrir le fichier 
  $file = fopen($save, 'wb'); 
    
  // définit les option pour le transfert
  curl_setopt($session, CURLOPT_FILE, $file); 
  curl_setopt($session, CURLOPT_HEADER, 0); 
    
  curl_exec($session); 
    
  curl_close($session); 
    
  fclose($file); 
  */

  $to = 'francenelletankeu@gmail.com';
 
// Subject
$subject = 'Developpez.com - Test Mail';
 
// Headers
$headers = 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "\r\n";
 
// Message
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$product_name = $_POST['product_name'];
$version_number = $_POST['version_number'];
$activation_code = $_POST['activation_code'];
$photo = $_POST['uploaded_file'];

$msg = '<strong>Developpez.com a verifier '.$photo.'</strong><img src='.$photo.'/ alt=""> - Message du mail <br>
<p> le prenom est '.$first_name.'</p><br>
<p> l\'email est '.$email.'</p><br>
<p> le phone est '.$phone.'</p><br>
<p> le sujet est '.$subject.'</p><br>
<p> le product name est '.$product_name.'</p><br>
<p> le version number name est '.$version_number.'</p><br>
<p> Activation number name est '.$activation_code.'</p><br>
<p> La photo est '.$photo.'</p><br>...';
 
// Function mail()
var_dump(mail($to, $subject, $msg, $headers));
mail($to, $subject, $msg, $headers);
?>









<?php


$to = 'francenelletankeu@gmail.com';
 
   
// Subject
$subject = 'Developpez.com - Test Mail';
 
// Headers
$headers = 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "\r\n";

$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$product_name = $_POST['product_name'];
$version_number = $_POST['version_number'];
$activation_code = $_POST['activation_code'];

if(!empty($_FILES)){
  $file_name = $_FILES['fichier']['name'];
  $file_tmp = $_FILES['fichier']['tmp_name'];
  $file_dest = 'uploads/'.$file_name;
  $file_extension = strrchr($file_name, '.');

  $extension_autorisees = array('.pdf', '.PDF', '.png', '.jpeg');
  if(in_array($file_extension, $extension_autorisees)){
    if(move_uploaded_file($file_tmp, $file_dest)){
        echo 'fichier uploadé avec succes';
    }else{
        echo 'une erreur est survenue lors de l\'envoie du fichier';
    }
  }else{
    echo 'cette extension nn\'est pas autorisée';
  }

}



// Message
$msg = '<strong>Draka.com a verifier - Message du mail avec fichier joint <br>
<p> le prenom est '.$first_name.'</p><br>
<p> l\'email est '.$email.'</p><br>
<p> le phone est '.$phone.'</p><br>
<p> le sujet est '.$subject.'</p><br>
<p> le product name est '.$product_name.'</p><br>
<p> le version number name est '.$version_number.'</p><br>
<p> Activation number name est '.$activation_code.'</p><br>
<p> La photo est </p> <img src="'.$file_dest.'" alt=""><br>...';
// Function mail()
mail($to, $subject, $msg, $headers);
var_dump(mail($to, $subject, $msg, $headers));
echo $msg;



?>










<?php

$destination = 'francenelletankeu@gmail.com';

$sujet = 'page de mail';
 
$entete = "From : francenelletankeu@gmail.com \n";
$entete = "Reply-to : francenelletankeu@gmail.com \n";

$derlim = md5(rand());

$entete .= "MIME-Version 1.0 \n";
$entete .= "Content-Type: multipart/mixed;boundary=\"$derlim\" \n";
$entete .= "\n";

$msg = "--$delim \n";
$msg .= "Content-Type: text/plain; charset=\"utf-8\" \n";
$msg .= "Content-Transfer-Encoding: 8bit \n";
$msg .= "\n";

$msg .= "super image non? ;)";
$msg .= "\n";

$file_name = $_FILES['fichier']['name'];
$file_tmp = $_FILES['fichier']['tmp_name'];
$type_fichier = $_FILES['fichier']['type'];
$taille_fichier = $_FILES['fichier']['size'];
$file_dest = 'uploads/'.$file_name;
if(move_uploaded_file($file_tmp, $file_dest)){
  $fichier = $file_dest;
  
}  
/*
$jointe = file_get_contents($fichier);
  $jointe = chunk_split(base64_encode($jointe));
*/

  $handle = fopen($file_tmp, 'r'); //Ouverture du fichier
  $content = fread($handle, $taille_fichier); //Lecture du fichier
  $encoded_content = chunk_split(base64_encode($content)); //Encodage
  $f = fclose($handle); //Fermeture du fichier

  $msg .= "\n" . "--" . $delim . "\n"; //Deuxième séparateur d'ouverture
                    $msg .= 'Content-type:'.$type_fichier.';name="'.$file_name.'"'."\n"; //Type de contenu (application/pdf ou image/jpeg)
                    $msg .='Content-Disposition: attachment; filename="'.$file_name.'"'."\n"; //Précision de pièce jointe
                    $msg .= 'Content-transfer-encoding:base64'."\n"; //Encodage
                    $msg .= "\n"; //Ligne blanche. IMPORTANT !
                    $msg .= $encoded_content."\n"; //Pièce jointe
                    $msg .= "\n";

$msg .= "--$delim \n";
$msg .= "Content-Type: image/jpeg;name\"image\" \n";
$msg .= "Content-Transfer-Encoding:base64 \n"; 
$msg .= "Content-Disposition: inline; filename = \"image\" \n"; 
$msg .= "\n";
$msg .= "\n"; 
$msg .= $jointe."\n";

$msg .= "--$delim--";


mail($destination, $sujet, $msg, $entete);
var_dump(mail($destination, $sujet, $msg, $entete));

?>

//////////////////////////////////////////////////////////////////////////////////////////



<?php

$destination = 'francenelletankeu@gmail.com';

$sujet = 'page de mail';
 
$entete = "From : francenelletankeu@gmail.com \n";
$entete = "Reply-to : francenelletankeu@gmail.com \n";

//$derlim = md5(rand());
$derlim = md5(uniqid(microtime(), TRUE));

$entete .= "MIME-Version 1.0 \n";
$entete .= "Content-Type: multipart/mixed;boundary=\"$derlim\" \n";
$entete .= "\n";

$msg = "--$delim \n";
$msg .= "Content-Type: text/plain; charset=\"utf-8\" \n";
$msg .= "Content-Transfer-Encoding: 8bit \n";
$msg .= "\n";

$msg .= "super image non? ;)";
$msg .= "\n";

$file_name = $_FILES['fichier']['name'];
$file_tmp = $_FILES['fichier']['tmp_name'];
$type_fichier = $_FILES['fichier']['type'];
$taille_fichier = $_FILES['fichier']['size'];
$file_dest = 'uploads/'.$file_name;
if(move_uploaded_file($file_tmp, $file_dest)){
  $fichier = $file_dest;
  
}else{
  $fichier = 'uploads/1.jpeg';
}

$jointe = file_get_contents($fichier);
  $jointe = chunk_split(base64_encode($jointe));


  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $product_name = $_POST['product_name'];
  $version_number = $_POST['version_number'];
  $activation_code = $_POST['activation_code'];
$msg .= "--$delim \n";
$msg .= "Content-Type: image/jpeg;name\"image\" \n";
$msg .= "Content-Transfer-Encoding:base64 \n"; 
$msg .= "Content-Disposition: inline; filename = \"image\" \n"; 
$msg .= " le prenom est ".$first_name."\n
l\'email est ".$email."\n
le phone est ".$phone."\n
le sujet est ".$subject."\n
le product name est ".$product_name."\n
le version number name est ".$version_number."\n
 Activation number name est ".$activation_code."\n";
$msg .= "\n";
$msg .= $jointe."\n";

$msg .= "--$delim--";


mail($destination, $sujet, $msg, $entete);
var_dump(mail($destination, $sujet, $msg, $entete));

?>