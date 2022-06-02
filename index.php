<html>
    <h1>Hello World</h1>
    <p>User list:</p>
</html>

<?php
// Database settings
$db="git_dyson_db";
$dbhost="10.57.29.58";
$dbport=3306;
$dbuser="root";
$dbpasswd="root";
try {
    $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
    $req = 'SELECT id, name, email FROM users';

    foreach ($pdo -> query($req) as $row) {
        print $row['id'] . "\t";
        print $row['name'] . "\t";
        print $row['email'] . "\n";
    }

}
catch {

}    
    $pdo = null;
 
?>