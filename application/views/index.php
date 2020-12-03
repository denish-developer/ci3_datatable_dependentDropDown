<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter 3 Datatables Ajax Example</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<h2>Codeigniter 3 Datatables Ajax Example</h2>


	<table id="item-list" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>


		</tbody>
	</table>
</div>


</body>


<script type="text/javascript">
$(document).ready(function() {
    $('#item-list').DataTable({
        "ajax": {
            url : "<?php echo base_url();?>get_items",
            type : 'GET'
        },
    });
});
</script>


</html>