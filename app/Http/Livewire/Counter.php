<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SecondApplication;
use App\Models\Chapter;

class Counter extends Component
{

public $currentStep = 4;
public $totalSteps =4;
public $firstname, $middlename, $lastname, $dob, $email, $phone, $gender,$state,$show_outreach, $local_church,$other_ministries, $chapter, $status = 1;
public  $successMSG = '', $course_study, $degrees, $occupation,$professional_abilities;
public $area_interests = [], $show_monthly_amount=false, $past_mission = [], $spiritual_gift= [], $area_interest = [], $special_talent =[], $mission_section = [];
public $monthly_amount, $currency;

public function render()
{
    $chapters=Chapter::where('active',1)->get();
    return view('livewire.counter',compact('chapters'));
}


public function firstStepSubmit()

{
$validatedData = $this->validate([

    'firstname' => 'required',
    'middlename' => 'required',
    'lastname' => 'required',
    'dob' => 'required',
    'email'=>'required|email|unique:applications,email',
    'phone'=>'required|unique:applications,phone',
    'chapter'=>'required',
    'state'=> 'required',
    'local_church' => 'required',
    'other_ministries' => 'required',
    'gender'=> 'required'
]);

$this->currentStep = 2;
}

public function skip($step)
{
    $this->currentStep = $step;
}

/**
 * Write code on Method
 */
public function secondStepSubmit()
{
    $this->currentStep = 2;

    {
        $validatedData = $this->validate([
            'course_study' => 'required',
            'degrees' => 'required',
            'occupation' => 'required',
            'professional_abilities' => 'required'

        ]);

    }
    $this->currentStep = 3;
}


public function thirdStepSubmit()
{

    $this->currentStep = 3;
 {
$validatedData = $this->validate([

    'area_interests' => 'required',
    'past_mission' => 'required',
    'spiritual_gifts' => 'required',
    'special_talent' => 'required'

]);
 }

}


  public function fourthStepSubmit()
 {
     $this->currentStep = 4;
     if($this->show_monthly_amount)
     {
         $validatedData = $this->validate([
             'monthly_support' => 'required',
             'monthly_amount' => 'required',
             'currency'=>'required'
         ]);
     }

 }

 public function submitForm()
 {
     //dd($this);
     $answers=[
         'area_interests'=>$this->area_interests,
         'past_mission'=> $this->past_mission,
         'spiritual_gifts'=> $this->spiritual_gifts,

         'monthly_support'=> $this->monthly_support,
         'monthly_amount'=> $this->monthly_amount,
         'currency'=> $this->currency
         ];


SecondApplication::create([
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'gender'=>$this->gender,
            'dob'=>$this->dob,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'chapter_id'=>$this->chapter,
             'course_study' => $this->course_study,
            'degrees' => $this->degree_recieved,
            'occupation' => $this->occupation,
           'professional_abilities'=> $this->professional_abilities,
            'answers'=>[$answers],
            'member_type_id'=>null,
            'status'=>0
            ]);


        $this->successMSG = 'Form Submitted Successfully.';
        session()->flash('success_message',$this->successMsg);
        $this->reset();
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {

    }

  }






