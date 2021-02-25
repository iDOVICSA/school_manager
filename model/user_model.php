<?php
require_once('connection_model.php');

class user_model
{

    public function login_model()
    {
        $connection_model = new connection_model();
        $c = $connection_model->connexion();

        $sql = "select * from users where (email,password,user_type) = (?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([$_POST['email'], $_POST["password"], $_POST['user_type']]);
        $user =  $row->fetch();
        if ($user == null) {
            echo "compte inexistant";
        } else {
            if ($_POST['user_type'] == 4) {
                $sql = "select * from users INNER JOIN eleve on users.user_id=eleve.user_id where (email,password,user_type) = (?,?,?)";
                $row = $c->prepare($sql);
                $row->execute([$_POST['email'], $_POST["password"], $_POST['user_type']]);
                $eleve =  $row->fetch();
                session_start();
                $_SESSION["valid"] = true;
                $_SESSION['matricule'] = $eleve['matricule'];
                header('Location: eleve_info');
            }
        }
        $connection_model->deconnexion($c);
    }
}
