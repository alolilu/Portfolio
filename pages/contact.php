<div class="container contact" id="Page3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <h1>
                <?= element36 ?>
            </h1>
        </div>
        <div class="col-md-3">
            <img src="assets/images/photoProfil.jpg" alt="">
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row arrow">
        <div class="col-md-1"></div>
        <div class="col-md-6"></div>
        <div class="col-md-3">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6 LeftConact">
            <form action="" method="POST">
            <div class="row">
                <div class="col-2">
                    <span>01</span>
                </div>
                <div class="col-10">
                    <label for="Name"><?= element37 ?></label>
                    <input name="name" maxlength="255" type="text" placeholder="<?= element45 ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <span>02</span>
                </div>
                <div class="col-10">
                    <label for="Name"><?= element38 ?></label>
                    <input name="email" maxlength="255" type="email" placeholder="<?= element46 ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <span>03</span>
                </div>
                <div class="col-10">
                    <label for="Name"><?= element39 ?></label>
                    <input name="nameCompany" maxlength="255" type="text" placeholder="<?= element47 ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <span>04</span>
                </div>
                <div class="col-10">
                    <label for="Name"><?= element40 ?></label>
                    <input name="subject" maxlength="255" type="text" placeholder="<?= element48 ?>" required>
                </div>
            </div>
            <div class="row" id="messageBottomBorder">
                <div class="col-2">
                    <span>05</span>
                </div>
                <div class="col-10">
                    <label for="Name"><?= element41 ?></label>
                    <textarea name="message" maxlength="1500" type="text" rows="3" placeholder="<?= element49 ?>" required></textarea>
                </div>
            </div>
            <div class="container-fluid submit">
                <button name="submit" type="submit"><?= element44 ?><i class="fa-solid fa-paper-plane"></i></button>
            </div>
            </form>
        </div>
        <div class="col-md-4 RightConact">
            <div class="row">
                <p><?= element42 ?></p>
                <a href="mailto:alexis.fredriksen5@gmail.com">alexis.fredriksen5@gmail.com</a>
                <a href="tel:+33 7 81 05 05 41">+33 7 81 05 05 41</a>
            </div>
            <div class="row">
                <p><?= element43 ?></p>
                <a href="mailto:developpeuralexispro@gmail.com">developpeuralexispro@gmail.com</a>
                <h6>Location: France, Melun</h6>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-4 RightConact1">
        <div class="row">
            <p><?= element42 ?></p>
            <a href="mailto:alexis.fredriksen5@gmail.com">alexis.fredriksen5@gmail.com</a>
            <a href="tel:+33 7 81 05 05 41">+33 7 81 05 05 41</a>
        </div>
        <div class="row">
            <p><?= element43 ?></p>
            <a href="mailto:developpeuralexispro@gmail.com">developpeuralexispro@gmail.com</a>
            <h6>Location: France, Melun</h6>
        </div>
    </div>
    <div class="container-fluid Next">
        <div style="margin-right: -5px;" class="nextPage"></div>
        <div style="transform: rotateX(180deg); margin-bottom: -99px;" class="nextPage"></div>
        <div style="margin-left: -5px;" class="nextPage"></div>
    </div>
</div>

<?php

require_once __DIR__.'../../mail/vendor/autoload.php';
require_once __DIR__.'../../mail/functions.php';
require_once __DIR__.'../../mail/config.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

//check query is execute successfully or not
$email = 'alexis.fredriksen5@gmail.com';
//Server settings
$mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
$mail->isSMTP();
$mail->Host = CONTACTFORM_SMTP_HOSTNAME;
$mail->SMTPAuth = true;
$mail->Username = CONTACTFORM_SMTP_USERNAME;
$mail->Password = CONTACTFORM_SMTP_PASSWORD;
$mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
$mail->Port = CONTACTFORM_SMTP_PORT;

// Recipients
$mail->setFrom('alexis.fredriksen5@gmail.com', 'Contact Portfolio');
$mail->addAddress($email);
$mail->addReplyTo('yourmail@gmail.com');

// Content
$mail->isHTML(true); 
    
$result='<div id="message" style="border: 1px solid var(--change-color);width: 19vw; min-width: 246px; top: 17%;position: absolute;border-radius: 15px;position: absolute;margin-left: auto;margin-right: 59px;left: 0;right: 0;">
            <h6 style="color: var(--second-bg-color);font-weight: 500;text-align: center;padding: 7px 13px;margin: 0px; font-size: 1.5vh;">(FR) Votre message a bien été envoyé ! <br>(EN) Your message has been sent !</h6>
         </div>';

$result1="<div id='message' style='border: 1px solid var(--change-color);width: 19vw; min-width: 246px; top: 17%;position: absolute;border-radius: 15px;position: absolute;margin-left: auto;margin-right: 59px;left: 0;right: 0;'>
            <h6 style='color: var(--second-bg-color);font-weight: 500;text-align: center;padding: 7px 13px;margin: 0px; font-size: 1.5vh;'>(FR) Erreur lors de l'envoi du message ! <br>(EN) Error when sending the message !</h6>
          </div>";
  
if(isset($_POST['submit'])){
    $Subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nameCompany = $_POST['nameCompany'];
    $mail->Subject = $Subject;
    $mail->Body='   
                <div style="height: auto; width: auto; background-color: rgb(22,22,22); display: flex; justify-content:center; align-items: center; border: 3px solid white; flex-direction: column;">
                    <div class="row" style="display: flex; justify-content:center; align-items: center; flex-direction: row;">
                        <h2 style="color: white; font-weight: 700; text-align: center; margin: 20px 0px; border-bottom: 0.5px solid white; width: auto;">
                            Nom du client : <br> '.$name.'
                        </h2>
                    </div>
                    <div class="row" style="display: flex; justify-content:center; align-items: center; flex-direction: row;">
                        <h4 style="color: rgba(255, 255, 255, 0.644); font-weight: 500; text-align: center; margin: 10px 0px;">
                            Email du client : <br> '.$email.'
                        </h4>
                    </div>
                    <div class="row" style="display: flex; justify-content:center; align-items: center; flex-direction: row;">
                        <h4 style="color: rgba(255, 255, 255, 0.644); font-weight: 500; text-align: center; margin: 10px 0px;">
                            Entreprise du client : <br> '.$nameCompany.'
                        </h4>
                    </div>
                    <div class="row" style="display: flex; justify-content:center; align-items: center; flex-direction: column; margin-bottom: 20px;">
                        <h4 style="color: white; font-weight: 500; text-align: center; margin: 5px 0px;">
                            Message du client : 
                        </h4>
                        <p style="color: rgba(255, 255, 255, 0.644); font-weight: 300; text-align: center; font-size: 13px; width: 70%;">
                            '.$message.'
                        </p>
                    </div>
                </div>';
                $delayTime = 3;
    if($mail->send()) {
        echo $result;
    }else{
        echo $result1;
    }
}    

?>

<script>
    setTimeout(function() {
  document.getElementById("message").style.display = 'block';
}, 2000);
</script>

<div id="titrePrincipal" style="display: none;"></div>