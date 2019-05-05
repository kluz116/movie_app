<?php
require'admin/connect.php';



   $date =$db->prepare('select COUNT(*) AS "Total", Year from searched_movie  group by Year ');
   $date->execute();
    $data = array();
   while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
         $count = $row['Total'];
         $Year = $row['Year'];

         $data[] = array('label' => $Year,'value'=>$count );

   }

     echo json_encode($data);
?>