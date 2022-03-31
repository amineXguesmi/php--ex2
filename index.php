<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Cours</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
        if(isset($_POST['vote']) && !isset($_COOKIE['vote'])){
            setcookie('vote',$_POST['vote'],time()+60*2,'/');
        ?>
            <div class="sucess">
                <h4>Votre vote a été bien enregistré !</h4>                
            </div>
        <?php
        }else if(isset($_POST['vote']) && isset($_COOKIE['vote'])){
        ?>        
            <div class="alert">
                <h4>Vous avez déjà voté "<?=$_COOKIE['vote'] ?>" !</h4>                
            </div>
        <?php
        }
    ?>
    
    <h1 class="a1">Sondage</h1>
<h2 class="a2">votre vis sur cours php :</h2>
    <form action="./index.php" method="post" class="row g-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <div class="form-check col-auto a1">
            <input type="radio" class="form-check-input " name="vote" id="bon" value="Bon" checked>
            <label for="bon" class="form-check-label">Bon</label>
        </div>
        <div class="form-check col-auto">
            <input type="radio" class="form-check-input" name="vote" value="Moyen" id="moyen">
            <label for="moyen" class="form-check-label">Moyen</label>            
        </div>
        <div class="form-check col-auto">
            <input type="radio" class="form-check-input" name="vote" value="Mauvais" id="mauvais">
            <label for="mauvais" class="form-check-label">Mauvais</label>
        </div>
        <button type="submit" class="btn btn-outline-success">Voter</button>
    </form>
</body>
</html>

