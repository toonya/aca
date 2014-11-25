<?php

// ----------------------------------------
// ! add customer dashboard widgets
// ----------------------------------------
add_action('wp_dashboard_setup','add_dashboard_widgets');


function dashboardWidgetContent() {
	echo '请不要随意升级系统或者插件, 感谢您的使用!';
}


function add_dashboard_widgets() {

	$custom_dashboard_widgets = array(
	    'my-dashboard-widget' => array(
	        'title' => '注意事项',
	        'callback' => 'dashboardWidgetContent'
	    )
	);

    foreach ( $custom_dashboard_widgets as $widget_id => $options ) {
        wp_add_dashboard_widget(
            $widget_id,
            $options['title'],
            $options['callback']
        );
    }
}

?>