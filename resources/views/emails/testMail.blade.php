@component('mail::message')
# Welcome, {{ $data['name'] }}<br/>

{{ $data['body'] }}

![](/assets/images/tux.png)

@component('mail::button', ['url' => 'http://google.com'])
    Button Test
@endcomponent

Thanks, <br>
{{  config('app.name') }}
@endcomponent


