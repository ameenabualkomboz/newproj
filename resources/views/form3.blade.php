<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <title>form 3</title>
</head>

<body>
    <div class="container my-5">
        <h1>Form 3 </h1>
        <form action="{{ route('form3_data') }}" method="POST">
            @csrf
            <div class="mt-3">
                <label for="name"> Name:</label>
                <input type="text" name="name" id="name" placeholder="Name.." class="form-control">
            </div>
            <div class="mt-3">
                <label for="email"> Email:</label>
                <input type="email" name="email" id="email" placeholder="Email.." class="form-control">
            </div>
            <div class="mt-3">
                <label for="password"> Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="mt-3">
                <label for="confirm_password"> Confirm password:</label>
                <input type="password" name="confirm_password" id="confirm_password"  placeholder="Confirm Password" class="form-control">
            </div>
            <div class="mt-3">
                <label for="dob"> Date Of Birth:</label>
                <input type="date" name="dob" id="dob" class="form-control">

            </div>
            <div class="mt-3">
                <label> Gender :</label><br>
                <label>
                    <input type="radio" name="gender" value="Male">Male
                </label><br>
                <label><input type="radio" name="gender" value="Female">Female </label><br>
            </div>

            <label> Hobbies :</label><br>
            <label>
                <input type="checkbox" name="hobbies[]" value="footbull">footbull
            </label><br>
            <label>
                <input type="checkbox" name="hobbies[]"value="basketbull">basketbull
            </label><br>
            <label><input type="checkbox" name="hobbies[]" value="swimming">swimming </label><br>
            <div class="mt-3">
                <label for="education_levels"> Education levels : </label>
                <select name="education_levels" id="education_levels" class="form-select">
                    <option>School</option>
                    <option>Dibloma</option>
                    <option>Bachelor's</option>
                    <option>Master</option>
                    <option>PhD</option>
                </select>
            </div>

            <div class="mt-3">
                <label for="bio"> Bio:</label>
                <textarea type="text" name="bio" id="bio" placeholder="Bio.." class="form-control" rows="5"></textarea>
            </div>
            {{-- <div  class="col-12">
    <button class="btn btn-dark px-5 w-25" > Login<i class="bi bi-arrow-up-right-circle-fill"></i></button>
</div> --}}
            <button class="btn btn-success px-5">login <svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                </svg> </button>

        </form>

    </div>
</body>

</html>
