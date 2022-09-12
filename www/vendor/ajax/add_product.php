
<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	// var_dump($_FILES);
		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$type = $_FILES['image']['type'];
			$tmp_name = $_FILES['image']['tmp_name'];

			$max_size = 1000000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg" || $extension == "png") && ($type == "image/jpeg" || $type == "image/png") && $size<=$max_size){
					$location = "../uploads/";
					// echo $tmp_name."/".$name;
					$move = move_uploaded_file($tmp_name, $location.$name);
					
					if($move){
						// echo file_get_contents("../data/products.json");
						$database = json_decode(file_get_contents("../data/products.json"), 1);
						if ($database == NULL) {
							$database = array();
							// throw new RuntimeException("Database not found");
						}
						array_push($database, array(
							"name" => $_POST['product_name'],
							"price" => (int) $_POST['price'],
							"image" => "uploads/".$name,
							"description" => $_POST['description']
						));
						file_put_contents('../data/products.json', json_encode($database));
						echo 'Add new product success';
						
					}else{
						switch ($_FILES['image']['error']) {
							case UPLOAD_ERR_OK:
								break;
							case UPLOAD_ERR_NO_FILE:
								throw new RuntimeException('No file sent.');
							case UPLOAD_ERR_INI_SIZE:
							case UPLOAD_ERR_FORM_SIZE:
								throw new RuntimeException('Exceeded filesize limit.');
							default:
								throw new RuntimeException('Unknown errors.');
						}
					}
				}else{
					echo "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				echo "Please Select a File";
			}
		} else {
			echo 'Missing files';
		}

} else {
	echo 'Not allow';
}