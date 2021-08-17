<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>
<body>
    <div class="container w-50">
        <h4>Member Resigration</h4>
        <form method="POST" action="{{route('reg.member')}}">
            @csrf
        <div class="d-flex">
            <div class="form-group w-50 mr-1">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="email">email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="add">address</label>
            <textarea class="form-control" name="" id="" cols="30" rows="5" ></textarea>
        </div>
        <div class="d-flex">
            <div class="form-group w-50 mr-1">
                <label for="ph">phone</label>
                <input type="text" id="ph" name="phone" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="fee">Fee</label>
                <input type="number" id="fee" name="fee" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="dis">District</label>
            <select name="district" id="dis" class="form-control">
                <option value="dhaka">Dhaka</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="naogoan">Naogaon</option>
                <option value="rangpur">Rangpur</option>
            </select>
        </div>
        <div class="d-flex">
            <div class="form-group w-50 mr-1">
                <label for="nid">NID</label>
                <input type="file" id="nid" name="nid" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="photo">photo</label>
                <input type="file" id="photo" name="photo" class="form-control">
            </div>
        </div>
        <div class="d-flex">
            <div class="form-group w-50 mr-1">
                <label for="pass">password</label>
                <input type="password" id="pass" name="password" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="re-pass">password</label>
                <input type="password" id="re-pass" name="rePassword" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
