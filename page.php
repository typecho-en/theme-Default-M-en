<?php $this->need('header.php'); ?>

    <div id="content">
        <div class="post">
			<h2 class="entry_title"><?php $this->title() ?></h2>
        <p class="entry_data"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></p>
			<?php $this->content(); ?>
		</div>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
