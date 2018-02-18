
<?php
	include_once("connection.php");
	 
	
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	
	$columns = array( 
		0 =>'id',
		1 =>'name', 
		2 => 'phone',
		3 => 'email',
		4 => 'address',
		5 => 'info',

	);

	$where = $sqlTot = $sqlRec = "";

	
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( name LIKE '".$params['search']['value']."%' ";    
		$where .=" OR phone LIKE '".$params['search']['value']."%' ";

		$where .=" OR email LIKE '".$params['search']['value']."%' )";
		$where .=" OR address LIKE '".$params['search']['value']."%' )";
		$where .=" OR info LIKE '".$params['search']['value']."%' )";
	}

	// gauti visiems uzsakymams dar nepradejus paieskos
	$sql = "SELECT * FROM `uzsakymai` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//sujungti paieskos sql jei jau egzistuoja
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}


 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	$queryTot = mysqli_query($conn, $sqlTot) or die("duomenu bazes klaida:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("klaida grazinant uzsakymu duomenis");

	//prideti rezultatu eilutes ir sukurti nauja masyva
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // bendras informacijos masyvas
			);

	echo json_encode($json_data);  // rezultatai siunciami json formatu
?>
	