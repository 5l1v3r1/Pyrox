<!--
    //TODO : 
    /*
        database with PDO
        check all the input
        file config.php
    */
-->
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pyrox</title>
        <link rel="stylesheet" href="stylesheets/app.css" />
        <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
        <link rel="icon" type="image/png" href="images/logo.png" />
        <script src="bower_components/modernizr/modernizr.js"></script>
    </head>

    <body>

        <div class="contain-to-grid">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="index.php">Pyrox</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>
                <section class="top-bar-section">
                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li class="divider"></li>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="divider"></li>
                        <li><a href="about.php">About</a></li>
                        <li class="divider"></li>
                    </ul>
                    <!-- Right Nav Section -->
                    <ul class="right">

                    </ul>
              </section>
            </nav>
        </div>
        <div class="row">
            <form id="formUser" method="post">
                <fieldset>
                    <legend>Pyrox Form</legend>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">First name</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="fisrtName" placeholder="First name">
                                <small class="error" id="error1" style="display:none">Invalid entry</small>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">Last name</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="lastName" placeholder="Last name">
                                <small class="error" id="error2" style="display:none">Invalid entry</small>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">birthday</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="date" name="birthday" placeholder="birthday">
                                <small class="error" id="error4" style="display:none">Invalid entry</small>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">Username</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="username" id="username" placeholder="Username">
                                <small class="error" id="error5" style="display:none">Invalid entry</small>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">View Count</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="viewCount" class="error" placeholder="View Count" disabled>
                                <small class="error" id="errorView" style="display:none">Check the username</small>
                            </div>
                        </div>
                    </div>                  
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">Subscribers</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="subscribers" class="error" placeholder="Subscribers" disabled> 
                                <small class="error" id="errorSubs" style="display:none">Check the username</small>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-8">
                        <div class="row">
                            <div class="small-4 large-6 columns">
                                <label for="right-label" class="right inline">Skype</label>
                            </div>
                            <div class="small-8 large-6 columns">
                                <input type="text" name="skype" placeholder="skype">
                                <small class="error" id="error3" style="display:none">Check the username</small>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div data-alert class="erreurCkeck alert-box warning small-12 large-6 columns large-centered text-center" style="display:none"></div>
                        <input type="checkbox" class="check"><label for="checkbox"><p>I accept the review agreement</p></label>
                        <button type="submit" class="button join">Let's Go !</button>    
                    </div>      
                </fieldset> 
            </form>
        </div>

        <script src="bower_components/jquery/jquery.js"></script>
        <script src="bower_components/foundation/js/foundation.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $("#formUser").submit(function(){
                    if(!$('input[name="fisrtName"]').val()) {
                        $('input[name="fisrtName"]').addClass("error");
                        $('#error1').show();
                    }
                    if(!$('input[name="lastName"]').val()) {
                        $('input[name="lastName"]').addClass("error");
                        $('#error2').show();
                    }
                    if(!$('input[name="skype"]').val()) {
                        $('input[name="skype"]').addClass("error");
                        $('#error3').show();
                    }
                    if(!$('input[name="birthday"]').val()) {
                        $('input[name="birthday"]').addClass("error");
                        $('#error4').show();
                    }
                    if(!$('.check').is(":checked")) {
                        $(".erreurCkeck").show();
                        $(".erreurCkeck").html("<p>Error you need to accept the review agreement !</p>");
                    }
                    if(!$('input[name="username"]').val()) {
                        $('input[name="username"]').addClass("error");
                        $('#error5').show();
                    }
                    return false;
                });
            });
        </script>
        <script src="api.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>

    </body>
</html>
