@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                      <span>  @if (Route::has('login'))
                            <div class="top-left links">
                                <a href="{{url('logout/admin')}}">Logout</a>
                            </div>
                            @endif
                        </span>
                    <div class="card-header">Dashboard</div>

                   <div class="card-body">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   {{--  @if(session()->has('data') && session('data')['logout'])
                     {{session_unset()}}    
                     {{setcookie('laravel_session', "", -1, "/")}}
                      @endif --}}
                        Hi boss!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection