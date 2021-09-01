@component('mail::message')
# Welcome to this test

![Check hability!!](/assets/images/tux.png)

@component('mail::button', ['url' => 'http://google.com'])
    Button Test
@endcomponent

Thanks, <br>
{{  config('app.name') }}
@endcomponent


