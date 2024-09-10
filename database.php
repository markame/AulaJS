<? 
$dsn = 'lvcinfo.mysql.dbaas.com.br';
$dbname = "lvcinfo";
$username = 'lvcinfo';
$password = 'M4eFfSLJ9dVGa#';

$con = mysqli_connect($dsn, $username, $password, $dbname);
	if(mysqli_connect_errno()){
		echo "Error ao conectar" .mysqli_connect_errno();
		die();
	}else
	{
		echo "Connect ok";
	}

?>
