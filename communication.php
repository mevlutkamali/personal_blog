<?php 
    global $resultMessage;
    global $errorMessage;

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (!$name) {
            $errorMessage .= "<br>Lütfen isim alanını doldurunuz!";
        }
        if (!$email) {
            $errorMessage .= "<br>Lütfen E-Mail alanını doldurunuz!";
        }
        if (!$subject) {
            $errorMessage .= "<br>Lütfen konu alanını doldurunuz!";
        }
        if (!$message) {
            $errorMessage .= "<br>Lütfen mesaj alanını doldurunuz!";
        }

        if ($errorMessage) {
            $resultMessage = "<div style='color:red;'>$errorMessage</div>";
        } else {
            $mailSuccess = mail(
                "mevlutKamalii@gmail.com",
                "Web Sitesinin İletişim Formundan Gelen Mesaj",
                "Gönderen: $name\nE-Mail: $email\nKonu: $subject\nMesaj: $message",
                "From: $email"
            );
            if ($mailSuccess) {
                $resultMessage = "<div style='color:green;'>Mesajınız başarıyla gönderildi.</div>";
            } else {
                $resultMessage = "<div style='color:red;'>Mesaj gönderilirken bir hata oluştu. Lütfen tekrar deneyiniz.</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>İletişim | Mevlüt Kamalı</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./communication.css">
</head>
<body>
    <div class="container">
        <div class="contents fade-slide-up delay-2">
            <div class="navBar">
                <h2>&lt; M_Kamalı /&gt;</h2>
                <div class="navLinks">
                    <a href="./index.html">Hakkımda</a>
                    <a href="#">Projeler</a>
                    <a href="./communication.php">İletişim</a>
                    <a href="./Mevlut_Kamali_CV.pdf" target="_blank" class="cv-button">CV</a>
                </div>
            </div>

            <div class="contentSection fade-slide-up delay-3">
                <h2 style="text-align: center; margin-bottom: 20px;">İletişim Formu</h2>
                <?php if(isset($resultMessage)) echo $resultMessage; ?>
                <form class="contactForm" method="POST" action="">
                    <label for="name">Ad Soyad:</label>
                    <input type="text" name="name" id="name" placeholder="Adınız Soyadınız" required />

                    <label for="email">E-posta:</label>
                    <input type="email" name="email" id="email" placeholder="E-posta adresiniz" required />

                    <label for="subject">Konu:</label>
                    <input type="text" name="subject" id="subject" placeholder="Mesaj Konusu" required />

                    <label for="message">Mesaj:</label>
                    <textarea id="message" name="message" rows="6" placeholder="Mesajınız" required></textarea>

                    <button type="submit" name="submit">Gönder</button>
                </form>

                <p style="text-align: center; margin-top: 20px;">Telefon: +90 539 218 9569</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
