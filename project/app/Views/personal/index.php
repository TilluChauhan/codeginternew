<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="/insert" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name"oninput="this.value = this.value.replace(/[^A-z.  ]/g, '').replace(/(\..?)\../g, '$1');" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
	
	
	<div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="mobile" class="form-control" id="mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"placeholder="Enter email" name="mobile" required>
    </div>
	
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
