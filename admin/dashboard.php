<!-- dashboard code should be placed here. -->
<?php include '../includes/conn.php'; ?>
<?php include '../includes/head.php'; ?>

<body>

<!-- CONTACT US -->
<section class="p-5 bg-light">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-10">
				<form class="text-muted">
					<div class="form-group">
						<label for="name">Category:</label>
						<input type="text"class="form-control" id="name" name="category">
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" rows="3" name = "message"></textarea>
					</div>
					<button class="btn btn-outline-danger btn-block text-monospace" type="submit">Submit Message!</button>
				</form>
			</div>
			
		</div>

	</div>
</section>
	
<!-- BOOTSTRAP JAVASCRIPT CDNs -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>


