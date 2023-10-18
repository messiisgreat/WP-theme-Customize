<?php
/*
add_action('init', 'yourseobook_add_roles');
function yourseobook_add_roles() {
    add_role(
        'demo_user',
        __('Demo User'),
        array(
            'read' => true,
            'edit_posts' => false,
            'edit_other_posts' => false,
            'edit_published_posts' => false,
            'moderate_comments' => false,
            'edit_theme_options' => false
        )
    );
}*/

/*
function restrict_demo_user_customizer($capability, $user_id, $args) {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user

    $user = get_user_by('login', $demo_user);

    if ($user && $user_id === $user->ID) {
        // Check if the user is trying to publish changes
        if ($capability === 'publish_posts') {
            // Get the 'Subscriber' role object
            $subscriber_role = get_role('subscriber');

            // Remove the 'publish_posts' capability from the 'Subscriber' role
            if ($subscriber_role) {
                $subscriber_role->remove_cap('publish_posts');
            }
        }
    }

    return $capability;
}
add_filter('map_meta_cap', 'restrict_demo_user_customizer', 10, 3);
*/
/*
function restrict_demo_user_customizer($caps, $cap, $user_id, $args) {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user
    $subscriber_role = get_role('subscriber');

    // Check if the user has the Subscriber role
    if ($subscriber_role && $subscriber_role->has_cap('edit_theme_options')) {
        $user = get_user_by('login', $demo_user);

        if ($user && $user_id === $user->ID) {
            if ($cap === 'customize') {
                // Remove the 'publish_theme' and 'customize_publish' capabilities
                $caps = array_diff($caps, array('remove_cap', 'customize_publish'));
            }
        }
    }

    return $caps;
}
add_filter('map_meta_cap', 'restrict_demo_user_customizer', 10, 4);

*/


/*
function allow_subscriber_customizer_access() {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user
    $subscriber_role = get_role('subscriber');

    if ($subscriber_role) {
        $subscriber_role->add_cap('edit_theme_options');
    }

    $demo_user_obj = get_user_by('login', $demo_user);
    
    if ($demo_user_obj) {
        $demo_user_obj->add_cap('edit_theme_options');
    }
}
add_action('init', 'allow_subscriber_customizer_access');

/*
function restrict_demo_user_customizer($caps, $cap, $user_id, $args) {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user
    $subscriber_role = get_role('subscriber');

    // Check if the user has the Subscriber role
    if ($subscriber_role && $subscriber_role->has_cap('edit_theme_options')) {
        $user = get_user_by('login', $demo_user);

        if ($user && $user_id === $user->ID) {
            if ($cap === 'customize') {
                // Remove the 'publish_theme' and 'customize_publish' capabilities
                $caps = array_diff($caps, array('publish_theme', 'customize_publish'));
            }
        }
    }

    return $caps;
}
add_filter('map_meta_cap', 'restrict_demo_user_customizer', 10, 4);
*/
/*
function remove_theme_caps() {
	// gets the author role
	$role = get_role( 'subscriber' );

	// This only works, because it accesses the class instance.
	// would allow the author to edit others' posts for current theme only
	$role->remove_cap( 'customize_publish' );
}
add_action( 'admin_init', 'remove_theme_caps');
*/
/*
function disable_publish_button_for_subscriber($allcaps, $caps, $args, $user) {
    if (isset($user->roles) && in_array('subscriber', $user->roles)) {
        // Remove the capability to publish for subscribers
        $caps[] = 'do_not_allow';
        $allcaps['customize_publish'] = false;
    }
    
    return $allcaps;
}
add_filter('user_has_cap', 'disable_publish_button_for_subscriber', 10, 4);
*/