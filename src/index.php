<?php
$cachefile = 'cached-index.html';
$cachetime = 1800;
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
echo "<!-- Amazing hand crafted super cache by rolle, generated ".date('H:i', filemtime($cachefile))." -->";
include($cachefile);
exit;
}
ob_start(); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Rolle &mdash; A front end developer, web designer &mdash; Roni Laukkarinen</title>
    <meta name="description" content="Roni Laukkarinen is a Finnish web developer, Twitter freak, craft beer enthusiast. Find out more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png">
		<meta property="og:image" content="https://rolle.wtf/video/video.jpg" />
</head>
<body>
	<header class="main-header">
    <div class="shade"></div>

    <div class="video-container">
      <video loop muted autoplay poster="video/video.jpg" id="background-video" class="background-video">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
        Your browser does not support the video tag. I suggest you upgrade your browser.
      </video>
    </div>

      <div class="content">

		    <h1 lang="en">Rolle.</h1>

        <!-- <a href="#lang-en" onclick="window.lang.change('en'); return false;">en</a> | <a href="#lang-fi" onclick="window.lang.change('fi'); return false;">fi</a> -->

        <p><span lang="en">I'm Roni</span></a> <strong>&lt;rolle&gt;</strong> Laukkarinen, <span lang="en">Full stack / Front End web developer</span> (<span lang="en">which means some kind of a</span> <i lang="en">coder</i> <span lang="en">or</span> <i lang="en">nerd</i>), <span lang="en">dinosaur in social media age, craft beer enthusiast, music- and movie digger. I build beautiful and functional websites and tweet a lot.</span></p>

        <ul class="some">
          <li><a href="skype:roni.laukkarinen"><span class="fa fa-skype"></span><span class="screen-reader-text">Add me to Skype</a></li>
          <li><a target=_"blank" href="https://github.com/ronilaukkarinen"><span class="fa fa-github"></span><span class="screen-reader-text">See my codes at GitHub</a></li>
          <li><a target=_"blank" href="https://wakatime.com/@rolle"><img src="images/wakatime.svg" alt="WakaTime" /><span class="screen-reader-text">See my codes at WakaTime</a></li>
          <li><a target=_"blank" href="https://twitter.com/rolle"><span class="fa fa-twitter"></span><span class="screen-reader-text">Check out my tweets</a></li>
          <li><a target=_"blank" href="https://untappd.com/user/rolle"><img src="images/untappd.svg" alt="Untappd" /><span class="screen-reader-text">Check out my beer checkins</a></li>
          <li><a target=_"blank" href="http://rolle.vsco.co/"><img src="images/vsco.svg" alt="VSCO" /><span class="screen-reader-text">Check out my photos at VSCO</a></li>
          <li><a target=_"blank" href="http://instagram.com/rolle_"><span class="fa fa-instagram"></span><span class="screen-reader-text">Check out my photos at Instagram</a></li>
          <li><a target=_"blank" href="http://letterboxd.com/rolle/"><img src="images/letterboxd.svg" alt="Letterboxd" /><span class="screen-reader-text">Check out my movie reviews at Letterboxd</a></li>
          <li><a target=_"blank" href="http://trakt.tv/users/rolle"><img src="images/trakt.svg" alt="Trakt" /><span class="screen-reader-text">Check out my movie and TV reviews at Trakt</a></li>
          <li><a target=_"blank" href="https://www.endomondo.com/profile/2012723"><img src="images/endomondo.svg" alt="Endomondo" /><span class="screen-reader-text">Check out my excercises at Endomondo</a></li>
          <li><a target=_"blank" href="http://heia.me/rolle"><img src="images/heiaheia.svg" alt="HeiaHeia" /><span class="screen-reader-text">Check out my excercises at HeiaHeia</a></li>
          <li><a target=_"blank" href="http://www.facebook.com/rollefb"><span class="fa fa-facebook"></span><span class="screen-reader-text">Check out my profile at Facebook</a></li>
          <li><a target=_"blank" href="http://www.last.fm/user/rolle-"><span class="fa fa-lastfm"></span><span class="screen-reader-text">Check out my music taste at Last.fm</a></li>
          <li><a target=_"blank" href="http://bandcamp.com/roni"><img src="images/bandcamp.svg" alt="Bandcamp" /><span class="screen-reader-text">Check out my music collections at Bandcamp</a></li>
          <li><a target=_"blank" href="http://open.spotify.com/user/rolle-"><span class="fa fa-spotify"></span><span class="screen-reader-text">Check out my music taste at Spotify</a></li>
          <li><a target=_"blank" href="https://medium.com/@rolle"><span class="fa fa-medium"></span><span class="screen-reader-text">Check out my text in Medium</a></li>
        </ul>

      </div><!-- .content -->

      <div class="animated-mouse" data-0="opacity: 1;" data-200="opacity: 0;">
          <div class="animated-mouse-pointer"><p class="screen-reader-text" lang="en">Please read further to know more.</p></div>
      </div>

	</header>

  <div class="site">

    <section class="areas">

      <div class="box box-company">

        <div class="content">

          <h2 lang="en">Entrepreneur.</h2>
          <p><a target=_"blank" href="https://www.dude.fi" lang="en">Digital agency</a></p>

        </div><!-- .content -->

      </div>

      <div class="box box-movies">

        <div class="content">

          <h2 lang="en">Filmgoer</h2>
          <p><a target=_"blank" href="http://www.rollemaa.org/leffat" lang="en">My movie blog</a></p>

        </div><!-- .content -->

      </div>

      <div class="box box-beer">

        <div class="content">

          <h2 lang="en">Craft beer enthusiast.</h2>
          <p><a target=_"blank" href="https://www.huurteinen.fi">Huurteinen.fi</a></p>

        </div><!-- .content -->

      </div>

      <div class="box box-code">

        <div class="content">

          <h2 lang="en">Coder.</h2>
          <p><a target=_"blank" href="https://github.com/ronilaukkarinen">GitHub</a></p>

        </div><!-- .content -->

      </div>

    </section>

    	<section id="timeline" class="container">
    		<div class="timeline-block">
    			<div class="timeline-icon">
    				<h2>1984</h2>
    			</div>

    			<div class="timeline-content">
    				<p>Commodore 64:n ja Sinclairin ZX Spectrumin kilpailija Amstrad julkaisi <b>Amstrad CPC</b>-koneensa vuonna 1984, jonka jälkeen isäni osti koneen ja ryhtyi koodaamaan BASICia, koska ei ollut mikään HC-tietokonepelaaja vaan enemmänkin kiinnostunut mitä kaikkea koneella voi tehdä.</p>

            <img src="images/amstrad.jpg" alt="Amstrad CPC" />
            <p class="info">Juuri ennen syntymää</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

    		<div class="timeline-block">
    			<div class="timeline-icon">
    				<h2>1988</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p><img src="images/rolle-born.jpg" alt="Synnyn" />
              Näen päivänvalon Keski-Suomen keskussairaalassa, Jyväskyl&auml;ss&auml;. Synnyn terveenä poikana nuorelle sairaanhoitajaäidille ja veturinkuljettajaisälle.</p>
            <p class="info">Syntymä</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

        <div class="timeline-block">
    			<div class="timeline-icon">
    				<h2>1992</h2>
    			</div> <!-- timeline-icon -->

        <div class="timeline-content">
          <p><img src="images/pieni.jpg" alt="Minä taaperona." />
            Olen hieman introvertin suuntaan jo tässä vaiheessa. Ujo ja arka. Jo 4 vuotiaana sanon äidilleni keittiön pöydällä "minua ahdistaa".</p>
            <p>Ikävuoteen 6 mennessä kirjoitan ja luen älyttömiä määriä. Kirjoittamisesta tulee heti rakas harrastus.</p>
          <p class="info">Rauhallinen ja mietteliäs lapsi</p>
        </div> <!-- timeline-content -->
      </div> <!-- timeline-block -->

    		<div class="timeline-block">
    			<div class="timeline-icon">
    				<h2>1994</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p>Saan ensimmäiset tietokonepelini synttärilahjaksi, usealla levykkeellä varustettuna. Näistä mieleen jäi etenkin vuonna 1991 julkaistu Rolling Ronny, isälläni on huumorintajua. Myöhemmin ensimmäisenä nettinickinä olikin "ronny".</p>

            <div class="videoWrapper">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/2Akso4taEbA?vq=hd1080&modestbranding=1&iv_load_policy=3&showinfo=0&theme=light&color=white" frameborder="0"></iframe>
            </div>

            <p class="info">Ensimmäiset tietokonepelit,<br />
            Rolling Ronny<br />
            One Must Fall 2097<br />
            Jagged Alliance<br />
            Command &amp; Conquer<br />
            Sierra<br />
            ...</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

    		<div class="timeline-block">
    			<div class="timeline-icon">
            <h2>1999</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p><img src="images/90s.jpg" alt="Kuvassa käytän vanhaa 90-luvun tietokonetta." />
              Isäni luo minulle ja veljelleni ensimmäisen kotisivutilan ja sähköpostit Nicin palvelimille. Julkaisen ensimmäiset nettisivuni. Olen tuolloin noin kymmenvuotias. Palvelin on pystyssä <a href="http://www.nic.fi/~ronny/">tähänkin päivään saakka</a>.</p>

            <p class="info">Ensimmäiset kotisivut,<br />
            Notepad<br />
            HTML<br />
            Inline CSS</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

    		<div class="timeline-block">
    			<div class="timeline-icon">
            <h2>2002</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p>Aloitan pianonsoiton, innostun ensimmäistä kertaa jostain muustakin kuin konemusiikista. Käyn viikottain <a href="https://fi.wikipedia.org/wiki/Risto_Urrio">Risto Urrion</a> kirjailijakerhossa Jyväskylän kirjailijatalolla. Joitakin runojani näkyy jopa Keskisuomalaisessakin.</p>

            <p>Nettisivujen väsääminen on kaikista rakkain harrastukseni ja alan tekemään pikkupalkkioista hommia tuttaville. Alan irkkaamaan, rekisteröidyn <a href="https://irc-galleria.net/user/rolle%60">IRC-galleriaan</a> ja <a href="https://myspace.com/ellor">Myspaceen</a>.</p>
    				<p class="info">
              Klassinen piano<br />
              Kirjoittaminen<br />
              Koodaaminen<br />
              Sosiaalinen media<br />
              IRC</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

    		<div class="timeline-block">
    			<div class="timeline-icon">
            <h2>2005</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p>Minulla on jo kokemusta tekstitiedosto-php-pohjaisista sisällönhallintajärjestelmistä, cutenewsistä, sekä moderneista CMSistä kuten Textpattern, mutta vasta version 2.0 myötä innostun toden teolla WordPressistä ja sille tielle jäänkin.</p>

            <p>Ensimmäinen WordPress-sivustoni <a href="http://www.rollemaa.org">Rollemaa</a> on yhä pystyssä. Viimeisin bloggaus kirjoitettu <b><?php $url = "http://www.rollemaa.org/feed/"; $rss = simplexml_load_file($url); if($rss) : include_once('inc/time-since-fin.php'); echo " ".aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time())." "; ?></b> sitten. <?php endif; ?></p>

            <p>Rekisteröidyn <a href="http://www.last.fm/user/rolle-/" class="lastfm"><span class="fa fa-lastfm"></span> Last.fm:ään.</a></p>
						<div class="np"><?php include('inc/lastfm/index.php'); ?></div>

    				<p class="info">WordPress julkaistaan, bloggausinto kasvaa,<br />
            Taidot kehittyy<br />
            PHP<br />
            JS</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

        <div class="timeline-block">
    			<div class="timeline-icon">
            <h2>2007</h2>
    			</div> <!-- timeline-icon -->

    			<div class="timeline-content">
    				<p>Valmistun ylioppilaaksi Cygnaeus-lukiosta kohtalaisin paperein, ainoastaan tietotekniikasta ja kuvamataidosta vedän täysiä pisteitä, lyhyt matematiikka hipoen läpi.</p>

            <p>Tiedän että backend-ohjelmoijaa minusta ei ainakaan tule, mutta verkkosivuissa olen yhä mielestäni haka. Tutustun Espoosta Jyväskylään muuttaneeseen Veeraan IRCissä ja suhteesta kehkeytyy jotain vakavempaa. Veeran kuurosokeuden myötä opettelen viittomakielen.</p>

            <p>Rekisteröidyn <a class="facebook" href="https://www.facebook.com/rollefb"><span class="fa fa-facebook"></span> Facebookiin</a>.</p>

    				<p class="info">Ylioppilas<br />
            Tyttöystävä<br />
            Viittomakieli</p>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2008</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Pääsen heti lakin saatuani sivariin, jonka suoritan Jyväskylän Yliopiston tietojenkäsittelytieteiden laitoksella. Opin tuon vuoden aikana paljon. Pitkään kytenyt masennus vie palveluskelpoisuuteni ja saan loppuajasta vapautuksen paria erilaista masennukseen liittyvää diagnoosia vastaan.</p>

            <p>Jään sosiaalisten tilanteiden pelon aiheuttaman työkyvyttömyyden vuoksi sairaslomalle. Bloggaan paljon myös <a href="http://www.rollemaa.org/avainsana/sivari/">sivariin</a> liittyvistä aiheista. Menen Veeran kanssa kihloihin ja kesällä naimisiin. Tämä ja edellinen vuosi ovat elämäni vaikeimpia.</p>
            <p class="info">Siviilipalvelus Jyväskylän Yliopistolla<br />
            Kihlaus ja häät</p>

            <p>Rekisteröidyn <a class="twitter" href="https://www.twitter.com/rolle"><span class="fa fa-twitter"></span> Twitteriin</a>.</p>

            <p class="tweet"></p>

          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2009</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Oltuani tovin sairaslomalla, käyn työkkärissä pari kurssia ja haen Jyväskylän Data Group -tietotekniikkaliikkeeseen harjoitteluun. Kaikki sujuu loistavasti, mutta minua ei palkata. Palloilen rahattomana työttömänä hakien töitä, masentuen entisestään. Luulen, että minulla ei ole toivoa.</p>

            <p>Samaan aikaan esikoistyttäreni Lotta Iines syntyy maailmaan ja saan muuta ajateltavaa koti-isänä.</p>
            <img src="images/isi-ja-lotta.jpg" alt="Kuvassa olen tyttäreni Lotan kanssa, joka on varmaan noin vuoden ikäinen." />
            <p class="info">Pätkätyöt<br />
            Esikoinen syntyy</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2010</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Minut kutsutaan työhaastatteluun Helsinkiin, ohjelmistotaloon, joka toteuttaa sosiaalisen median tyyppistä SaaS-palvelua. Olen innoissani, kerrankin oman alan töitä.</p>

            <p>Työpaikka on Jyväskylässä ja pääsen aloittamaan heti. Web-ala nostaa vasta päätään Suomessa, mutta kuvittelen että minulla kävi tuuri, sillä pääsen ylioppilaan papereilla sisään. Päivittäinen harrastuneisuuteni oli kuitenkin avaintekijä.</p>
            <p class="info">Ensimmäinen oikea työpaikka</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2012</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Teen kovasti töitä, mutta kaipaan uusia haasteita. Olen alkanut parantua masennuksesta, saamaan lisää itsetuntoa ja itseluottamusta sekä kykyä osata olla ylpeä omasta työstään.</p>

            <p>Twitter on ostanut Tweetdeck-yrityksen ja ilmeisesti huomaa <a href="https://github.com/ronilaukkarinen/tweakdeck">Tweetdeck-forkkini GitHubissa</a>, jonka myötä saan join the flock -kutsun Lontoosta. Kieltäydyn, koska visiot oman yrityksen perustamisesta ovat jo pitkällä.</p>
            <p class="info">Twitter Inc. kutsuu työhaastatteluun</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2013</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Perustan Juha Laitisen kanssa <a href="https://www.dude.fi">Digitoimisto Duden</a> ja avaamme heti toiminnan Jyväskylän keskustassa. Homma lähteekin hyvin starttiin alihankinnan kautta ja pian omiakin asiakkuuksia alkaa kertyä.</p>

            <p>Manu-poika syntyy elokuussa 2013.</p>

            <a target="_blank" href="https://www.instagram.com/p/5DHZZ_G0Z7/"><img src="images/son.jpg" alt="Minä poikani kanssa, kuva otettu veljeni häistä 2015" /></a>

            <p class="info">Ensimmäinen yritys<br />
            Digitoimisto Dude Oy perustetaan<br />
            Poika syntyy</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon">
            <h2>2016</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Olen toteuttanut yli sata asiakasprojektia ja samalla kehittänyt verkkopalvelua, joka ilmoittaa käyttäjää verkkopalvelun hidastumisesta tai kaatumisesta. SaaS-palvelulle perustetaan yritys, Admin Labs Oy.</p>
            <p class="info">Toinen yritys, Admin Labs Oy perustetaan</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="timeline-block">
          <div class="timeline-icon future">
            <h2>?</h2>
          </div> <!-- timeline-icon -->

          <div class="timeline-content">
            <p>Kehityn entistä paremman webin tekemiseen, asiakkaiden palvelemiseen parhaalla mahdollisella tavalla. Minut löytää netistä monesta paikkaa, <a href="https://twitter.com/rolle">pistä tweettiä jos innosti!</a></p>
            <p class="info">Nykyhetki ja tulevaisuus</p>
          </div> <!-- timeline-content -->
        </div> <!-- timeline-block -->

        <div class="note-footer">
          <p>Jaksoit rullata loppuun asti? siistiä! Tykkään pitää itseni kiireisenä. Tällä hetkellä <a class="todoist" href="https://todoist.com"><img src="images/todoist.svg" alt="Todoist" />Todoistissani</a> on <b><?php include('inc/todoist/index.php'); ?></b> tehtävää.</p>
        </div>

        <footer class="footer">
          <p>Tämän sivun rakensi tietämyksensä pohjalta puhtaana käsityönä Roni "Rolle" Laukkarinen. Koodi on 100% open sourcea ja löytyy <a target=_"blank"  href="https://github.com/ronilaukkarinen/rolle.wtf-v2"><span class="fa fa-github"></span> GitHubista</a>.

                              <?php
                                  $url = "https://github.com/ronilaukkarinen/rolle.wtf-v2/commits/master.atom";
                                  $rss = simplexml_load_file($url);
                              ?>

                                  <?php if($rss) : ?>

                                      <p>Viimeisin rivi koodia <i><?php

                                          $updatetime = aika(abs(strtotime($rss->entry->updated)), time());
                                          if(!empty($updatetime)) :
                                              $updatetime = " ". aika(abs(strtotime($rss->entry->updated)), time()+60) . " ";
                                          else :
                                              $updatetime = " tovi ";
                                          endif;

                                          echo $updatetime;

                                      ?></i> sitten.</p>

                                  <?php endif; ?>
                          </p>
        </footer>

    	</section> <!-- timeline -->

  </div><!-- .site -->

	<!-- Scripts, non-renderblocking JS and CSS -->

	<link rel="preload" href="css/layout.css" as="style" onload="this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/layout.css"></noscript>
	<script>
	/*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
	(function(w){
		"use strict";
		/* exported loadCSS */
		var loadCSS = function( href, before, media ){
			// Arguments explained:
			// `href` [REQUIRED] is the URL for your CSS file.
			// `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
				// By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
			// `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
			var doc = w.document;
			var ss = doc.createElement( "link" );
			var ref;
			if( before ){
				ref = before;
			}
			else {
				var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
				ref = refs[ refs.length - 1];
			}

			var sheets = doc.styleSheets;
			ss.rel = "stylesheet";
			ss.href = href;
			// temporarily set media to something inapplicable to ensure it'll fetch without blocking render
			ss.media = "only x";

			// wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
			function ready( cb ){
				if( doc.body ){
					return cb();
				}
				setTimeout(function(){
					ready( cb );
				});
			}
			// Inject link
				// Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
				// Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
			ready( function(){
				ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
			});
			// A method (exposed on return object for external use) that mimics onload by polling until document.styleSheets until it includes the new sheet.
			var onloadcssdefined = function( cb ){
				var resolvedHref = ss.href;
				var i = sheets.length;
				while( i-- ){
					if( sheets[ i ].href === resolvedHref ){
						return cb();
					}
				}
				setTimeout(function() {
					onloadcssdefined( cb );
				});
			};

			function loadCB(){
				if( ss.addEventListener ){
					ss.removeEventListener( "load", loadCB );
				}
				ss.media = media || "all";
			}

			// once loaded, set link's media back to `all` so that the stylesheet applies once it loads
			if( ss.addEventListener ){
				ss.addEventListener( "load", loadCB);
			}
			ss.onloadcssdefined = onloadcssdefined;
			onloadcssdefined( loadCB );
			return ss;
		};
		// commonjs
		if( typeof exports !== "undefined" ){
			exports.loadCSS = loadCSS;
		}
		else {
			w.loadCSS = loadCSS;
		}
	}( typeof global !== "undefined" ? global : this ));

	/* CSS rel=preload polyfill (from src/cssrelpreload.js) */
	/* CSS rel=preload polyfill. Depends on loadCSS function */
	(function( w ){
		// rel=preload support test
		if( !w.loadCSS ){
			return;
		}
		var rp = loadCSS.relpreload = {};
		rp.support = function(){
			try {
				return w.document.createElement("link").relList.supports( "preload" );
			} catch (e) {}
		};

		// loop preload links and fetch using loadCSS
		rp.poly = function(){
			var links = w.document.getElementsByTagName( "link" );
			for( var i = 0; i < links.length; i++ ){
				var link = links[ i ];
				if( link.rel === "preload" && link.getAttribute( "as" ) === "style" ){
					w.loadCSS( link.href, link );
					link.rel = null;
				}
			}
		};

		// if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
		if( !rp.support() ){
			rp.poly();
			var run = w.setInterval( rp.poly, 300 );
			if( w.addEventListener ){
				w.addEventListener( "load", function(){
					w.clearInterval( run );
				} )
			}
		}
	}( this ));

	</script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-64522118-1', 'auto');
		ga('send', 'pageview');
	</script>

	<script src="js/all.js"></script>
	<script src="https://use.typekit.net/ixg4duh.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<script>
		var lang = new Lang();

		lang.dynamic('fi', 'fi.json');
		lang.init({
			defaultLang: 'en'
		});

		// Force Finnish until all translated
		$(document).ready(function() {
			window.lang.change('fi');
		});
	</script>

</body>
</html>
<?php
$fp = fopen($cachefile, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush();
?>
