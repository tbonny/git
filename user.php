class user
    {

        private $_nomuser;
        private $_IDadmin;
        private $_mdp;

        public function inscription($nomuser,$mdp){
            try
            {
                $BDD = new PDO('mysql:host=localhost; dbname=nombdd; charset=utf8','root','');
                $variable = $BDD->query('INSERT INTO nomtable (nomclasse1, nomclasse2) VALUES ("'.$nomuser.'","'.$mdp.'")');
            }

        catch (Exception $erreur)
        {
            echo 'Erreur : '.$erreur->getmessage();
        }
    }