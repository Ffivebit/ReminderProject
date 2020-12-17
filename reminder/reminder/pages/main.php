<?php

	if(!defined("APP")) die();

	require "header.php"; 

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reminder</title>
</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <section class="main-banner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner-caption">

                                            <?php if(isLoggedIn()): ?>

                                                <h4><em>Welcome <?php echox(user()->Firstname);?></em></h4>
                                                <br>
                                                <p> <strong>You can start creating your reminders by pressing on the "New Reminder" button</strong></p>
                                                <p> <strong>You can also view them by going to "My reminders"</strong></p>

                                                <?php else: ?>

                                                <h4><em>Welcome</em></h4>
                                                <br>
                                                <p> <strong>This is an application that allows you to make reminders.</strong></p>
                                                <p> <strong>We hope you like our product.</strong></p>.
                                                <div class="primary-button">
                                                 <a href="register">Register Now</a>
                                                 </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services -->
                <?php if(!isLoggedIn()): ?>
                <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/left-image.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <p>This website is for the use of inserting, removing and deleting reminders. We always get lost in our thoughts so we decided to make a website that you can store your obligations.</p>
                      <br>
                      <p>The main functionalities are easy, simple and free of course.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                    <br>
                    <br>
                      <p>The webiste requires users to make an account and login to start using the main functionallities of the program.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <a href="register">
                    <img src="assets/images/right-image.png" style="width:200px; position:absolute; left:30%;" alt="">
                    </a>
                  </div>
                </div>
              </div>
              </section>
              <section class="left-image">
                </section>

              <?php else: ?>
                <section class="services">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-item first-item">
                                    <div class="icon"></div>
                                    <h4> <a href="new">New Reminder</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-item second-item">
                                    <div class="icon"></div>
                                    <h4><a href="reminders">Reminders</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-item third-item">
                                    <div class="icon"></div>
                                    <h4><a href="account">User Profile</a></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
               


            <?php endif; ?>
         
            
    

                <footer class="page-footer font-small blue">
                    <div class="footer-copyright text-center py-3">
                        © 2020 Copyright:
                        <a href="."> Reminder</a>
                    </div>
                </footer> 
            </div>
            </div>
    </div> 
</body>

<?php require "footer.php"; ?>
