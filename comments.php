<?php

if( post_password_required() ){
    return;
}

?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">

    <?php 
    if( have_comments() ){ 
        
        ?>
        
        <h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

        <!-- Comments List
        ============================================= -->
        <ol class="commentlist clearfix">

            <?php
            
            foreach( $comments as $comment ){
                ?>

                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                    <div id="comment-<?php comment_ID(); ?>" class="comment-wrap clearfix">
                        <div class="comment-meta">
                            <div class="comment-author vcard">
                                <span class="comment-avatar clearfix">
                                    <?php echo get_avatar( $comment, 60, '', '', [ 'class' => 'avatar avatar-60 photo avatar-default' ] ); ?>
                                </span>
                            </div>
                        </div>

                        <div class="comment-content clearfix">
                            <div class="comment-author">
                                <?php comment_author(); ?>
                                <span><?php comment_date(); ?> at <?php comment_time(); ?></span>
                            </div>
                            
                            <?php comment_text(); ?>

                        </div>

                        <div class="clear"></div>

                    </div>

                </li>

                <?php
            }

            the_comments_pagination();

            // the_comments_pagination(array(
            //     'prev_text'         => '< Previous',
            //     'next_text'         => 'Next >'
            // ) );

            ?>

        </ol><!-- .commentlist end -->  

        <?php
    }

    ?>

    <div class="clear"></div>

    <!-- Comment Form
    ============================================= -->
    <div id="respond" class="clearfix">

        <?php

        comment_form([
            'comment_field'     =>  '<div class="clear"></div>
                                        <div class="col_full">
                                            <label>Comment</label></br>
                                            <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
                                        </div>',
            'fields'            =>  [
                'author'        =>  '<div class="col_one_third">
                                        <label>' . __( 'Name', 'wordpresstut' ) . '</label>
                                        <input type="text" name="author" class="sm-form-control" />
                                    </div>',
                'email'         =>  '<div class="col_one_third">
                                        <label>' . __( 'Email', 'wordpresstut' ) . '</label>
                                        <input type="text" name="email" class="sm-form-control" />
                                    </div>',
                'url'           =>  '<div class="col_one_third col_last">
                                        <label>' . __( 'Website', 'wordpresstut' ) . '</label>
                                        <input type="text" name="url" class="sm-form-control" />
                                    </div>'
            ],
            'class_submit'      =>  'btn btn-dark button-3d nomargin',
            'label_submit'      =>  __( 'Submit Comment', 'wordpresstut' ),
            'title_reply'       =>  __( 'Leave a <span>Comment</span>', 'wordpresstut' )

        ]);

        ?>
        
    </div><!-- #respond end -->

</div><!-- #comments end -->