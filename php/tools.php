<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/tools.css">
    <title>csh</title>
</head>
<body>

<section class="tools_container" id="about">
    <img src="../img/tools.png" alt="tools">

    <div class="bouton_my_apps_container">
        <button class="bouton_apps">
            <h1>My apps</h1>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="14" width="2" height="30" fill="#75757A"/>
                <rect y="16" width="2" height="30" transform="rotate(-90 0 16)" fill="#75757A"/>
            </svg>
        </button>
        <div class="apps_container">
            <button class="bouton_apps_close">
                <h1>My apps</h1>
                <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="2.18164" width="2" height="30" transform="rotate(-90 0 2.18164)" fill="#75757A"/>
                </svg>
            </button>
            <div class="app_cards_container">
                <?php
                    include '../config/database.php';
                    $query = $db->prepare("SELECT * FROM appcard");
                    if ($query->execute()) {
                        $query->bindColumn('imglink', $img);
                        $query->bindColumn('nom', $nom);
                        $query->bindColumn('categorie', $categorie);
                        $query->bindColumn('description', $description);
                        while ($query->fetch(PDO::FETCH_BOUND)) {
                        
                            echo '<div class="appCard">';
                                echo '<h1>' . htmlspecialchars($categorie) . '</h1>';
                                echo '<h2>' . htmlspecialchars($nom) . '</h2>';
                                echo '<img src="' . htmlspecialchars($img) . '">';
                                echo '<h3>' . htmlspecialchars($description) . '</h3>';
                            echo '</div>';
                        }
                    } else {
                        echo "Erreur lors de l'exécution de la requête : " . $query->errorInfo()[2];
                    }
                    $db = null; 
                ?>
            </div>
        </div>
    </div>
</section>

</body>
<script src="../js/apps_bouton.js"></script>
</html>