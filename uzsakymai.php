<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uzsakymai</title>
<link rel="stylesheet" id="font-awesome-style-css" href="bootstrap.min.css" type="text/css" media="all">
<script type="text/javascript" charset="utf8" src="jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css"/>
	 
<script type="text/javascript" src="jquery.dataTables.min.js"></script>

	
	<div class="container">
      <div class="">
        <h1>Užsakymai</h1>
        <div class="">
		<table id="uzsakymu_laukas" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Užsakymo numeris</th>
                <th>Vardas</th>
				        <th>Telefonas</th>
                <th>El.Pastas</th>
                <th>Adresas</th>
                <th>Papildoma informacija</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>Užsakymo numeris</th>
                <th>Vardas</th>
				        <th>Telefonas</th>
                <th>El.Pastas</th>
                <th>Adresas</th>
                <th>Papildoma informacija</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#uzsakymu_laukas').DataTable({
				 "bProcessing": true,
         "serverSide": true,
         "ajax":{
            url :"response.php", // json saltinis
            type: "post",  // metodas
            error: function(){
              $("#uzsakymu_laukas_apdirbimas").css("display","none");
            }
          }
        });   
});
</script>
