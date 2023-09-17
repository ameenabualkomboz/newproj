<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>form2</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Welcome to Form</h1>
        <form action="{{ route('ameendata') }}" method="POST">
                    @csrf

            <div class="row">
            <div class="col-md-6">
                <div class="mt-3">
                    <label for="name">Name :</label>
                    <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">

                <div class="mt-3">
                    <label for="email">Email :</label>
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control">

                </div>
            </div>
            <div class="col-md-6">

                <div class="mt-3">
                    <label for="age">Age :</label>
                    <input type="number" name="age" placeholder="age" id="age" class="form-control">
                </div>
            </div>
            <div class="col-md-6">

                <div class="mt-3">
                    <label for="phone">phone :</label>
                    <input type="number" name="phone" placeholder="phone" id="phone" class="form-control">
                </div>
            </div>
       

            <button class="btn btn-success w-25"> Send</button>
        </div>
        </form>
    </div>
</body>

</html>
