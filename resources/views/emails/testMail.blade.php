@component('mail::message')
# Welcome, {{ $data['name'] }}<br/>

{{ $data['body'] }}

![](http://emailchecker.docksal/confirmation?eid={{ $data['eid'] }})

@component('mail::button', ['url' => 'http://google.com'])
    Button Test
@endcomponent

Thanks, <br>
{{  config('app.name') }}
@endcomponent


