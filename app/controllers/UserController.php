<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'username', 'password');
        $validation = Validator::make($input, User::$rules);

        if ($validation->fails())
        {
        	return Redirect::route('user.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
        }


        User::create($input);
        return Redirect::route('post.index');
	}


	public function internalLogin()
	{
		$input = Input::only('email', 'password');

		if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
		{
		    return Redirect::route('post.index');
		}

		return Redirect::route('user.login');
	}

	public function login()
	{
		return View::make('user.login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('post.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
