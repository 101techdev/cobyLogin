@extends('app')




@section('content')


    <form action="{{ action('DatabaseController@doLogin') }}" method="post">
        <h3>Sign in</h3>
        <div class="add-employee">
          <tr>

            <td>
                <label>Name:</label>
                <input type="text" name="name" title="name">
            </td>
            <td>
                <label>E-Mail:</label>
                <input type="email" name="email" title="email">

            </td>
              <td>
                  <label>Password:</label>
                  <input type="password" name="password" title="password">

              </td>

          </tr>
        </div>

        <a href="{{ 'login' }}" class="js-create-new-add-employee-box">Create an account.</a>

        <input type="submit">
    </form>

@stop