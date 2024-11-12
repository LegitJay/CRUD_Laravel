<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        CRUD System
        <a href="/add/user" class="btn btn-success btn-sm float-end">Add New</a>
      </div>

      @if (Session::has('success'))
        <div class="alert alert-success mt-2">{{ Session::get('success') }}</div>
      @endif
      @if (Session::has('fail'))
        <div class="alert alert-danger mt-2">{{ Session::get('fail') }}</div>
      @endif

      <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
          <thead>
            
              <th>S/N</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Registration Date</th>
              <th>Last Update</th>
              <th colspan="2">Actions</th>
            
          </thead>
          <tbody>
            @if ($all_users->count() > 0)
              @foreach ($all_users as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone_number }}</td>
                  <td>{{ $item->created_at}}</td>
                  <td>{{ $item->updated_at}}</td>
                  <td>
                    <a href="/edit/user/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                    
                    
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="7" class="text-center">No Users Found</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
