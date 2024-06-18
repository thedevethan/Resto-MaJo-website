<?php

require("header.php");

require("navbar.php");

?>

<div class="ggmaps">

    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0450368193556!2d-3.9541977000000004!3d5.410112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193049d90699f%3A0xce7c1c3b660c8726!2sRestaurant%20Maquis%20chez%20Ma&#39;Jo!5e0!3m2!1sfr!2sci!4v1718405856179!5m2!1sfr!2sci"  style="border:0; border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="ride">

        <p class="come">
            Nous rejoindre avec:
        </p>

        <div class="rider">


            <div class="yango">
                <script src="//yastatic.net/taxi-widget/ya-taxi-widget.js" charset="UTF-8"></script>
                <div class="ya-taxi-widget" data-ref="nom de votre site" data-clid="API_CLID_(optionnel)" data-size="s" data-theme="normal" data-title="Restaurant Maquis chez Ma'Jo" data-description="Restaurant Maquis chez Ma'Jo" data-use-location="true" data-app="2187871" data-point-b="5.410266875096953, -3.9541765423279585" data-proxy-url="https://yango.go.link/route?start-lat={start-lat}&start-lon={start-lon}&end-lat=5.410266875096953&end-lon=-3.9541765423279585&adj_adgroup=widget&ref={ref}&adj_t=vokme8e_nd9s9z9&lang=ru&adj_deeplink_js=1&utm_source=widget&adj_fallback=https%3A%2F%2Fyango.com%2Fen_int%2Forder%2F%3Fgfrom%3D{start-lon}%2C{start-lat}%26gto%3D-3.95428282%2C5.41023865%26ref%3D{ref}" data-lang="fr">
                </div>
            </div>



            <div class="uber">
                <a target="_blank" href="https://m.uber.com/ul/?action=setPickup&client_id=eRaXRTt3V_C4IG7PAlZ4NmLhd7-VznK0Sv_Mlkw7&pickup=my_location&dropoff[formatted_address]=Restaurant%20Maquis%20chez%20Ma'Jo%2C%2019BP666%20Abidjan%2019%2C%20Abidjan%2C%20C%C3%B4te%20d'Ivoire&dropoff[latitude]=5.410112&dropoff[longitude]=-3.954198">Uber</a>
            </div>
        </div>


    </div>
</div>

<?php

require("footer.php");

?>