@component('mail::message')

# Your request for vaccination has been received

Thank you for booking appointment.

You will go to the {{$appointment->healthCenter->name}} vaccination center tomorrow on {{$appointment->date}} to get vaccinated.

You can get further details about your appointment by logging into our website.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
Rwanda Biomedical Center
@endcomponent
