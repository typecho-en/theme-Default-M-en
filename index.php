<?php
/**
 * This is Typecho's default theme, edited by Mike, translated by Tianyu.
 * 
 * @package Default-M:en
 * @author fen & Mike
 * @version 1.0
 * @link http://www.microhu.com
 */
 
 $this->need('header.php');
 ?>

    <div id="content">
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <p class="entry_data">Posted on <?php $this->date('Y/n/j'); ?> / Categorized: <?php $this->category(','); ?> / <?php Views_Plugin::theViews('', ' Comments'); ?> / <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></p>
			<?php $this->content('Show all...'); ?>
        </div>
	<?php endwhile; ?>

    <?php $this->pageNav(); ?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
