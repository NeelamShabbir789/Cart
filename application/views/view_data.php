<html>  
   <head>  
      <title>record View Page</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Name</td>  
            <td>Price</td>  
            <td>Desp</td>
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->price;?></td>  
            <td><?php echo $row->desp;?></td>
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  