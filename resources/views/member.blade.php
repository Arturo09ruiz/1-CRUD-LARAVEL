<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="pakainfo container">
      <h2>Laravel 5.7 CRUD Tutorial With Example</h2><br/>
      <form method="post" action="{{url('create')}}">
        @csrf
        <div class="pakainfo row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="membertype">MemberType:</label>
            <input type="text" class="form-control" name="membertype">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="department">Department:</label>
              <input type="text" class="form-control" name="department">
            </div>
          </div>
          <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="groupname">Group Name:</label>
            <input type="text" class="form-control" name="groupname">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>