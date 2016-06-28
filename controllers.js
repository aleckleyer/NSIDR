var username;
App.controller('home', function (page) {
    $(page)
    .find('#signInFacebook')
    .on('click', function () {
        var ref = new Firebase("https://brilliant-fire-8234.firebaseio.com");
        ref.authWithOAuthPopup("facebook", function(error, authData) {
            if (error) {
                console.log("Login Failed!", error);
            } else {
                console.log("Authenticated successfully with payload:", authData);
            }
        });
    })
});

App.controller('SignUp', function (page) {
    $(page)
    .find('#btnSignUp')
    .on('click', function () {
        username = $('#btnUserName').val();
        var email = $('#btnEmail').val();
        var password = $('#btnPassword').val();
        var cpassword = $('#btnCPassword').val();
        if (password !== cpassword){
            App.dialog({
                title: 'Passwords do not match!',
                text: 'Please re-enter your password.',
                okButton: 'Try Again',
                cancelButton: 'Cancel'
            }, function (tryAgain) {
                if (tryAgain) {
                    App.load('SignUp');
                }
            });
        }
        if (username && email && password && (password == cpassword)) {
            // on successful validation create the user
            var usersRef = ref.child("Users");
            usersRef.child(username).set({
                Email: email,
                Password: password
            });
            App.load('mainPage');
        } else {
            // on validation failure show the validation message
            App.dialog({
                title: 'Validation Error',
                text: 'Please enter username and password.',
                //okButton: 'Try Again',
                cancelButton: 'Cancel'
            }, function (tryAgain) {
                if (tryAgain) {
                    App.load('SignUp');
                }
            });
        }
    });
});

App.controller('SignIn', function (page) {
    $(page)
    .find('#btnSignIn')
    .on('click', function () {
        var email = $('#btnEmailSignIn').val();
        var password = $('#btnPass').val();
        if (email && password) {
            var ref = new Firebase("https://brilliant-fire-8234.firebaseio.com");
            ref.authWithPassword({
                email    : email,
                password : password
            }, function(error, authData) {
                if (error) {
                    App.dialog({
                        title: 'User not found',
                        text: 'Please enter a correct email and password',
                        okButton: 'Sign Up',
                        cancelButton: 'Try Again'
                    }, function (tryAgain) {
                        if (tryAgain) {
                          App.load('SignUp');
                        }
                    });
                } else {
                    App.load('mainPage');
                }
            });
        } else {
            App.dialog({
                title: 'Validation Error',
                text: 'Please enter username and password.',
                okButton: 'Try Again',
                cancelButton: 'Cancel'
            }, function (tryAgain) {
                if (tryAgain) {
                    App.load('SignIn');
                }
            });
        }
    });
});

App.controller('mainPage', function (page) {
    //Controls for distance slider
    //Button to decrement distance
    $(page)
    .find('#downBtn')
    .on('click', function(){
        var value = $("#sliderValue").text();
        if(value == 0){
            App.dialog({
                title: 'Oops',
                text: "Can't get much closer than that..",
                cancelButton: 'Cancel'
            });
        } else {
            value--;
            $("#sliderValue").text(value); 
        }
    });
    //Button to increment distance
    $(page)
    .find('#upBtn')
    .on('click', function(){
        var value = parseInt($("#sliderValue").text());
        if(value == 10){    
            App.dialog({
                title: 'Oops',
                text: "Can't get much farther than that..",
                cancelButton: 'Cancel'
            });
        } else {
            value++;
            $("#sliderValue").text(value); 
        }
    });
    //Controls to toggle filters
    //Button to toggle popular button
    $(page)
    .find('#popularBtn')
    .on('click', function(){
        $(this).toggleClass('activeBtn');
    });
    //Button to toggle free button
    $(page)
    .find('#freeBtn')
    .on('click', function(){
        $(this).toggleClass('activeBtn');
    });
    //Button to toggle instant button
    $(page)
    .find('#instantBtn')
    .on('click', function(){
        $(this).toggleClass('activeBtn');
    });  
    $(page)
    .find('#checkLoggedIn')
    .on('click', function(){
       alert(fetchUsername());
    })
});
App.controller('settingsPaypal', function (page) {
    $(page)
    .find('#paypalInputSubmit')
    .on('click', function(){
        var email = $('#paypalInput').val();
        if(email!=""){
            //alert(email);
            var usersRef = ref.child("Users");
            var un = fetchUsername();
            alert(un);
            //usersRef.child(un).set({
            //    PayPalEmail: email,
            //});
        } else{
            alert("Whoops");
        }
    })
});

function fetchUsername(){
    var object;
    var ref = new Firebase("https://brilliant-fire-8234.firebaseio.com/Users"); 
    ref.on("child_added", function(snapshot,prevChildKey) {
        object = prevChildKey;
    }, function (errorObject) {
      console.log("The read failed: " + errorObject.code);
    });
    
    return object;
}