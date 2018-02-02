@extends('layouts.loginmaster')
@section('title')
        Snipesigns -  Login 
@endsection

@section('content')

<form action="{{ route('checklogin') }}" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title"> <img src="{{ URL::to('public/admin/images/logo.png') }}" alt="Snipesigns" width="200"/></h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="text" placeholder="Username" name="username" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">
        <input type="hidden" value="{{ Session::token() }}" name="_token"/>
        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>
@endsection