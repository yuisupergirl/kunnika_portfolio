<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "member";

$db = mysqli_connect($db_host,$db_user,$db_password,$db_database) or die("Error - cant connect or find db");
mysqli_set_charset($db, "utf8");

// Pagination.....here is the function for the page system...(Blog and Galleri) 
function GetUrlWithPage() {

		// url ex. /eksemskolen/blog.php?
		$url = $_SERVER["PHP_SELF"] . "?";
		// get the GET parameters
		$QUERY_STRING = array();
		parse_str($_SERVER["QUERY_STRING"], $QUERY_STRING);
		// fx /eksemskolen/blog.php? Page=1 & Page=3<-- here need to remove the Page because we need only a specific page in each time 
		unset($QUERY_STRING["Page"]);

		// add the GET Parameters to the Url
		foreach($QUERY_STRING as $key => $value) {
			$url = $url . $key . "=" . $value . "&";
		}
		//now it look like this. ex /eksemskolen/blog.php?Page=
		return $url. "Page=";
}

function GetMaxPages($db, $Maxsql, $IPP) {  
	// get the max items
	$max_db = mysqli_query($db, $Maxsql);
	$max = mysqli_fetch_assoc($max_db );
	 return ceil($max["MaxItems"] / $IPP);

}

?>
