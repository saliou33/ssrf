<?php require_once("include/header.php") ?>
<main class="lab lab1 w-screen h-screen bg-opacity-50 flex flex-col items-center justify-center">
	<div class="p-10 bg-white shadow bg-gray-200 rounded-lg flex flex-col gap-4 w-[500px]">
		<h1 class="text-3xl text-sky-800 text-center"> Choisissez le fichier à lire </h1>

		<form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST" class="flex flex-col gap-6">
			<label for="url" class="text-lg text-orage-400">Nom Fichier:</label>
			<input type="text" name="url" placeholder="myfile.txt"  class="p-4 outline-none rounded-lg" />
			<button type="submit" class="bg-sky-400 text-white p-4 rounded-lg hover:bg-sky-600">valider</button>
		</form>

		<h3>Contenu:  </h3>
		<p class="bg-gray-300 overflow-hidden h-[200px] overflow-y-scroll word-break p-4 rounded-lg shadow w-full">
			<?php
				if(isset($_POST['url'])){
					echo htmlentities(file_get_contents($_POST['url']));
				}
			?>
		</p>
	<div>
</main>
<?php require_once("include/footer.php") ?>
