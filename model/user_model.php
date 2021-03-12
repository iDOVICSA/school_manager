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
                $_SESSION["user_type"] = 4 ; 
                $_SESSION['matricule'] = $eleve['matricule'];
                header('Location: eleve_info');
            }
            if ($_POST['user_type'] == 3) {
                $sql = "select * from users INNER JOIN parent on users.user_id=parent.user_id where (email,password,user_type) = (?,?,?)";
                $row = $c->prepare($sql);
                $row->execute([$_POST['email'], $_POST["password"], $_POST['user_type']]);
                $parent =  $row->fetch();
                session_start();
                $_SESSION["valid"] = true;
                $_SESSION["user_type"] = 3 ; 
                $_SESSION['parent_id'] = $parent['parent_id'];
                header('Location: parent_info');
            }
            if ($_POST['user_type'] ==1) {
                
                session_start();
                $_SESSION["valid"] = true;
                $_SESSION["user_type"] = 1 ; 
                 header('Location: ajout_article_form');
            }

        }
        $connection_model->deconnexion($c);
    }
}
