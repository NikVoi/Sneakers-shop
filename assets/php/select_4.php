<?php
    require_once 'connect.php';

    $Name = $_POST['Name'];
    $number = $_POST['Number'];

    $selects = mysqli_query($connect,"CALL Porcedure_select_4('$Name', '$number')");

    $selects = mysqli_fetch_all($selects)
?>

<!-- CREATE VIEW fourthSelect AS SELECT s.Full_name_supplier, s.product_name, i.Invoice_number FROM `supplier` AS s JOIN `invoice` AS i ON (s.product_name = i.Product_name)-->

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
               <th>Supplier name</th>
               <th>product name</th>
               <th>Invoice number</th>
           </tr>
        <?php
            foreach($selects as $select)
             { ?>
               <tr>
                   <td><?= $select[0] ?></td>
                   <td><?= $select[1] ?></td>
                   <td><?= $select[2] ?></td>
               </tr>
             <?php 
             } 
         ?>
</table>
