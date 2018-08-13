function mapSelector() {
    if /* if we're on iOS, open in Apple Maps */
    ((navigator.platform.indexOf("iPhone") != -1) || 
    (navigator.platform.indexOf("iPad") != -1) || 
    (navigator.platform.indexOf("iPod") != -1)) {
        window.open("maps://maps.google.com/maps/dir/?daddr=43.083786,-89.364278&amp;ll=&z=4");
    } else /* else use Google */ {
        window.open("https://maps.google.com/maps/dir/?daddr=43.083786,-89.364278&amp;ll=&z=4");
    }
}
