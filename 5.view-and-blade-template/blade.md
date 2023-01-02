## blade

https://laravel.com/docs/9.x/blade

{{ php inside, show variable here }}
{!! print variable but rendering html !!}
{{ 3+7}}

{{asset('')}}

{{ }} == <?= ?>

<a href='{{route('contacts.index') }}'>All</a>

@foreach ($contacts as $contact)

    @continue(if condition) == continue()
    @break(if condition) == break()

    @loop->index
    @loop->first
    @loop->even or @loop->odd

    <p>{{$contact['name']}} - {{ $contact['phone'] }}</p>
@endforeach

Pass data fro previous page to next page 

->with('contact')



abort_if(if conddition, 404);

@if
@else
@endif