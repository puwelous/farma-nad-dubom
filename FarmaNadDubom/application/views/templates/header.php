<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            if (isset($title)) {
                echo $title;
            } else {
                echo 'Farma Nad dubom';
            };
            ?>
        </title>

        <!-- meta tags -->
        <?php
        if (isset($description)) {
            echo meta('description', $description);
        } else {
            echo meta('description', '');
        }
        ?>
        <?php echo meta(array('name' => 'robots', 'content' => 'INDEX, FOLLOW')); ?>

        <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        echo link_tag('assets/css/table.css');
        echo link_tag('assets/css/lightbox.css');
        ?>

        <!-- javascript -->
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.6.js" text='text/javascript'></script>
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.11.0.min.js" text='text/javascript'></script>
        <script src="<?php echo base_url(); ?>assets/javascript/lightbox.min.js" text='text/javascript'></script>

        <script text='text/javascript'>
            $(document).ready(function() {

                $("a.roll_down").click(function() {
                    $(this).siblings("ul").slideToggle("slow");
                });

                var pathname = window.location.pathname;
                if (pathname.indexOf('chov/') > -1)
                {
                    $("#menu_chov_list").show();
                } else if (pathname.indexOf('foto/') > -1) {
                    $("#menu_foto_list").show();
                }
                ;

            });
        </script>
    </head>

    <body>
        <!-- menu -->
        <div id="menu">
            <ul>
                <li>
                        <?php echo anchor('vitajte', 'MENU', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                </li>
                <ul>
                    <li>
<?php echo anchor('o-nas', 'O NÁS', array('class' => 'text_light smaller pp_dark_gray red_on_hover upper_cased')); ?>
                    </li>
                    <li>
                        <a class="roll_down" href="#">
                            CHOV                        
                        </a>
                        <ul id="menu_chov_list">
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
                        <ul id="menu_foto_list">
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