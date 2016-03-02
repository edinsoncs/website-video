<?php 
	include 'header.php';
	include 'main.php';
?>
		<aside class="vervideo">
			<article class="observar">
				<?php
						$id = $_GET['id'];

						// filter for valid url
							include 'youtubeapi.php';
							$youtube = youtube($id);
		
				?>
				<h2 class="titulovideo"><? echo str_replace("-"," ", $_GET['titulo']); ?></h2>
				<iframe width="694" height="415" src="//www.youtube.com/embed/<? echo $id; ?>" frameborder="0" allowfullscreen></iframe>				<div class="addthis_native_toolbox shared"></div>
				<article class="videodetalles">
					<header class="descriptionVideo">
						<h4 class="margencito">Descripcción del video</h4>
					</header>
					<?php echo $youtube->description ?>
				</article>
				<article class="videodetalles likes">
					<h2><span><?php echo $youtube->likeCount?></span> PERSONAS CREEN QUE ESTE VIDE ES…</h2>
					<div class="corazon">
						<span class="el-icon-heart" title="<?php echo $youtube->likeCount?> LES GUSTO!!!"></span>
					</div>
				</article>
			</article>
			<aside class="contenidoVideo">
			<p class="cortado-video">Videos Relacionados</p>
			<article class="videosHome margencito">
				<h2 class="categoryVideo">
					Top Hoy
				</h2>
				<figure class="contenedorImagen margencito">
					<img src="img/video1.png" alt="">
				</figure>
				<h3 class="nameVideo margencito titleAcortado">
					Miley Cyrus - Wrecking Ball (Chatroulette Version)
				</h3>
				<span class="videoViews margencito">
					42,284,960 views
				</span>
			</article>
			
			<article class="videosHome margencito">
				<h2 class="categoryVideo">
					Top Hoy
				</h2>
				<figure class="contenedorImagen margencito">
					<img src="img/video1.png" alt="">
				</figure>
				<h3 class="nameVideo margencito titleAcortado">
					Miley Cyrus - Wrecking Ball (Chatroulette Version)
				</h3>
				<span class="videoViews margencito">
					42,284,960 views
				</span>
			</article>

			<article class="videosHome margencito">
				<h2 class="categoryVideo">
					Top Hoy
				</h2>
				<figure class="contenedorImagen margencito">
					<img src="img/video1.png" alt="">
				</figure>
				<h3 class="nameVideo margencito titleAcortado">
					Miley Cyrus - Wrecking Ball (Chatroulette Version)
				</h3>
				<span class="videoViews margencito">
					42,284,960 views
				</span>
			</article>


			<article class="videosHome margencito">
				<h2 class="categoryVideo">
					Top Hoy
				</h2>
				<figure class="contenedorImagen margencito">
					<img src="img/video1.png" alt="">
				</figure>
				<h3 class="nameVideo margencito titleAcortado">
					Miley Cyrus - Wrecking Ball (Chatroulette Version)
				</h3>
				<span class="videoViews margencito">
					42,284,960 views
				</span>
			</article>

			<article class="comentarios">
				<script src="http://connect.facebook.net/es_LA/all.js#xfbml=1"></script>
				<fb:comments href="http://www.viainti.net<? echo $url; ?>" num_posts="10" width="874"></fb:comments></div>
			</article>

		</aside>

		</aside>
		



		
		

	</section>



<?php 
		include 'footer.php';

		?>