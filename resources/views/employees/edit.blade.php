<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
<div class="container">
    <h2 class="mb-4">Edit Employee</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/employees/{{ $employee->id }}" method="POST">
        {{-- <form action="{{ route('employees.update', $employee->id) }}" method="POST"> --}}

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input name="name" value="{{ old('name',$employee->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email',$employee->email) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Job Title</label>
            <input name="job_title" value="{{ old('job_title',$employee->job_title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Department</label>
            <input name="department" value="{{ old('department',$employee->department) }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/employees" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
