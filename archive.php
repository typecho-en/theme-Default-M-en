<?php $this->need('header.php'); ?>

    <div id="content">
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <p class="entry_data">Posted on <?php $this->date('Y/n/j'); ?> / Categorized: <?php $this->category(','); ?> / <?php Views_Plugin::theViews('', ' Views'); ?> / <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></p>
			<?php $this->content('Show all...'); ?>
		</div>
	<?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('Nothing was found'); ?></h2>
        </div>
    <?php endif; ?>

        <ol class="pages clearfix">
            <?php $this->pageNav(); ?>
        </ol>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
