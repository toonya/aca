<?php  
	// if ( wp_is_mobile() )
	// 	get_template_part( 'mobile', 'home' );
	// else 
	// 	get_template_part( 'desktop', 'home' );
?>

<?php
    // use the same header 
    get_header();

    switch (pll_current_language()) {
        case 'zh':
            get_template_part('content', 'home-cn');
            get_footer('cn');
            break;
        
        default:
            get_template_part('content', 'home-en');
            get_footer('en');
            break;
    }
?>