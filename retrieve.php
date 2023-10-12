
<script type="module" src="https://www.gstatic.com/firebasejs/9.9.1/firebase-database.js">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
   import { getDatabase, ref, set, child, get, update, remove}
    from "https://www.gstatic.com/firebasejs/9.9.1/firebase-database.js"
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDbgRxLn_Tw0nZWiMwy9Rd09RrAsWQpTF4",
    authDomain: "e-kalat.firebaseapp.com",
    databaseURL: "https://e-kalat-default-rtdb.firebaseio.com",
    projectId: "e-kalat",
    storageBucket: "e-kalat.appspot.com",
    messagingSenderId: "526994641839",
    appId: "1:526994641839:web:26fd1fbfcf87a21b3c955a",
    measurementId: "G-1PJX8TCP8M"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  function SelectData(){
    firebase.database()ref('ALL DATA').once('value',
      function(AllRecords){
        AllRecords.forEach(
          function(CurrentRecord){
            var dAte = snapshot.val().date;
            var iMage = snapshot.val().image;
            var lAng = snapshot.val().lang;
            var lAt = snapshot.val().lat;
            var tAg = snapshot.val().tag;
            var tYpe = snapshot.val().type;
          }
          );
      });
  }

</script>