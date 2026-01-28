<?php include '../includes/header.php'; ?>
<link href = "../css/manga1.css" rel = "stylesheet">
<link href = "../css/manga2.css" rel = "stylesheet">

<h1> Jujutsu Kaisen</h1>
<div id = "db">
    <img src = "https://cdn.cultura.com/cdn-cgi/image/width=830/media/pim/TITELIVE/4_9791032705544_1_75.jpg" width = '200' height = '300'>
    <img src = "https://m.media-amazon.com/images/I/815taz8gMaL._AC_UF1000,1000_QL80_.jpg" width = '200' height = '300'>
    <img src = "https://cdn.kobo.com/book-images/ba8537d9-53cd-4c3f-ad5a-9843dcabd080/1200/1200/False/jujutsu-kaisen-vol-11.jpg" width = '200' height = '300'>
    <img src = "https://imusic.b-cdn.net/images/item/original/803/9781974714803.jpg?gege-akutami-2020-jujutsu-kaisen-vol-4-paperback-book&class=scaled&v=1581939092" width = '200' height = '300'> 
</div>

<form method="post">
            <p>Laissez votre avis sur la serie animée Jujutsu Kaisen</p>
    <div>
        <h2>Votre commentaire</h2>
        <input id = "username" type="text" name="username" placeholder="Username">
        <h3>Ecrivez votre avis ici, ne vous limitez pas !</h3>
        <input id = "avis" type="text" name="commentaire">

        <button type="submit">Envoyer</button>
    </div>
</form>


<?php include '../includes/footer.php'; ?>