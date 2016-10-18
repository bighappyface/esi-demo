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
# or
vagrant ssh edge
```

## varnishtest example

```sh
# from within "edge" VM
cd /vagrant
varnishtest response-cache.vtc
```

## VCL editing

When the edge VM is provisioned the `default.vcl` file is copied to `/etc/varnish` to replace the default VCL.

The `default.vcl` file includes `/vagrant/actual.vcl` which is the VCL file containing the _actual_ VCL code.

You can make adjustments to `actual.vcl` on your workstation and then reload them from within edge VM as follows:

```sh
# from within "edge" VM

# live reload
sudo service varnish reload

# or

# hard restart
sudo service varnish restart
```

```sh
# from within "edge" VM
cd /vagrant
varnishtest response-cache.vtc
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
