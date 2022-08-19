<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eco Search Admin</title>
</head>
<body>
<x-app-layout>

</x-app-layout>
<html lang="en">
<head>
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')

    <div class="col-12 grid-margin stretch-card" style="position: relative; right: -70px; top: 60px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Team Member Form</h4>
                <form class="forms-sample" action="{{url('/team-store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1"> Name</label>
                        <input type="text" name="member_name" class="form-control" id="member_name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="member_email" name="member_email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        Image <input type="file" name="member_image" class="btn btn-primary" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputCity1">Designation</label>
                        <input type="text" class="form-control" name="member_designation" id="member_designation" placeholder="Designation">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.adminjs')
</body>
</html>

</body>
</html>
