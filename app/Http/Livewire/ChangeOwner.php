<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeOwner extends Component
{
    public $vehicle, $first_name, $middle_name, $last_name, $gender, $dob, $marital_status, $address, $religion,
    $nationality, $town, $state_of_origin, $lga, $phone, $image, $national_id, $email, $user_id, $amount, $status;

    protected $rules = [
       'first_name' => 'required',
       'last_name' => 'required',
       'email' => 'required|string|email|max:255',
       'middle_name' => ['required'],
   ];
   public function mount(){
       $this->first_name = $this->vehicle->first_name;
       $this->middle_name = $this->vehicle->middle_name;
       $this->last_name = $this->vehicle->last_name;
       $this->gender = $this->vehicle->gender;
       $this->dob = $this->vehicle->dob;
       $this->marital_status = $this->vehicle->marital_status;
       $this->address = $this->vehicle->address;
       $this->religion = $this->vehicle->religion;
       $this->nationality = $this->vehicle->nationality;
       $this->town = $this->vehicle->town;
       $this->state_of_origin = $this->vehicle->state_of_origin;
       $this->lga = $this->vehicle->lga;
       $this->phone = $this->vehicle->phone;
       $this->email = $this->vehicle->email;
       $this->national_id = $this->vehicle->national_id;
   }

   public function changeOwner(){
       $this->validate();
       $this->vehicle->update([
        'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'marital_status' => $this->marital_status,
            'address' => $this->address,
            'religion' => $this->religion,
            'nationality' => $this->nationality,
            'town' => $this->town,
            'state_of_origin' => $this->state_of_origin,
            'lga' => $this->lga,
            'phone' => $this->phone,
            'national_id' => $this->national_id,
            'email' => $this->email
       ]);
       notify()->success('Vehicle Owner Updated Sucessully ⚡️');
        return redirect('/change-vehicle-ownership');
   }

    public function render()
    {
        return view('livewire.change-owner');
    }
}
