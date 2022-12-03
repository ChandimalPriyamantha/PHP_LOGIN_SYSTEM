<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form class="border shadow p-3 rounded">
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="userName">
            </div>

            <div class="mb-3">
                <label for="passWord" class="form-label">Password</label>
                <input type="password" class="form-control" id="passWord">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>