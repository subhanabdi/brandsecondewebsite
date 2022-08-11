<?php
require "PHPMailer/PHPMailerAutoload.php";

if(isset($_POST['submit'])){
    $con_name = $_POST['con_name'];
    $con_email = $_POST['con_email'];
    $con_business = $_POST['con_business'];
    $phone = $_POST['phone'];
    $con_subject = 'Creativelogomakers Lead';
    $con_message = $_POST['con_message'];
}

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.creativelogomakers.com';
        $mail->Port = 465;  
        $mail->Username = 'info@creativelogomakers.com';
        $mail->Password = 'u5Om#Zjmi4wC';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="info@creativelogomakers.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    
    $to   = 'info@creativelogomakers.com';
    $from = $con_email;
    $name = 'Creativelogomakers Lead';
    $subj = $con_subject;
    $msg = "<!DOCTYPE html>
<html>
<head>
	<title>Cyberclosys</title>
</head>
<body><table width='100%' border='1' style='font-size:14px; font-family:arial;' cellspacing='0' cellpadding='3'>
    <tr>
    <td>Name</td>
    <td>$con_name</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>$con_email</td>
    </tr>
    <tr>
    <td>Phone Number</td>
    <td>$phone</td>
    </tr>
    <tr>
    <td>Business</td>
    <td>$con_business</td>
    </tr>
    <tr>
    <td>Message</td>
    <td>$con_message</td>
    </tr>
    </table>
</body>
</html>";
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("includes/compatibility.php"); ?>
        <title>Home - Creative Logo Makers</title>
        <?php include("includes/style.php"); ?>
    </head>
    <body>
        <style>
             .thank-you-pg {
             background-repeat: no-repeat;
             background-position: center;
             background-size: cover;
             height: 70vh;
             display: flex;
             align-items: center;
             padding: 50px 0;
         }
         .cont-thankyou {
             text-align: center;
             padding: 70px 0 0 0;
         }
         .cont-thankyou h1 {
             font-size: 87px;
             color: #ffffff;
             font-weight: 700;
             margin-bottom: 20px;
             text-transform: uppercase;
         }
         .cont-thankyou p {
             font-size: 20px;
             color: #ffffff;
             margin-bottom: 25px;
         }
         ul.inline-b li {
             display: inline-block;
         }
         .btn-default {
             font-size: 15px;
             font-weight: 500;
             text-transform: capitalize;
             color: #ffffff !important;
             border: 2px solid #ffffff;
             border-radius: 10px;
             padding: 13px 0;
             text-align: center;
             overflow: hidden;
             display: inline-block;
             position: relative;
             min-width: 190px;
             z-index: 1;
             background: transparent;
         }
         ul.inline-b li+li {
             margin-left: 20px;
         }
         @media (max-width: 1440px){
            .thank-you-pg{height: 85vh;}
            .cont-thankyou h1{font-size: 65px; margin-bottom: 15px;}
            .cont-thankyou p{font-size: 18px; margin:  0 0 18px;}
         }

         @media (max-width: 824px){
            .thank-you-pg .container{width: 100%;}
            .cont-thankyou h1{font-size: 40px;}
            .cont-thankyou p br{display: none;}
            .cont-thankyou p{font-size: 18px;}
            .inline-b{padding: 0; width: 100%;}
            ul.inline-b li+li{margin-left: 15px;}
            .btn-default{min-width: 145px;}
            .thank-you-pg{height: 490px; background-position: left;}

         }
        </style>

       <?php include("includes/header.php"); ?>

      
        <section class="thank-you-pg" style="background-image: url('assets/images/banner-thankyou.jpg');">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <div class="cont-thankyou">
                         <h1>REQUEST SENT <br>SUCCESSFULLY!</h1>
                         <p>Thanks! We Have Received Your Request. Expect A Quick Reply. <br>Should You Have Any Questions Or Queries, <br> Please Feel Free To Contact Our Experts</p>
                         <ul class="inline-b">
                            <li class="first"><a class="btn-default" href="javascript:;" onclick="setButtonURL();">Live Chat</a></li>
                            <li class="last"><a class="btn-default" href="mailto:info@creativelogomakers.com">Email Us</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
            </div>
        </section>
       
      

      
        
        


        

       
        
        

        <?php include("includes/footer.php"); ?>

        <?php include("includes/scripts.php"); ?>
        
    </body>
</html>
