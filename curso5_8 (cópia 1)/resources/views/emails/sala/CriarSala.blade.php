@component('mail::message')
# Introduction

Você criou uma sala "{{$data['nomeSala']}}".

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
