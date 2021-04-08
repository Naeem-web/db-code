<?php


	$servername="localhost";
	$username="root";
	$passward="";
	$database="harry";

	$conn = mysqli_connect($servername,$username,$passward,$database);
		echo "connection was successful<br>";
			
			$sql="INSERT INTO `phptrip`( `name`, `dest`) VALUES ('naeem','pakistan')";
			$result = mysqli_query($conn, $sql);

				if($result){
					   		 echo "The db was created successfully!<br>";
							}
				else{
					    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
						}

?>