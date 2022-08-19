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
    <div class="table-responsive" style="position: relative; right: -150px; top: 60px;">
        <table class="table">
            <thead>
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Designation </th>
                <th> Actions </th>
            </tr>
            </thead>
            <tbody>

            @foreach($teams as $team)
                <tr>
                    <td> {{$team->member_name}} </td>
                    <td> {{$team->member_email}} </td>
                    <td> {{$team->member_designation}} </td>
                    <td>
                        <a href="{{url('/teams-delete',$team->team_id)}}" class="badge badge-outline-danger">Delete</a>
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
