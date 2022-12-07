<?php require_once("include/header.php") ?>
<main class="lab lab2 w-screen h-screen bg-opacity-50 flex flex-col items-center justify-center">
	<div class="p-10 bg-white shadow bg-gray-200 rounded-lg flex flex-col gap-4 w-[500px]">
		<h1 class="text-3xl text-slate-500 text-center"> Choisissez le fichier remote à récupérer </h1>

		<form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST" class="flex flex-col gap-6">
			<label for="url" class="text-lg">Lien:</label>
			<input type="text" name="url" placeholder="http://exemple.sn/myfile.txt"  class="p-4 outline-none rounded-lg" />
			<button type="submit" class="bg-slate-500 text-white p-4 rounded-lg hover:bg-sky-600 ">valider</button>
		</form>
		
		<h3>Contenu:  </h3>
		<p class="bg-gray-300 overflow-hidden h-[200px] overflow-y-scroll word-break p-4 rounded-lg shadow w-full">
			<?php

				if(isset($_POST['url'])) {


					$file = strtolower($_POST['url']);
					$ok = false;

					if(strstr($file, 'localhost') == false && preg_match('/(^https*:\/\/[^:\/]+)/', $file) ==true ) {
					  
						$host = parse_url($file, PHP_URL_HOST);
						
						if(filter_var($host, FILTER_VALIDATE_IP)) {
								if(filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE |  FILTER_FLAG_NO_RES_RANGE) == false) 
									echo "L'IP est dans une plage privé ou Invalide";
								else $ok = true;
						} else $ok = true;
							
					  
					  }
					  
					  else if(strstr(strtolower($file), 'localhost') == true && preg_match('/(^https*:\/\/[^:\/]+)/', $file)==true) 
						
							echo "Vous essayez d'accéder par localhost o_0 ?";
						
					  
					  else  echo "Lien Invalide";
					  if($ok == true) echo htmlentities(file_get_contents($file));
					
				}	
			?>
		</p>
	<div>
</main>
<?php require_once("include/footer.php") ?>
