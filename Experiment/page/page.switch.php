<?php 

switch($_GET['page']){
	
	case "manageGallery":
		$main->add("<h1>Manage Gallery</h1>");
		$main->add($gallery->getAlbums());
		break;
		
	case "viewAlbum";	
		$main->add("<h1>View Album</h1>");
		break;
		
	case "newAlbum":
		$main->add("<h1>Create Album</h1>");
		
		if(isset($_POST['createAlbum'])){
			
			$album = $_POST['album'];
			$description = $_POST['description'];			
	
			$dupeCheck = $gallery->checkForDupes("album", "Album_Name", $album);			
							
			if(strlen($album) <= 0 || strlen($album) > 255) {
				$main->add("<br /><span class='error'>Error: </span>Album name does not meet length requirements.<br />");
				$main->add("An album name must be between 1 and 255 characters long.<br /><br />");
				$main->add($gallery->createAlbumForm() );
			}
			else{
				if($dupeCheck == 1){	
					$main->add("<span class='success'>Success! </span>The album: ". $album . " was created successfully");	
					$gallery->createAlbum($album, $description);
				}
				else{
					$main->add("<span class='error'>Error: </span>The album: ".$album ." failed. An album with that name exists already.<br /> Please try another name.");
					$main->add($gallery->createAlbumForm() );
				}	
			}
		}
		else{
			$main->add($gallery->createAlbumForm($con));
		}
		
		break;
			
		
			
	default:
		$main->add("<h1>Slick Gallery 1.0</h1>");
		break;
		
		

}




?>