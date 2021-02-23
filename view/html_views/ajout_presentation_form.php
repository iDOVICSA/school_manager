<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<!-- component -->
<form method="POST" action="ajout_presentation_ecole" enctype="multipart/form-data">
    <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

        <div class="text-2xl mb-6 text-center ">
            Ajouter paragraphe à la presentation de l'école !
        </div>

        <div class="space-y-5">

            <div class="col-span-2 lg:col-span-1">
                <textarea name="presentation" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Presentation"></textarea>
            </div>



            <div class="flex flex-col text-sm py-3">
                <label for="title" class="font-bold mb-2">Selectionner une image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">

            </div>

            <div class="col-span-2 text-right">
                <button type="submit" name="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                    Submit
                </button>
            </div>

        </div>
    </div>
</form>

</html>