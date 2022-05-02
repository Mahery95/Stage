<?php require_once('./classes/bdd.php');?>

<?php
if(isset($_POST['send'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $name=$_POST['name'];
    $sexe=$_POST['sexe'];
    $age=$_POST['age'];

    if($email !== "" && $password !=="" && $firstname !=="" && $name !=="" && $sexe !=="" && $age !==""){
        $sql = "INSERT INTO users ('email', 'password', 'firstname', 'name', 'sexe', 'age') VALUES (:email, :password, :firstname, :name, :sexe, :age);";

        $bdd = new bdd();
        $bdd->execute($sql, array(
            ':email'  => $email,
            ':password'  => password_hash($password, PASSWORD_BCRYPT),
            ':firstname'  => $firstname,
            ':name'  => $name,
            ':sexe'  => $sexe,
            ':age'  => $age
        ));
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9f038b9bcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../back/style.css">
    <title>Inscription</title>
</head>
<body>

<div class="box_register">
    
    <h1 id="title_register"> Créer votre compte </h1>

    <form class="form" action="" method="post">
        
        <div class="form-group">
            
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
           
        </div>

        
        <div class="form-group">

            <label for="firstname">Prenom</label>
            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom"/>
        </div>


        <div class="form-group">

            <label for="name">Nom</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Entrez votre nom"/>
        </div>

        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pdw" placeholder="Entrez votre mot de passe">
        </div>

        <div class="form-group">

            <label for="name">Sexe</label>
            <input class="form-control" type="text" name="sexe" id="sexe" placeholder="Homme/Femme"/>

        </div>

        <div class="form-group">

            <label for="name">Age</label>
            <input class="form-control" type="int" name="age" id="age" placeholder="Entrez votre age"/>

        </div>

        <div class="mb-20 text-center">
            <button type="submit" class="btn btn-primary" name="send">Créer votre compte</button>
        </div>
       

</form>
</div>
</body>
</html>
    
