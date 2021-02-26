<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<!-- component -->
<form method="POST" action="ajout_reception" enctype="multipart/form-data">
    <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

        <div class="text-3xl mb-6 text-center ">
            Ajout reception
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
                <label>Date de reception</label>
                <input required name="date_reception" type="date" class="border-2 py-2  rounded-lg  w-full" placeholder="Prénom" />
            </div>
 
            <div class="w-full ">
                <label>Heure de reception</label>
                <input required name="heure_reception" type="time" class="border-2 py-2  rounded-lg  w-full" placeholder="Prénom" />
            </div>
 

            <div class="col-span-2 text-right">
                <button type="submit" name="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                    Ajouter
                </button>
            </div>

        </div>
    </div>
</form>

</html>