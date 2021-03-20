@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
    <div id="home">
        <div class="container-fluid admin-page">
            <div class="breadcrumb">
                <label>User</label>

            </div>

            <div class="admin-block">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       User List
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td>{{$row['user_data']['position']}}</td>
                                    <td>{{$row['user_data']['status']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
