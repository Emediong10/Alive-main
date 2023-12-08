<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Chapter;
use App\Models\Application;
use Livewire\Component;

class Register extends Component
{
    public $currentStep = 1;
    public $firstname, $middlename, $lastname, $email,$dob,$gender, $phone, $chapter,$status = 1;
    public $successMsg = '', $monthly_outreach, $outreach, $outreach_experience, $christian_standard, $professional, $attended_mission, $good_standing_adventist;
    public  $will_support, $have_supported, $show_outreach=false, $show_monthly_amount=false, $monthly_support, $monthly_amount, $currency, $password, $confirm_password, $Chapter;


    public function render()
        {
            $chapters=Chapter::where('active',1)->get();
            return view('livewire.register',compact('chapters'));
        }


    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|unique:users,phone',

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
        $this->currentStep = 3;
        if($this->show_outreach==true)
        {
            $validatedData = $this->validate([
                'outreach_experience' => 'required',
                'monthly_outreach' => 'required',
                'christian_standard'=>'required',
               'attended_mission'=>'required',
                'professional'=>'required',

            ]);

        }

    }

    public function thirdStepSubmit()
    {
        $this->currentStep = 4;
        if($this->show_monthly_amount)
        {
            $validatedData = $this->validate([
                'monthly_support' => 'required',
                'monthly_amount' => 'required',
                'currency'=>'required',

            ]);
         }

        $validatedData = $this->validate
        ([

            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        //dd($this);
        $answers=[
            'monthly_outreach'=>$this->monthly_outreach,
            'outreach'=> $this->outreach,
            'outreach_experience'=> $this->outreach_experience,
             'professional'=> $this->professional,
            'attended_mission'=> $this->attended_mission,
            'good_standing_adventist'=> $this->good_standing_adventist,
            'will_support'=> $this->will_support,
          'monthly_support'=> $this->monthly_support,
            'monthly_amount'=> $this->monthly_amount,
            'currency'=> $this->currency
        ];


        $user = User::create([
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'gender'=>$this->gender,
            'dob'=>$this->dob,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'chapter_id'=>$this->chapter,
            'password' =>\Hash::make($this->password),
        ]);

        $user->assignRole('member');

        Application::create([
            'answers'=>[$answers],
            'user_id'=>$user->id,
            'member_type_id'=>null,
            'status'=>0
           ]);



        $this->successMsg = 'Thank you For filling the Form, You can now proceed to Sign in';
        session()->flash('success_message',$this->successMsg);
        $this->reset();
        $this->currentStep = 1;
    }
    /**
     * Write code on Method
     */
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
