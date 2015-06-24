e911
====

University of South Florida 911 and E911 Disclosure, Notice, and Acknowledgement

## Install and Build

To install and build this app, you'll need `npm`,`bower`,`grunt-cli` and `composer` installed globally.

Once you have that done, you can build it with the following sequence in the e911 folder:

```
npm install
bower install
grunt build
```

That will build a copy in the `dest` folder you can copy over to the web server

Note: There will also be a zip file of the `dest` folder in the `public` folder 
if you prefer to use that for deployment. Be aware that the `grunt build` will
also execute composer update for you so you won't have to do that yourself.