<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;

class EditDetails extends Component
{
    public $vehicle, $vehicle_type, $vehicle_make, $make_year, $vehicle_model, $vehicle_color, $chasis_number, $engine_number,
    $date_of_purchase, $first_name, $middle_name, $last_name, $gender, $dob, $marital_status, $address, $religion,
    $nationality, $town, $state, $lga, $phone, $image, $national_id, $category, $email, $user_id, $amount, $status;
    public $states = [], $lgas = [];

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|string|email|max:255',
        'middle_name' => ['required'],
        'vehicle_make' => 'required',
        'make_year' => 'required',
        'vehicle_model' => 'required',
        'vehicle_color' => 'required',
        'chasis_number' => 'required|string|max:6',
        'engine_number' => 'required|string|max:6',
        'date_of_purchase' => 'required|date',
        'gender' => 'required',
        'dob' => 'required',
        'marital_status' => 'required',
        'address' => 'required',
        'religion' => 'required',
        'nationality' => 'required',
        'town' => 'required',
        'state' => 'required',
        'lga' => 'required',
        'phone' => 'required',
        'national_id' => 'required|string|max:11',
        'category' => 'required',
    ];

    public function mount()
    {
        $this->vehicle_type = $this->vehicle->vehicle_type;
        $this->vehicle_make = $this->vehicle->vehicle_make;
        $this->make_year = $this->vehicle->make_year;
        $this->vehicle_model = $this->vehicle->vehicle_model;
        $this->chasis_number = $this->vehicle->chasis_number;
        $this->engine_number = $this->vehicle->engine_number;
        $this->date_of_purchase = $this->vehicle->date_of_purchase;
        $this->category = $this->vehicle->category;
        $this->vehicle_color = $this->vehicle->vehicle_color;
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
        $this->state = $this->vehicle->state_of_origin;
        $this->lga = $this->vehicle->lga;
        $this->phone = $this->vehicle->phone;
        $this->email = $this->vehicle->email;
        $this->national_id = $this->vehicle->national_id;
        $this->nationality = $this->vehicle->nationality;
        $this->states = State::all();
        $state = State::findByName($this->state);
        // dd($state->localGovernments);
        $this->lgas = $state->localGovernments;
    }

    public function updatedState()
    {
        $state = State::findByName($this->state);
        // dd($state->localGovernments);
        $this->lgas = $state->localGovernments;

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function editDetails(){

        $this->validate();
        $this->vehicle->update([
            'vehicle_type' => $this->vehicle_type,
            'vehicle_make' => $this->vehicle_make,
            'make_year' => $this->make_year,
            'vehicle_model' => $this->vehicle_model,
            'vehicle_color' => $this->vehicle_color,
            'chasis_number' => $this->chasis_number,
            'engine_number' => $this->engine_number,
            'date_of_purchase' => $this->date_of_purchase,
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
            'state_of_origin' => $this->state,
            'lga' => $this->lga,
            'phone' => $this->phone,
            'national_id' => $this->national_id,
            'category' => $this->category,
            'email' => $this->email,
            // 'user_id' => auth()->user()->id,
            'status' => 0,
        ]);
        notify()->success('Vehicle Details Updated Sucessully ⚡️');
        return redirect('/my-vehicles');
    }

    public function render()
    {
        return view('livewire.edit-details');
    }
}
