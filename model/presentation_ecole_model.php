<?php
 require_once('connection_model.php');

 class presentation_ecole_model {

    public function get_all_presentation_ecole_model() {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 
        $sql = "select * from presentationecole" ;
        $row = $c->prepare($sql) ;    
        $row->execute() ; 
        $connection_model->deconnexion($c) ; 
        return $row->fetchAll(); 
    }
    public function ajout_presentation_form_model() {
         
       $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
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
 
        $sql = "INSERT INTO presentationecole (presentation,image) VALUES(?,?)";
        $row = $c->prepare($sql);
        $row->execute([$_POST['presentation'],basename($_FILES["fileToUpload"]["name"] )]);
    }
}

?>
