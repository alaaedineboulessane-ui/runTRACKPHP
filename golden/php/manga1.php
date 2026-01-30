<?php
include '../includes/header.php';

if (!empty($_POST['commentaire']) && isset($_SESSION['id'])) {
    $message = $_POST['commentaire'];
    $id_user = $_SESSION['id'];

    $sql = "INSERT INTO message (commentaire, id_user, date)
            VALUES (:commentaire, :id_user, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':commentaire' => $message,
        ':id_user' => $id_user
    ]);

    header("Location: avis.php");
    exit;
}
?>

<link href="../css/manga1.css" rel="stylesheet">

<h1>Dragon Ball Super</h1>

<div id="db">
    <img src="https://i5.walmartimages.com/seo/Dragon-Ball-Super-Dragon-Ball-Super-Vol-16-Book-16-Paperback-9781974732111_89db6cee-f2cf-48ca-9986-0a9cd09ad56b.2f9cbd2a90adb71cb398600bbeb8b014.jpeg" width="200" height="300">
    <img src="https://m.media-amazon.com/images/I/81pdWSGFE9L.jpg" width="200" height="300">
    <img src="https://images.epagine.fr/905/9782344056905_1_75.jpg" width="200" height="300">
    <img src="https://m.media-amazon.com/images/I/81-muPwa5qL.jpg" width="200" height="300">
</div>

<form method="post">
    <p>Laissez votre avis sur la série animée Dragon Ball Super</p>
    <div>
        <h2>Votre commentaire</h2>
        <textarea id="avis" name="commentaire" required></textarea>
        <button type="submit">Envoyer</button>
    </div>
</form>

<?php include '../includes/footer.php'; ?>
