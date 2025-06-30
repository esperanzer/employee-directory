<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee; //import model


class EmployeeController extends Controller
{
    public function index()
    {
      $employees = Employee::all(); //fetch all employees
      return view('employees.index', compact('employees'));
    }
    
    public function create()
    { // Show the form to user
        return view('employees.create');
    }
    //handles form submission
    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required',
        'email' =>'required|email|unique:employees,email',
        'job_title'=>'required',
        'department'=>'required',
      ]);
    //Create a new employee record in the database using the validated data
    Employee::create($validated);
    // Redirect or respond after successful creation
    return redirect('/employees')->with('success', 'Employee created successfully!');
}
  public function edit(Employee $employee)
  {
    return view('employees.edit', compact('employee'));
  }

  public function update(Request $request, Employee $employee)
  {
  $validated= $request->validate([
    'name' =>'required',
    'email' =>'required|email|unique:employees,email,' . $employee->id,
    'job_title' => 'required',
    'department' => 'required',

  ]);
  $employee->update($validated);
    return redirect('/employees')->with('success', 'Employee updated');

}
public function destroy(Employee $employee)
{
  $employee->delete();
  return redirect('/employees')->with('success', 'Employee deleted');
}
  

}
