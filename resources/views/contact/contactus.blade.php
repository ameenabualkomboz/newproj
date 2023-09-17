<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>

</head>
<body>
    <div class="container mt-3">
        <h1>Contact Us</h1>
        <form action="{{ route('contactdata') }}" method="POST">
        @csrf

       <div class="row">
        <div class="col-md-6">
            <div class="mt-3">
                <label for="name"> Name :</label>
                <input type="text" id="name" placeholder="Name.." name="name" class="form-control  @error('name')
                is-invalid
            @enderror" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-3">
                <label for="email"> Email :</label>
                <input type="email" id="email" placeholder="Eamil.." name="email" class="form-control @error('email')
                is-invalid
            @enderror" value="{{ old('email') }}">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-3">
                <label for="password"> Password :</label>
                <input type="password" id="password" name="password" placeholder="Password .." class="form-control @error('name')
                is-invalid
            @enderror">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-3">
                <label for="password-confirmation"> Confirm Password :</label>
                <input type="password" id="password-confirmation" name="password-confirmation" placeholder="Confirm Password .."class="form-control @error('password-confirmation')
                is-invalid
            @enderror">
                @error('password-confirmation')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-3">
                <label for="phone"> Phone :</label>
                <input type="number" id="phone" name="phone" placeholder="Phone .." class="form-control @error('name')
                is-invalid
            @enderror" value="{{ old('phone') }}">
                @error('phone')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="mt-3">
                <label > Gender :</label><br>
                <label>
                     <input @checked(old('gender')=='male') type="radio" name="gender" value="male" >Male 
                </label>
                <br>
                <label>
                    <input @checked(old('gender')=='Female') type="radio" name="gender" value="Female">Female 
                </label>
                <br>
          @error('gender')
          <small class="text-danger">{{ $message }}</small>
          @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="mt-3">
                <label for="hobbies"> Hobbies :</label><br>
                <label ><input  type="checkbox"  name="hobbies[]" value="Footbull"
                    @checked(in_array('Footbull', old('hobbies')??[]))
                    >Footbull 
                </label><br>
                <label ><input  type="checkbox"  name="hobbies[]"value="Basketbull"
                    @checked(in_array('Basketbull', old('hobbies',[])))
                    >Basketbull 
                </label><br>
                <label ><input  type="checkbox"  name="hobbies[]"value="Swimming"
                    @checked(in_array('Swimming', old('hobbies',[])))
                    >Swimming 
                </label><br>
                @error('hobbies')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mt-3">
                <label for="levels">Levels :</label>
                <select name="levles" id="levels" class="form-select">
                    <option value="level 1">level 1</option>
                    <option value="level 2">level 2</option>
                    <option value="level 3"> level 3</option>
                    <option value="level 4">level 4</option>
                </select>
                @error('levels')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
           </div>
           </div>

           <div class="mt-3">
            <label for="bio"> Bio:</label>
            <textarea type="text" name="bio" id="bio" placeholder="Bio.." class="form-control @error('bio')
            is-invalid
        @enderror"  rows="5">{{ old('bio') }} </textarea>
    @error('bio')
     <small class="invalid-feedback">{{ $message }}</small>   
    @enderror
        </div>
           <button class="btn btn-success w-25">Send</button>


       </div>
        </form>
    </div>
</body>
</html>