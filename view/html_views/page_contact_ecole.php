<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<!-- component -->
<div class="flex items-center h-screen w-full justify-center">

<div class="max-w-xs">
    <div class="bg-white shadow-xl rounded-lg py-3">
        <div class="photo-wrapper p-2">
            <img class="w-42 h-32 rounded-full mx-auto" src="./images/logo.png" alt="Ecole tdw">
        </div>
        <div class="p-2">
            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Ecole Zighoud Youcef</h3>
            <div class="text-center text-gray-400 text-xs font-semibold">
                <p>Ensemble pour progresser</p>
            </div>
            <table class="text-xs my-3">
                <tbody><tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Adresse :</td>
                    <td class="px-2 py-2"><?php echo $contact_infos['adresse']; ?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Téléphone :</td>
                    <td class="px-2 py-2"><?php echo $contact_infos['num_tlf']; ?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Fax :</td>
                    <td class="px-2 py-2"><?php echo $contact_infos['num_fax']; ?></td>
                </tr>
            </tbody></table>

    

        </div>
    </div>
</div>

</div>
</html>