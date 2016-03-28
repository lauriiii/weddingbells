<?php snippet('header') ?>

	<div class="row content">
		<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
		<?php if(param('tag')): ?>
		<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc')->filterBy('tags', urldecode(param('tag')), ',')->paginate(10) ?>
		<?php elseif(param('category')): ?>
		<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc')->filterBy('categories', urldecode(param('category')), ',')->paginate(10) ?>
		<?php else : ?>
		<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc')->paginate(10) ?>
		<?php endif; ?>

		<?php foreach($posts as $post): ?>
			<?php snippet('post', array('page' => $post)) ?>
		<?php endforeach; ?>

			<?php if($posts->pagination()->hasPages()): ?>
			<nav class="pagination">
				<?php if($posts->pagination()->hasNextPage()): ?>
				<a class="next" href="<?php echo $posts->pagination()->nextPageURL() ?>">&larr; Older posts</a>
				<?php endif ?>

				<?php if($posts->pagination()->hasPrevPage()): ?>
				<a class="prev" href="<?php echo $posts->pagination()->prevPageURL() ?>">Newer posts &rarr;</a>
				<?php endif ?>
			</nav>
			<?php endif ?>
		</div>

		<?php snippet('sidebar') ?>
	</div>

<?php snippet('footer') ?>