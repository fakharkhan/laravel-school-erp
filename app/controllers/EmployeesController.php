<?php

class EmployeesController extends \BaseController {

	/**
	 * Display a listing of employees
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::all();

		return View::make('employees.index', compact('employees'));
	}

	/**
	 * Show the form for creating a new employee
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.create');
	}

	/**
	 * Store a newly created employee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Employee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Employee::create($data);

		return Redirect::route('employees.index');
	}

	/**
	 * Display the specified employee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee = Employee::findOrFail($id);

		return View::make('employees.show', compact('employee'));
	}

	/**
	 * Show the form for editing the specified employee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = Employee::find($id);

		return View::make('employees.edit', compact('employee'));
	}

	/**
	 * Update the specified employee in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$employee = Employee::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Employee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$employee->update($data);

		return Redirect::route('employees.index');
	}

	/**
	 * Remove the specified employee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Employee::destroy($id);

		return Redirect::route('employees.index');
	}

}
