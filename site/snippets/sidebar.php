<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sidebar">
	<div class="sidebar-widget">
		<h3>Categories</h3>
		<?php // fetch all categories
		$categories = $pages->find('posts')->children()->visible()->pluck('categories', ',', true);
		?>
		<ul class="categories">
		<?php foreach($categories as $category): ?>
			<li>
				<a href="<?php echo url('posts/category:' . $category)?>"><?php echo html($category) ?></a>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

	<div class="sidebar-widget">
		<h3>Tags</h3>
		<?php
		// fetch all tags
		$tags = $pages->find('posts')->children()->visible()->pluck('tags', ',', true);
		?>
		<ul class="tags">
		<?php foreach($tags as $tag): ?>
			<li>
				<a href="<?php echo url('posts/tag:' . $tag)?>"><?php echo html($tag) ?></a>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

	<div class="sidebar-widget">
		<h3>Blogroll</h3>

		<?php $blogrollsites = $site->blogroll()->yaml() ?>
		<ul>
		<?php foreach($blogrollsites as $blogrollsite): ?>
			<li><a href="<?php echo $blogrollsite['url'] ?>" target="_blank"><?php echo $blogrollsite['title'] ?></a></li>
		<?php endforeach ?>
		</ul>
	</div>
</div>