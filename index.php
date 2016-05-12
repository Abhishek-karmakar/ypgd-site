<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YU Play Dev</title>

<!--  @author:  a.karmakar
This section is used to add the Google jquery Libraries
-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

            });
            function sendPushNotification(id){
                var data = $('form#'+id).serialize();
                $('form#'+id).unbind('submit');
                $.ajax({
                    url: "send_message.php",
                    type: 'GET',
                    data: data,
                    beforeSend: function() {

                    },
                    success: function(data, textStatus, xhr) {
                          $('.txt_message').val("");
                    },
                    error: function(xhr, textStatus, errorThrown) {

                    }
                });
                return false;
            }
        </script>



    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
<!-- Inserting the Google Analytics code -->
    <?php include_once("analyticstracking.php") ?>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<!-- @A.Karmakar
This portion calls the php db functions
-->
 <?php
        include_once 'db_functions.php';
        $db = new DB_Functions();
        $users = $db->getAllPhoneDate();
        if ($users != false)
            $no_of_users = mysql_num_rows($users);
        else
            $no_of_users = 0;
        ?>


  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3> { YU Play Dev } </h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#overview" class="mdl-layout__tab is-active">OS project Overview</a>
          <a href="#downloads" class="mdl-layout__tab">Downloads</a>
	  <a href="#sources" class="mdl-layout__tab">SOURCES</a>
	<!--  <a href="#guides" class="mdl-layout__tab">Guides</a> -->
	  <a href="http://codereview.yuplaygod.com" class="mdl-layout__tab">Code Review</a>

        </div>
      </header>

      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text" id="overview">
                <h4>OS Project Overview</h4>
<p><b>Channelize developer efforts -</b>
 100s of ROMs and Kernels have been created in isolation we want to channelize their development efforts under one umbrella and help the community build this OS</p>


<p><b>Open Source</b> - Its an Open Source Project with Android/ Cyanogenmod base, anyone can download it and build it!</p>
<p><b>Community Based</b> - Everybody can participate and work with top developers from all over the world who are already actively participating in our YU community.</p>
<p><b>Developers connect more deeply with our OS</b> - We invite developers to participate on YU forums and help us build this OS together</p>
<p><b>After-Market Firmware</b> - The device will not come preloaded with this OS but willing users can download it from our developer portal (when it becomes available) and install/flash it on their phones. Eventually we can move it in the direction of an official OS release.</p>

              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Know our devs</a>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" id="downloads">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col"> Downloads available : <?php echo $no_of_users; ?> </h4>

 <?php
        while($row = mysql_fetch_array($users)){
 ?>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"></div>
                </div>


                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
<br>
                  <h5>File name : <?php echo $row["filename"] ?></h5>
                MD5 : <?php echo $row["md5sum"] ?>  <br>
		Device ID : <?php echo $row["deviceid"] ?> <br>
		Time Stamp : <?php echo $row["build_timestamp"] ?> <br>
                Changelog : <?php echo $row["changelog"] ?> <br>
		<a href='../../../storage/<?php echo $row["filename"] ?>'>Download NOW!</a>

<br><br>

                </div>
<?php } ?>

              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read more about how are these images build in our factory of elves.</a>
              </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
              <li class="mdl-menu__item">Lorem</li>
              <li class="mdl-menu__item" disabled>Ipsum</li>
              <li class="mdl-menu__item">Dolor</li>
            </ul>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" id="sources">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Sources</h4>
		<p>We have open-sourced the entire build tree and kernel sources of the YU Community ROM!</p>


                            <p class="headTitle2">GitHub</p>
                            <p>GitHub organization containing all sources: <a href="http://github.com/YUPlayGodDev">http://github.com/YUPlayGodDev</a></p>
                            <p><a href="http://github.com/YUPlayGodDev/android_device_yu_tomato">Device Tree for YUREKA/YUREKA PLUS</a></p>
                            <p><a href="http://github.com/YUPlayGodDev/android_device_yu_lettuce">Device Tree for YUPHORIA</a></p>

<!-- ToDO : make the guide section and then uncomment. Akarmakar
                            <p class="headTitle2">How to build?</p>
                            <p>For details on how you can download, build and contribute to the YU Community ROM check out the <a href=#guides>Guides section</a>!</p>
-->
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>

            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
              <li class="mdl-menu__item">Lorem</li>
              <li class="mdl-menu__item" disabled>Ipsum</li>
              <li class="mdl-menu__item">Dolor</li>
            </ul>
          </section>

          <section class="section--footer mdl-color--white mdl-grid" id="guides" style="padding-bottom: 0px;">
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">

            <!--  <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div> -->
            </div>
<!--
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">

              <h4>Guides</h4>
		We have the following short guides, How to(s) :
            </div>
-->
          </section>
        </div>

<!--
        <div class="mdl-layout__tab-panel" id="guides">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <ul class="toc">
                <h4>Contents</h4>
                <a href="#q1">How to build entire ROM from source (download and build)</a>
                <a href="#q2">How to build only the kernel</a>
                <a href="#q3">How to submit patch to complete repo</a>
                <a href="#q4">How to submit patches to specific repos</a>
              </ul>
		<br><br><br><br><br><br>
                            <p class="headTitle2"><a name="q1">How to build entire ROM from source (download and build)</a></p>
                            <p>some content</p>
                                                                                                                <br><br><br><br><br><br>
                            <p class="headTitle2"><a name="q2">How to build only the kernel</a></p>
                            <p>some content</p>
                                                                                                                <br><br><br><br><br><br>
                            <p class="headTitle2"><a name="q3">How to submit patch to complete repo</a></p>
                            <p>some content</p>
                                                                                                                <br><br><br><br><br><br>
                            <p class="headTitle2"><a name="q4">How to submit patches to specific repos</a></p>
                            <p>some content</p>
                                                                                                                <br><br><br><br><br><br>

            </div>
          </section>
        </div>
      -->
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Updates</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Technology</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Patterns</a></li>
                <li><a href="#">Usage</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contracts</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="../../material.min.js"></script>
  </body>
</html>
