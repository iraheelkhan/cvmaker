@extends('layouts.firstuser')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Personal</strong>
                    <small> Details</small>
                </div>

                <form action="{{ route('FirstPersonalStore')}}" method="post">
                    {{csrf_field()}}
                <div class="card-body card-block">
                    @if ($errors->has('user_id'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>Please Edit your Fields from Dashboard</li>
                        </ul>
                    </div>
                    
                    @elseif ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="form-group">
                        <input type="hidden" id="user_id" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="firstname" class=" form-control-label">First Name</label>
                        <input type="text" id="firstname" placeholder="Enter your first name" class="form-control" name="firstname" value="{{old('firstname')}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class=" form-control-label">Last Name</label>
                        <input type="text" id="lastname" placeholder="Enter your last name" class="form-control" name="lastname" value="{{old('lastname')}}">
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Address</label>
                        <input type="text" id="address" placeholder="Enter you address" class="form-control" name="address" value="{{old('address')}}">
                    </div>
                    <div class="form-group">
                        <label for="address2" class=" form-control-label">Secondary Address</label>
                        <input type="text" id="address2" placeholder="Enter you secondary address" class="form-control" name="address2" value="{{old('address2')}}">
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">City</label>
                                <input type="text" id="city" placeholder="Enter your city" class="form-control" name="city" value="{{old('city')}}">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="postal-code" class=" form-control-label">Postal Code</label>
                                <input type="text" id="postal-code" placeholder="Postal Code" class="form-control" name="postalcode" value="{{old('postalcode')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Country</label>
                        <input type="text" id="country" placeholder="Country name" class="form-control" name="country" value="{{old('country')}}">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone</label>
                        <input type="text" id="phone" placeholder="phone number" class="form-control" name="phone" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label for="dob" class=" form-control-label">Date of Birth</label>
                        <input type="date" id="dob" class="form-control" name="dob" value="{{old('dob')}}">
                    </div>
                    <div class="form-group">
                        <label for="website" class=" form-control-label">website</label>
                        <input type="text" id="website" placeholder="www.cvmaker.com.pk" class="form-control" name="website" value="{{old('website')}}">
                    </div>

                    <div class="form-group">
                        <label for="objective" class=" form-control-label">Objective</label>
                        <textarea id="objective" name="objective" cols="10" rows="5" class="form-control">{{old('objective')}}"
                        </textarea> 
                    </div>  
                    <div class="form-group">
                        <label for="picture" class=" form-control-label">Picture</label>
                        <input type="file" name="picture">
                    </div>  
                    <div class="form-group">
                        <input class="form-control btn btn-primary" type="submit" name="submit">
                    </div>  
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection