@component('mail::message')
# {{ __('Hello!') }}

{{ __('Your :app account logged in from a new device.', ['app' => config('app.name')]) }}

> **{{ __('Account:') }}** {{ $account->email }}<br/>
> **{{ __('Time:') }}** {{ $time->toCookieString() }}<br/>
> **{{ __('IP Address:') }}** {{ $ipAddress }}<br/>
> **{{ __('Browser:') }}** {{ $browser }}<br/>
@if ($location && $location['default'] === false)
> **{{ __('Location:') }}** {{ $location['city'] ?? __('Unknown City') }}, {{ $location['state'] ?? __('Unknown State') }}
@endif

{{ __('If this was you, you can ignore this alert. If you suspect any suspicious activity on your account, please change your password.') }}

{{ __('Regards,') }}<br/>
{{ config('app.name') }}
@endcomponent
