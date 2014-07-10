<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>Farma Nad dubom</title>

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        ?>
        <!-- javascript -->
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.6.js" text='text/javascript'></script>
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6YUMQDnS8B8ZiKItN_of5xOGUh97VdOo"></script>
        <script>
            $(document).ready(function(){
                $("a.roll_down").click( function(){
                    $(this).siblings( "ul" ).slideToggle("slow");
                });
            });
        </script>
        <script type="text/javascript">
            function initialize() {
                var mapOptions = {
                    center: new google.maps.LatLng(49.305303, 21.882968),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.SATELLITE
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
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

        <!-- content -->
        <div id="container">
            <h1>Kontakt</h1>

            <h2>Kontaktné údaje</h2>
            <ul>
                <li>
                    <span>Ing. Jaroslav Hnatič,</span><span>majiteľ</span>
                </li>
                <li>
                    <span>Mobil:</span><span>+421 905 406 069</span>
                </li>
                <li>
                    <span>E-mail:</span><span><?php echo safe_mailto('jaro.hnatic@post.sk', 'jaro.hnatic@post.sk'); ?></span>
                </li>
                <li>
                    <span>Web:</span><span><?php echo anchor('http://www.farmanaddubom.sk', 'http://www.farmanaddubom.sk'); ?></span>
                </li>                
            </ul>

            <h2>Kde nás nájdete</h2>
            <ul>
                <li>
                    <span>Adresa:</span><span>Borov 72, 068 01 Medzilaborce</span>
                </li>
                <li>
                    <span>GPS súradnice:</span><span>49.305303, 21.882968</span>
                </li>               
            </ul> 
            
            <div id="map-canvas"/>
        </div>
    </body>
</html>