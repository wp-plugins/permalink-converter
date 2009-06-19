<?php
/*
Plugin Name: Permalink Converter
Plugin URI: http://www.businessxpand.com
Description: Converts standard links to the equivalent permalink
Author: Business Xpand
Version: 0.9
Author URI: http://www.businessxpand.com
*/
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

class PermalinkConverter
{
    function PermalinkConverter()
    {
        add_filter( 'the_content', array( &$this, 'theContent' ) );
    }
    
    function theContent( $content )
    {
        $siteUrl = str_replace( array( '/', '.', '?' ), array( '\/', '\.', '?' ), get_option( 'siteurl' ) );
        $pattern = '/(' . $siteUrl . '\/*)?\?p=(\d+)/im';
        preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );
        if ( count( $matches ) > 0 ) {
            foreach ( $matches as $match ) {
                $search[] = $match[0];
                $replace[] = get_permalink( $match[2] );
            }
            $content = str_replace( $search, $replace, $content );
        }
        $pattern = '/\[\s*permalink:\s*(\d+)\s*\]/im';
        preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );
        if ( count( $matches ) > 0 ) {
            foreach ( $matches as $match ) {
                $search[] = $match[0];
                $replace[] = get_permalink( $match[1] );
            }
            $content = str_replace( $search, $replace, $content );
        }
        return $content;
    }
}
$permalinkConverter = new PermalinkConverter;