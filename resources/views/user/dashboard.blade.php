@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <section class="dashboard my-5">
=======
<section class="dashboard my-5">
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
<<<<<<< HEAD
                                    <img src="{{asset('images/item_bootcamp.png')}}" height="120" alt="">
=======
                                    <img src="{{asset('images/item_bootcamp.png') }}" height="120" alt="">
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->Camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('M d, Y')}}
                                    </p>
                                </td>
                                <td>
<<<<<<< HEAD
                                    <strong>${{$checkout->Camp->price}}k</strong>
                                </td>
                                <td>
                                    <strong>{{$checkout->payment_status}}</strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == 'waiting')
=======
                                    <strong>{{$checkout->Camp->price}}k</strong>
                                </td>
                                <td>
                                    <strong>{{$checkout->Camp->status}}</strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == "waiting")
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                                        <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay Here</a>
                                    @endif
                                </td>
                                <td>
<<<<<<< HEAD
                                    <a href="https://wa.me/08xxxxxxxx?text=Hi, saya ingin bertanya tentang kelas {{$checkout->Camp->title}}" class="btn btn-primary">
=======
                                    <a href="https://wa.me/087872611668?text=Hi, saya ingin bertanya tentang kelas {{$checkout->Camp->title}}" class="btn btn-primary">
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
<<<<<<< HEAD
                                    <h3>No Camp Registered</h3>
=======
                                    No Camp Registered
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection