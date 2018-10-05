<!-- memberedit.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Member - Edit Data</h2><br  />
        <form method="post" action="{{action('MemberController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="membertype">MemberType:</label>
            <input type="text" class="form-control" name="membertype" value="{{$member->membertype}}">
          </div>
        </div>
        <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="department">Department:</label>
              <input type="text" class="form-control" name="department" value="{{$member->department}}">
            </div>
          </div>
        <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="groupname">Group Name:</label>
              <input type="text" class="form-control" name="groupname" value="{{$member->groupname}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="pakainfo btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>