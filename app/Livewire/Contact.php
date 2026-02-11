<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

#[Layout('layouts.app')]
class Contact extends Component
{
  public $name, $email, $company, $message;
  public $successMessage = null;

  protected $rules = [
    'name' => 'required|min:2',
    'email' => 'required|email',
    'company' => 'nullable|string',
    'message' => 'required|min:10',
  ];

  public function submit()
  {
    $this->validate();

    // Send email
    Mail::to('info@thenextlevel.global')->send(new ContactMail(
      $this->name,
      $this->email,
      $this->company,
      $this->message
    ));

    $this->successMessage = 'Thank you for your message. We will get back to you soon!';

    // Reset form
    $this->reset(['name', 'email', 'company', 'message']);
  }

  public function render()
  {
    return view('livewire.contact.contact')->title('Contact NEXT LEVEL - Strategic Advisory Partners');
  }
}
