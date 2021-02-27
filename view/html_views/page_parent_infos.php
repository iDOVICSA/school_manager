<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">
<style>
  .top-100 {
    top: 100%
  }

  .bottom-100 {
    bottom: 100%
  }

  .max-h-select {
    max-height: 300px;
  }
</style>
<html>

<body>

  <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
    <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
      <img src="./images/cover_eleve_page.jpg" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        <img src="./images/avatar.png" class="h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold"><?php echo $parent_infos['nom'] . " " . $parent_infos['prenom']; ?></h1>
        <form method="POST" action="deconnexion">
          <div class="block md:flex items-center justify-between">
            <button type="submit" class="align-middle bg-white hover:bg-indigo-600 text-center px-4 py-2 text-black text-sm font-semibold rounded-lg inline-block shadow-lg">Déconnexion</button>
          </div>
        </form>
      </div>

    </div>

    <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
      <div class="py-2">
        <h3 class="text-2xl font-semibold">Mes Informations</h3>
        <hr>
      </div>
      <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

        <div class="form-item w-full">
          <label class="text-xl ">Nom</label>
          <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
            <p class="text-black"><?php echo $parent_infos["nom"]; ?></p>
          </div>
        </div>

        <div class="form-item w-full">
          <label class="text-xl ">Prénom</label>
          <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
            <p class="text-black"><?php echo $parent_infos["prenom"]; ?></p>
          </div>
        </div>
        <div class="form-item w-full">
          <label class="text-xl ">Date de naissance</label>
          <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
            <p class="text-black"><?php echo $parent_infos["date_naissance"]; ?></p>
          </div>
        </div>
      </div>

      <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

        <div class="form-item w-1/3">
          <label class="text-xl ">Email</label>
          <div class="bg-indigo-600 bg-opacity-25  w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25">
            <p class="text-black"><?php echo $parent_infos["email"]; ?></p>
          </div>
        </div>
      </div>


      <div class="py-2">
        <h3 class="text-2xl font-semibold">Mes fils</h3>
        <hr>
      </div>

      <div class="flex flex-col py-4">
        <div class="w-full md:w-1/2 flex flex-col items-center h-64">
          <div class="w-full ">
            <div class="flex flex-col items-center relative">
              <div class="absolute shadow bg-white top-100 z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                <div class="flex flex-col w-full">
                  <?php
                  foreach ($parent_fils as $fils) {
                  ?>
                    <form action="eleve_info" method="POST">
                      <button type="submit" name="submit" class="w-full">

                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100">
                          <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-6 flex flex-col items-center">
                              <div class="flex relative w-5 h-5 bg-orange-500 justify-center items-center m-1 mr-2 w-4 h-4 mt-1 rounded-full "><img class="rounded-full" alt="A" src="./images/avatar.png"> </div>
                            </div>
                            <div class="w-full items-center flex">
                              <div class="mx-2 -mt-1 text-left	 "><?php echo $fils["nom"] . $fils["prenom"] ?>
                                <div class="text-xs truncate w-full normal-case font-normal -mt-1 text-gray-500"><?php echo $fils["email"] ?></div>
                              </div>
                            </div>
                          </div>
                          <?php
                          echo "<input type='hidden' name='matricule' value=" . $fils['matricule'] . ">";
                          ?>
                      </button>
                    </form>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>