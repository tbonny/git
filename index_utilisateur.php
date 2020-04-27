<?php
class utilisateur
{
    private $_nom_user;
    private $_ID_admin;
    private $_mdp;

public function inscription($id_user, $mdp_user){
    try
    {
        //execution du code sur la BDD 
        $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
        $inscription = $BDD->query('INSERT INTO `inscription` (`nom_user`, `mdp`) VALUES ("'$this->.$id_user.'","'$this->.$mdp_user.'")');
    
    }

    catch (Exception $erreur)
    {
        echo 'Erreur : '.$erreur->getmessage();
    }
}
}
?>