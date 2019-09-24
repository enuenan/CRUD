<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

  </head>
  <body>
    <div class="container">
      <h1 style="color:red">Details</h1>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Fee</th>
            <th>Date of Birth</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($student as $s)
          <tr>
            <td> {{ $s -> name }} </td>
            <td> {{ $s -> email }} </td>
            <td> {{ $s -> contact }} </td>
            <td> {{ $s -> address }} </td>
            <td> {{ $s -> fee }} </td>
            <td> {{ $s -> dob }} </td>
            <td><a href="{{ URL::to('edit/'.$s -> id) }}"><button type="button" class="btn btn-primary" name="button">Edit</button></a></td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{ $s -> id }}">
                  Delete
                </button>

                <!-- The Modal -->
                <div class="modal" id="{{ $s -> id }}">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal body -->
                      <div class="modal-body">
                        Are you sure??
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <a href="{{ URL::to('delete/'.$s -> id) }}"><button type="button" class="btn btn-danger">Yes</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
</html>
