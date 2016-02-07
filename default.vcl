vcl 4.0;

backend default {
    .host = "192.168.50.4";
    .port = "80";
}

sub vcl_recv {
  unset req.http.Cookie;
}

sub vcl_backend_response {
  set beresp.ttl = 1m;
  if (bereq.url ~ "^/(\?[\a-z0-9])?$") {
    set beresp.do_esi = true;
    set beresp.ttl = 5m;
  }
}

sub vcl_deliver {
  if (obj.hits > 0) {
    set resp.http.X-Cache = "HIT";
  } else {
    set resp.http.X-Cache = "MISS";
  }
}
