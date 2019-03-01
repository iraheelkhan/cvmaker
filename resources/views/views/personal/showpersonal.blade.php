@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    @if(Session::has('message'))
                        <p class="alert alert-success">
                            {!! Session::get('message') !!}
                        </p>
                    @endif
                    <strong>Personal</strong>
                    <small> Details</small>
                    <a href="{{route('PersonalEdit')}}" class="btn btn-info">Edit Personal </a>
                </div>

                <div class="card-body card-block">
                    <table border="1">
                        <tr>
                            <td style="width: 200px">Name</td>
                            <td style="width: 200px">{{$data->first_name}} {{$data->last_name}}</td>
                        </tr>
                        <tr>
                            <td>Objective</td>
                            <td>{{$data->objective}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$data->address_1}}</td>
                        </tr>
                        <tr>
                            <td>Address2</td>
                            <td>{{$data->address_2}}</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>{{$data->city_name}}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>{{$data->country}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone </td>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <td>Age </td>
                            <td>{{$data->age}}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth </td>
                            <td>{{$data->date_of_birth}}</td>
                        </tr>
                        <tr>
                            <td>Webiste </td>
                            <td>{{$data->website}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection