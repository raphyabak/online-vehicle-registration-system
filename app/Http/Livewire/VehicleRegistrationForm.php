<?php

namespace App\Http\Livewire;

use App\Models\State;
use App\Models\VehicleRegistration;
use Livewire\Component;

class VehicleRegistrationForm extends Component
{
    public $vehicle_type, $vehicle_make, $make_year, $vehicle_model, $vehicle_color, $chasis_number, $engine_number,
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
        'chasis_number' => 'required|string|max:6|unique:vehicle_registrations',
        'engine_number' => 'required|string|max:6|unique:vehicle_registrations',
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

    public function mount(){

        // $this->state_of_origin = $states;
        $this->nationality = 'Nigerian';
        $this->states =State::all();
    }

    public function updatedState(){
        $state = State::findByName($this->state);
        // dd($state->localGovernments);
        $this->lgas = $state->localGovernments;

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }


    public function registerVehicle()
    {

        $this->validate();
        VehicleRegistration::create([
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
            'user_id' => auth()->user()->id,
            'status' => 0,
        ]);
        // dd('DONEEEE');
        // $this->reset();
        notify()->success('Vehicle Registered Sucessully ⚡️');
        return redirect('/my-vehicles');

    }

    public function render()
    {
        return view('livewire.vehicle-registration-form');
    }
}
