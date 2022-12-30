@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
<<<<<<< HEAD
Your transaction has been confirmed, now you can enjoy the benefits of <b>{{$checkout->Camp->title}}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
=======
Your Transaction has been confirmed, now you can enjoy the benefits of <b>{{$checkout->Camp->title}}</b> camp.

@component('mail::button', ['url' => route('dashboard')])
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
<<<<<<< HEAD
=======

>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
