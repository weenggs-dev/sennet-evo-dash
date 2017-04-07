/*
 * Usage
 * 
 * cookies.setCookie(
 *      "name", <-- name of cookie variable
 *      123, <-- value of the cookie variable
 *      1, <-- number of days for cookie to live
 *      "/", <-- the path of the page that created the cookie
 *      "sensornetwork.com.au", <-- the domain that created the cookie
 *      false <-- set if this cookie is ssl secure only
 * );
 * 
 */

var cookies = {
    setCookie: function (name, value, expires, path, domain, secure) {
        var today = new Date();
        today.setTime(today.getTime());
        if (expires) {
            expires = expires * 1000 * 60 * 60 * 24;
        }
        var expires_date = new Date(today.getTime() + (expires));
        document.cookie = name + '=' + escape(value) +
                ((expires) ? ';expires=' + expires_date.toGMTString() : '') + //expires.toGMTString()
                ((path) ? ';path=' + path : '') +
                ((domain) ? ';domain=' + domain : '') +
                ((secure) ? ';secure' : '');
    },
    getCookie: function (name) {
        var start = document.cookie.indexOf(name + "=");
        var len = start + name.length + 1;
        if ((!start) && (name != document.cookie.substring(0, name.length))) {
            return null;
        }
        if (start == -1)
            return null;
        var end = document.cookie.indexOf(';', len);
        if (end == -1)
            end = document.cookie.length;
        return unescape(document.cookie.substring(len, end));
    },
    deleteCookie: function (name, path, domain) {
        if (cookies.getCookie(name))
            document.cookie = name + '=' +
                    ((path) ? ';path=' + path : '') +
                    ((domain) ? ';domain=' + domain : '') +
                    ';expires=Thu, 01-Jan-1970 00:00:01 GMT';
    },
    getCurrentDomain: function () {
        var url = window.location.href
        var domain;
        //find & remove protocol (http, ftp, etc.) and get domain
        if (url.indexOf("://") > -1) {
            domain = url.split('/')[2];
        }
        else {
            domain = url.split('/')[0];
        }

        //find & remove port number
        domain = domain.split(':')[0];

        return domain;
    }
}