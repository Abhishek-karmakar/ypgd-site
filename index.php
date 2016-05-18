<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Ajay Bhatia <prof.ajaybhatia@gmail.com>

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
    <!-- Google Analytics code -->
    <?php //include_once("includes/analyticstracking.php") ?>
  </head>
  <?php
    // include_once 'helpers/db_functions.php';
    // $db = new DB_Functions();
    // $users = $db->getAllPhoneDate();
    // if ($users != false)
    //     $no_of_users = mysql_num_rows($users);
    // else
    //     $no_of_users = 0;
  ?>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h1 class="element"></h1>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#osprojectoverview" class="mdl-layout__tab is-active">OS Project Overview</a>
          <a href="#sources" class="mdl-layout__tab">Source</a>
          <a href="#codereview" class="mdl-layout__tab">Code review</a>
          <a href="#projects" class="mdl-layout__tab">Projects</a>
          <a href="#downloads" class="mdl-layout__tab">Downloads</a>
          <a href="#build" class="mdl-layout__tab build">Build</a>
          <a href="#forums" class="mdl-layout__tab forums">Forums</a>
        </div>
      </header>
      <main class="mdl-layout__content">

        <!-- Project Overview -->
        <div class="mdl-layout__tab-panel is-active" id="osprojectoverview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Project highway - (SC)2MS</h4>
                <p>
                  We have open-sourced entire OS for YUREKA/YUREKA PLUS, YUPHORIA and YUNIQUE. Inviting developers to participate in (SC)2MS program and submit contributions to this YU-OPEN-OS. 
                </p>
                <p>
                  <strong>Source:</strong>
                  All the source that you need to build for the YU devices you find here. With the build instructions. 
                </p>
                <p>
                  <strong>Code review:</strong>
                  Learn what you need to do and how can you submit the patches to the sources. 
                </p>
                <p>
                  <strong>Projects:</strong>
                  Explains how you can report bugs, and request for new features on <a class="projects" href="#">Projects</a>
                </p>
                <p>
                  <strong>Downloads:</strong> 
                  This section let you download our freshly baked software for your devices. Also the flashing steps are present there. Use it wisely. 
                </p>
                <br>
                <p class="text-center bold">Alright, Let's Begin !!</p>
              </div>
            </div>
          </section>
        </div><!-- Project Overview -->
        
        <!-- Sources -->
        <div class="mdl-layout__tab-panel" id="sources">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Source</h4>
                <p>
                  We have open-sourced the entire build tree and kernel sources of the YU-OPEN-OS!
                </p>

                <p>
                  <strong>GitHub organization</strong> containing all sources:<br>
                  <a href="https://github.com/YUTeleventures">
                    <i class="fa fa-github fa-2x"></i>
                  </a>
                </p>
                <p>
                  <strong>Build Instructions</strong><br>
                  <strong>YUREKA/YUREKA PLUS/YUPHORIA:</strong><a href="https://github.com/YUTeleventures/platform_manifest/tree/yu-mm6.0.1-msm8916">https://github.com/YUTeleventures/platform_manifest/tree/yu-mm6.0.1-msm8916</a>

                  <br>

                  <strong>YUNIQUE:</strong><a href="https://github.com/YUTeleventures/platform_manifest/tree/yu-mm6.0.1-jalebi">https://github.com/YUTeleventures/platform_manifest/tree/yu-mm6.0.1-jalebi</a>
                </p>
                <p>
                  <strong>Device trees</strong><br>
                  <strong>YUREKA/YUREKA PLUS</strong>: <a href="https://github.com/YUTeleventures/device_yu_tomato">https://github.com/YUTeleventures/device_yu_tomato</a><br>
                  <strong>YUPHORIA</strong>: <a href="https://github.com/YUTeleventures/device_yu_lettuce">https://github.com/YUTeleventures/device_yu_lettuce</a><br>
                  <strong>YUNIQUE</strong>: <a href="https://github.com/YUTeleventures/device_yu_jalebi">https://github.com/YUTeleventures/device_yu_jalebi</a><br>
                </p>
                <p>
                  <strong>Flashing Instructions:</strong> <a href="https://github.com/YUTeleventures/factory-image-flash-tools">https://github.com/YUTeleventures/factory-image-flash-tools</a>
                </p>
                <p>
                  <strong>Contribute to YU-OPEN-OS:</strong> <a class="codereview" href="#">CODE REVIEW</a>
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
                <h4>Code review</h4>

                <p>
                  Participate in and contribute to YU-OPEN-OS by submitting patches on Gerrit <a href="http://codereview.yuplaygod.com/">CodeReview</a>
                </p>

                <p>Code review lets developers know what changes others are contributing.</p>

                <div class="codereview-process">
                  <img src="assets/images/codereview_process.png" alt="">
                </div>

                <p>
                  <strong>Submitting to Code review:</strong>
                </p>

                <div class="codereview-process">
                  <img src="assets/images/codereview-dev_process.png" height="300" alt="">
                </div>

                <p>
                  <span>After syncing sources from</span> <a href="https://github.com/YUTeleventures"><i class="fa fa-github fa-2x"></i></a> 
                </p>

                <ol>

                  <li>Create local branch and submit changes:</li>
                
                  <table>
                    <tr>
                      <td>
                        <strong>Example</strong>
                      </td>
                      <td>
                        <ul class="no-bullets">
                          <li><code>repo start &lt;new branch name&gt; --all | &lt;project&gt;</code></li>
                          <li><code>repo checkout &lt;new branch name&gt; [&lt;project&gt;...]</code></li>
                          <li><code>repo start yu-mm6.0.1 --all</code></li>
                          <li><code>repo checkout yu-mm6.0.1</code></li>
                        </ul>
                      </td>
                    </tr>
                  </table>

                  <li>To verify:</li>

                  <table>
                    <tr>
                      <td>
                        <strong>Example</strong>
                      </td>
                      <td>
                        <ul class="no-bullets">
                          <li><code>repo branch [&lt;project&gt;...] &amp; repo status [&lt;project&gt;...]</code></li>
                          <li><code>repo branch &amp; repo status</code></li>
                        </ul>
                      </td>
                    </tr>
                  </table>

                  <li>Add and commit changes:</li>

                  <table>
                    <tr>
                      <td>
                        <strong>Example</strong>
                      </td>
                      <td>
                        <ul class="no-bullets">
                          <li><code>rcd [&lt;project&gt;...]</code></li>
                          <li><code>edit &lt;files&gt;</code></li>
                          <li><code>git add &lt;files&gt;</code></li>
                          <li><code>git commit &lt;files&gt;</code></li>
                          <li><code>cd &lt;root&gt;</code></li>
                          <li><code>repo upload &lt;project&gt;</code></li>
                          <li><code>git add .</code></li>
                          <li><code>git commit -m “Bug21 Fix issue”</code></li>
                          <li><code>repo upload YUTeleventures/android_frameworks_base</code></li>
                        </ul>
                      </td>
                    </tr>
                  </table>

                </ol>

                <div>
                  <p>
                    <strong>Alternate way of submitting to Code review:</strong>
                  </p>

                  <p>
                    <span>After syncing sources from</span> <a href="https://github.com/YUTeleventures"><i class="fa fa-github fa-2x"></i></a> 
                  </p>

                  <ol>
                    
                    <li>
                      Add hooks for adding commit messages in git folder
                      <br>
                      scp -p -P 29418 &lt;Username&gt;@codereview.yuplaygod.com:hooks/commit-msg .git/hooks/ 

                      <table>
                          <tr>
                            <td><strong>Example</strong></td>
                            <td>
                              <ul class="no-bullets">
                                <li><code>scp -p -P 29418 ShradhaV@codereview.yuplaygod.com:hooks/commit-msg .git/hooks/</code></li>
                              </ul>
                            </td>
                          </tr>
                      </table>
                    </li>
                    
                    <li>
                      Add files and commit changes
                      <br>
                      git add &lt;files&gt;<br>
                      git commit -m "Commit Message"

                      <table>
                        <tr>
                          <td><strong>Example</strong></td>
                          <td>
                            <ul class="no-bullets">
                              <li><code>git add .</code></li>
                              <li><code>git commit -m “Bug21 Fix issue”</code></li>
                            </ul>
                          </td>
                        </tr>
                      </table>
                    </li>

                    <li>
                      Create remote &lt;URL&gt; for review using any one of below
                      <br>
                      ssh://&lt;Username&gt;@codereview.yuplaygod.com:29418/YUTeleventures/[Repository Name]
                      <br>
                      OR
                      <br>
                      http://&lt;Username&gt;@codereview.yuplaygod.com/YUTeleventures/[Repository Name]
                    </li>

                    <li>
                      Add Code review remote
                      <br>
                      git remote add review &lt;URL&gt;<br>

                      <table>
                        <tr>
                          <td><strong>Example</strong></td>
                          <td>
                            <ul class="no-bullets">
                              <li><code>git remote add review</code></li>
                              <li><code>ssh://ShradhaV@codereview.yuplaygod.com:29418/YUTeleventures/android_frameworks_base</code></li>
                            </ul>
                          </td>
                        </tr>
                      </table>
                    </li>

                    <li>
                       Push changes
                      <br>
                      git push review HEAD:refs/for/&lt;branch&gt;

                      <table>
                        <tr>
                          <td><strong>Example</strong></td>
                          <td>
                            <ul class="no-bullets">
                              <li><code>git push review HEAD:refs/for/yu-mm6.0.1</code></li>
                            </ul>
                          </td>
                        </tr>
                      </table>
                    </li>

                  </ol>
                </div>

                <div>
                  <p><strong>YU Code Review Process</strong></p>
                  <i>Internal developer</i>does code review and gives +/-1
                  <ol class="alpha-list">
                    <li>+1 would allow the tester to verify the code</li>
                    <li>-1 would mean that the developer has to re-work on the code submitted</li>
                  </ol>
                  <i>Testing</i>
                  <ol class="alpha-list">
                    <li>A tester to download the revision build and test the functionality of the code submitted</li>
                    <li>+/-1 to inform whether the code is tested and if it can be merged or rejected</li>
                  </ol>
                  <i>Final Reviewer</i>
                  <ol class="alpha-list">
                    <li>On all the +1’s the Final reviewer would recheck the code and decide whether to merge the code or not</li>
                  </ol>
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

                <p>YU-OPEN-OS projects and bugs are tracked on <a href="http://projects.yuplaygod.com/">http://projects.yuplaygod.com</a></p>

                <img src="assets/images/project_flow.png" alt="">
                <br><br><br>

                <div>
                  <p>
                    <strong>Reporting an issue</strong>
                  </p>

                  <ol>
                    <li><a href="http://projects.yuplaygod.com/account/register">Register</a> yourself and <a href="http://projects.yuplaygod.com/login">Sign In</a></li>
                    <li>Select respective <a href="http://projects.yuplaygod.com/projects">project</a></li>
                    <li>Users are requested to search the issues before creating a new issue to avoid duplicity.</li>
                    <li>Add issues from New Issue tab.  Users are requested to provide complete steps to reproduce the issue and provide screen shots, logcat, SW Version etc. if possible and fill out all the fields mentioned in new Issue list.</li>
                  </ol>
                </div>

                <div>
                  <p>
                    <strong>Creating new feature or improvement request</strong>
                  </p>
                  <p>Users can also create a new feature request or an Improvement request, by filling the form with all required fields with detail description. </p>
                </div>

                <div>
                  <p>
                    <strong>Fixing an issue</strong>
                  </p>
                  <ol>
                    <li>
                      After initial analysis, issue will be available to the developers for providing solutions. Community Manager will assign the issue to developer (either internal team developer or a community developer). A mail will be sent to them automatically after assignment.
                    </li>
                    <li>
                      As soon as develop start working on the issue , he/she should change the status to as in Progress.
                    </li>
                    <li>
                      Once issue is fixed by developer, solution should be committed to <a href="http://codereview.yuplaygod.com/">Gerrit code review</a>. It is must for developer to mention the issues/feature/improvement id. E.g Bug#5, Feature #35.
                    </li>
                  </ol>
                </div>

                <div>
                  <p>
                    <strong>Flashing Instructions</strong>
                    <ol>
                      <li>Flash images with Fastboot</li>
                      <ol class="u-alpha-list">
                        <li>Execute below commands in terminal</li>
                        <li>
                          Connect device in fastboot mode<br>
                          <code>adb reboot bootloader</code>
                        </li>
                        <li>
                          Check if device is detecting in fastboot mode<br>
                          <code>fastboot -i 0x1ebf devices </code>
                        </li>
                        <li>
                          Unlock bootloader
                          <code>fastboot -i 0x1ebf oem unlock</code>
                        </li>
                        <li>
                          Format User data<br>
                          <code>fastboot -i 0x1ebf format userdata</code>
                        </li>
                        <li>
                          Flash kernel<br>
                          <code>astboot -i 0x1ebf flash boot boot.img</code>
                        </li>
                        <li>
                          Flash recovery<br>
                          <code>fastboot -i 0x1ebf flash recovery recovery.img</code>
                        </li>
                        <li>
                          Flash system partition<br>
                          <code>fastboot -i 0x1ebf flash system system.img</code>
                        </li>
                        <li>
                          Flash data partition<br>
                          <code>fastboot -i 0x1ebf flash userdata userdata.img</code>
                        </li>
                        <li>
                          Relock bootloader<br>
                          <code>fastboot -i 0x1ebf oem lock</code>
                        </li>
                        <li>
                          Reboot device<br>
                          <code>fastboot -i 0x1ebf reboot</code>
                        </li>
                      </ol>

                      <li>
                        <strong>Flashing zip file with ADB sideload</strong>
                        <ol class="u-alpha-list">
                          <li>
                            Connect device in recovery mode by executing below command in terminal<br>
                            <code>adb reboot recovery</code>
                          </li>
                          <li>
                            Select Apply Update from ADB
                          </li>
                          <li>
                            Check if device is detecting in sideload<br>
                            <code>adb devices</code>
                          </li>
                          <li>
                            Sideload YU-OPEN-OS<br>
                            <code>adb sideload path_to_zipfile</code>
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </p>                  
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
                              <th>SHA1</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>May 18, 2016 4:30:00 PM</td>
                              <td>yufastboot-images-tomato-160518.tar.gz</td>
                              <td>c195f626292a078b5956d06a64d826982511af61</td>
                              <td><a href="http://yuopenos.s3.amazonaws.com/OpenSource_nightly/yufastboot-images-tomato-160518.tar.gz">Download</a></td>
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
                              <th>SHA1</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>May 18, 2016 4:35:00 PM</td>
                              <td>yufastboot-images-lettuce-160518.tar.gz</td>
                              <td>14647deb1c6140d9098a9205a756f968437a085d</td>
                              <td><a href="http://yuopenos.s3.amazonaws.com/OpenSource_nightly/yufastboot-images-lettuce-160518.tar.gz">Download</a></td>
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
                              <td colspan="2"><h3>Coming Soon</h3></td>
                            </tr>
                            <!-- <tr>
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
                            </tr> -->
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
                              <td colspan="2"><h3>Coming Soon</h3></td>
                            </tr>
                            <!-- <tr>
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
                            </tr> -->
                          </tbody>
                        </table>
                    </div>
                  </div>
              </div>
            </div>
          </section>
        </div><!-- Downloads -->

        <!-- Footer -->
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
          <!--
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
          -->
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="">YU Televentures</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer><!-- Footer -->
      </main>
    </div>
    <script src="assets/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
