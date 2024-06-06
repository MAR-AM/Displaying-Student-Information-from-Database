<?php 
        $conn  = new PDO('mysql:host=localhost; dbname=centre_formation','Mama','Mama@123@');

        $requete = "SELECT * FROM etudiant";
        $resultat = $conn->query($requete);
    
        $data = $resultat ->fetchAll(PDO::FETCH_ASSOC);
        // print_r ($data);

        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>num CIN </td>
            <td>NOM ETUDIANT</td>
            <td>PRENOM ETUDIANT</td>
            <td> Date Naissance</td>
            <td> Adresse </td>


        </tr>
    
    <?php foreach ($data as $i):  ?>
        <tr>
            <td><?php echo $i['numCINEtu'] ?></td>
            <td><?php echo $i['nomEtu'] ?></td>
            <td><?php echo $i['prenomEtu'] ?></td>
            <td><?php echo $i['dateNaissance'] ?></td>
            <td><?php echo $i['adressEtu'] ?></td>


        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
