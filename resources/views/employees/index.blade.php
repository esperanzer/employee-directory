<!DOCTYPE html>
<html>
<head>
    <title>Employee Directory</title>
    <!-- ✅ Add Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">
    <h1 class="mb-4 text-primary">Employee Directory</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    @if ($employees->count())
        <table class="table table-bordered table-striped">
            <thead class="table-gray">
                <tr>
                    
                    <th>ID</th>
                     <th>Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>Department</th>         
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>
    {{-- Edit button (just a link) --}}
    <a href="/employees/{{ $employee->id }}/edit"
       class="btn btn-sm btn-primary">
        Edit
    </a>

    {{-- Delete button (real form) --}}
    <form action="/employees/{{ $employee->id }}"
          method="POST"
          class="d-inline"
          onsubmit="return confirm('Delete this employee?')">
        @csrf              {{-- CSRF token --}}
        @method('DELETE') {{-- tell Laravel this is a DELETE request-(the hiden input @method('DELETE') means->(input type="hidden" name="_method" value="DELETE">--}}
        <button class="btn btn-sm btn-danger">
            Delete
        </button>
    </form>
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">No employees found.</div>
    @endif
</div>

</body>
</html>
