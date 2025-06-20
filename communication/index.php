<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Mevlüt Kamalı</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../script.js" defer></script>
    <style>
        :root {
            --skills-title: #ff8500;
            --gradient-start: #ff8500;
            --gradient-end: #eb1254;
            --bg-light: #f5f5f5;
            --bg-dark: #222831;
            --text-light: #222831;
            --text-dark: #f0f0f0;
            --input-bg-light: #ffffff;
            --input-bg-dark: #2e2e2e;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-light);
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            padding: 30px 10px;
            min-height: 100vh;
        }

        body.dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }

        .navBar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #3d3d3d;
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            flex-wrap: nowrap;
            overflow-x: auto;
            white-space: nowrap;
        }

        .navLinks {
            display: flex;
            gap: 20px;
        }

        .navBar h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .navBar a {
            color: whitesmoke;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
            flex-shrink: 0;
        }

        .navBar a:hover {
            color: #f0c674;
            background-color: #555;
        }

        .form-map-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .map {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            height: 500px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .form-wrapper {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            max-width: 900px;
            flex: 1;
            min-width: 300px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            transition: background-color 0.3s;
        }

        body.dark-mode .form-wrapper {
            background-color: #2e2e2e;
        }

        h2 {
            text-align: center;
            color: var(--skills-title);
            margin-bottom: 30px;
        }

        .form-label {
            display: block;
            width: 100%;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .form-control {
            background-color: var(--input-bg-light);
            border: 1px solid #ccc;
            color: var(--text-light);
            border-radius: 10px;
            padding: 12px;
            font-size: 15px;
            transition: all 0.3s;
        }

        body.dark-mode .form-control {
            background-color: var(--input-bg-dark);
            color: var(--text-dark);
            border: 1px solid #555;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: var(--skills-title);
            border: none;
            border-radius: 10px;
            font-size: 16px;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #e17000;
        }

        .form-check-input:checked {
            background-color: var(--skills-title);
            border-color: var(--skills-title);
        }

        @media (max-width: 768px) {
            .navBar {
                flex-direction: column;
                gap: 10px;
                padding: 10px;
            }

            .form-map-container {
                flex-direction: column;
                align-items: center;
            }

            .form-wrapper {
                padding: 25px;
                margin: 20px;
            }
        }

        .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 8px;
        color: white;
        font-size: 16px;
        z-index: 1000;
        transition: opacity 0.5s ease;
    }

    .notification.success {
        background-color: #28a745; /* Yeşil arka plan */
    }

    .notification.error {
        background-color: #dc3545; /* Kırmızı arka plan */
    }
    </style>
</head>
<body>
    <div class="container fade-slide-up delay-1">
        <div class="navBar">
            <h2>&lt; M_Kamalı /&gt;</h2>
            <div class="navLinks">
                <a href="../index.html">Hakkımda</a>
                <a href="#">Projeler</a>
                <a href="./index.html">İletişim</a>
                <a href="../Mevlut_Kamali_CV.pdf" target="_blank" class="cv-button">CV</a>
            </div>
        </div>

        <div class="form-map-container">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.567693823992!2d32.50000000000001!3d37.87140000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08819c145c1ab%3A0xe2434ef3c5e4de0e!2sKonya%20Teknik%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1718798899999"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div id="notification" class="notification" style="display: none;"></div>

            <div class="form-wrapper fade-slide-up delay-2">
                <h2>İletişim Formu</h2>
                <form action="./process.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ad Soyad:</label>
                        <input type="text" class="form-control" id="name" name="name-surname" placeholder="Adınızı giriniz" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Mail adresi:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ornek@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon numarası:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="05xx xxx xx xx">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Konu:</label>
                        <select class="form-control" id="subject" name="topic" required>
                            <option value="">Bir konu seçin</option>
                            <option value="işbirliği">İş Birliği</option>
                            <option value="destek">Teknik Destek</option>
                            <option value="öneri">Öneri / Geri Bildirim</option>
                            <option value="diğer">Diğer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="priority" class="form-label">Mesaj Önceliği:</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="priority" id="priorityLow" value="normal" checked>
                                <label class="form-check-label" for="priorityLow">Normal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="priority" id="priorityHigh" value="acil">
                                <label class="form-check-label" for="priorityHigh">Acil</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Dosya ekleyin (isteğe bağlı):</label>
                        <input type="file" class="form-control" id="attachment" name="attachment" accept=".pdf,.doc,.jpg,.png">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mesajınız:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Mesajınızı buraya yazınız..." required></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">
                            <a href="#">Kullanım şartlarını</a> kabul ediyorum.
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Güvenlik doğrulaması: 3 + 4 = ?</label>
                        <input type="text" class="form-control" name="captcha" placeholder="Cevap" required>
                    </div>
                    <button type="submit" name="sendMessage">Gönder</button>
                </form>
            </div>
        </div>
    </div>

    <div class="dark-toggle" id="themeToggle" title="Tema Değiştir">
        <i class="fa-solid fa-circle-half-stroke"></i>
    </div>
</body>
<!-- JavaScript -->
<script type="text/javascript">
    const notification = document.getElementById('notification');

    <?php
        if (isset($_GET['situation']) && $_GET['situation'] == 'ok') {
            echo 'notification.classList.add("success");';
            echo 'notification.innerText = "Mesajınız başarılı bir şekilde iletildi.";';
            echo 'notification.style.display = "block";';
            echo 'setTimeout(() => { notification.style.opacity = 1; }, 100);';
            echo 'setTimeout(() => { notification.style.opacity = 0; setTimeout(() => { notification.style.display = "none"; }, 500); }, 3000);';
        } elseif (isset($_GET['situation']) && $_GET['situation'] == 'no') {
            echo 'notification.classList.add("error");';
            echo 'notification.innerText = "Mesajınız iletilemedi.";';
            echo 'notification.style.display = "block";';
            echo 'setTimeout(() => { notification.style.opacity = 1; }, 100);';
            echo 'setTimeout(() => { notification.style.opacity = 0; setTimeout(() => { notification.style.display = "none"; }, 500); }, 3000);';
        }
    ?>
</script>
</html>
