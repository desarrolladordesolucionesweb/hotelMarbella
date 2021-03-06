<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin (PRO)
* Version                 : 2.1.1
* File                    : includes/custom-posts/class-custom-posts.php
* File Version            : 1.0.2
* Created / Last Modified : 25 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Custom posts PHP class.
*/

    if (!class_exists('DOPBSPCustomPosts')){
        class DOPBSPCustomPosts extends DOPBSPFrontEnd{
            /*
             * Constructor
             */
            function __construct(){
                add_action('init', array(&$this, 'init'));
            }
            
            /*
             * Initialize custom posts.
             * 
             * @param post (object): post data
             */
            function init($post){
                global $DOPBSP;
                
                if (is_admin()
                        && $DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-custom-posts')
                        || !is_admin()){
                    $postdata = array('exclude_from_search' => false,
                                      'has_archive' => true,
                                      'labels' => array('name' => $DOPBSP->text('CUSTOM_POSTS'),
                                                        'singular_name' => $DOPBSP->text('CUSTOM_POSTS'),
                                                        'menu_name' => $DOPBSP->text('CUSTOM_POSTS'),
                                                        'all_items' => $DOPBSP->text('CUSTOM_POSTS_ADD_ALL'),
                                                        'add_new_item' => $DOPBSP->text('CUSTOM_POSTS_ADD'),
                                                        'edit_item' => $DOPBSP->text('CUSTOM_POSTS_EDIT')),
                                      'menu_icon' => $DOPBSP->paths->url.'assets/gui/images/icon-hover.png',
                                      'public' => true,
                                      'publicly_queryable' => true,
                                      'rewrite' => true,
                                      'taxonomies' => array('category', 
                                                            'post_tag'),
                                      'show_in_nav_menus' => true,
                                      'supports' => array('title', 
                                                          'editor', 
                                                          'author', 
                                                          'thumbnail', 
                                                          'excerpt', 
                                                          'trackbacks', 
                                                          'custom-fields', 
                                                          'comments', 
                                                          'revisions'));
                    register_post_type(DOPBSP_CONFIG_CUSTOM_POSTS_SLUG, $postdata);
                }
            }
            
            /*
             * Add a calendar if none is attached to the custom post.
             * 
             * @param post_id (integer): posts ID
             */
            function add($post_id){
                global $wpdb;
                global $DOPBSP;
                    
                $control_data = $wpdb->get_results($wpdb->prepare('SELECT * FROM '.$DOPBSP->tables->calendars.' WHERE post_id=%d',
                                                                  $post_id));

                /*
                 * Create calendar if none is attached to the custom post.
                 */
                if ($wpdb->num_rows == 0){
                    /*
                     * Add calendar.
                     */
                    $DOPBSP->classes->backend_calendar->add($post_id, 
                                                            get_the_title($post_id));
                }
            }
        }
    }