<?php
// $conn = mysqli_connect('localhost','root','','decora_shopping')
// or die("Can not connect database".mysqli_connect_error());
$conn = pg_connect("postgres://oaqlvsmrdcmjey:e8cbfdd3e649300de52555a46b019f5bd7a3c7fb2039b3f57c4148d78e112707@ec2-107-22-18-26.compute-1.amazonaws.com:5432/d4vd4hj48v9noq");

	if(!$conn)
	{
		die("Could not connect to database");
	}
?>