<?php

include_once('php/addAcfOptionPage.php');

include_once('php/addStyle.php');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');