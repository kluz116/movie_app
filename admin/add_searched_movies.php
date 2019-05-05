<?php
require'connect.php';


		$Title = $_POST['Title'];
		$Year = $_POST['Year'];
		$Released = $_POST['Released'];
		$Runtime = $_POST['Runtime'];
		$Genre = $_POST['Genre'];
		$Director = $_POST['Director'];
		$Writer = $_POST['Writer'];
		$Plot = $_POST['Plot'];
		$Language = $_POST['Language'];
		$Country = $_POST['Country'];
		$Awards = $_POST['Awards'];
		$Poster = $_POST['Poster'];
		$Metascore = $_POST['Metascore'];
		$imdbRating = $_POST['imdbRating'];
		$imdbVotes = $_POST['imdbVotes'];
		$imdbID = $_POST['imdbID'];
		$Type = $_POST['Type'];
		$DVD = $_POST['DVD'];
		$BoxOffice = $_POST['BoxOffice'];
		$Production = $_POST['Production'];
		$when_added = date("Y-m-d H:i:s");
		
		if (!empty($Title) && !empty($Year) && !empty($Released)&& !empty($Director)) {
			try{
			
				$query = "INSERT INTO searched_movie(Title,Year,Released,Runtime,Genre,Director, Writer,Plot, Language, Country, Awards, Poster, Metascore, imdbRating, imdbVotes, imdbID, Type, DVD, BoxOffice, Production, when_searched) VALUES (:Title,:Year,:Released,:Runtime,:Genre,:Director,:Writer,:Plot, :Language, :Country, :Awards, :Poster, :Metascore, :imdbRating, :imdbVotes, :imdbID, :Type, :DVD, :BoxOffice, :Production, :when_searched)";
			    $data = $db->prepare($query);

                $data->bindParam(':Title',$Title);
				$data->bindParam(':Year',$Year);
				$data->bindParam(':Released',$Released);
				$data->bindParam(':Runtime',$Runtime);
				$data->bindParam(':Genre',$Genre);
				$data->bindParam(':Director',$Director);
				$data->bindParam(':Writer',$Writer);
				$data->bindParam(':Plot',$Plot);
				$data->bindParam(':Language',$Language);
				$data->bindParam(':Country',$Country);
				$data->bindParam(':Awards',$Awards);
				$data->bindParam(':Poster',$Poster);
				$data->bindParam(':Metascore',$Metascore);
				$data->bindParam(':imdbRating',$imdbRating);
				$data->bindParam(':imdbVotes',$imdbVotes);
				$data->bindParam(':imdbID',$imdbID);
				$data->bindParam(':Type',$Type);
				$data->bindParam(':DVD',$DVD);
				$data->bindParam(':BoxOffice',$BoxOffice);
				$data->bindParam(':Production',$Production);
				$data->bindParam(':when_searched',$when_added);

				$res = $data->execute();
				if ($res) {
					echo "Successful...";
				    
				}else{
					echo "Not saved";
				}
	
	
			}catch(PDOException $e){
				
				echo "string".$e->getMessage();
			
			}

		}

?>