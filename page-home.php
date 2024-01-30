<?php
/*
Template Name:homes
*/
?>

<?php get_header(); ?>

<div class="main">

<?php get_sidebar(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="content">
	<?php the_content(); ?>
	
<?php endwhile; ?>


<div class="ath-block">
	<?php $posts = get_posts('showposts=12&cat=7?'); ?>
		<?php foreach($posts as $post): ?>


			<div class="ath-list">
			<a href="<?php the_permalink(); ?>" class="ath-list-link">
			<div class="ath">
				<?php the_post_thumbnail(); ?>

				<div><i class="fa-solid fa-user"></i> <?php the_title(); ?></div>

				<div>
					<?php
						$genre = get_post_meta($post->ID, 'genre', true);
						// ジャンルによって異なるアイコンを選択
						$icon_class = '';
						switch ($genre) {
							case 'Baseball':
								$icon_class = 'fa-solid fa-baseball'; // actionに対応するアイコンクラス
								break;
							case 'Basketball':
								$icon_class = 'fa-solid fa-basketball';
								break;
							case 'Golf':
								$icon_class = 'fa-solid fa-golf-ball-tee';
								break;
							case 'Tennis':
								$icon_class = 'fa-regular fa-tennis-ball';
								break;
							default:
								$icon_class = 'fas fa-question'; // デフォルトのアイコンクラス
								break;
						}
						// アイコンを表示
						echo '<i class="' . $icon_class . '"></i>';
						?>	
					<?php echo get_post_meta($post->ID , 'genre' ,true); ?>
				</div>

				<div><i class="fa-solid fa-globe"></i> <?php echo get_post_meta($post->ID , 'location' ,true); ?></div>
				<div>　</div>
			</div>
			</a>
			</div>

		<?php endforeach; ?>
</div>
	</div>

</div><!--main-->

<?php get_footer(); ?>
