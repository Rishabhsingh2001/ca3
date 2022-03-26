<html>


   <body>
      <form action = "user/add" method = "POST">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> 
      
         <table>
               Enter First Number: <input type = "number" name = "numone" />
               <br>
               Enter Second Number: <input type = "number" name = "numtwo" />
               <br>
               <input type = "submit" value = "Add" />
         </table>
      
      </form>
   </body>
</html>
