<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>
    <div class="container">
      <div class="col-5">
      <div class="form-sec">
        <h2>Contact form</h2>

       <form method="post" action="{{ URL::to('store') }}">
         {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
          </div>

          <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
          </div>

          <div class="form-group">
            <label for="contact">Phone No:</label>
            <input type="number" class="form-control" id="contact" placeholder="Enter Phone no." name="contact">
          </div>

          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address." name="address">
          </div>

          <div class="form-group">
            <label for="fee">Fee:</label>
            <input type="number" class="form-control" id="fee" placeholder="Enter Fee." name="fee">
          </div>

          <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob"  name="dob">
          </div>

          <button type="submit" class="btn btn-default btn-danger">Submit</button>
        </form>
        </div>
      </div>
      </div>


      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
