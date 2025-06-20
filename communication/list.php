<?php 
include 'connect.php'; 

$contactInquiry = $db->prepare("SELECT * FROM contents");
$contactInquiry->execute();

$results = $contactInquiry->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Kayıtları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>İletişim Kayıtları</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ad Soyad</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Konu</th>
                    <th>Öncelik</th>
                    <th>Mesaj</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                foreach($results as $row): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= htmlspecialchars($row['contact_name_surname']); ?></td>
                        <td><?= htmlspecialchars($row['contact_mail']); ?></td>
                        <td><?= htmlspecialchars($row['contact_phone']); ?></td>
                        <td><?= htmlspecialchars($row['contact_topic']); ?></td>
                        <td><?= htmlspecialchars($row['contact_priority']); ?></td>
                        <td><?= nl2br(htmlspecialchars($row['contact_message'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
