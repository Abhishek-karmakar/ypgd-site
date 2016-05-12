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

    <!-- Fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

    <!-- Material Design stylesheets -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/css/material.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
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
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>YU Play Dev</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#osprojectoverview" class="mdl-layout__tab is-active">OS Project Overview</a>
          <a href="#sources" class="mdl-layout__tab">Source</a>
          <a href="#codereview" class="mdl-layout__tab">Code review</a>
          <a href="#projects" class="mdl-layout__tab">Projects</a>
          <a href="#downloads" class="mdl-layout__tab">Downloads</a>
          <a href="#forums" class="mdl-layout__tab forums">Forums</a>
        </div>
      </header>
      <main class="mdl-layout__content">

        <!-- Project Overview -->
        <div class="mdl-layout__tab-panel is-active" id="osprojectoverview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>OS Project Overview</h4>
                <p>
                  <b>Channelize developer efforts -</b>
                  100s of ROMs and Kernels have been created in isolation we want to channelize their development efforts under one umbrella and help the community build this OS
                </p>
                <p>
                  <b>Open Source</b> - 
                  Its an Open Source Project with Android/ Cyanogenmod base, anyone can download it and build it!
                </p>
                <p>
                  <b>Community Based</b> - 
                  Everybody can participate and work with top developers from all over the world who are already actively participating in our YU community.
                </p>
                <p>
                  <b>Developers connect more deeply with our OS</b> - 
                  We invite developers to participate on YU forums and help us build this OS together
                </p>
                <p>
                  <b>After-Market Firmware</b> - 
                  The device will not come preloaded with this OS but willing users can download it from our developer portal (when it becomes available) and install/flash it on their phones. Eventually we can move it in the direction of an official OS release.
                </p>
              </div>
            </div>
          </section>
        </div><!-- Project Overview -->
        
        <!-- Sources -->
        <div class="mdl-layout__tab-panel" id="sources">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Source Code</h4>
                <p>
                  We have open-sourced the entire build tree and kernel sources of the YU Community ROM!
                </p>

                <p class="headTitle2">GitHub</p>
                <p>
                  GitHub organization containing all sources: <a href="http://github.com/YUPlayGodDev">http://github.com/YUPlayGodDev</a>
                </p>
                <p>
                  <a href="http://github.com/YUPlayGodDev/android_device_yu_tomato">Device Tree for YUREKA/YUREKA PLUS</a>
                </p>
                <p>
                  <a href="http://github.com/YUPlayGodDev/android_device_yu_lettuce">Device Tree for YUPHORIA</a>
                </p>
              </div>
            </div>
          </section>
        </div><!-- Sources -->

        <!-- Code Review -->
        <div class="mdl-layout__tab-panel" id="codereview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Code Review</h4>

                <p>Description of the code review</p>

                <p>Advantages of the code review</p>

                <p>How can people submit to code review</p>

                <p>Our review process</p>

                <div class="code-review-section">
                  <a href="http://codereview.yuplaygod.com/">
                    <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i><br>
                    Go to codereview
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div><!-- Code Review -->

        <!-- Projects -->
        <div class="mdl-layout__tab-panel" id="projects">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Projects</h4>

                <p>Short description of Project Management Tool</p>

                <p><span>Issues:</span></p>
                <ul class="no-bullets">
                  <li>How can contributors report on an issue?</li>
                  <li>What must a contributor check before submitting an issue?</li>
                  <li>How does issue and code review?</li>
                </ul>

                <p><span>Activity:</span></p>
                <ul class="no-bullets">
                  <li>Description of the activity Tab</li>
                </ul>

                <div class="code-review-section">
                  <a href="http://codereview.yuplaygod.com/">
                    <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i><br>
                    Go to codereview
                  </a>
                </div>
              </div>              
            </div>
          </section>
        </div><!-- Projects -->

        <!-- Downloads -->
        <div class="mdl-layout__tab-panel" id="downloads">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                  <div class="mdl-tabs mdl-js-tabs">
                    <div class="mdl-tabs__tab-bar">
                       <a href="#yureka-panel" class="mdl-tabs__tab is-active">Yureka</a>
                       <a href="#yuphoria-panel" class="mdl-tabs__tab">Yuphoria</a>
                       <a href="#yunique-panel" class="mdl-tabs__tab">Yunique</a>
                       <a href="#yutopia-panel" class="mdl-tabs__tab">Yutopia</a>
                    </div>
                    <div class="mdl-tabs__panel is-active" id="yureka-panel">
                       <p>Yureka Contents</p>
                       <table class="device-table mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                          <thead>
                            <tr>
                              <th>Date/Time</th>
                              <th>Title</th>
                              <th>MD5sum</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yureka_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="mdl-tabs__panel" id="yuphoria-panel">
                       <p>Yuphoria Contents</p>
                       <table class="device-table mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                          <thead>
                            <tr>
                              <th>Date/Time</th>
                              <th>Title</th>
                              <th>MD5sum</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yuphoria_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="mdl-tabs__panel" id="yunique-panel">
                       <p>Yunique Contents</p>
                       <table class="device-table mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                          <thead>
                            <tr>
                              <th>Date/Time</th>
                              <th>Title</th>
                              <th>MD5sum</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yunique_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="mdl-tabs__panel" id="yutopia-panel">
                       <p>Yutopia Contents</p>
                       <table class="device-table mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                          <thead>
                            <tr>
                              <th>Date/Time</th>
                              <th>Title</th>
                              <th>MD5sum</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                              <td>12-12-12-16 10:55 AM</td>
                              <td>Yutopia_YU-OPEN-OS_&lt;revnumber&gt;</td>
                              <td>qwerty423hdjskabkd72en%@r#CgEwsop</td>
                              <td><a href="#">Download</a></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
              </div>
            </div>
          </section>
        </div><!-- Downloads -->

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
              <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="assets/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
