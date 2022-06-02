<!DOCTYPE html>
<html>
    <head>
        <title>DB</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données</h1>  
        <?php
            $servername = '10.57.29.58';
            $username = 'user';
            $password = 'root';
            $port = '3306';
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=base; port=$port", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion terminée avec succes';

                $sql = 'SELECT id, name, email FROM authors';

                foreach  ($conn->query($sql) as $row) {
                    print $row['id'] . "\t";
                    print $row['name'] . "\t";
                    print $row['email'] . "\n";
                }
                
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            };

        ?>
    </body>
</html>