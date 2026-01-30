<?php 
include './config.php';
include '../includes/header.php'; 


if (!empty($_POST['message']) && !empty($_SESSION['id'])) {
    $id_user = $_SESSION['id']; 
    $message = $_POST['message'];
    //$date = date(y-m-d);

    $sql = $pdo->prepare("
        INSERT INTO message (message, id_user, date)
        VALUES (?, ?, now())
    ");
    $sql->execute([$message, $id_user]);
    header("Location: avis.php");
    exit;
}

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}
?>
<link href = "../css/manga1.css" rel = "stylesheet">
<link href = "../css/manga4.css" rel = "stylesheet">

<h1> Naruto</h1>
<div id = "db">
    <img src = "https://m.media-amazon.com/images/I/71GsyZF5AyL._AC_UF1000,1000_QL80_.jpg" width = '200' height = '300'>
    <img src = "https://bdi.dlpdomain.com/album/9782505063568-couv-M480x676.jpg" width = '200' height = '300'>
    <img src = "https://cdn.kobo.com/book-images/e317ee64-ab71-4f23-9636-e6812a42076c/1200/1200/False/naruto-vol-4.jpg" width = '200' height = '300'>
    <img src = "https://m.media-amazon.com/images/I/911kKl0-j4L._AC_UF1000,1000_QL80_.jpg" width = '200' height = '300'> 
</div>

<form method="post">
            <p>Laissez votre avis sur la serie animée Naruto</p>
    <div>
        <h2>Votre commentaire</h2>
        <h3>Ecrivez votre avis ici, ne vous limitez pas !</h3>
        <textarea id = "avis"  name="message" rows="4" cols="50">
Écrivez votre commentaire ici
</textarea>

       <!-- <button type="submit">Envoyer</button> -->
        <input type="submit" name = "submit" value="envoyer">
    </div>
</form>


<?php include '../includes/footer.php'; ?>