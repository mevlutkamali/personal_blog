<?php 
    include 'connect.php'; // PDO bağlantısı burada yapılıyor

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Form verilerini al ve filtrele
        $name_surname_db = htmlspecialchars(trim($_POST['name-surname']));
        $email_db = htmlspecialchars(trim($_POST['email']));
        $phone_db = htmlspecialchars(trim($_POST['phone']));
        $topic_db = htmlspecialchars(trim($_POST['topic']));
        $priority_db = htmlspecialchars(trim($_POST['priority']));
        $message_db = htmlspecialchars(trim($_POST['message']));
        $captcha_db = trim($_POST['captcha']);

        // Basit captcha kontrolü (3 + 4 = 7)
        if ($captcha_db !== "7") {
            header("Location: index.php?situation=no");
            exit;
        }

        // Mesaj verilerini veritabanına kaydet
        $add_contact_form = $db->prepare("INSERT INTO contents SET
            contact_name_surname = :contact_name_surname,
            contact_mail = :contact_mail,
            contact_phone = :contact_phone,
            contact_message = :contact_message
        ");

        $add = $add_contact_form->execute(array(
            'contact_name_surname' => $name_surname_db,
            'contact_mail' => $email_db,
            'contact_phone' => $phone_db,
            'contact_message' => $message_db
        ));

        if($add) {
            header("Location: index.php?situation=ok");
            exit;
        } else {
            header("Location: index.php?situation=no");
            exit;
        }
    }
?>
