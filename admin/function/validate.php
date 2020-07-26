           <?php
         function sanitizeString($string)
         {
             $string = trim($string);
             $string = strip_tags($string);
             $string = htmlspecialchars($string);
             
             return $string;
         }


         function chekEmpty($value){
            if (empty($value)) {
              return false;
              }
             return true;
        }
   

        
        function ValidEmail($email){
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
              return false;
              }
             return true;
        }






    



       ?>