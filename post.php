<?php $this->need('header.php'); ?>

    <div id="content">
        <div class="post">
			<h2 class="entry_title"><?php $this->title() ?></h2>
        <p class="entry_data">Posted on <?php $this->date('Y/n/j'); ?> / Categorized: <?php $this->category(','); ?> / <?php Views_Plugin::theViews('', ' Views'); ?> / <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', 'One Comment', '%d Comments'); ?></a></p>
			<?php $this->content(); ?>
			<p class="tags"><?php _e('Tagged '); ?>: <?php $this->tags(', ', true, 'opps, nothing was tagged :('); ?></p>
		</div>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
