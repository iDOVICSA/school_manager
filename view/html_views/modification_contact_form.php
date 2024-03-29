<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>
<main  class="flex-1 bg-gray-200 dark:bg-gray-900 overflow-y-auto transition
		duration-500 ease-in-out">
<!-- component -->
<form method="POST" action="modification_contact_ecole" enctype="multipart/form-data">
    <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

        <div class="text-2xl mb-6 text-center ">
            Information de contact de l'école
        </div>

        <div class="space-y-5">

            <div class="col-span-2 lg:col-span-1">
                <input name="adresse" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="adresse" />
            </div>
            <div class="col-span-2 lg:col-span-1">
                <input name="num_tlf" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Numéro Téléphone" />
            </div>
            <div class="col-span-2 lg:col-span-1">
                <input name="num_fax" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Numéro fax" />
            </div>
            <div class="col-span-2 text-right">
                <button type="submit" name="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                    Modifier
                </button>
            </div>

        </div>
    </div>
</form>
</main>

</html>