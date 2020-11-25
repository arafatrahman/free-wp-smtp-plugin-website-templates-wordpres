<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <!-- box-icon stylesheet -->
        <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><!-- box-icon stylesheet close here -->

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    </head>

    <body <?php body_class(); ?>>

        <header class="kau-documentation-head">
            <section class="mailer-documentation-header" data-aos="zoom-out" data-aos-delay="10" id="mailer-documentation-header">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 my-auto">
                            <div class="kau-documentation-headding text-white">
                                <h1>FREE WP SMTP Plugin Documentation</h1>
                                <p class="font-italic"><b>Set Up the Gmail Mailer in free wp smtp plugin</b></p>
                                <h3><img src="https://riyadly.com/wp-content/uploads/2020/11/google-icon.png" width="" height="" alt="gmaile" />Gmail mailer</h3>

                            </div>
                        </div>
                        <div class="col-lg-4 my-auto">
                            <div class="kau-quick-link-container">
                                <div class="card">
                                    <div class="card-footer">
                                        <small class="text-muted"><b>QUICK LINK</b></small>
                                    </div>
                                    <div class="card-block" style="background-color: #8439BD !important; padding: 20px;color:white !important;" >
                                        <b></b><p>Install the WP Mail SMTP Plugin</p><p>Create a Web App in Google</p><p>Authentication and Send Test Email</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </header>

        <section id="whyus" class="featured-services why-us-section" >


            <div class="text-center" data-aos="fade-up"> 
                <h1 class="why-us-section-title"> <b>How to Set Up the Gmail Mailer in WP Mail SMTP ?</h1>
                <p class="why-us-section-title-desc">Do you think about How do you set up Gmail Miller? Don't worries about this, you can easily setup Gmail. <br> We can Help Just Follow Our instructions . In this tutorial, we’ll show you how to set up <br> Free WP SMTPusing the Google mailer with your Gmail .</p>
            </div>

            <div class="container" >

                <div data-aos="zoom-out-down" class="row justify-content-center text-center text-white" style="margin-top: 40px;">
                    <div  class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
                        <div class="kau-mailer-icon-box kau-icon-box-one"  data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><img src="https://riyadly.com/wp-content/uploads/2020/11/settings.png" /></div>
                            <h4 >Install and Setup</h4>
                            <p class="description font-italic"><b>To use our plugin, you must first install and set up our free wp smtp plugin</b></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="kau-mailer-icon-box kau-icon-box-two" data-aos="zoom-out" data-aos-delay="100">
                            <div class="icon"><img src="https://riyadly.com/wp-content/uploads/2020/11/code.png"/></div>
                            <h4 class="">Create Web App</h4>
                            <p class="description font-italic"><b>The second step is to create a web application in your Google Account </b></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="kau-mailer-icon-box kau-icon-box-three"  data-aos="zoom-in-right" data-aos-delay="100">
                            <div class="icon"><img src="https://riyadly.com/wp-content/uploads/2020/11/send-mail.png"/></div>
                            <h4 class="">Auth & Send </h4>
                            <p class="description font-italic"><b>After creating the application you need to send auth and test email
                                </b></p>
                        </div>
                    </div>

                </div>

            </div>
        </section>



        <section class="kau-install-setup justify-content-center text-center">

            <div class="form-group row kau-doc-section-label">
                <div class="col-12 mailerlabel">
                    <div class="p-4 mb-2 kau-doc-label-color text-white col-2 "><b>Install and Setup</b></div>
                    <hr class="kau-doc-label-hr">
                </div>
            </div>

            <div class="kau-install-setup-header-text">
                <h3><b>Enabled smtp activation then Set From Email and From Name</b></h3>
                <p class="font-italic">After installing the plugin you need to enabled smtp activation and set the From Name and From Email Address.However, remember that the<br> from email address should match your provider's email address.</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/sfsds.png" width="" height="" alt="gmaile" /></div>

        </section>

        <section class="kau-create-web-app justify-content-center text-center">

            <div class="form-group row kau-doc-section-label-two">
                <div class="col-12 mailerlabel">
                    <div class="p-4 mb-2 kau-doc-label-color-two text-white col-2 "><b>Create Web App</b></div>
                    <hr class="kau-doc-label-hr-two">
                </div>
            </div>

            <div class="kau-install-setup-header-text">
                <h3><b>Step 1: Create a project at Google API Console</b></h3>
                <p class="font-italic">Login to google developers console.Then click select a project <br>and create a new one with a project name .</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/Create-a-project-at-Google-API-Console-1.png" width="" height="" alt="" /></div>

            <div class="kau-install-setup-header-text">
                <h3><b>Step 2: Enable Gmail API</b></h3>
                <p class="font-italic">Once you createproject, then you can press the Library tab on the left / Enable apis and services and <br>find yourself in the api library page.</p>
            </div>
            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/search-gmail-api.png" width="" height="" alt="" /></div> 

            <div class="kau-install-setup-header-text">

                <p class="font-italic">Then enter “Gmail API” in the search bar/ scroll down and click on it once found. Now, <br>you need to enable the api for your project.</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/Credentials-and-authentication.png" width="" height="" alt="" /></div>

            <div class="kau-install-setup-header-text">
                <h3><b>Step 3: Credentials and authentication with OAuth 2.0</b></h3>
                <p class="font-italic">Once the API is successfully enabled , then Click OAuth <br>consent screen and create it .</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/OAuth-consent-screen.png" width="" height="" alt="" /></div>
            
            <div class="kau-install-setup-header-text">
               
                <p class="font-italic">Then go back dashboard and Create credentials . Click create credentials <br> and press OAuth client ID .</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/create-credentials.png" width="" height="" alt="" /></div>
            
            
            <div class="kau-install-setup-header-text">
               
                <p class="font-italic">Then go back dashboard and Create credentials . Click create credentials <br> and press OAuth client ID .</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/type-of-your-app.png" width="" height="" alt="" /></div>
            
            <div class="kau-install-setup-header-text">
               
                 <p class="font-italic">After That Enter Name of Your Application name and add Authorised redirect URIs <br> for that you can copy the url provided by our plugin and click create .</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/Your-Application-name.png" width="" height="" alt="" /></div>
             
             <div class="kau-install-setup-header-text">
               
                 <p class="font-italic">Once the credentials is successfully created .copy Your Client ID and Client Secret</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/credentials-is-successfully-created.png" width="" height="" alt="" /></div>
        </section>

         <section class="kau-auth-send-email justify-content-center text-center" >

            <div class="form-group row kau-doc-section-label-three" >
                <div class="col-12 mailerlabel">
                    <div class="p-4 mb-2 kau-doc-label-color-three text-white col-2 "><b>Auth & Send Email</b></div>
                    <hr class="kau-doc-label-hr-three">
                </div>
            </div>

            <div class="kau-install-setup-header-text">
                
                <p class="font-italic">On the Credentials page, you can now see the details of the web application you just created. To view Client ID and Client Secret <br>( copy that Client ID and Client Secret ) . Each of these will need to be copied into your Free WP SMTP settings <br>back in your WordPress admin screen and paste in the right place . Then save your gmail settings.</p>
            </div>

            <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/save-your-gmail-settings.png" width="" height="" alt="gmaile" /></div>

            
            <div class="kau-install-setup-header-text">
               
                <p class="font-italic">Once your gmail settings saved. Let’s Authentication with gmail api<br> by click authentication button.</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/authentication-with-gmail-api.png" width="" height="" alt="" /></div>
            
             <div class="kau-install-setup-header-text">
               
                 <p class="font-italic">This will open a login screen for Google. Go ahead and log into the account you’re setting this SMTP up with. Then, <br> you’ll see a screen asking for permission for this site to send email on your behalf.When you’re ready, click the Allow button to proceed.</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/login-screen-for-Google.png" width="" height="" alt="" /></div>
             
              <div class="kau-install-setup-header-text">
               
                  <p class="font-italic"> after successfully authenticated ,then you are now ready to send email . <br>here you can send test email</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/test-email-section.png" width="" height="" alt="" /></div>
             
             
              <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/login-screen-for-Google.png" width="" height="" alt="" /></div>
             
              <div class="kau-install-setup-header-text">
               
                  <p class="font-italic"> Once the Test Email tab is open, you’ll need to enter a valid email address and click the Send Email button. Be sure to use an email address <br>you have access to so you can confirm the email is delivered.When the test message has been sent,<br> you’ll see a success message at the top of this tab.</p>
            </div>

             <div class="kau-doc-screenshot"><img src="https://riyadly.com/wp-content/uploads/2020/11/test-message-has-been-sent.png" width="" height="" alt="" /></div>
             
             
             
        </section>
        
        <div class="container kau-footer-container col-12" style="background-image: url('https://riyadly.com/wp-content/uploads/2020/11/kauheader.jpg');">
                    <div class="row justify-content-center ">

                        <div class="col-1 ">


                        </div>
                        <div class="col-7" >
                            <div class="text-white" >
                                <h4 class="" style="margin-top:20px;"><b>Solve Your Email Deliverability Problems</b></h4>
                                <p class="font-italic"><b>Lets solve the problem of sending emails from <br>your Wordpress site now without delay </b></p>
                            </div>
                        </div>



                        <div class="col-1 ">


                        </div>

                        <div class="col-3 " style="margin-top: 20px;">

                            <div class="">
                                <button class="kau-button head-button"><b>GET IT NOW FREE</b></button>

                            </div>
                        </div>

                    </div>
                </div>

        <script>
            $("html,body").scrollTop(55);
            $(window).on('scroll', function () {

                // Init AOS
                function aos_init() {
                    AOS.init({
                        duration: 1000,
                        once: true
                    });
                }

                aos_init();

            });

        </script>

    </body>
</html>

