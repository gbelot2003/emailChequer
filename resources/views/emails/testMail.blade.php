@component('mail::message')
# Welcome, {{ $data['name'] }}<br/>

{{ $data['body'] }}

![](http://emailchecker.docksal/tester?number={{ $data['number'] }})

@component('mail::button', ['url' => 'http://google.com'])
    Button Test
@endcomponent

Thanks, <br>
{{  config('app.name') }}
@endcomponent


