<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Farma Nad dubom</title>

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        ?>

        <!-- javascript -->
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.6.js" text='text/javascript'></script>
        <script>
            $(document).ready(function(){
                $("#welcome_logo_section").click( function(){
                    $( "#logo_top" ).animate({
                        opacity: 0.1,
                        bottom: "+=500"
                    }, 1500);

                    $( "#logo_bottom" ).animate({
                        opacity: 0.1,
                        top: "+=500"
                    }, 1500);
                    
                    $( "#logo_tree_top" ).animate({
                        opacity: 0.1,
                        left: "+=500"
                    }, 1500);                    
                    
                    $( "#logo_trunk" ).animate({
                        opacity: 0.1,
                        right: "+=500"
                    }, 1500);                     
                    
                    setTimeout(function() {
                        $("#welcome_logo_section").fadeOut('slow', function(){
                            $('html, body').css('overflow-y', 'auto');
                        });
                    }, 1000);
                    
                });
                
                $("a.roll_down").click( function(){
                    $(this).siblings( "ul" ).slideToggle("slow");
                });
                
                //TODO:
                $('#welcome_logo_section').show();
            });
        </script>
    </head>

    <body>
        <!-- menu -->
        <div id="menu">
            <ul>
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
        <div id="container">
            <h1>Farma Nad dubom</h1>


            <div id="welcome_bacground_image">
                <img src="assets/css/images/welcome_background.jpg"/>
            </div>

            <div id="map_section">
                <img src="assets/css/images/illustration_map.gif"/>
            </div>


            <!--            <h1>Welcome to CodeIgniter!</h1>
            
                        <div id="body">
                            <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
            
                            <p>If you would like to edit this page you'll find it located at:</p>
                            <code>application/views/welcome_message.php</code>
            
                            <p>The corresponding controller for this page is found at:</p>
                            <code>application/controllers/welcome.php</code>
            
                            <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
                        </div>-->

            <!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
        </div>
    </body>
</html>