<?php
require_once('./controller/article_controller.php');
require_once('./controller/page_acceuil_controller.php');
require_once('./controller/page_presentation_ecole_controller.php');
require_once('./controller/page_contact_controller.php');
require_once('./controller/page_espace_eleve_controller.php');
require_once('./controller/eleve_controller.php');
require_once('./controller/user_controller.php');
require_once('./model/connection_model.php');
require_once('./controller/enseignant_controller.php');
require_once('./controller/seance_controller.php');
require_once('./controller/reception_controller.php');
require_once('./controller/page_espace_parent_controller.php');
require_once('./controller/parent_controller.php');
require_once('./controller/repas_controller.php');


if ($_GET["route"] == 'Acceuil') {
      $pa = new page_acceuil_controller();
      $pa->afficher_page_acceuil_controller();
};


if ($_GET["route"] == 'presentationEcole') {
      $pe = new page_presentation_ecole_controller();
      $pe->afficher_page_presentation_controller();
};

if ($_GET["route"] == 'login') {
      $uc = new user_controller();
      $uc->login_controller();
};


if ($_GET["route"] == 'deconnexion') {
      session_start();
      session_unset();
      session_destroy();
      header('Location: Acceuil');
};

if ($_GET["route"] == 'cycleprimaire') {
      echo 'page primaire';
};
if ($_GET["route"] == 'cyclemoyen') {
      echo 'page cyclemoyen';
};
if ($_GET["route"] == 'cyclesecondaire') {
      echo 'page secondaire';
};


if ($_GET["route"] == 'contact_ecole') {
      $pc = new page_contact_controller();
      $pc->afficher_contact_controller();
};


if ($_GET["route"] == 'article_details') {
      $ac = new article_controller();
      $ac->afficher_article_details_controller($_POST["id_article"]);
};


// Les routes d'administrateur : -------------------------------------------------------------------------------


if ($_GET["route"] == 'admin') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            header('Location:  ajout_article_form');
      } else {
            $ac = new user_controller();
            $ac->afficher_page_login_admin_controller();
      }
};



if ($_GET["route"] == 'ajout_article_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            $ac = new article_controller();
            $ac->afficher_ajout_article_form_controller();
      } else {
            header('Location:  admin');
      }
};

if ($_GET["route"] == 'ajout_article') {
      $ac = new article_controller();
      $ac->ajout_article_controller();
      header('Location:  admin');
};

if ($_GET["route"] == 'ajout_presentation_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            $pe = new page_presentation_ecole_controller();
            $pe->afficher_ajout_presentation_form_controller();
      } else {
            header('Location:  admin');
      }
};
if ($_GET["route"] == 'ajout_presentation_ecole') {
      $pe = new page_presentation_ecole_controller();
      $pe->ajout_presentation_form_controller();
      header('Location:  admin');
};
if ($_GET["route"] == 'modification_contact_ecole_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            $pc = new page_contact_controller();
            $pc->modification_contact_form_controller();
      } else {
            header('Location:  admin');
      }
};
if ($_GET["route"] == 'modification_contact_ecole') {
      $pc = new page_contact_controller();
      $pc->modification_contact_controller();
      header('Location:  admin');
};

if ($_GET["route"] == 'ajout_eleve_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            $pc = new eleve_controller();
            $pc->afficher_ajout_eleve_form_controller();
      } else {
            header('Location:  admin');
      }
};
if ($_GET["route"] == 'ajout_eleve') {
      $pc = new eleve_controller();
      $pc->ajout_eleve_controller();
      header('Location:  admin');
};

if ($_GET["route"] == 'ajout_seance_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {
            $pc = new seance_controller();
            $pc->afficher_ajout_seance_form_controller();
      } else {
            header('Location:  admin');
      }
};

if ($_GET["route"] == 'ajout_seance') {
      $pc = new seance_controller();
      $pc->ajout_seance_controller();
      header('Location:  ajout_seance_form');
};



if ($_GET["route"] == 'ajout_reception_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {

            $pc = new reception_controller();
            $pc->afficher_ajout_reception_form_controller();
      } else {
            header('Location:  admin');
      }
};

if ($_GET["route"] == 'ajout_reception') {
      $pc = new reception_controller();
      $pc->ajout_reception_controller();
      header('Location:  admin');
};


if ($_GET["route"] == 'ajout_repas_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {

            $pc = new repas_controller();
            $pc->afficher_ajout_repas_form_controller();
      } else {
            header('Location:  admin');
      }
};

if ($_GET["route"] == 'ajout_repas') {
      $pc = new repas_controller();
      $pc->ajout_repas_controller();
      header('Location:  ajout_repas_form');
};



if ($_GET["route"] == 'ajout_enseignant_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {

            $pc = new enseignant_controller();
            $pc->afficher_ajout_enseignant_form_controller();
      } else {
            header('Location:  admin');
      }
    
};

if ($_GET["route"] == 'ajout_enseignant') {
      $pc = new enseignant_controller();
      $pc->ajout_enseignant_controller();
      header('Location:  admin');
};



if ($_GET["route"] == 'ajout_parent_form') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 1) {

            $pc = new enseignant_controller();
            $pc->afficher_ajout_enseignant_form_controller();
      } else {
            header('Location:  admin');
      }
    
};


if ($_GET["route"] == 'ajout_parent') {
      $pc = new enseignant_controller();
      $pc->ajout_enseignant_controller();
      header('Location:  admin');
};


// l'espace enseignant -----------------------------------------------------------------------------------------


if ($_GET["route"] == 'espace_enseignant') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 2) {
            header('Location:  enseignant_info');
      } else {
            $ac = new user_controller();
            $ac->afficher_page_login_enseignant_controller();
      }
};

if ($_GET["route"] == 'enseignant_info') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 2) {
            $ec = new enseignant_controller() ; 
            $ec->afficher_enseignant_infos_controller($_SESSION['enseignant_id']) ; 
       } else {
            header('Location:  access_denied.php');
      }
};



// l'espace parent ---------------------------------------------------



if ($_GET["route"] == 'espace_parent') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 3) {
            header('Location:  parent_info');
      } else {
            $ee = new page_espace_parent_controller();
            $ee->afficher_page_espace_parent_controller();
      }
};

if ($_GET["route"] == 'parent_info') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 3) {
            $ec = new parent_controller();
            $ec->afficher_parent_infos_controller($_SESSION['parent_id']);
      } else {
            header('Location:  access_denied.php');
      }
};

// l'espace eleve --------------------------------------------------------------------------------
if ($_GET["route"] == 'espace_eleve') {
      session_start();
      if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 4) {
            header('Location:  eleve_info');
      } else {
            $ee = new page_espace_eleve_controller();
            $ee->afficher_page_espace_elever_controller();
      }
};
if ($_GET["route"] == 'eleve_info') {
      if (isset($_POST["matricule"])) { // this is true when accessing for parent
            $ec = new eleve_controller();
            $ec->afficher_eleve_infos_controller($_POST['matricule']);
      } else {
            session_start();
            if (isset($_SESSION['valid']) && $_SESSION['user_type'] == 4) {
                  $ec = new eleve_controller();
                  $ec->afficher_eleve_infos_controller($_SESSION['matricule']);
            } else {
                  header('Location:  access_denied.php');
            }
      }
};
