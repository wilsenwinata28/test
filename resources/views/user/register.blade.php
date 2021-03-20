@extends('layout.main')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        <div class="card-body">
                            <form class="input-group-md form-horizontal" method="post" action="{{route('register')}}">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                                    </div>
                                @endif

                                @if (session('status_success'))
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status_success') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <input type="submit" class="btn btn-primary" value="Sign Up">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endSection
