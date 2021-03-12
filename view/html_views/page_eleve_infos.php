<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<body>
    <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
        <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
            <img src="./images/cover_eleve_page.jpg" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                <img src="./images/avatar.png" class="h-24 w-24 object-cover rounded-full">
                <h1 class="text-2xl font-semibold"><?php echo $eleve['nom'] . " " . $eleve['prenom']; ?></h1>
                <form method="POST" action="deconnexion">
                    <div class="block md:flex items-center justify-between">
                        <button type="submit" class="align-middle bg-white hover:bg-indigo-600 text-center px-4 py-2 text-black text-sm font-semibold rounded-lg inline-block shadow-lg">Déconnexion</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
            <div class="px-4 pt-4">
                <form action="" class="flex flex-col space-y-8">

                    <div>
                        <h3 class="text-2xl font-semibold">Mes Informations</h3>
                        <hr>
                    </div>

                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                        <div class="form-item w-full">
                            <label class="text-xl ">Nom</label>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $eleve["nom"]; ?></p>
                            </div>
                        </div>

                        <div class="form-item w-full">
                            <label class="text-xl ">Prénom</label>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $eleve["prenom"]; ?></p>
                            </div>
                        </div>
                        <div class="form-item w-full">
                            <label class="text-xl ">Date de naissance</label>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $eleve["date_naissance"]; ?></p>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                        <div class="form-item w-full">
                            <label class="text-xl ">Matricule</label>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $eleve["matricule"]; ?></p>
                            </div>
                        </div>

                        <div class="form-item w-full">
                            <label class="text-xl ">Email</label>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $eleve["email"]; ?></p>
                            </div>
                        </div>
                        <div class="form-item w-full">
                            <label class="text-xl ">Classe</label>
                            <?php
                            $classe = $eleve['annee_cycle'] . " année cycle ";
                            switch ($eleve["cycle"]) {
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
                            $classe = $classe . $eleve["numero_group"];

                            ?>
                            <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
                                <p class="text-black"><?php echo $classe; ?></p>
                            </div>
                        </div>

                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold ">Mon Emploi du temps</h3>
                        <hr>
                    </div>
                    <div class="text-center grid grid-cols-7 gap-4 bg-indigo-600 bg-opacity-25 w-full">
                        <div>
                            <div class="mb-5">Samedi</div>
                            <div class="mb-5">
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Samedi") {
                                        echo "<div class='mb-5'>";

                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";

                                        //   echo "<div>" . $eleve_note['note'] . "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">Dimanche</div>
                            <div>
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Dimanche") {
                                        echo "<div class='mb-5'>";
                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">Lundi</div>
                            <div>
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Lundi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";

                                        //   echo "<div>" . $eleve_note['note'] . "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">Mardi</div>
                            <div>
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Mardi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">Mercredi</div>
                            <div>
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Mercredi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">Jeudi</div>
                            <div>
                                <?php
                                foreach ($eleve_edt as $edt) {
                                    if ($edt['jour'] == "Jeudi") {
                                        echo "<div class='mb-5'>";
                                        echo substr($edt['heure_debut'], 0, -3) . " - ";
                                        echo substr($edt['heure_fin'], 0, -3);
                                        echo "<br>";
                                        echo $edt['nom_matiere'];
                                        echo "</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                      
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold ">Mes notes</h3>
                        <hr>
                    </div>

                    <div class="grid grid-cols-2 gap-4 bg-indigo-600 bg-opacity-25 w-1/2">
                        <div>Matière</div>
                        <div>Note</div>
                        <?php
                        foreach ($eleve_notes as $eleve_note) {
                            echo "<div>" . $eleve_note['nom_matiere'] . "</div>";
                            echo "<div>" . $eleve_note['note'] . "</div>";
                        }
                        ?>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold">Activité extra scolaire</h3>
                        <hr>
                    </div>
                    <div class="form-item w-full">
                        <textarea cols="30" rows="10" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled> <?php echo $eleve['activite_extra_scolaire'] ?> </textarea>
                    </div>


                </form>
            </div>
        </div>


    </div>
</body>

</html>