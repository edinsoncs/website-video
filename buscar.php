<?php
	include 'main.php';
	include 'header.php'; 
?>



		<aside class="contenidoVideos">

			<?php




$edi = $_GET['buscarVideo'];



$youtube = "http://gdata.youtube.com/feeds/api/videos?vq=".str_replace(" ", "+", $edi)."&start-index=1&max-results=16";

$ch = curl_init($youtube);

curl_setopt($ch, CURLOPT_HEADER, 1);

curl_setopt($ch, CURLOPT_REFERER, "http://www.youtube.com/");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$youtube = curl_exec($ch);



preg_match_all("/<id>http:\/\/gdata.youtube.com\/feeds\/api\/videos\/(.*?)<\/id>/", $youtube, $ids);

preg_match_all("/<media:title type='plain'>(.*?)<\/media:title>/", $youtube, $titles);

preg_match_all("/<media:description type='plain'>(.*?)<\/media:description>/", $youtube, $description);

preg_match_all("/<yt:duration seconds='(.*?)'\/>/", $youtube, $durations);

preg_match_all("/<yt:statistics favoriteCount='0' viewCount='(.*?)'\/>/", $youtube, $hits);



$count = count($ids[0]);



for($i = 0; $i < $count; $i++){ ?>






<article class="videosHome margencito">
	<a class="textodecoracion" href="ver-video/<? echo $ids[1][$i];?>/<? echo url($titles[1][$i]);?>.html">

	<h2 class="categoryVideo"><? echo $description[1][$i]; ?></h2>
		
	</a>

	<figure class="contenedorImagen margencito"> 
	<img src="http://img.youtube.com/vi/<? echo $ids[1][$i]; ?>/mqdefault.jpg" width="167" height="127">
	</figure>

	<a class="textodecoracion colorBlue" href="ver-video/<? echo $ids[1][$i];?>/<? echo url($titles[1][$i]);?>.html">
		<h3 class="nameVideo margencito titleAcortado"><? echo $titles[1][$i]; ?></h3>
	</a>
	<span class="videoViews margencito"><? echo $hits[1][$i]; ?> Vistas</span>
</article>




<? } ?>
			<p class="cortado">Mas videos</p>
			
		</aside>


		

		
		

	</section>

	<? include 'footer.php'; ?>