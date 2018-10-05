<!-- memberindex.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page - Laravel 5.7 CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <h2>Formula1 Race</h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>MemberType</th>
        <th>Department</th>
        <th>Group Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($members as $member)
      <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['membertype']}}</td>
        <td>{{$member['department']}}</td>
        <td>{{$member['groupname']}}</td>

        <td><a href="{{action('MemberController@edit', $member['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MemberController@destroy', $member['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="pakainfo btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>