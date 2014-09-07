
<meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no" />       
</head>

<!-- content -->
<div id="container">
    <h1><span class="big">K</span><span class="small">ontakt</span></h1>
    <div class="title_line"></div>

    <div class="group">
        <div class="left">
            <h2>Kontaktné údaje</h2>
            <ul class="contact_data">
                <li>
                    <span>Ing. Jaroslav Hnatič,</span><span>majiteľ</span>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <span>Mobil:</span><span>+421 905 406 069</span>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <span>E-mail 1:</span><span><?php echo safe_mailto('jaro.hnatic@post.sk', 'jaro.hnatic@post.sk'); ?></span>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <span>E-mail 2:</span><span><?php echo safe_mailto('jaro.hnatic@gmail.com', 'jaro.hnatic@gmail.com'); ?></span>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <span>Web:</span><span><?php echo anchor('http://www.farmanaddubom.sk', 'http://www.farmanaddubom.sk'); ?></span>
                    <div style="clear:both;"></div>
                </li>
            </ul>

            <h2>Kde nás nájdete</h2>
            <ul class="contact_data">
                <li>
                    <span>Adresa:</span><span>Borov 72, 068 01 Medzilaborce</span>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <span>GPS súradnice:</span><span>49.305303, 21.882968</span>
                    <div style="clear:both;"></div>
                </li>               
            </ul> 
        </div>

        <div class="right">
        <!--<div id="map_section">-->
            <?php echo img('assets/css/images/mapka.png'); ?>
        <!--</div>-->
            </div>
        <div style="clear: both;">
        </div>
        </div>
    </div>
