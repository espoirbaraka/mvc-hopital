<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste de medicaments</h1>
    <a href="?page=insererMedoc">Ajouter</a>

    <table>
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
         <?php

            foreach($data as $medicament)
            {
                echo "<tr>
                        <td>". $medicament['code_medicament'] ."</td>
                        <td>". $medicament['designation'] ."</td>
                        <td>". $medicament['description'] ."</td>
                        <td>". $medicament['pv'] ."</td>
                    </tr>";     
            }
        ?> 
    </table>

   
</body>
</html>