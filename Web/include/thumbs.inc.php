<?php
  // Diese Funktion gibt es im Original unter [url]www.codeschnipsel.net[/url]
  // Ich habe sie ein wenig modifiziert
  function mkthumb($img_src,     // Dateiname
                   $img_width  = "100",       // max. Grφίe in x-Richtung
                   $img_height = "100",       // max. Grφίe in y-Richtung
                   $folder_scr = "include/files",  // Ordner der normalen Bilder
                   $des_src    = "include/files")    // Ordner der Thumbs
  {
    // Grφίe und Typ ermitteln
    list($src_width, $src_height, $src_typ) = getimagesize($folder_scr."/".$img_src);
	if(!$src_typ) return false;
	
    // calculate new size
	  if ($src_width >= $src_height)
	  {
		$new_image_height = $src_height / $src_width * $img_width;
		$new_image_width  = $img_width;

		if ($new_image_height > $img_height)
		{
		  $new_image_width  = $new_image_width / $new_image_height * $img_height;
		  $new_image_height = $img_height;
		}
	  }
	  else
	  {
		$new_image_width  = $src_width / $src_height * $img_height;
		$new_image_height = $img_height;

		if ($new_image_width > $img_width)
		{
		  $new_image_height = $new_image_height / $new_image_width * $img_width;
		  $new_image_width  = $img_width;
		}
	  }

	 // for the case that the thumbnail would be bigger then the original picture
	 if($new_image_height > $src_height)
	  {
		$new_image_width  = $new_image_width * $src_height/$new_image_height;
		$new_image_height = $src_height;
	  }

	  if($new_image_width > $src_width)
	  {
		$new_image_height = $new_image_height * $new_image_width/$src_width;
		$new_image_width  = $src_width;
	  }  


    if($src_typ == 1)     // GIF
    {
      $image = imagecreatefromgif($folder_scr."/".$img_src);
      $new_image = imagecreate($new_image_width, $new_image_height);
      imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_image_width,$new_image_height, $src_width, $src_height);
      imagegif($new_image, $des_src."/".$img_src."_thumb", 100);
      imagedestroy($image);
      imagedestroy($new_image);
      return true;
    }
    elseif($src_typ == 2) // JPG
    {
      $image = imagecreatefromjpeg($folder_scr."/".$img_src);
      $new_image = imagecreatetruecolor($new_image_width, $new_image_height);
      imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_image_width,$new_image_height, $src_width, $src_height);
      imagejpeg($new_image, $des_src."/".$img_src."_thumb", 100);
      imagedestroy($image);
      imagedestroy($new_image);
      return true;
    }
    elseif($src_typ == 3) // PNG
    {
      $image = imagecreatefrompng($folder_scr."/".$img_src);
      $new_image = imagecreatetruecolor($new_image_width, $new_image_height);
      imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_image_width,$new_image_height, $src_width, $src_height);
      imagepng($new_image, $des_src."/".$img_src."_thumb");
      imagedestroy($image);
      imagedestroy($new_image);
      return true;
    }
    else
    {
      return false;
    }
  }
?>