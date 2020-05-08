@component('mail::message')
# New exception occured, please take neccesary action.   

## Exception 
{{ $exception->exception->getMessage() }}

@component('mail::button', ['url' => url('/') . "/" . config('telescope.path') . "/exceptions/" . $exception->uuid])
Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
