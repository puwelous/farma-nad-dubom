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
                $("a.roll_down").click( function(){
                    $(this).siblings( "ul" ).slideToggle("slow");
                });
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
            <h1>Napíšte nám</h1>

            <!-- contact form -->
            <?php
            if (validation_errors()) {
                echo '<div class="errors">';
                echo validation_errors();
                echo '</div>';
            };
            ?>

            <?php
            $attributes = array('name' => 'napiste_nam_formular');
            echo form_open("napiste_nam/email", $attributes);
            ?>

            <?php
            $input_name = array(
                'name' => 'name',
                'id' => 'name',
                'placeholder' => 'Vaše meno',
                'value' => ( set_value('name') ? set_value('name') : '' )
            );

            echo form_label('Vaše meno', 'name');
            echo form_input($input_name);

            $input_email = array(
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'Váš e-mail',
                'value' => ( set_value('email') ? set_value('email') : '' )
            );

            echo form_label('Váš e-mail', 'email');
            echo form_input($input_email);

            $input_message = array(
                'name' => 'message',
                'id' => 'message',
                'placeholder' => 'Text',
                'value' => ( set_value('message') ? set_value('message') : '')
            );

            echo form_label('Správa', 'message');
            echo form_textarea($input_message);

            // submit button
            echo form_submit('submit_form', 'Odoslať správu');
            ?>

<?php echo form_close(); ?>

            <!-- picture -->
            <div id="mailbox_section">
<?php echo img('assets/css/images/mailbox.png'); ?>
            </div>

            <div style="clear: both;">
            </div>
    </body>
</html>