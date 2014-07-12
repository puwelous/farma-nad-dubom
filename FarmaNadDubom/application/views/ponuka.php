<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Farma Nad dubom</title>

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <?php
        // css
        echo link_tag('assets/css/stylesheet.css');
        echo link_tag('assets/css/table.css');
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
            <h1>Naša ponuka</h1>

            <!-- Our offers - table -->
            <table>
                <thead>
                    <tr>
                        <th>Option</th>
                        <th>Default</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>showSpeed</strong></td>
                        <td>15</td>
                        <td>The speed of the show/reveal</td>
                    </tr>
                    <tr>
                        <td><strong>showEasing</strong></td>
                        <td>'linear'</td>
                        <td>The easing of the show/reveal</td>
                    </tr>
                    <tr>
                        <td><strong>hideSpeed</strong></td>
                        <td>50</td>
                        <td>The speed of the hide/conceal</td>
                    </tr>
                    <tr>
                        <td><strong>hideEasing</strong></td>
                        <td>'linear'</td>
                        <td>The easing of the hide/conceal</td>
                    </tr>					
                    <tr>
                        <td><strong>width</strong></td>
                        <td>'auto'</td>
                        <td>The width that the data will be truncated to - <em>('auto' or px amount)</em></td>
                    </tr>
                    <tr>
                        <td><strong>ellipsis</strong></td>
                        <td>true</td>
                        <td>Set to true to enable the ellipsis</td>
                    </tr>
                    <tr>
                        <td><strong>title</strong></td>
                        <td>false</td>
                        <td>Set to true to show the full data on hover</td>
                    </tr>
                    <tr>
                        <td><strong>afterShow</strong></td>
                        <td> $.noop</td>
                        <td>The callback fired after the show/reveal</td>
                    </tr>
                    <tr>
                        <td><strong>afterHide</strong></td>
                        <td>$.noop</td>
                        <td>The callback fired after the hide/conceal</td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </body>
</html>