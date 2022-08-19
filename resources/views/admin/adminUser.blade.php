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
                                <th> User Type </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->usertype}} </td>
                                    @if($user->usertype == config('constants.admin_user.user'))
                                    <td>
                                        <a href="{{url('/user-delete',$user->id)}}" class="badge badge-outline-danger">Delete</a>
                                    </td>
                                    @else
                                        <td>
                                            <div class="badge badge-outline-success">Not Allowed</div>
                                        </td>
                                    @endif
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
