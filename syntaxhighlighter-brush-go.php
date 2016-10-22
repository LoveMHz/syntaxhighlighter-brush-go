<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Go Brush
Description: Adds support for the Go language to the SyntaxHighlighter Evolved plugin.
Author: LoveMHz (Dustin Holden)
Version: 1.0.0
Author URI: https://lovemhz.com/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action('init', 'syntaxhighlighter_go_regscript');
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter('syntaxhighlighter_brushes', 'syntaxhighlighter_go_addlang');
 
// Register the brush file with WordPress
function syntaxhighlighter_go_regscript() {
    wp_register_script('syntaxhighlighter-brush-go', plugins_url( 'shBrushGo.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_go_addlang($brushes) {
    $brushes['go']     = 'go';
    $brushes['golang'] = 'go';
 
    return $brushes;
}
