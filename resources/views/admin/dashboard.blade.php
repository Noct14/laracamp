@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{$checkout->User->name}}</td>
                                        <td>{{$checkout->Camp->title}}</td>
                                        <td>{{$checkout->Camp->price}}k</td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td>
                                            <strong>{{$chekcout->payment_status}}</strong>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No camps registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
=======
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    My Camps
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <th>User</th>
                            <th>Camp</th>
                            <th>Price</th>
                            <th>Register Date</th>
                            <th>Paid Status</th>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                                <tr>
                                    <td>{{$checkout->User->name}}</td>
                                    <td>{{$checkout->Camp->title}}</td>
                                    <td>{{$checkout->Camp->price}}k</td>
                                    <td>{{$checkout->created_at->format('M d Y')}}</td>
                                    <td>
                                        <strong>{{$checkout->payment_status}}</strong>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspaan="3">No camps registered</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
@endsection