var url = location.pathname;
var index = url.lastIndexOf("/") + 1;
var fileName = url.substring(index);

if (fileName == "page-patient.php") {
  function addpatient(){
       document.getElementById("add").addEventListener("click", function (){
           document.getElementById("table").style.display = "none";
            document.getElementById("form").style.display = "block";
           document.getElementById("serch").style.display = "none";
           document.getElementById("h1").innerHTML = "nouveau  Patients";
          

     });
      };
    onload = addpatient();

    /*edit patient*/
    function btn(){
      document.getElementById("btn").addEventListener("click", function (){
          document.getElementById("table").style.display = "none";
          document.getElementById("form").style.display = "block";
          document.getElementById("serch").style.display = "none";
          document.getElementById("h1").innerHTML = "edit list Patients";
          document.getElementById("profil").style.display = "block";

    });
     };
     onload = btn();
    /*edit p */
}

    if (fileName == "medicaments.php") {
   function medicament(){
    var btn = document.getElementById("btn").addEventListener("click", function (){
             document.getElementById("h1").innerHTML = "nouveau List of medicaments";
             document.getElementById("table").style.display = "none";
             document.getElementById("window").style.display = "block";
      });
       };
  
     onload = medicament();
     
     function medi(){
      var btn = document.getElementById("addmed").addEventListener("click", function (){
               document.getElementById("h1").innerHTML = "edit List medicaments";
               document.getElementById("med").style.display = "block";
               document.getElementById("table").style.display = "none";
        });
         };
    
       onload = medi();

      }

      if (fileName == "edit_patient.php") {
        function edit(){
                  document.getElementById("form").style.display = "block";
            };
       
          onload = edit();
          
     
           }