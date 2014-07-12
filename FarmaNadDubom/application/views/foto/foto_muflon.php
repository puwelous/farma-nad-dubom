<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Farma Nad dubom</title>

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        echo link_tag('assets/css/lightbox.css');
        ?>

        <!-- javascript -->
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.6.js" text='text/javascript'></script>
        <script src="<?php echo base_url(); ?>assets/javascript/jquery-1.11.0.min.js" text='text/javascript'></script>
        <script src="<?php echo base_url(); ?>assets/javascript/lightbox.min.js" text='text/javascript'></script>

        <script>
            $(document).ready(function(){
                $("a.roll_down").click( function(){
                    $(this).siblings( "ul" ).slideToggle("slow");
                });
                
                // slide menu items
                $("a.roll_down").siblings( "ul" ).show();            
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

        <!-- content -->
        <div id="container">
            <h1>Muflon</h1>

            <div class="photogallery">
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel1.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel1.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel2.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel2.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel3.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel3.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel1.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel1.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel2.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel2.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel3.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel3.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel1.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel1.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel2.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel2.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel3.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel3.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel1.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel1.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel2.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel2.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel3.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel3.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel1.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel1.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel2.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel2.jpg'); ?>
                </a>
                <a href="<?php echo base_url('assets/images/gallery/daniel/daniel3.jpg'); ?>" data-lightbox="daniel">
                    <?php echo img('assets/images/gallery/daniel/daniel3.jpg'); ?>
                </a>                
            </div>
        </div>
    </body>
</html>