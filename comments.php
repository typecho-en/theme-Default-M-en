<article id="comments">
    <?php $this->comments('comment')->to($comments); ?>
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
                <p><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">Logout</a></p>
                <?php else: ?>
                <ul class="login_meta">
                    <li>
                        <label for="author">Name<span class="required">*</span></label>
                        <input type="text" name="author" id="author" size="15" value="<?php $this->remember('author'); ?>" required/>
                    </li>
                    <li>
                        <label for="mail">Email<?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
                        <input type="text" name="mail" id="mail" size="15" value="<?php $this->remember('mail'); ?>" required/>
                    </li>
                    <li class="urltext">
                        <label for="url">Website<?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?></label>
                        <input type="text" name="url" id="url" size="15" value="<?php $this->remember('url'); ?>"/>
                    </li>
                </ul>
                <?php endif; ?>
                <p><textarea rows="3" cols="50" name="text" placeholder="Join Conversation" required ><?php $this->remember('text'); ?></textarea><button type="submit" class="submit">Submit</button></p>
            </form>
        </div>
    <?php else: ?>
        <div class="msg-error">Oops, comments are not available at this time.</div>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
        <div class="comments_count"><?php $this->commentsNum(_t('No Comments'), _t('1 Comment'), _t('%d Comments')); ?></div>
        <div class="comments_box">
            <?php $comments->listComments(); ?>
            <?php $comments->pageNav(); ?>
        </div>
    <?php endif; ?>
</article>
