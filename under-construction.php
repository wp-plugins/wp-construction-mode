<?php
/*
  Plugin Name: WP Construction Mode
  Plugin URI: http://smartcatdesign.net/under-construction-maintenance-mode-free-wordpress-plugin/
  Description: Display a customizable Under Construction or Coming Soon page for all users who are not logged in. Perfect for developing on a live server!
  Version: 1.0
  Author: SmartCat
  Author URI: http://smartcatdesign.net
  License: GPL v2
 */
register_activation_hook(__FILE__, 'under_construction_install');

function under_construction_install() {
    global $wp_version;
    if (version_compare($wp_version, "3.2.1", "<")) {
        deactivate_plugins(basename(__FILE__));
        wp_die("This plugin requires WordPress version 3.2.1 or higher.");
    }
    set_under_construction();
}

add_action('admin_menu', 'under_construction_menu');
add_action('admin_head', 'admin_action');

function admin_action(){
    $set_opt = get_option('set_opt');
    if($set_opt == 'Yes'){ ?>
        <div style="background: #333;color: #CC0000;text-align: center"><?php _e("Under Construction Mode is ON"); ?></div>        
    <?php }
}

function under_construction_menu() {
    add_menu_page('Under Construction', 'Under Construction', 'administrator', 'under-construction.php', 'under_construction_action', plugins_url('under_construction.png', __FILE__));
}

function under_construction_action() {
    $option_name1 = 'set_opt';
    $option_name2 = 'set_msg';
    if (isset($_REQUEST['act'])) {
        switch ($_REQUEST['act']) {
            case "save":
                set_under_construction();
                echo '<div class="updated below-h2" id="message" style="position:relative; clear:both;"><p>Under Construction: ' . $_REQUEST['set_opt'] . '</p></div>';
                break;
            default:
        }
    }
    $set_opt = get_option($option_name1);
    $set_msg = get_option($option_name2);
    require_once('form.php');
}

function set_under_construction() {
    $option_name1 = 'set_opt';
    $option_name2 = 'set_msg';
    $option_name3 = 'set_page';
    $new_value1 = ($_REQUEST['set_opt'] == "") ? 'No' : $_REQUEST['set_opt'];
    if (get_option($option_name1) !== false) {
        update_option($option_name1, $new_value1);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option($option_name1, $new_value1, $deprecated, $autoload);
    }


    $new_value2 = ($_REQUEST['set_msg'] == "") ? 'Page is currently under construction. ' : $_REQUEST['set_msg'];
    if (get_option($option_name2) !== false) {
        update_option($option_name2, $new_value2);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option($option_name2, $new_value2, $deprecated, $autoload);
    }

    $new_value3 = ($_REQUEST['set_page'] == "") ? 'Website is Under Construction' : $_REQUEST['set_page'];
    if (get_option($option_name3) !== false) {
        update_option($option_name3, $new_value3);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option($option_name3, $new_value3, $deprecated, $autoload);
    }
}

function show_uc() {
    $option_name1 = 'set_opt';
    $option_name2 = 'set_msg';
    $option_name3 = 'set_page';
    $set_opt = get_option($option_name1);
    $set_msg = get_option($option_name2);
    $set_page = get_option($option_name3);
    $current_user = wp_get_current_user();

    if ($set_opt == 'Yes' && !user_can($current_user, 'administrator')) {
        if($set_page == get_the_ID()){
            echo "<div style='margin:0 auto; text-align:center;font-size:30px;padding-top:30px;'>" . $set_msg . "</div>";
            exit(0);
        }else if($set_page == "all"){
            echo "<div style='margin:0 auto; text-align:center;font-size:30px;padding-top:30px;'>" . $set_msg . "</div>";
            exit(0);
        }
    }
}

add_action('wp_head', 'show_uc');
?>