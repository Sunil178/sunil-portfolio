<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
	<!-- <form id="myForm">
		<input type="text" name="name" id="name">
		<button type="submit" id="submit">submit</button>
		<input type="submit" value="submit">
	</form> -->

	 <form id="myForm">
        <div class="mb-3">
          <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="type your name">
        </div>
        <div class="mb-3">
          <input type="number" class="form-control" name="mobile"id="exampleFormControlInput1"  autocomplete="off" placeholder="type your mobile number (optional)">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" id="exampleFormControlInput1" autocomplete="off" placeholder="type your email">
        </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
          </div>
          <div class="text-center">
          <!-- <button type="submit" id="btn_submit" class="btn btn-primary">Submit</button> -->
          <input type="submit" name="submit">
        </div>
        </form>
	<p id="msg"></p>

	<script>
		$('#myForm').on('submit', function(e){
			e.preventDefault()
			$.ajax({
				url:'sendmail.php',
				type:'POST',
				contentType:false,
				cache:false,
				processData:false,
				data:new FormData(this),
				success:function(obj){
					alert(obj);
				}
			})
		})
	</script>
</body>
</html>