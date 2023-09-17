<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h1>bisac infromation</h1>
        <form action="{{ route('form1_data') }}" method="POST" >
            @csrf
            <div>
            <label>Name :</label>
              <input type="text" name="name" placeholder="Name" class="form-control">
            </div>

            <div>
              <label>Age :</label>
              <input type="number" name="age" placeholder="age" class="form-control">

            </div>
            <button class="btn btn-success"> Send</button>
    </form>
    </div>
</body>
</html>