<?php if(isset($_COOKIE['CookieHinweis']) ) {} else { ?>
    <div id="cookie-popup">
        <div class="cookie-popup-inner">
            <div class="hinweis">
                <p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <button onclick='cookieOk()'>OK, ich bin einverstanden.</button>
                </div>
            </div>
        </div>
    </div>

<?php  }; ?>
