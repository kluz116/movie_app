
			$("button").click(function(e) {
			    e.preventDefault();
			    var search_movie = $("#search_movie").val();
			    var movie_url = "http://www.omdbapi.com/?t="+search_movie+"&apikey=95632709"
			    $.ajax({
			    	     type: "POST", 
						  dataType: 'jsonp', 
						  url:movie_url,
						  async: false,
						  contentType: "application/json; charset=utf-8",
                 beforeSend: function(){
                   $('#example').append("Please wait...");
               },
               complete: function(){
                    $("#example").hide();
               },
						  success: function (msg) {
					            console.log(msg);

					            if (msg.Response =='False') {
					            	$('#example').append("Searched movie seems not to be found..");

					            }else{
                                DoAction(msg.Title,msg.Year,msg.Released,msg.Runtime,msg.Genre,msg.Director,msg.Writer,msg.Plot,msg.Language,msg.Country,msg.Awards,msg.Poster,msg.Metascore,msg.imdbRating,msg.imdbVotes,msg.imdbID,msg.Type,msg.DVD,msg.BoxOffice,msg.Production);         

					            $(".res").append('<div class="card" style="width: 30rem;">'
                                               +'<img class="card-img-top" src="'+msg.Poster+'" alt="Card image cap">'
											    +'<div class="card-body">'
											    +'<h3 class="card-title"><strong>'+msg.Title+'<strong></h3>'
											    +'<p class="card-text">'+msg.Plot+'</p>'
											    +'<a href="movie_details.php?imdbID='+msg.imdbID+'&&Title='+msg.Title+'" class="btn btn-primary">View Movie Details</a>'
											    +'</div>'
                                                +'</div>');   
								  }  
							},
						   error:function (data) {
						        console.log(data);
						    }

			    });
			});
 		function DoAction(Title,Year,Released,Runtime,Genre,Director,Writer,Plot,Language,Country,Awards,Poster,Metascore,imdbRating,imdbVotes,imdbID,Type,DVD,BoxOffice,Production)

				{
				    $.ajax({
				         type: "POST",
				         url: "admin/add_searched_movies.php",
				         data: "Title=" + Title +"&Year=" + Year+"&Released="+Released+"&Runtime="+Runtime+"&Genre="+Genre+"&Director="+Director+"&Writer="+Writer+"&Plot="+Plot+"&Language="+Language+"&Country="+Country+"&Awards="+Awards+"&Poster="+Poster+"&Metascore="+Metascore+"&imdbRating="+imdbRating+"&imdbVotes="+imdbVotes+"&imdbID="+imdbID+"&Type="+Type+"&DVD="+DVD+"&BoxOffice="+BoxOffice+"&Production="+Production,
				         success: function(response){
				              console.log(response);
				        },
				        error:function (err) {
				        	console.log(err);
				        }
				    });
				}
 