function cookieOk() {
    var now = new Date();
    var deleteCookie = now.getTime() + 2592000000;

    now.setTime(deleteCookie);
    var enddate = now.toUTCString();

    document.cookie = "CookieHinweis = set; path=/; expires=" + enddate;
    document.getElementById("cookie-popup").classList.add("hidden");
}
