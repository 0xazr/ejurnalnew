<?php
   $userSignedIn = true;
   $username = "azril";
?>
<!-- HEADER START -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/styles/pkp/common.css" type="text/css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/styles/common.css" type="text/css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/styles/compiled.css" type="text/css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/styles/sidebar.css" type="text/css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/styles/rightSidebar.css" type="text/css" />
      <!-- Title berganti sesuai dengan judul halaman -->
      <title><?= $title; ?></title>
   </head>
   <body>
      <div id="container">
         <div id="header">
            <div id="headerTitle">
              <!-- Header Title berganti sesuai dengan judul halaman -->
               <h1>Information Technology Journal</h1>
            </div>
         </div>
<!-- HEADER END -->

<!-- SIDEBAR START -->
         <div id="body">
            <div id="sidebar">
               <div id="rightSidebar">
                  <div class="block" id="sidebarDevelopedBy">
                     <a class="blockTitle" href="http://pkp.sfu.ca/ojs/" id="developedBy">Open Journal Systems</a>
                  </div>
                  <div class="block" id="sidebarHelp">
                     <a class="blockTitle" href="">Journal Help</a>
                  </div>

                  <!-- SidebarUser berganti ketika user sudah login -->
                  <?php if ($userSignedIn == true) : ?>
                  <div class="block" id="sidebarUser">
                  <span class="blockTitle">User</span>
                  You are logged in as...<br />
                  <strong><?= $username ?></strong>
                  <ul>
                     <li><a href="<?= base_url(); ?>/user">My Journals</a></li>
                     <li><a href="<?= base_url(); ?>/user/profile">My Profile</a></li>
                     <li><a href="<?= base_url(); ?>/login/signOut">Log Out</a></li>
                  </ul>
                  </div>
                  <?php else : ?>
                  <div class="block" id="sidebarUser">
                     <span class="blockTitle">User</span>
                     <form method="post" action="<?= base_url(); ?>/login/signIn">
                        <table>
                           <tr>
                              <td><label for="sidebar-username">Username</label></td>
                              <td><input type="text" id="sidebar-username" name="username" value="" size="12" maxlength="32" class="textField" /></td>
                           </tr>
                           <tr>
                              <td><label for="sidebar-password">Password</label></td>
                              <td><input type="password" id="sidebar-password" name="password" value="" size="12" maxlength="32" class="textField" /></td>
                           </tr>
                           <tr>
                              <td colspan="2"><input type="checkbox" id="remember" name="remember" value="1" /> <label for="remember">Remember me</label></td>
                           </tr>
                           <tr>
                              <td colspan="2"><input type="submit" value="Login" class="button" /></td>
                           </tr>
                        </table>
                     </form>
                  </div>
                  <?php endif; ?>
                  <div class="block" id="notification">
                     <span class="blockTitle">Notifications</span>
                     <ul>
                        <li><a href="<?= base_url(); ?>/notification">View</a></li>
                        <li><a href="<?= base_url(); ?>/notification/subscribeMailList">Subscribe</a></li>
                     </ul>
                  </div>
                  <div class="block" id="sidebarNavigation">
                     <span class="blockTitle">Journal Content</span>
                     <span class="blockSubtitle">Search</span>
                     <form id="simpleSearchForm" method="post" action="/search/search">
                        <table id="simpleSearchInput">
                           <tr>
                              <td>
                                 <input type="text" id="simpleQuery" name="simpleQuery" size="15" maxlength="255" value="" class="textField" />
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <select id="searchField" name="searchField" size="1" class="selectMenu">
                                    <option label="All" value="query">All</option>
                                    <option label="Authors" value="authors">Authors</option>
                                    <option label="Title" value="title">Title</option>
                                    <option label="Abstract" value="abstract">Abstract</option>
                                    <option label="Index terms" value="indexTerms">Index terms</option>
                                    <option label="Full Text" value="galleyFullText">Full Text</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td><input type="submit" value="Search" class="button" /></td>
                           </tr>
                        </table>
                     </form>
                     <br />
                     <span class="blockSubtitle">Browse</span>
                     <ul>
                        <li><a href="<?= base_url(); ?>/issue/archive">By Issue</a></li>
                        <li><a href="<?= base_url(); ?>/search/authors">By Author</a></li>
                        <li><a href="<?= base_url(); ?>/search/titles">By Title</a></li>
                        <li><a href="<?= base_url(); ?>/">Other Journals</a></li>
                     </ul>
                  </div>
                  <div class="block" id="sidebarFontSize" style="margin-bottom: 4px;">
                     <span class="blockTitle">Font Size</span>
                     <div id="sizer"></div>
                  </div>
                  <br />
                  <div class="block" id="sidebarInformation">
                     <span class="blockTitle">Information</span>
                     <ul>
                        <li><a href="<?= base_url(); ?>/information/readers">For Readers</a></li>
                        <li><a href="<?= base_url(); ?>/information/authors">For Authors</a></li>
                        <li><a href="<?= base_url(); ?>/information/librarians">For Librarians</a></li>
                     </ul>
                  </div>
               </div>
            </div>
<!-- SIDEBAR END -->

<!-- LINKS START -->
            <div id="main">
               <div id="navbar">
                  <!-- Menu akan berubah ketika user dalam keadaan login -->
                  <?php if ($userSignedIn == True) : ?>
                  <ul class="menu">
                     <li id="home"><a href="<?= base_url(); ?>/">Home</a></li>
                     <li id="about"><a href="<?= base_url(); ?>/about">About</a></li>
                     <li id="userHome"><a href="<?= base_url(); ?>/user">User Home</a></li>
                     <li id="search"><a href="<?= base_url(); ?>/search">Search</a></li>
                     <li id="current"><a href="<?= base_url(); ?>/issue/current">Current</a></li>
                     <li id="archives"><a href="<?= base_url(); ?>/issue/archive">Archives</a></li>
                  </ul>
                  <?php else : ?>
                  <ul class="menu">
                     <li id="home"><a href="<?= base_url(); ?>/">Home</a></li>
                     <li id="about"><a href="<?= base_url(); ?>/about">About</a></li>
                     <li id="login"><a href="<?= base_url(); ?>/login">Login</a></li>
                     <li id="search"><a href="<?= base_url(); ?>/search">Search</a></li>
                     <li id="current"><a href="<?= base_url(); ?>/issue/current">Current</a></li>
                     <li id="archives"><a href="<?= base_url(); ?>/issue/archive">Archives</a></li>
                  </ul>
                  <?php endif; ?>
               </div>

<!-- LINKS END -->

<!-- CONTENT START -->
               <?= $this->renderSection('content'); ?>
<!-- CONTENT END -->

<!-- FOOTER START -->
            </div>
         </div>
      </div>
   </body>
</html>
<!-- FOOTER END -->