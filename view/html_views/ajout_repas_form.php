<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>
<main class="flex-1 bg-gray-200 dark:bg-gray-900 overflow-y-auto transition
		duration-500 ease-in-out">
    <!-- component -->
    <form method="POST" action="ajout_repas" enctype="multipart/form-data">
        <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

            <div class="text-3xl mb-6 text-center ">
                Gestion Restauration
            </div>

            <div class="space-y-5">


                <div class="w-full ">
                    <label>Samedi</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input  name="repas_samedi" value=<?php echo $tous_repas[5]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
                </div>
                
                <div class="w-full ">
                    <label>Dimanche</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input name="repas_dimanche" value=<?php echo $tous_repas[0]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
                </div>
                <div class="w-full ">
                    <label>Lundi</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input name="repas_lundi" value=<?php echo $tous_repas[1]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
                </div>
                <div class="w-full ">
                    <label>Mardi</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input name="repas_mardi" value=<?php echo $tous_repas[2]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
                </div>
                <div class="w-full ">
                    <label>Mercredi</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input name="repas_mercredi" value=<?php echo $tous_repas[3]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
                </div>
                <div class="w-full ">
                    <label>Jeudi</label>
                    <div class="col-span-2 lg:col-span-1">
                        <input name="repas_jeudi" value=<?php echo $tous_repas[4]["repas"] ?> type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="repas" />
                    </div>
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