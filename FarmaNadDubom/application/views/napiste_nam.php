
<!-- content -->
<div id="container">
    <h1><span class="big">N</span><span class="small">apíšte nám</span></h1>
    <div class="title_line"></div>

    <!-- contact form -->
    <?php
    if (validation_errors()) {
        echo '<div class="errors">';
        echo validation_errors();
        echo '</div>';
    };
    ?>

    <div class="group">
        <div class="left">
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
        </div>
        <div class="right">
            <!-- picture -->
            <div id="mailbox_section">
                <?php echo img('assets/css/images/mailbox.png'); ?>
            </div>

        </div>
    </div>
    <div style="clear: both;">
    </div>
</div>
