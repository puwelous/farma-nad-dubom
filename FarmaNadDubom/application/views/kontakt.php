
<meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no" />

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6YUMQDnS8B8ZiKItN_of5xOGUh97VdOo"></script>
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
                    <span>E-mail:</span><span><?php echo safe_mailto('jaro.hnatic@post.sk', 'jaro.hnatic@post.sk'); ?></span>
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
            <?php echo img('assets/css/images/illustration_map.gif'); ?>
        <!--</div>-->
            </div>
        <div style="clear: both;">
        </div>
        </div>


        <div id="map-canvas"></div>
    </div>
