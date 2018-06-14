# FashionApp

#### Description

##### This "fashionApp" project is built solely for tutorial purposes and not for production. I used the same principles (and some of the modules) while developing a web-app (that is now used as a native android app, compiled with [Apache Cordova](https://cordova.apache.org/)) for a local business near my hometown.
##### It uses [Lumen](https://lumen.laravel.com/) (a [Laravel](https://laravel.com/)-based micro-framework) for the development of the back-end. It implements a RESTful API to handle the front-end requests.
##### The front-end is a very simple SPA (Single-Page Application), realized by using [jQuery](https://jquery.com/), [Sammy.js](http://sammyjs.org/) (a jQuery plugin dedicated to development of SPAs), [Sammy.Template](https://github.com/quirkey/sammy/blob/master/lib/plugins/sammy.template.js) (a templating engine for Sammy.js - plug-in for a plug-in :) ) and [MaterializeCSS](https://materializecss.com) to spice things up a little.

##### When you open the front-end application, you are greeted by a preloader, which disappears when done, and list of all products from all categories is shown. While this list with products is loading, a side-menu (materializecss's sidenav component), containing a list of all categories is also loaded in the background. You are able to browse products, browse categories, browse preliminary defined sets of products, rate products, etc. The preloader appears on every page load, but don't forget this is SPA.

#### Test
##### To test it go to the applications directory (`cd fashionApp/`). Here you need to start an instance of PHP's built-in web-server for the API. So, 
```
cd api/ && php -S localhost:8000 -t public/
```
##### This serves the API on port 8000. The `-t public/` part is used to redirect traffic to the `public` directory (this is how Laravel and Lumen work, security reasons).
##### If you want to test the front-end from the same machine, you need to start another instance of the server like:
```
cd client/ && php -S localhost:8080
```

##### This serves the Front-end on port 8080, but it is not necessary to use these exact ports. The Front-end doesn't care which port you use to test it, but it does care on which port the API is served, so if you are not on localhost or not using port 8000, go to fashionApp/client/vendor/fashion/js/app.js file and change:
```javascript
const APIURL = 'http://localhost:8000/api/';
```
##### to whatever suits your needs.


#### Notes:
* I do not take credit for any of the images, used in this projects.
* I do not take credit for the style-combinations made (most of them will probably look awful in real life), they are only for test purposes.
* The pictures, used in the project are not compressed or resized or modified in any way by me. In production you will probably have to do something to them, so the Application could work more efficiently.
