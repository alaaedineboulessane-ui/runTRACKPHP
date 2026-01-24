<?php
include './config.php';
include '../includes/header.php';


if (!isset($_SESSION['user']) || $_SESSION['user']['username'] !== 'admin') {
    header("Location: index.php");
    exit;
}

try {
    $sql = "SELECT id, nom, prenom, username FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
    exit;
}
?>
<link href = "../css/admin.css" rel = "stylesheet">

<main>
    <h2>Bienvenue dans la page Administrateur</h2>
    <h2>Liste des utilisateurs</h2>

    <?php if (!empty($users)): ?>
        <table border="2" cellpadding="10" style="margin: 20px auto; background-color: rgba(0,0,0,0.7); color: white; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Identifiant</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['nom']) ?></td>
                        <td><?= htmlspecialchars($user['prenom']) ?></td>
                        <td><?= htmlspecialchars($user['username']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align:center; color:white;">Aucun utilisateur trouvé.</p>
    <?php endif; ?>
</main>

<?php include '../includes/footer.php'; ?>
