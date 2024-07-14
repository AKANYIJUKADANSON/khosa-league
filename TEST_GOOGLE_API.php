

<?php 
                            
      $json = file_get_contents('https://script.google.com/macros/s/AKfycbx_OVoO2VhuEPZ5zsDI1kYgEXiNg0sKQLKY6Q2mNV2TO3gMrfrnbsUUOzCqQrDxDDhcWg/exec'); //SCRIPT URL
      $obj = json_decode($json);

      if($obj){
        echo "Go ahead";
      }else{
        error_reporting();
      }
      $list = $obj->data;
    
      
      for($i=0;$i<count($list); $i++){
          $url_split[$i] = explode('/d/',$list[$i]->book_url);
          $image_id[$i] = explode('/view', $url_split[$i][1]);
          print_r($image_id[$i][0]);
       }                       
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <img src="<?php echo 'https://drive.google.com/uc?export=view&id='.$image_id[$i][0]?>" >
</body>
</html>