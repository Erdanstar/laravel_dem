@extends('layouts.app')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="leave-comment mr0">
                    <!--leave comment-->
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <h3 class="text-uppercase">My profile</h3>
                    @include('admin.layouts.errors')
                    <br>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>
                </div>
                <!--end leave comment-->
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
@endsection
