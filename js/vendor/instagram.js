(function(a) {
    a.fn.instagram = function(b) {
        function f(b,num) {
            var c = b.images.thumbnail.url;
            "low_resolution" == e.image_size ? c = b.images.low_resolution.url : "thumbnail" == e.image_size ? c = b.images.thumbnail.url : "standard_resolution" == e.image_size && (c = b.images.standard_resolution.url);
            var d = a("<img>").addClass("instagram-image").attr("src", c);
            return e.photoLink && (d = a("<a>").attr("target", "_blank").attr("href", b.link).append(d)), a("<div>").addClass("instagram-placeholder").attr("id", "inst"+num).append(d)
        }

        function g() {
            return a("<div>").addClass("instagram-placeholder").attr("id", "empty").append(a("<p>").html("No photos for this query"))
        }

        function h() {
            var b = d,
                c = {};
            return null != e.next_url ? e.next_url : (null != e.hash ? b += "/tags/" + e.hash + "/media/recent" : null != e.search ? (b += "/media/search", c.lat = e.search.lat, c.lng = e.search.lng, null != e.search.max_timestamp && (c.max_timestamp = e.search.max_timestamp), null != e.search.min_timestamp && (c.min_timestamp = e.search.min_timestamp), null != e.search.distance && (c.distance = e.search.distance)) : b += null != e.userId ? "/users/" + e.userId + "/media/recent" : null != e.locationId ? "/locations/" + e.locationId + "/media/recent" : "/media/popular", null != e.accessToken && (c.access_token = e.accessToken), null != e.clientId && (c.client_id = e.clientId), null != e.minId && (c.min_id = e.minId), null != e.maxId && (c.max_id = e.maxId), null != e.show && (c.count = e.show), b += "?" + a.param(c))
        }
        var c = this,
            d = "https://api.instagram.com/v1",
            e = {
                hash: null,
                userId: null,
                locationId: null,
                search: null,
                accessToken: null,
                clientId: null,
                show: null,
                onLoad: null,
                onComplete: null,
                maxId: null,
                minId: null,
                next_url: null,
                image_size: null,
                photoLink: !0
            };
        return b && a.extend(e, b), null != e.onLoad && "function" == typeof e.onLoad && e.onLoad(), a.ajax({
            type: "GET",
            dataType: "jsonp",
            cache: !1,
            url: h(),
            success: function(a) {
                var b = a.data !== void 0 ? a.data.length : 0,
                    d = null != e.show && b > e.show ? e.show : b;
                if (d > 0)
                    for (var h = 0; d > h; h++) c.append(f(a.data[h],h));
                else c.append(g());
                null != e.onComplete && "function" == typeof e.onComplete && e.onComplete(a.data, a)
                c.data('loaded',true);
            }
        }), this
    }
})(jQuery);
