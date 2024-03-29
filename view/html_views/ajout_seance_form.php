<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>
<main class="flex-1 bg-gray-200 dark:bg-gray-900 overflow-y-auto transition
		duration-500 ease-in-out">
<!-- component -->
<form method="POST" action="ajout_seance" enctype="multipart/form-data">
    <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

        <div class="text-3xl mb-6 text-center ">
            Ajout seance
        </div>

        <div class="space-y-5">


            <div class="w-full ">
                <label>Enseignant</label>

                <select class="border-2 py-2 mt-2 rounded-lg  w-full" name="enseignant">
                    <?php
                    foreach ($enseignants as $enseignant) {
                    ?>
                        <option><?php echo $enseignant["enseignant_id"]. " : ". $enseignant["nom"] . " " . $enseignant["prenom"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="w-full ">
                <label>Classe</label>

                <select class="border-2 py-2  rounded-lg  w-full" name="classe">
                    <?php
                    foreach ($classes as $result) {
                        $classe = $result['annee_cycle'] . " année cycle ";
                        switch ($result["cycle"]) {
                            case 1:
                                $classe = $classe . "primaire groupe ";
                                break;
                            case 2:
                                $classe = $classe . "moyen groupe ";
                                break;
                            case 3:
                                $classe = $classe . "secondaire groupe ";
                                break;
                        }
                        $classe = $classe . $result["numero_group"];
                    ?>

                        <option><?php echo $result['classe_id']." : ". $classe; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="w-full ">
                <label>Matière</label>

                <select class="border-2 py-2  rounded-lg  w-full" name="matiere">
                    <?php
                    foreach ($matieres as $matiere) {
                    ?>
                        <option><?php echo $matiere['matiere_id']." : ". $matiere['nom_matiere']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="w-full ">
                <label>Jour</label>

                <select class="border-2 py-2  rounded-lg  w-full" name="jour">

                    <option>Samedi</option>
                    <option>Dimanche</option>
                    <option>Lundi</option>
                    <option>Mardi</option>
                    <option>Mercredi</option>
                    <option>Jeudi</option>
                    <option>Dimanche</option>
                </select>
            </div>
            <div class="w-full ">
                <label>heure debut de la séance</label>
                <input required name="heure_debut" type="time" class="border-2 py-2  rounded-lg  w-full" placeholder="Prénom" />
            </div>
            <div class="w-full ">
                <label>heure fin de la séance</label>
                <input required name="heure_fin" type="time" class="border-2 py-2  rounded-lg  w-full" placeholder="Prénom" />
            </div>

            <div class="col-span-2 text-right">
                <button type="submit" name="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                    Ajouter
                </button>
            </div>

        </div>
    </div>
</form>
</main>

</html>