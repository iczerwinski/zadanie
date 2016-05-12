<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
	  <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
      <title>Zadanie testowe</title> 
   </head>
	
   <body> 
     
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td><b>Id</b></td>";           
          /*   echo "<td>Id</td>";   */        
           echo "<td><b>Name</b></td>"; 
            echo "<td><b>Surname</b></td>"; 
            echo "<td><b>Adres</b></td>";  
			echo "<td><b>Zipcode</b></td>"; 

            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>";              
               echo "<td>".$r->Name."</td>"; 
               echo "<td>".$r->Surname."</td>"; 
               echo "<td>".$r->Adres."</td>"; 
			   echo "<td>".$r->Zipcode."</td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
	
	
   </body>
	
</html>