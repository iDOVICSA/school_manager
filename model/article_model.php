<?php
 require_once('connection_model.php');
 class article_model {
    
    public function get_article_model ($id_article) {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 
        $sql = "select * from article where (id_article) =(?)" ;
        $row = $c->prepare($sql) ;    
        $row->execute([$id_article]) ; 
        $connection_model->deconnexion($c) ; 
        return $row->fetch(); 
    }

    public function get_all_articles_model ($audiance) {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 
        $sql = "select * from article where (audiance_article) = (?)" ;
        $row = $c->prepare($sql) ;    
        $row->execute([$audiance]) ; 
        $connection_model->deconnexion($c) ; 
        return $row->fetchAll(); 
    }
    public function ajout_article_model() {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if(isset($_POST["Tous"])){
            $audiance = 1 ;
          }
          elseif(isset($_POST["Enseignants"])) {
            $audiance = 2 ;

          }
          elseif(isset($_POST["Parents"])) {
            $audiance = 3 ;

          }
     
          elseif(isset($_POST["Primaire"])) {
            $audiance = 4 ;

          }
          elseif(isset($_POST["Moyen"])) {
            $audiance = 5 ;
          }
          elseif(isset($_POST["Secondaires"])) {
            $audiance = 6 ;

          }
        $sql = "INSERT INTO article  (title,image,description,audiance_article) VALUES(?,?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([$_POST['title'],basename($_FILES["fileToUpload"]["name"]),$_POST["description"],$audiance]);
    }

}

?>
