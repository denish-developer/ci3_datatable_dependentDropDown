<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter Dependent Dropdown Example with demo</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
</head>


<body>
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and get bellow Related City</div>
      <div class="panel-body">


            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" class="form-control" style="width:350px">
                    <option value="">--- Select State ---</option>
                    <?php
                        foreach ($states as $key => $value) {
                            echo "<option value='".$value->id."'>".$value->name."</option>";
                        }
                    ?>
                </select>
            </div>


            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="city" class="form-control" style="width:350px">
                </select>
            </div>


      </div>
    </div>
</div>


<script type="text/javascript">


    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '<?php echo base_url();?>myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>


</body>
</html>