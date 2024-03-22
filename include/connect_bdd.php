<?php
$pdo = null;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=SANNA_THOMAS', 'root', '$coursinterfaces24$');
?>
    <h1>Connexion à la base de données réussie</h1>
<?php
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
