<head>
<script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
 <head>
    <meta charset="UTF-8">
    <title>clicc</title>
<script src="https://www.gstatic.com/firebasejs/4.4.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCtD5cyvWijUyDm4xRbvazVm5k_5k2DYkE",
    authDomain: "clicc-bd5d6.firebaseapp.com",
    databaseURL: "https://clicc-bd5d6.firebaseio.com",
    projectId: "clicc-bd5d6",
    storageBucket: "clicc-bd5d6.appspot.com",
    messagingSenderId: "448687478158"
  };
  firebase.initializeApp(config);
  </script>
  <style>
   .app {
    background-image: url("./img/logon/login.png");
    height: 100%;
    
   }
   .square {
    /* width within the parent.
       can be any percentage. */
    width: 100%;
    background-image: url("./img/logon/login.png");
}
.square:before {
    content: "";
    float: left;

    /* essentially the aspect ratio. 100% means the
       div will remain 100% as tall as it is wide, or
       square in other words.  */
    padding-bottom: 100%;
}
/* this is a clearfix. you can use whatever
   clearfix you usually use, add
   overflow:hidden to the parent element,
   or simply float the parent container. */
.square:after {
    content: "";
    display: table;
    clear: both;
}
  </style>
</head>
 <body>
  <div class="square">
   
  </div>
 
  </body
