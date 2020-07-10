<p align="center"><a href="https://github.com/obsidianbit/lunr"><img src="https://i.imgur.com/k1wRBZb.png" alt="lunr" height="180"/></a></p>

<h1 align="center">lunr</h1>

<p align="center">Privacy-oriented open-source meta-search engine</p>

<p align="center"><a href="https://github.com/obsidianbit/lunr/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/obsidianbit/lunr?style=flat-square"></a></p>

## System requirements

- Unix-like OS (Windows isn't supported)
- PHP 7.1+
- Web-server (Nginx or Apache2);

## Installation

### Nginx

1. Install nginx if you haven't already.

```bash
apt install nginx
```

2. Install php and php-fpm.

```bash
apt install php php-fpm
```

3. Make a server block that allows execution of php. In this example the page is being served from `/var/www/lunr`.

```conf
server {
    listen         80;
    listen         [::]:80;
    server_name    yoursite.com www.yoursite.com;
    root           /var/www/lunr;
    index          index.php;

    location ~* \.php$ {
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param SCRIPT_NAME $fastcgi_script_name;
    }
}
```

4. Clone the repository or upload the files to `/var/www/lunr`.

```bash
git clone https://github.com/obsidianbit/lunr.git
```

You are all set! Enjoy browsing knowing you aren't being tracked.

### Apache2

Because I have not deployed lunr with apache2 I will only redirect you to a tutorial.
[How To Set Up Apache Virtual Hosts on Ubuntu 18.04](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-18-04)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
