<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $contact;
    public $about;
    public $successMessage;
    protected $rules = [
        'name' => 'required|regex:/^[a-zA-Z ]+$/',
        'email' => 'required|email',
        'message' => 'required|min:7',
    ];
    protected $messages = [
        'name.required' => 'What should I call you? Maybe a pet name?',
        'name.regex' => 'Your name feels weird.. try using an \'earth name\'',
        'email.required' => 'C\'mon! I gotta contact you somewhere, right?.',
        'email.email' => 'Hmm.. seems incorrect! May be you misspelled fullstop? (.)',
        'message.required' => 'Write Something. Maybe a nice quote?',
        'message.min' => 'Just a few more letters now...',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();

        $contact = new Contact;
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->resetForm();
        return $this->successMessage = 'Your query has been recorded successfully. You may receive email from our team. Thank You';
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        $about = About::whereId(1)->first();
        return view('livewire.contact-form');
    }
}
