<?php
    require_once 'connect.php';

    $Full_name_employee = $_POST['Full_name_employee'];

    $selects = mysqli_query($connect,"CALL Porcedure_select_5('$Full_name_employee')");

    $selects = mysqli_fetch_all($selects)
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
               <th>Full_name_employee</th>
               <th>Company_name</th>
               <th>Employee_position</th>
               <th>Salary</th>
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
