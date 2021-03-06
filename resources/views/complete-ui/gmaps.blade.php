<div class="ui-block">
    <h3 class="ui-block-heading">GMaps</h3>
    <a target="_blank" href="https://github.com/hpneo/gmaps" class="ui-block-description">https://github.com/hpneo/gmaps</a>

    <samp class="cui-example-code-static">
        &lt;script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"&gt;&lt;/script&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/gmaps/gmaps.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <div id="gmaps-example" style="height: 400px; width: 100%;"></div>

        <!-- Javascript -->
        <script>
            $(function() {
                var map = new GMaps({
                    el: '#gmaps-example',
                    lat: -12.043333,
                    lng: -77.028333
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
