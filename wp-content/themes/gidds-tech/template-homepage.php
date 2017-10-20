<?php
/**
 *Template Name: Home Page
 *
 */

get_header();

echo "<div id='content' class='site-content'>";

    echo "<main id='main' class='site-main' role='main'>";	   
        do_action( 'onepress_frontpage_before_section_parts' );

		if ( ! has_action( 'onepress_frontpage_section_parts' ) ) {

            $sections = apply_filters( 'onepress_frontpage_sections_order', array('hero') );
			foreach ( $sections as $section ) {
                //-- Hook before section
                do_action('onepress_before_section_'.$section );
                do_action( 'onepress_before_section_part', $section );

                //-- Load section template part
				get_template_part( 'section-parts/section', $section );

                //-- Hook after section
                do_action('onepress_after_section_part', $section );
                do_action('onepress_after_section_'.$section );
			}

        } else {
            do_action( 'onepress_frontpage_section_parts' );
        }

        do_action( 'onepress_frontpage_after_section_parts' );
    echo "</main>";
    
    //-- Portfolio
    echo "<section id='portfolio'>";
        echo "<div>";
            echo "<h3><span>Some of our latest work</span></h3>";
        echo "</div>";
        echo "<div class='portfolio-items'>";
            echo "<div class='portfolio-item'>";
                echo "<div class='portfolio-thumb'>";
                    echo "<a href='https://hillsong.com'><img src='http://giddsdummy.tech:8080/wp-content/uploads/2017/10/portfolio-screenshot-hillsong-sm.jpg' alt='Portfolio - Hillsong Church'></a>";
                echo "</div>";
                echo "<div class='portfolio-name'>Hillsong Church</div>";
            echo "</div>";
            echo "<div class='portfolio-item'>";
                echo "<div class='portfolio-thumb'>";
                    echo "<a href='https://graceofgalway.com'><img src='http://giddsdummy.tech:8080/wp-content/uploads/2017/10/portfolio-screenshot-graceofgalway-sm.jpg' alt='Portfolio - Grace of Galway' style='height: 161px; width: 300px;'></a>";
                echo "</div>";
                echo "<div class='portfolio-name'>Grace of Galway</div>";
            echo "</div>";
            echo "<div class='portfolio-item'>";
                echo "<div class='portfolio-thumb'>";
                    echo "<a href='http://warriorofgod.com.au'><img src='http://giddsdummy.tech:8080/wp-content/uploads/2017/10/portfolio-screenshot-warriorofgod-sm.jpg' alt='Portfolio - Warrior of God' style='height: 161px; width: 300px;'></a>";
                echo "</div>";
                echo "<div class='portfolio-name'>Warrior of God</div>";
            echo "</div>";            
        echo "</div>";
    echo "</section>";
    
echo "</div>";

get_footer(); 

?>
