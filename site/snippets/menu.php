<div class="row menu">
	<div class="col-lg-12">

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						Menu
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li <?php if($page->isHomePage()): echo 'class="active"'; endif; ?>><a href="<?php echo $site->url() ?>">Home</a></li>
					<?php foreach($pages->visible() as $p): ?>
						<li <?php e($p->isOpen(), ' class="active"') ?>><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
						<?php if($p->hasVisibleChildren()): ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
							<?php foreach($p->children()->visible() as $p): ?>
								<li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
							<?php endforeach ?>
							</ul>
						</li>
						<?php endif ?>
					<?php endforeach; ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</div>
</div>