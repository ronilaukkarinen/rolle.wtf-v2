# rolle.wtf 2016

Website at [rolle.wtf](http://rolle.wtf). A site where it all comes together. Built with [Modern HTML5 Boilerplate](https://github.com/ronilaukkarinen/modern-html5-boilerplate).

![](https://dl.dropboxusercontent.com/u/18447700/rolle.wtf.png "Screenshot")

### Cache

I have a simple PHP-cache which reloads every 10 minutes because of the social media feeds. Crontab follows:

````
*/6 * * * * /var/www/rolle.wtf/bin/flushrollewtfcache
````

`flushrollewtfcache` -executable:

````
#!/bin/bash
cd /var/www/rolle.wtf/public_html && wget -q http://rolle.wtf
````

### Building blocks

* [Modern HTML5 Boilerplate](https://github.com/ronilaukkarinen/modern-html5-boilerplate)
* [Font Awesome](http://fortawesome.github.io/Font-Awesome/) - The iconic font and CSS toolkit
* [flatuicolorpicker](http://www.flatuicolorpicker.com/) - Best Flat Colors For UI Design
* [BrandColors](http://brandcolors.net/) - Official color codes for the world's biggest brands
* [Compressor.io](https://compressor.io/) - Compress and optimize your images. Up to 90% file size reduction
* [Social Icon Font SVG for VSCO](https://github.com/tombryan/social-icon-font/)
* [Acadia Untappd SVG](https://github.com/gesteves/acadia/tree/master/source/svg)
