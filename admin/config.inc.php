<?php
require'connection.php';
session_start();


class Config extends Connection
{


public function loginUser()
{
	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (!empty($email) && !empty($password)) {
			try{

		    $data =$this->dbh-> prepare('select * from users where password=:password and email=:email');
			$data->bindParam(':email',$email);
			$data->bindParam(':password',$password);
			$data->execute();

			$row = $data->fetch(PDO::FETCH_ASSOC);

			if($row){
				         $_SESSION['email'] = $email;
						if(isset($_SESSION['email'])){

                             header("Location:index.php");
                             exit();
						}else{
							 header("Location:login.php");
						}
			}else{
				echo "You Not Authorised To Login, Contact system administrator";
			}

			}catch(PDOException $e){
				trigger_error('Error: ' .$e->getMessage());
			}

		}else{

			echo "Fill In All Fields.";
		}
	}
}


public function getSessionInfo()
{
	try {
        if($_SESSION['email']){
        $email = $_SESSION['email'];

        $data =$this->dbh-> prepare('select * from users where email=:email');
        $data->bindParam(':email',$email);
        $results= $data->execute();

        while ($row= $data->fetch(PDO::FETCH_ASSOC)) {

            $user_name = $row['user_name'];
		      echo $user_name;

           }


          }



} catch (PDOException $e) {

     }
}



public function MoviesSerached()
{
		try{
		 $date =$this->dbh->prepare('select COUNT(*) AS "Total" from searched_movie');
		 $date->execute();

		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$Total = $row['Total'];
		 	echo $Total;
		 }

		 	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function MoviesSerachedWeeekly()
{
		try{
		 $date =$this->dbh->prepare('SELECT  COUNT(*) AS "Total"  FROM searched_movie WHERE WEEKOFYEAR(when_searched) = WEEKOFYEAR(NOW()) ');
		 $date->execute();

		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$Total = $row['Total'];
		 	echo $Total;
		 }

		 	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function MoviesWithNoAwards()
{
		try{
		 $date =$this->dbh->prepare('select COUNT(*) AS "Total" from searched_movie where Awards="N/A"');
		 $date->execute();

		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$Total = $row['Total'];
		 	echo $Total;
		 }

		 	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

	public function MoviesWithRatings()
{
		try{
		 $date =$this->dbh->prepare('select COUNT(*) AS "Total" from searched_movie where imdbRating!="N/A"');
		 $date->execute();

		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$Total = $row['Total'];
		 	echo $Total;
		 }

		 	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}



 public function Chartweekly()
{
  $date =$this->dbh->prepare('SELECT DAYNAME(when_searched) AS "Days", COUNT(*) AS "Total"  FROM searched_movie WHERE WEEKOFYEAR(when_searched) = WEEKOFYEAR(NOW()) GROUP BY DAY(when_searched) ,DAYNAME(when_searched)   ORDER BY DAY(when_searched) ASC');
   $date->execute();
   $data = array();
   while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
         $Days = $row['Days'];
         $Total = $row['Total'];

         $data[] = array('label' => $Days,'count'=>$Total );

   }

     echo json_encode($data);
}



 public function MoviesCountReleaseYear()
{
  $date =$this->dbh->prepare('select COUNT(*) AS "Total", Year from searched_movie  group by Year ');
   $date->execute();
   $data = array();
   while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
         $Days = $row['Year'];
         $Total = $row['Total'];

         $data[] = array('label' => $Days,'count'=>$Total );

   }

     echo json_encode($data);
}



public function getMoviesSerached()
{
	try{
		 $date =$this->dbh->prepare('select * from searched_movie');
		 $date->execute();

		 echo "<table id='data-table-fixed-header' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Title</th>";
		 echo "<th>Released</th>";
		 echo "<th>Director</th>";
		 echo "<th>Awards</th>";
		 echo "<th>Movie ID</th>";
		 echo "<th>Production</th>";
		 echo "<th>Rating</th>";
		 echo "<th>search date</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$search_id = $row['search_id'];
		 	$Title = $row['Title'];
		 	$Released = $row['Released'];
		 	$Director = $row['Director'];
		 	$Awards = $row['Awards'];
		 	$imdbID = $row['imdbID'];
		 	$Production = $row['Production'];
		 	$imdbRating = $row['imdbRating'];
		 	$when_searched = $row['when_searched'];


		 	echo "<tr>";
		 	echo "<td>$search_id</td>";
		 	echo "<td>$Title</td>";
		 	echo "<td>$Released</td>";
		 	echo "<td>$Director</td>";
		 	echo "<td>$Awards</td>";
		 	echo "<td>$imdbID</td>";
		 	echo "<td>$Production</td>";
		 	echo "<td>$imdbRating</td>";
		 	echo "<td>$when_searched</td>";
		
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "</table>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}






}//End of the class.






?>
