<!DOCTYPE html>
<html>
<head>
    <title>Add New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">
    <h2 class="mb-4">Add Employee</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/employees" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Job Title:</label>
            <input name="job_title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Department:</label>
            <input name="department" class="form-control" required>
        </div>

        <button class="btn btn-success">Save Employee</button>
    </form>
</div>

</body>
</html>
