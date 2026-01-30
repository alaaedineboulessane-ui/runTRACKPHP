<?php 
include "../includes/header.php";
$conn = new PDO("mysql:host=localhost;dbname=golden", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$message = $conn->query("
    SELECT message.message, message.date, users.username
    FROM message
    JOIN users ON message.id_user = users.id
    ORDER BY message.date DESC
");
?>

<link href="../css/avis.css" rel="stylesheet">
<h1>Tous les commentaires</h1>


<?php if ($message->rowCount() === 0): ?>
    <p>Aucun avis pour le moment.</p>
<?php endif; ?>

<?php foreach ($message as $m): ?>
    <div>
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <strong><?= htmlspecialchars($m['username']) ?></strong><br>
        <?= nl2br(htmlspecialchars($m['message'])) ?><br>
        <small><?= $m['date'] ?></small>
    </div>
<?php endforeach; ?>

<?php include "../includes/footer.php" ?>