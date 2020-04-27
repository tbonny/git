<html>
    <?php require("index_utilisateur.php");
    ?>
        <head>
            <title>exercice</title>
        </head>   
    <body>
            <form action="utilisateur.php" method="POST">
                <label >Identifiant</label>
                <input type="text" name="nom_user">
                <p></p>
                <label >MDP</label>
                <input type="password" name="mdp">
                <p></p>
                <label>Confimation du mot de passe</label>
                <input type="password" name="mdp2">
                <input type="submit">

                <?php
                    if(empty($_POST['nom_user'])&& empty($_POST['mdp']))
                    {

                    }else if($_POST['mdp']==$_POST['mdp2'])
                        {
                            $admin = new utilisateur();
                            $admin->inscription($_POST['nom_user'] ,$_POST['mdp']);
                            echo"Inscription validée";
                        }else{
                                echo"mot de passe ou nom d'utilisateur incorrect";
                                }

                     //pas de paramètres dans inscription et problème avec $this.identifiant + session
                ?>
             </form>
    </body>
</html>