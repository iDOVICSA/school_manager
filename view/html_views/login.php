<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<div class="p-10">
   <!--Card 1-->
   <div class=" m-auto max-w-sm rounded overflow-hidden shadow-lg"> 
            <div class="w-full lg:w-2/3 px-6 py-16">
                <div class="mb-4 font-light tracking-widest text-2xl">Connexion</div>
                <form method="POST" action="login" >
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                        <input type="email" name="email"  class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm text-gray-800">Mot de passe</label>
                        <input type="password" name="password"  class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"  required>
                    </div>
                    <?php echo "<input type='hidden' name='user_type' value=" . $user_type ."></input>" ?>

                    <div class="block md:flex items-center justify-between">
                        <button type="submit" class="align-middle bg-blue-500 hover:bg-blue-600 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">Connexion</button>
                    </div>
                </form>
        </div>   </div>
</div>

</html>