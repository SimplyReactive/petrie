# Petrie

Petrie is a purposely designed framework by [@_nathanburgess] to enable developers to quickly iterate simple or complex websites.

### Version
0.1.3-alpha

### Tech

Petrie uses a number of open source projects to work properly:

* [Laravel] - The PHP Framework For Web Artisans
* [Twitter Bootstrap] - Front-end UI
* [node.js] - Evented I/O for the backend
* [Gulp] - The streaming build system
* [jQuery] - Javascript simplified

### Installation
Composer:
```sh
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```
NodeJS:
```sh
$ sudo apt-get install nodejs
```
Gulp:
```sh
$ npm i -g gulp --save
```

Now that we have the prerequisites, we can install Petrie
```sh
$ git clone https://bitbucket.org/simplyreactive/petrie petrie
$ cd petrie
$ cp .env.example .env
$ php artisan key:generate
$ npm install
$ bower install
$ composer update
$ gulp
```
The final step is to edit the .env file and adjust the database settings to your own.

### Development

Want to make Petrie even better? Awesome!  
It's simple enough; just fork the repo and make your change.  
When you're done, submit a pull request.

License
----
MIT



[Laravel]:http://laravel.com/docs/5.0
[Twitter Bootstrap]:http://twitter.github.com/bootstrap/
[node.js]:http://nodejs.org
[jQuery]:http://jquery.com
[Gulp]:http://gulpjs.com
[@_nathanburgess]:https://twitter.com/_nathanburgess