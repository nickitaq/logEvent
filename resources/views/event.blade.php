
@php
 json_encode($events)
@endphp
@foreach($events as $event)

<div>{{$event->user->name}}</div>
<div>{{$event->created_at}}</div>
<div>{{$event->updated_at}}</div>
@endforeach