<?php require_once("include/header.php") ?>

<img src="assets/image/hack.gif" class="absolute -z-10 top-0 left-1/2" alt="Hack"/>
<img src="assets/image/hack.gif" class="absolute -z-10 bottom-0 right-1/2" alt="Hack"/>
<main class="flex flex-col gap-10 p-8">
	<div class="p-10 bg-opacity-80 bg-white rounded-lg flex flex-col gap-4 max-w-[700px] mx-auto text-center">
		
		<h1 class="text-6xl font-semibold text-sky-800 hover:text-red-700">SSRF LAB</h1>
		<p class="text-lg">
			Nous allons utiliser ce mini application web pour explorer différents scénarios de vulnérabilités <span class="text-xl text-red-700">SSRF</span>
		</p>
		<p class="text-gray-600">&copy; SSL</p>
	</div>

	<div class="p-10 bg-opacity-80 bg-white rounded-lg flex flex-col max-w-[700px] mx-auto gap-2">
		<div >
			<h4 class="text-xl uppercase font-semibold text-cyan-800 hover:text-red-900 mb-1"><a href="lab1.php" target="_blank">Affichage du contenu de fichier &rarr;</a></h4>
			<p>
				Dans un langage de programmation, il peut exister des fonctions qui permettent de récupérer le contenu d'URL distantes ainsi que de fichiers locaux (file_get_contents en PHP). Il peut traiter les schémas tels que "http://" ou "file://" ce qui peut nous donner l'accés d'autres fichiers sensible si le développeur n'a pas pris en compte celà.
			</p>
		</div>

		<div>
			<h4 class="text-xl uppercase font-semibold text-cyan-800 hover:text-red-900 mb-1"><a href="lab2.php" target="_blank">Usurpation de DNS &rarr;</a></h4>
			<p>
			Un serveur peut mettre en place des procédures de filtrage de DNS pour limiter l'accés à ses ressources. Dans ce cas si le filtrage n'est pas bien fait, on peut utiliser des techniques pour contrer le blacklisting.
			</p>
		</div>

	</div>
</main>
  
<?php require_once("include/footer.php") ?>