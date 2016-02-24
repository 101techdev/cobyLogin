@extends('app')




@section('content')
    <form action="action('DatabaseController@doLogin')">
        <h3>Sign in</h3>
        <div class="add-employee">
            <label>User Name:</label>
            <input type="text" name="employee[1][name]">
            <label>Password:</label>
            <input type="text" name="employee[1][title]">
        </div>

        <a href="{{ 'login' }}" class="js-create-new-add-employee-box">Create an account.</a>

        <input type="submit">
    </form>

@stop