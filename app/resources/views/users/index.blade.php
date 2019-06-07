@extends('layouts.index')

{{--{!! dump($users) !!}--}}

@section('content')
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Salary</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $users as $user)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->salary }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', ['user' => $user->id]) }}">More</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection