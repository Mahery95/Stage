<?php
try{
    $access=new pdo("mysql:host=localhost:3307;dbname=vitrine;charset=utf8", "root", "");
    $access->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_WARNING);
} catch (Exception $e)
{
    $e->getMessage();
}
?>

<?php
    define('BDD_HOST',          'localhost:3307');
    define('BDD_UTILISATEUR',   'root');
    define('BDD_PASSWORD',       '');
    define('BDD_BDD',            'vitrine');
?>