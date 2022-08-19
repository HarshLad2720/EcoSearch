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
    <div class="table-responsive" style="position: relative; top: 60px;">
        <table class="table">
            <thead>
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Country </th>
                <th> State </th>
                <th> City </th>
                <th> Mobile No </th>
                <th> Zip Code </th>
                <th> Actions </th>
            </tr>
            </thead>
            <tbody>

            @foreach($candidates as $candidate)
                <tr>
                    <td> {{$candidate->candidate_name}} </td>
                    <td> {{$candidate->candidate_email}} </td>
                    <td> {{$candidate->country}} </td>
                    <td> {{$candidate->state}} </td>
                    <td> {{$candidate->city}} </td>
                    <td> {{$candidate->mobile_no}} </td>
                    <td> {{$candidate->zip_code}} </td>
                    <td>
                        <a href="{{url('/candidate-delete',$candidate->candidate_id)}}" class="badge badge-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

@include('admin.adminjs')
</body>
</html>

</body>
</html>
