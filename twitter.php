<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8' />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="description" content="Twitter-api : " />

    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">

    <title>Twitter-api</title>
  </head>

  <body>

    <!-- HEADER -->
    <div id="header_wrap" class="outer">
        <header class="inner">
          <a id="forkme_banner" href="https://github.com/wilsonfonda/Twitter-API">View on GitHub</a>

          <h1 id="project_title">Twitter-api</h1>
          <h2 id="project_tagline"></h2>

            <section id="downloads">
              <a class="zip_download_link" href="https://github.com/wilsonfonda/Twitter-API/zipball/master">Download this project as a .zip file</a>
              <a class="tar_download_link" href="https://github.com/wilsonfonda/Twitter-API/tarball/master">Download this project as a tar.gz file</a>
            </section>
        </header>
    </div>

    <!-- MAIN CONTENT -->
    <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner">
        <?php
          ini_set('display_errors', 1);
          require_once('TwitterAPIExchange.php');

          /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
          $settings = array(
              'oauth_access_token' => "85556316-YuP5aWxKtA30T5jeHUkDi895YPNbWNGnyVfX16LFt",
              'oauth_access_token_secret' => "8qo6eJ5NqDsHPUG0mvyAAbnJh41KpQDdJDTTCpYC6Trvt",
              'consumer_key' => "yaSatI2vS1IyEaeOxAUN9fjoj",
              'consumer_secret' => "Ml7ZrDFUg0cbUOdOoRGvhcSwCy4O4OozIuDVrn9VYNUDu9W0EZ"
          );

          /** Perform a GET request and echo the response **/
          /** Note: Set the GET field BEFORE calling buildOauth(); **/
          $url = 'https://api.twitter.com/1.1/followers/ids.json';
          $getfield = '?screen_name=wilsonfonda';
          $requestMethod = 'GET';
          $twitter = new TwitterAPIExchange($settings);
          echo $twitter->setGetfield($getfield)
                       ->buildOauth($url, $requestMethod)
                       ->performRequest();
        ?>
      </section>
    </div>

    <!-- FOOTER  -->
    <div id="footer_wrap" class="outer">
      <footer class="inner">
        <p class="copyright">Twitter-api maintained by <a href="https://github.com/wilsonfonda">wilsonfonda</a></p>
        <p>Published with <a href="http://pages.github.com">GitHub Pages</a></p>
      </footer>
    </div>

    

  </body>
</html>
