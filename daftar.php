<?php
		include "dbcon.php";

		$name = $_POST['name'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$kel = $_POST['kel'];
		$cont = $_FILES["fileToUpload"]["name"];

		/*upload*/
		$target_dir = "filedaftar/";
		$temp = explode(".",$_FILES["fileToUpload"]["name"]);
		$newfilename = $nim . '.' .end($temp);
		$target_file = $target_dir . $newfilename;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$uploadOk = 1;
		/*if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}*/

		if($imageFileType != "zip") {
		   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		        /*save database*/
		    	$qrCreate = "
		    		INSERT INTO  pendaftaran (
						name,
						nim,
						email,
						phone,
						kelompok,
						file
						)
						VALUES ('".$name."','".$nim."', '".$email."', '".$phone."', '".$kel."', '".$newfilename."')
		    	";
		    	$result = mysql_query($qrCreate);
		    	?>
		    		<script type="text/javascript">
		    			alert("Terima kasih <?php echo $name?>, tunggu pengumuman selanjutnya ya ;)");
		    		</script>
		    	<?PHP
		    	header("Location: http://localhost:1234/rpl/");
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		       // header("Location: index");
		    }
		}
?>