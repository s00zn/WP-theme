<?php

    function wt_widgets(){

        register_sidebar([
            'name'              =>  __( 'My First Theme Sidebar', 'wordpresstut' ),
            'id'                =>  'wt_sidebar',
            'description'       =>  __( 'Sidebar for the theme Wordpresstut', 'wordpresstut' ),
            'before_widget'     =>  '<div id="%1$s" class="widget clearfix %2$s">',
            'after_widget'      =>  '</div>',
            'before_title'      =>  '<h4>',
            'after_title'       =>  '</h4>'
        ]);
    }