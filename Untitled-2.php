
<?php

function mail_attachment ($from , $to, $subject, $message, $attachment){
  $fileatt = $attachment; // Path to the file
  $fileatt_type = "application/octet-stream"; // File Type 
  
  $start = strrpos($attachment, '/') == -1 ? 
     strrpos($attachment, '//') : strrpos($attachment, '/')+1;
 
  $fileatt_name = substr($attachment, $start, 
     strlen($attachment)); // Filename that will be used for the 
  
  $email_from = $from; // Who the email is from
  $subject = "New Attachment Message";
  
  $email_subject =  $subject; // The Subject of the email 
  $email_txt = $message; // Message that the email has in it 
  $email_to = $to; // Who the email is to
  
  $headers = "From: ".$email_from;
  $file = fopen($fileatt,'rb');
  $data = fread($file,filesize($fileatt)); 
  fclose($file); 
  
  $msg_txt="\n\n You have recieved a new attachment message from $from";
  $semi_rand = md5(time()); 
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "boundary=\"{$mime_boundary}\"";
  
  $email_txt .= $msg_txt;

  $email_message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type:text/html; charset = \"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $email_txt . "\n\n";
 
  $data = chunk_split(base64_encode($data));
  
  $email_message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" .
     " name = \"{$fileatt_name}\"\n" . "Content-Disposition: attachment;\n" . 
     " filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: 
     base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n";
 
  $ok = mail($email_to, $email_subject, $email_message, $headers);
  
  if($ok) {
     echo "File Sent Successfully.";
     unlink($attachment); // delete a file after attachment sent.
  }else {
    echo $ok;
     die("Sorry but the email could not be sent. Please go back and try again!");
  }
}

$destination = 'francenelletankeu@gmail.com';

$sujet = 'page de mail';
 
$entete = "From : francenelletankeu@gmail.com \n";
$entete = "Reply-to : francenelletankeu@gmail.com \n";

//$derlim = md5(rand());
$derlim = md5(uniqid(rand(), TRUE));

$entete .= "MIME-Version 1.0 \n";
$entete .= "Content-Type: multipart/mixed;boundary=\"$derlim\" \n";
$entete .= "\n";

$msg = "Content-Type: text/html; charset=\"UTF-8\" \n";
$msg .= "Content-Transfer-Encoding: 8bit \n";
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
//$msg .= "Content-Type: '.$type_fichier.';name= '.$file_name.' \n";
//$msg .= "Content-Transfer-Encoding:base64 \n"; 
$msg .= "Content-Disposition: attachment; filename = '.$fichier.'\n"; 
$msg .= " le prenom est ".$first_name."\n
l\'email est ".$email."\n
le phone est ".$phone."\n
le sujet est ".$subject."\n
le product name est ".$product_name."\n
le version number name est ".$version_number."\n
 Activation number name est ".$activation_code."\n";
$msg .= "\n";
$msg .= "--$delim \n";
$msg .= '<img src="'.$fichier.'" alt="">';

$msg .= "\n".'--'.$derlim.'--';

echo "l'image encodé est la suivante:";
echo '<img src="'.$fichier.'" alt="">';
$from = "francenelletankeu@gmail.com";
mail_attachment("francenelletankeu@gmail.com", "francenelletankeu@gmail.com", "sujet", "message", "uploads/1.jpeg");
var_dump(mail_attachment($from, $destination, "sujet", "message", $fichier));

?>







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
$msg .= "Content-Transfer-Encoding: 8bit \n";
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
//$msg .= "Content-Type: '.$type_fichier.';name= '.$file_name.' \n";
//$msg .= "Content-Transfer-Encoding:base64 \n"; 
$msg .= "Content-Disposition: attachment; filename = '.$fichier.'\n"; 
$msg .= " le prenom est ".$first_name."\n
l\'email est ".$email."\n
le phone est ".$phone."\n
le sujet est ".$subject."\n
le product name est ".$product_name."\n
le version number name est ".$version_number."\n
 Activation number name est ".$activation_code."\n";
$msg .= "\n";
$msg .= "--$delim \n";
$msg .= $jointe."\n";

$msg .= "\n".'--'.$derlim.'--';

echo "l'image encodé est la suivante:";
echo '<img src="'.$fichier.'" alt="">';

mail($destination, $sujet, $msg, $entete);
var_dump(mail($destination, $sujet, $msg, $entete));

?>




<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $name = $_POST['first_name'];
    $subject = $_POST['subject'];
    $message = $_POST['message_contact'];
   
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
      
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["fichier"]["name"]))
            {
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["fichier"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["fichier"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            
            if($uploadStatus == 1)
            { 
             
                // Recipient
                $toEmail = 'francenelletankeu@gmail.com';

                // Sender
                $from = 'francenelletankeu@gmail.com';
                $fromName = 'TANKEU fr';
                
                // Subject
                $emailSubject = 'Contact Request Submitted by '.$name;
                
                // Message 
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                   
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                   
                    // Preparing attachment
                    if(is_file($uploadedFile))
                    {
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                       
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    echo 'premier niveau de test';
                    var_dump($mail);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                    echo 'deuxieme niveau de test';
                    var_dump($mail);
                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
    echo $statusMsg;
}
?>