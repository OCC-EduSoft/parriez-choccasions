<!DOCTYPE html>
<html>
<head>
	<title>Custom Faqs</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Write your faqs below...</h1>
<div class="row container-fluid">
<div class="col-md-6">
	<form method="POST" id="faqform">
		<textarea id="question" rows="2" column="10" name="faqs" class="form-control" placeholder="ask your quesions here.."></textarea>
		<input type="submit" name="submit" class="btn btn-primary mt-4">
	</form>
</div>
</div>
<script>
	$("#faqform").on('submit',function(e){

        // loader();
        
        $.ajax({
            url: './data.php',
            type: 'POST',
            dataType: 'json',
            data: {
                type: "uploadfaqs",
                question: $("#question").val()
            },
            success: function(data) {
                // $.unblockUI();
                
                if(data['success'] == 1){
                    console.log('data uploded successfully!');
                }
            },
        });    
        
        return false;
        
    });
</script>
</body>
</html>