<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSCS CRUD IMPLEMENTATION</title>
</head>
<body>

    <h1>BSCS CRUD</h1>

    
    <h1>Users</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       
            <tr>
                
                <td>
                    <a href="" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class=" "></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
        
    </tbody>
</table>
    
    <div class="container mt-4">
        @yield('content')

    </div>




</body>
</html>

