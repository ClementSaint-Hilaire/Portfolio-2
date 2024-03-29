<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/creations.css">
    <title>csh</title>
</head>
<body>
    <section class="creation_container">
         
    <?php
    include '../config/database.php';
    $query = $db->prepare("SELECT * FROM cards");

    if ($query->execute()) {
        $query->bindColumn('id', $id);
        $query->bindColumn('img', $img);
        $query->bindColumn('titre', $titre);
                    
        while ($query->fetch(PDO::FETCH_BOUND)) {
        
            echo '<a class="cards" href="">';
                echo '<img src="' . htmlspecialchars($img) . '">';
                echo '<div class="titre">';
                    echo '<h1>' . htmlspecialchars($titre) . '</h1>';
                echo '</div>';
            echo '</a>';
        }
        
    } else {
        echo "Erreur lors de l'exécution de la requête : " . $query->errorInfo()[2];
    }
    
    $db = null; 
?>


    </section>
</body>
</html>