<html>

   <head>
      <title>Student Management | Edit</title>
   </head>

   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'nombreEstudiante'
                     value = '<?php echo$users[0]->nombre; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>

      </form>

   </body>
</html>
