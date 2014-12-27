<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farma Nad dubom - vitajte!</title>

        <!-- meta tags -->
        <meta charset="utf-8">
        <?php echo meta('description', 'Uvitacia stranka farmy Nad dubom orientovanej na chov muflonov, danielov a highlandov'); ?>
        <?php echo meta(array('name' => 'robots', 'content' => 'INDEX, FOLLOW')); ?>

        <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        ?>

        <!-- javascript -->
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.6.js" text='text/javascript'></script>
        <script>
            $(document).ready(function() {
                $('html, body').css('overflow-y', 'hidden');

                $("#welcome_logo_section").click(function() {
                    $("#logo_top").animate({
                        opacity: 0.1,
                        bottom: "+=500"
                    }, 1500);

                    $("#logo_bottom").animate({
                        opacity: 0.1,
                        top: "+=500"
                    }, 1500);

                    $("#logo_tree_top").animate({
                        opacity: 0.1,
                        left: "+=500"
                    }, 1500);

                    $("#logo_trunk").animate({
                        opacity: 0.1,
                        right: "+=500"
                    }, 1500);

                    setTimeout(function() {
                        $("#welcome_logo_section").fadeOut('slow', function() {
                            $('html, body').css('overflow-y', 'auto');
                        });
                    }, 1000);

                });

                $("a.roll_down").click(function() {
                    $(this).siblings("ul").slideToggle("slow");
                });

                $('#welcome_logo_section').show();

                $('#menu_id').click(function() {
                    $(this).parent().siblings("ul").slideToggle("slow");
                });
            });
        </script>
    </head>

    <body>
        <!-- menu -->
        <div id="menu">
            <ul>
                <li>
                    <a id="menu_id" href="#">MENU</a>
                </li>
                <ul style="display: none">
                    <li>
                        <?php echo anchor('o-nas', 'O NÁS', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                    </li>
                    <li>
                        <a class="roll_down" href="#">
                            CHOV                        
                        </a>
                        <ul >
                            <li>
                                <?php echo anchor('chov/daniel', 'Daniel', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>
                            <li>
                                <?php echo anchor('chov/muflon', 'Muflon', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>
                            <li>
                                <?php echo anchor('chov/highland', 'Highland', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>                         
                        </ul>
                    </li>
                    <li>
                        <?php echo anchor('ponuka', 'PONUKA', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                    </li>
                    <li>
                        <a class="roll_down" href="#">FOTO</a>                       
                        <ul >
                            <li>
                                <?php echo anchor('foto/daniel', 'Daniel', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>
                            <li>
                                <?php echo anchor('foto/muflon', 'Muflon', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>
                            <li>
                                <?php echo anchor('foto/highland', 'Highland', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>
                            <li>
                                <?php echo anchor('foto/okolie', 'Okolie', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                            </li>                         
                        </ul>
                    </li>
                    <li>
                        <?php echo anchor('napiste-nam', 'NAPÍŠTE NÁM', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                    </li>                
                    <li>
                        <?php echo anchor('kontakt', 'KONTAKT', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                    </li>
                </ul>
            </ul>
        </div>

        <!-- invisible logo as a whole unit just for purposes of sharing on FB -->
        <div id="logo_invisible" style="display: none">
                <?php
                $image_properties_invisible = array(
                    'id' => 'logo_invisible',
                    'src' => 'assets/css/images/logo/logo.png',
                    'alt' => 'Logo',
                    'title' => 'Logo'
                );
                echo img($image_properties_invisible);
                ?>
        </div>
        
        <!-- logo section on welcome page -->
        <div id="welcome_logo_section" style="display: none">
            <div id="logo_section_background">
            </div>
            <div id="logo_section_wrapper">
                <?php
                $image_properties_1 = array(
                    'id' => 'logo_top',
                    'src' => 'assets/css/images/logo/logo_nadpis_hore.png',
                    'alt' => 'Horny nadpis',
                    'title' => 'Logo'
                );
                $image_properties_2 = array(
                    'id' => 'logo_tree_top',
                    'src' => 'assets/css/images/logo/logo_strom_hore.png',
                    'alt' => 'Koruna',
                    'title' => 'Logo'
                );
                $image_properties_3 = array(
                    'id' => 'logo_trunk',
                    'src' => 'assets/css/images/logo/logo_strom_dole.png',
                    'alt' => 'Kmen',
                    'title' => 'Logo'
                );
                $image_properties_4 = array(
                    'id' => 'logo_bottom',
                    'src' => 'assets/css/images/logo/logo_nadpis_dole.png',
                    'alt' => 'Dolny nadpis',
                    'title' => 'Logo'
                );

                echo img($image_properties_1);
                echo img($image_properties_2);
                echo img($image_properties_3);
                echo img($image_properties_4);
                ?>
<!--                <img id="logo_top" src="assets/css/images/logo/logo_nadpis_hore.png"/>
                <img id="logo_tree_top" src="assets/css/images/logo/logo_strom_hore.png"/>
                <img id="logo_trunk" src="assets/css/images/logo/logo_strom_dole.png"/>
                <img id="logo_bottom" src="assets/css/images/logo/logo_nadpis_dole.png"/>-->
            </div>
        </div>

        <!-- content -->
        <!--<div id="container" style="border: 1px solid red;">-->
        <h1 id="welcome_title"><span class="small">Farma Nad dubom</span></h1>
        <!--        </div>-->
    </body>
</html>