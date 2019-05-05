<?php
require'admin/connect.php';

   $date =$db->prepare('SELECT DAYNAME(when_searched) AS "Days", COUNT(*) AS "Total"  FROM searched_movie WHERE WEEKOFYEAR(when_searched) = WEEKOFYEAR(NOW()) GROUP BY DAY(when_searched) ,DAYNAME(when_searched)   ORDER BY DAY(when_searched) ASC');
   $date->execute();
    $data = array();
   while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
         $Days = $row['Days'];
         $Total = $row['Total'];

         $data[] = array('label' => $Days,'value'=>$Total );

   }

     echo json_encode($data);
?>