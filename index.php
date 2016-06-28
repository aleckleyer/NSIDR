<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link rel="stylesheet" href="jquery/jquery-ui.min.css">
 
      <link rel="stylesheet" href="app.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
      
    <div class="app-page" data-page="home">
      <div class="app-topbar">
        <div class="app-title" id="homePageTitle">N S I D R</div>
      </div>
      <div class="app-content" style="background-color:black;">
            <p id="homePageSlogan">You're never alone with N S I D R</p>
          <div class="app-section" id="homePageSignIn">
            
          <div class="app-button" id="signInFacebook">Sign in w/ Facebook</div>
          </div>
          <div class="app-section" id="signUpInSection">
              <div class="app-button" id="signUp" data-target="SignUp">Sign up</div>
              <div class="app-button" id="signIn" data-target="SignIn">Sign In</div>
        </div>
          <div class="app-section" style="background-color:black;margin-top:45px;padding-top:-15px;">
          <div class="app-button" data-target="termsAgreement" style="background-color:black;">
          <p id="homePageTAG">Terms and Agreements</p>
          </div>
              </div>
      </div>
    </div>
      
      <div class="app-page" data-page="termsAgreement">
      <div class="app-topbar">
        <div class="app-button left" data-back data-autotitle></div>
        <div class="app-title">Terms and Agreement</div>
      </div>
      <div class="app-content">
        <div class="app-section">
          
<p>Last updated: April 04, 2016</p>
<p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the NSIDR.com website (the "Service") operated by NSIDR ("us", "we", or "our").</p>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
<p><strong>Accounts</strong></p>
<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>
<p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>
<p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
<p><strong>Links To Other Web Sites</strong></p>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by NSIDR.</p>
<p>NSIDR has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that NSIDR shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<p><strong>Termination</strong></p>
<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p><strong>Governing Law</strong></p>
<p>These Terms shall be governed and construed in accordance with the laws of New York, United States, without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<p><strong>Changes</strong></p>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
<p><strong>Contact Us</strong></p>
<p>If you have any questions about these Terms, please contact us.</p>

            
          </div>


      </div>
    </div>

    
        
        <div class="app-page" data-page="SignUp">
   <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Sign Up</div>
      </div>
    <br />
    <div class="app-content">
        <input id="btnUserName" class="app-input" placeholder="Username">
        <input id="btnEmail" class="app-input" placeholder="Email">
        <input id="btnPassword" class="app-input" placeholder="Password" type="password">
        <input id="btnCPassword" class="app-input" placeholder="Confirm Password" type="password">
        <div id="btnSignUp" class="app-button green">SignUp</div>
    </div>
</div>
      
      <div class="app-page" data-page="SignIn">
    <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Sign In</div>
      </div>
    <br />
    <div class="app-content">
        <input id="btnEmailSignIn" class="app-input" placeholder="Email">
        <input id="btnPass" class="app-input" placeholder="Password" type="password">
        <div id="btnSignIn" class="app-button green">SignIn</div>
    </div>
</div>
      
      <div class="app-page" data-page="mainPage">
      <div class="app-topbar">
        <div class="app-title whiteTitle blackText"><div class="app-button text-center" data-target="locations"><div class="app-button" id="checkLoggedIn">Check</div>(Your Location) &dtrif;</div> </div>
      </div>
        <div class="app-content">
        <div class="app-section app-section-extended" id="sliderSection">
            <div class="app-button" id="downBtn">Down</div>
            <div style="float:left;">Distance: <span id="sliderValue">0</span> mi</div>
            <div class="app-button" id="upBtn">Up</div>
        </div>
        <div class="app-section app-section-extended" id="tabsSection">
            <div class="app-button activeBtn" id="popularBtn">Popular</div>
            <div class="app-button" id="freeBtn">Free</div>
            <div class="app-button" id="instantBtn">Instant</div>
        </div>
        <div class="app-section app-section-extended eventSection">
            <p class="smallText">Today, Dec 11 @ Time</p>
            <hr>
            <img src="http://www.placehold.it/340x150"/>
            <ul>
                <li style="font-weight:bold;">Event Title</li>
                <li>Neighbourhood</li>
                <li>KM from you</li>
            </ul>
            <hr>
            <div class="tags">#houseParty #80snight</div>
            <div class="sharePost">&loang;</div>
            <div class="favoritePost">&loang;</div>
        </div>
         <div class="app-section app-section-extended eventSection">
                <p class="smallText">Today, Dec 11 @ Time</p>
             <hr>
                <img src="http://www.placehold.it/340x150"/>
                <ul>
                    <li style="font-weight:bold;">Event Title</li>
                    <li>Neighbourhood</li>
                    <li>KM from you</li>
                </ul>
                <hr>
                <div class="tags">#houseParty #80snight</div>
                <div class="sharePost">&loang;</div>
                <div class="favoritePost">&loang;</div>
            </div>
         <div class="app-section app-section-extended eventSection">
             <p class="smallText">Today, Dec 11 @ Time</p>
             <hr>
                <img src="http://www.placehold.it/340x150"/>
                <ul>
                    <li style="font-weight:bold;">Event Title</li>
                    <li>Neighbourhood</li>
                    <li>KM from you</li>
                </ul>
                <hr>
                <div class="tags">#houseParty #80snight</div>
                <div class="sharePost">&loang;</div>
                <div class="favoritePost">&loang;</div>
            </div>
         <div class="app-section" style="background:none;height:32px;"></div>
         <div class="app-section app-footer">
            <div class="app-button" id="hangoutsFooter" data-target="Hangouts">Hangouts</div>
            <div class="app-button" id="meFooter" data-target="MePage">Me</div>
            <div class="app-button" id="hostFooter" data-target="HostPage">Host</div>
            <div class="app-button" id="promoterFooter" data-target="PromoterPage">Promoter</div>
            <div class="app-button" id="settingsFooter" data-target="settingsPage">Settings</div>
         </div>
      </div>
    </div>
      
    <div class="app-page" data-page="locations">
      <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText" id="LocationsTitle">
          <input type="text" id="LocationSearchInput" placeholder="Type City Here"/>
          </div>
      </div>
      
    </div>
      
      <div class="app-page" data-page="Hangouts">
      <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Hangouts</div>
      </div>
      
    </div>
      <div class="app-page" data-page="MePage">
      <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Me</div>
      </div>
      
    </div>
      <div class="app-page" data-page="HostPage">
      <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Host</div>
      </div>
      
    </div>
      <div class="app-page" data-page="PromoterPage">
      <div class="app-topbar">
          <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Promoter</div>
      </div>
      
    </div>
      
    <?php include 'settings.php'; ?>
      <script type='text/javascript' src='firebase.js'></script>
      <script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.6.1/firebase-simple-login.js'></script>
        
      <script src="zepto.js"></script>
        
      <script src="app.min.js"></script>
      <script type="text/javascript" src="controllers.js"></script>
      <script type="text/javascript">

        var ref = new Firebase("https://brilliant-fire-8234.firebaseio.com/");
        var auth = new FirebaseSimpleLogin(ref, function (error, user) {
                                                    if (!error) {
                                                        if (user) {
                                                            App.load('mainPage',user);
                                                        }
                                                    }
                                                }
                                          );
          
      

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>
      
  </body>
</html>
