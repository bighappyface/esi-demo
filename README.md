# Edge Side Includes Demo

## Requirements

[Vagrant](https://www.vagrantup.com/)

## Running Demo

### 1. Boot virtual machines

```bash
vagrant up
```

### 2. Evaluate Requests

* Raw web server request: http://localhost:8080/
* Edge request: http://localhost:8081/

## Accessing VMs

```sh
vagrant ssh web
vagrant ssh edge
```

## varnishtest example

```sh
# from within "edge" VM
varnishtest /etc/varnish/test/response-cache.vtc
```

## More reading

* https://www.w3.org/TR/esi-lang
* https://www.w3.org/TR/edge-arch/
* https://www.varnish-cache.org/docs/4.0/users-guide/esi.html
* https://www.akamai.com/us/en/support/esi.jsp
* https://blog.cloudflare.com/making-edge-side-includes-esi-automatic-and-e/
* https://www.fastly.com/blog/using-esi-part-1-simple-edge-side-include

### Varnish test resources

* http://www.clock.co.uk/blog/getting-started-with-varnishtest
* http://book.varnish-software.com/4.0/chapters/Examining_Varnish_Server_s_Output.html
* http://blog.zenika.com/2012/08/27/introducing-varnishtest/
