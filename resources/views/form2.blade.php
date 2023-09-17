<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Form2</title>
</head>

<body>
   
    <div class="container mt-5">
        <h1>Login to Form</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




        <form action="{{ route('form2_data') }}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mt-3">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="Name.." class="form-control  @error('name') is-invalid @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Email.." class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <label for="age">Age :</label>
                    <input type="number" name="age" id="age" placeholder="Age.." class="form-control @error('age') is-invalid @enderror"
                        value="{{ old('age') }}">
                    @error('age')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mt-3">
                    <label for="specialty">Specialty :</label>
                    <input type="text" name="specialty" id="specialty" placeholder="Specialty.." class="form-control @error('specialty') is-invalid @enderror"
                        value="{{ old('specialty') }}">
                    @error('specialty')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <label for="message">message :</label>
                    <textarea type="text" name="message" id="message" placeholder="message.." class="form-control">{{ old('message') }}</textarea>
                </div>
            </div>

            <div  class="col-12">
            <button class="btn btn-dark px-5 w-25" > Login <i class="fa-solid fa-right-to-bracket"></i></button>
       </div>
     </div>
        </form>
    </div>


</body>

</html>
