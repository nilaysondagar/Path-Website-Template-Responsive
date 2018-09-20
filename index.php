<?php

/****************************************************************************
 * Author: Nilay Sondagar
 * Filename: index.php
 * Date: July 20, 2018
 * Purpose: Dynamic path. homepage (Changes in conjunction with the Chrome Extension).
 ****************************************************************************/

include "header.inc";

/*GLOBAL VARIABLES*/
$counter = 1;
$location_array = array("https://cdn.tourradar.com/s3/tour/original/2401_9c3be8.jpg", 
						"https://lonelyplanetimages.imgix.net/a/g/hi/t/1c992b6c01bfdbdb13ad3d204a59036d-victoria.jpg?sharp=10&vib=20&w=1200",
						"http://www.slate.com/content/dam/slate/articles/news_and_politics/roads/2016/04/160414_RK_Berlin.jpg.CROP.promo-xlarge2.jpg",
						"https://brightcove04pmdo-a.akamaihd.net/5104226627001/5104226627001_5244707255001_5214913279001-vs.jpg?pubId=5104226627001&videoId=5214913279001",
						"https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/HbJ1EDbHeix950qa7/france-paris-eiffel-tower-night-2_smnp-tghl_thumbnail-full01.png",
						"https://redox.com/media/1302/aucklandbanner-1920.jpg",
						"https://secureservercdn.net/427.678.godaddywp.com/wp-content/uploads/statue-of-liberty-horizontal.jpeg",
						"https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2016/08/04/103845788-_sites-default-files-images-103845788-GettyImages-155735310.1910x1000.jpg",
						"https://www.fourseasons.com/alt/img-opt/~70.1530.0,0000-248,0325-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/TFY/TFY_584_original.jpg",
						"https://cdn.europosters.eu/image/1300/wall-murals/rio-de-janeiro-i25288.jpg",
						"https://3m3y892ngk5k1mjv4e2in6jm-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/Miradouro-das-Portas-do-Sol.jpg",
						"https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/02/18/10/amsterdam-basilica-alamy.jpg");
						/*This array is for storing the background images*/	

// Cycles through the GET array to get the locations and instagram images from the Chrome Extension.
	// It uses GET and not POST so the CE can pass in the parameters and images through the URL.	
	// Look at the "popus.js" file in the CE to see how the paramters are passed into the GET array				
if(count($_GET) > 0) {
	foreach ($_GET as $location) {
		if($counter - 1 < count($_GET)/2) {
			$url = $location_array[rand(0, (count($location_array) - 1))];
			$url2 = $_GET[$counter - 1 + (count($_GET)/2)]; 

			// This prints out the place cards into the horizonally scrolling divs with a random background image and the given location
			echo '<div id="card' . $counter . '" class="placecard" onclick="window.open(\'locationpage.html\')" style="background-image: url(\'' . $url .'\');">' . $location . '</div>';
			$counter++;
		}// if
	}// foreach
	
}// if

include "footer.inc";

?>