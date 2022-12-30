@component('mail::message')
<<<<<<< HEAD
# Register Camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button below.
=======
# Register Camp : {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button below
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
