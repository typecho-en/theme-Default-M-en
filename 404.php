<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
            <h2 class="entry_title">404 - <?php _e('Not Found'); ?></h2>
            <p>
            <form method="post">
                <div><input type="text" name="s" class="text" size="20" /> <input type="submit" class="submit" value="<?php _e('Search'); ?>" /></div>
            </form>
            </p>
        </div>

    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
