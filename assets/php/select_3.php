<?php
    require_once 'connect.php';

    $Company_name = $_POST['Company_name'];
    $Date_employment = $_POST['Date_employment'];

    $selects = mysqli_query($connect,"CALL Porcedure_select_3('$Company_name','$Date_employment')");

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
                <th>Company name</th>
                <th>Name employee</th>
                <th>Date of employment</th>
               
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
