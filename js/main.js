$(function(){
  var userName = "batel";
    var userId = window.location.hash.substr(1); //Get the section after hash tag from URL, e.g. index.html#Arik return 'Arik'
    if(userId === '') {
        alert('No selected');
    } else {

      $.get('/FinalProject/php/myuser.php?user=' + userId, function(data) { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('user data:', data); //We just print whatever we got from the server

          //Basic info
          $('#intro header h1').text(data[0].firstname); //Let's use the data from server and pub it on page!
          $('#intro header h2').text(data[0].lastname);
          $('#intro header').append('<h3>'+data[0].title+'</h3>')

          $('#intro-me').append('<li>'+data[0].phone+'</li>')
          $('#intro-me').append('<li>'+data[0].area+'</li>')
          $('#intro-me').append('<li>'+data[0].email+'</li>')

		  //aboutme
		  $('#about p').text(data[0].about);


          //Social networks
          $ul = $('<ul>', {
              'id': 'social-networks'
          });

          for(i in data.socialNetworks) { //We also got the social networks from the server, which is acceable from data.socialNetworks.
              var $templi = $('<li>');

              $templi.append('<i class="fa fa-'+data.socialNetworks[i].iconName+'"></i>');
              $templi.append('<a href="'+data.socialNetworks[i].link+'">'+data.socialNetworks[i].name+'</a>');

              $templi.click(function(){
                  alert($(this).children('a').text() + ' clicked!');
              });

              //Add the new li element to the ul
              $ul.append($templi);
          }

          $ul.insertAfter('#intro');


      });

	  	$.get('/final-project-fullstack/php/proskills.php?user=' + userName, function(data)
       { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server

		  //clear "loading" text
		  $('#skillname').empty();
		  $('#skillvalue').empty();


		  for ($x = 0; $x <= data.length; $x++)
          {
			$('#skillname').append('<li>'+data[$x].skillname+'</li>');
			$('#skillvalue ').append('<li><progress max=100 value='+data[$x].skillvalue+'></progress></li>');
          }
       });


          $.get('/final-project-fullstack/php/perskills.php?user=' + userName, function(data)
         { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server
		  //clear "loading" text
		  $('#skillnameper').empty();
		  $('#skillvalueper').empty();


		  for ( $x=0;$x <= data.length; $x++) {
			$('#skillnameper').append('<li>'+data[$x].skillname+'</li>');
			$('#skillvalueper ').append('<li><progress max=100 value='+data[$x].skillvalue+'></progress></li>');
			}
		});

         $.get('/final-project-fullstack/php/experience.php?user=' + userName, function(data)
         { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server
		  //clear "loading" text
		  $('#blueTitle').empty();
		  $('#Title').empty();
          $('#date').empty();
		  $('#paragraph').empty();


		  for ( $x=0;$x <= data.length; $x++) {
			$('#blueTitle').append('<li>'+data[$x].blueTitle+'</li>');
			$('#Title').append('<li>'+data[$x].Title+'</li>');
            $('#date').append('<li>'+data[$x].date+'</li>');
            $('#paragraph').append('<li>'+data[$x].paragraph+'</li>');
			}
		});

         $.get('/final-project-fullstack/php/education.php?user=' + userName, function(data)
         { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server
		  //clear "loading" text
		  $('#blueTitle').empty();
		  $('#Title').empty();
          $('#date').empty();
		  $('#paragraph').empty();


		  for ( $x=0;$x <= data.length; $x++) {
			$('#blueTitle').append('<li>'+data[$x].blueTitle+'</li>');
			$('#Title').append('<li>'+data[$x].Title+'</li>');
            $('#date').append('<li>'+data[$x].date+'</li>');
            $('#paragraph').append('<li>'+data[$x].paragraph+'</li>');
			}
		});

        $.get('/final-project-fullstack/php/hobbies.php?user=' + userName, function(data)
         { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server
		  //clear "loading" text
		  $('#photo').empty();
		  $('#topic').empty();


		  for ( $x=0;$x <= data.length; $x++) {
			$('#photo').append('<li>'+data[$x].photo+'</li>');
			$('#topic').append('<li>'+data[$x].topic+'</li>');

			}
		});


          $.get('/final-project-fullstack/php/language.php?user=' + userName, function(data)
         { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server
		  //clear "loading" text
		  $('#languageName').empty();
		  $('#languageValue').empty();


		  for ( $x=0;$x <= data.length; $x++) {
			$('#languageName').append('<li>'+data[$x].languageName+'</li>');
			$('#languageValue ').append('<li><progress max=100 value='+data[$x].languageValue+'></progress></li>');
			}
		});
    }

});
