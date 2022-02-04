<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Service Base</title>
    <style>
        label {
            font-weight: 600;
            color: #555;
        }
        body{
            background: #e9ecef;
        }
        .file-bg,.file-bg:focus{
            background: #e9ecef;
            border: none !important;
            border-color: #e9ecef;
        }
    </style>
</head>
<body>
<div class="row">
@if($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </div>
@endif
</div>
    <div class="pb-5 container">
        <form action="{{url('/registration')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <h2 class="text-center py-5">User Registration</h2>
        
        <div class="row">
            <div class="col-sm-12">
                <h3>Personal Information:</h3>
            </div>
            <div class="col-sm-6 form-group">
                <label for="name-f">First Name</label>
                <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter your first name." value="{{ old('fname') }}" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="name-l">Last name</label>
                <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." value="{{ old('lname') }}" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." value="{{ old('email') }}" required >
            </div>
            <div class="col-sm-6 form-group">
                <label for="pass">Password</label>
                <input type="Password" name="password" class="form-control" id="password" placeholder="Enter your password." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="Date">Date Of Birth</label>
                <input type="Date" name="dob" class="form-control" id="Date" placeholder="" value="{{ old('dob') }}">
            </div>
            <div class="col-sm-6 form-group" >
                <label for="sex">Gender</label>
                <br>
                <label><input type="radio" name="gender" value="Male" checked>Male</label>    
                <label><input type="radio" name="gender" value="Female">Female</label>    
            </div>
            <div class="col-sm-6 form-group">
                <label for="name-l">Annual Income</label>
                <input type="text" class="form-control" name="annual_income" id="annual_income" placeholder="Annual Income" value="{{ old('annual_income') }}" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="occupation">Occupation</label>
                <select id="occupation" name="occupation" class="form-control browser-default custom-select">
                    <option value="" selected disabled>Select Occupation</option>
                    <option value="Private job">Private job</option>
                    <option value="Government Job">Government Job</option>
                    <option value="Business">Business</option>
                </select>
            </div>
            <div class="col-sm-6 form-group">
                <label for="family_type">Family Type</label>
                <select id="family_type" name="family_type" class="form-control browser-default custom-select">
                    <option value="" selected disabled>Select family type</option>
                    <option value="Joint family">Joint family</option>
                    <option value="Nuclear family">Nuclear family</option>
                </select>
            </div>
            <div class="col-sm-6 form-group">
                <label for="manglik">Manglik</label>
                <select id="manglik" name="manglik" class="form-control browser-default custom-select">
                    <option value="" selected disabled>Select Occupation</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <div class="col-sm-1 text-right form-group mt-5">
               <button class="btn btn-primary float-right">Submit</button>
            </div>
            
        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>