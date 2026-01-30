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
<link href = "../css/manga3.css" rel = "stylesheet">

<h1> Chainsaw Man</h1>
<div id = "db">
    <img src = "https://m.media-amazon.com/images/I/915CND+ThyL._UF1000,1000_QL80_.jpg" width = '200' height = '300'>
    <img src = "https://cdn.kobo.com/book-images/295bcae9-bfcb-4fab-9016-2326152c7c23/1200/1200/False/chainsaw-man-vol-11.jpg" width = '200' height = '300'>
    <img src = "https://cannonballread.com/wp-content/uploads/2024/02/81ZhgPj7hyL._AC_UF10001000_QL80_.jpg" width = '200' height = '300'>
    <img src = "https://cdn.archonia.com/images/1-104255401-1-1-original1/chainsaw-man-vol-12-gn-manga.jpg" width = '200' height = '300'> 
</div>

<form method="post">
            <p>Laissez votre avis sur la serie animée Chainsaw Man</p>
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