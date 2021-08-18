
<?php

$destination = 'francenelletankeu@gmail.com';

$sujet = 'page de mail';
 
$entete = "From : francenelletankeu@gmail.com \n";
$entete = "Reply-to : francenelletankeu@gmail.com \n";

//$derlim = md5(rand());
$derlim = md5(uniqid(rand(), TRUE));

$entete .= "MIME-Version 1.0 \n";
$entete .= "Content-Type: multipart/mixed;boundary=\"$derlim\" \n";
$entete .= "\n";

//$msg = "Content-Type: text/html; charset=\"UTF-8\" \n";
$msg = "Content-Transfer-Encoding: 8bit \n";
$msg .= "\n";

$msg .= "--$delim \n";

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
$jointe = base64_encode($jointe);
  $jointe = chunk_split($jointe);


  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $product_name = $_POST['product_name'];
  $version_number = $_POST['version_number'];
  $activation_code = $_POST['activation_code'];
$msg .= "--$delim \n";
$msg .= "Content-Type: '.$type_fichier.';name= '.$file_name.' \n";
$msg .= "Content-Transfer-Encoding:base64 \n"; 
$msg .= "Content-Disposition: attachment; filename = '.$fichier.'\n"; 
$msg .= " le prenom est ".$first_name."\n
l\'email est ".$email."\n
le phone est ".$phone."\n
le sujet est ".$subject."\n
le product name est ".$product_name."\n
le version number name est ".$version_number."\n
 Activation number name est ".$activation_code."\n";
$msg .= "\n";
$msg .= $jointe."\n";

$msg .= "\n".'--'.$derlim.'--';
echo "l'image est la suivante:";
echo '<img src="'.$fichier.'" alt="">';

mail($destination, $sujet, $msg, $entete);
var_dump(mail($destination, $sujet, $msg, $entete));

?>