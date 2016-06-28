# BIMPER

This is the template build on top of the [Sage Wordpress theme](https://github.com/roots/sage) &&
[Eric Barnes blog post](http://ericlbarnes.com/setting-gulp-bower-bootstrap-sass-fontawesome/).

### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/) and installed PHP server
in order to support templating by [Twig library](http://twig.sensiolabs.org/doc/api.html).

From the command line:

1. Clone the git repository to the local machine: `git clone git@github.com:pnowy/bimper.git bimper`
2. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
3. Navigate to the theme directory, then run `npm install`
4. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json`
to reflect your local development hostname.

For example, if your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

### PHP

I suggest the [XAMPP](https://www.apachefriends.org/) as PHP server. You will fine more about PHP templating
on the [Twig page](http://twig.sensiolabs.org/doc/api.html).

The Twig library has been added directly to the repo in order to avoid the manual installation or by composer installation.
