<?php
    require_once 'connect.php';

    $Product_name = $_POST['Product_name'];
    $Quantity = $_POST['Quantity'];

    $selects = mysqli_query($connect,"CALL Porcedure_select_2('$Product_name', '$Quantity')");

    $selects = mysqli_fetch_all($selects);

?>

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
               <th>Id order</th>
               <th>Login client</th>
               <th>Client product</th>
               <th>Client count buy</th>
           </tr>
        <?php
            foreach($selects as $select)
             { ?>
               <tr>
                   <td><?= $select[0] ?></td>
                   <td><?= $select[1] ?></td>
                   <td><?= $select[2] ?></td>
                   <td><?= $select[3] ?></td>
               </tr>
             <?php 
             } 
         ?>
</table>
