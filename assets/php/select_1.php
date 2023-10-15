<?php
    require_once 'connect.php';

    $Manufactor = $_POST['Product_manufacturer'];
    $Price = $_POST['Product_Price'];

    $selects = mysqli_query($connect,"CALL Porcedure_select_1('$Manufactor', '$Price')");
    
    $selects = mysqli_fetch_all($selects);
?>
<pre>
    <?php
      
    ?>
</pre>
<style>
    table{
        width: 100%;
    }
      body{
          color: black
      }
      th,td{
          padding: 10px;
      }
      th{
          background: #606060;
      }
      td{
          background: #b5b5b5 ;
      }
      button{
          margin: 10px;
      }

  </style>

<table>
           <tr>
                <th>Manufacturer</th>
               <th>Price</th>
           </tr>
        <?php
            foreach($selects as $select)
             { ?>
               <tr>
                   <td><?= $select[0] ?></td>
                   <td><?= $select[1] ?></td>
               </tr>
             <?php 
             } 
         ?>
</table>
