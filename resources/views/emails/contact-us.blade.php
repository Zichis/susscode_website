@component('mail::message')

# Contact Us

<h3>From</h3>
<p>{{ $senderName }}, {{ $senderEmail }}</p>

<h3>Message</h3>
<p>{{ $message }}</p>

@endcomponent
