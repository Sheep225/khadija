<?php if ( post_password_required() ) : ?>
<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
        </div><!-- #comments -->
        <?php
                        /* Stoppt den Aufbau der comments.php wenn die obere Bedingung zutrift.
                         */
                        return;
                endif;
        ?>
 
<h2 id="comments"><?php comments_number('Keine Kommentare', 'Ein Kommentar', '% Kommentare'); ?>
<?php if ( comments_open() ) : ?>
<a href="#postcomment" title="Hinterlasse ein Kommentar">&raquo;&raquo;</a>
<?php endif; ?>
</h2>
 
<?php if ( $comments ) : ?>
<ol id="commentlist">
 
<?php foreach ($comments as $comment) : ?>
<li id="comment-<?php comment_ID(); ?>">
        <?php comment_text(); ?>
<p><cite><?php comment_type('Kommentar', 'Trackback', 'Pingback'); ?> von <?php comment_author_link(); ?> - <?php comment_date(); ?> um <a href="#comment-<?php comment_ID(); ?>"><?php comment_time(); ?></a></cite> <?php edit_comment_link(); ?></p>
        </li>
 
<?php endforeach; ?>
 
</ol>
 
<?php else : // Es wurden noch keine Kommentare abgegeben ?>
<p>Bis jetzt noch keine Kommentare</p>
<?php endif; ?>
 
    
 
<?php if ( comments_open() ) : ?>
<h3 id="postcomment">Einen Kommentar abgeben</h3>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf('Du musst dich <a href="%s">eingeloggen</a> um Kommentare abzugeben.', get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
<?php if ( $user_ID ) : ?>
 
<p><?php printf('Angemeldet als %s.', '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Ausloggen bzw. Abmelden">Abmelden &raquo;</a></p>
 
<?php else : ?>
 
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) '(erforderlich)'; ?></small></label></p>
 
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>E-Mail (wird nicht ver�ffentlicht) <?php if ($req) '(erforderlich)'; ?></small></label></p>
 
 
<?php endif; ?>
 
<p>Folgende HTML-Tags sind erlaubt: <code><?php echo allowed_tags(); ?></code>.</p>
 
<p><textarea name="comment" id="comment" cols="55" rows="12" tabindex="4"></textarea></p>
 
<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('Submit Comment')); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>
 
</form>
 
<?php endif; // Ende: wenn Registrierung erforderlich, aber man nicht eingeloggt ist ?>
 
<?php else : // Kommentare sind geschlossen ?>
<p>Tut mir Leid, aber die Kommentar-Funktion ist momentan deaktiviert.</p>
<?php endif; ?>