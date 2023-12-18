<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Chapter;
use App\Models\Application;
use Livewire\Component;

class Register extends Component
{
    public $chapters,$user;
    public $currentStep = 1;
    public $firstname, $middlename, $lastname, $email,$dob,$gender, $phone, $chapter,$status = 1;
    public $successMsg = '', $monthly_outreach, $outreach, $outreach_experience, $christian_standard, $professional, $attended_mission, $good_standing_adventist;
    public  $will_support, $have_supported, $show_outreach=false, $show_monthly_amount=false, $monthly_support, $monthly_amount, $currency, $password, $confirm_password, $Chapter;


    public function render()
    {
        $this->chapters = Chapter::where('active',1)->get();
        return view('livewire.register');
    }


    public function firstStepSubmit()
    {
         $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'chapter' => 'required',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|max:11|unique:users,phone',
         ]);
        //  dd($this->phone);
         $this->user = User::create([
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'gender'=>$this->gender,
            'dob'=>$this->dob,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'chapter_id'=>$this->chapter,
            'password' =>\Hash::make($this->password)
            
        ]);

        $this->successMsg = "Saved";
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
        $this->validate([
            'monthly_outreach' => 'required',
         ]);
         
        if($this->monthly_outreach == 'yes')
        {
              $this->validate([
                'christian_standard'=>'required',
                'attended_mission'=>'required',
                'professional'=>'required',
                'will_support'=>'required',

            ]);

            $answers=[
                'monthly_outreach'=>$this->monthly_outreach,
                // 'outreach'=> $this->outreach,
                // 'outreach_experience'=> $this->outreach_experience,
                'professional'=> $this->professional,
                'attended_mission'=> $this->attended_mission,
                // 'good_standing_adventist'=> $this->good_standing_adventist,
                'will_support'=> $this->will_support,
                'monthly_support'=> $this->monthly_support,
                // 'monthly_amount'=> $this->monthly_amount,
                // 'currency'=> $this->currency
            ];

        //    dd(json_encode($answers));

            Application::create([
                'answers'=>json_encode($answers),
                'user_id'=>3,
                'member_type_id'=>null,
                'status'=>0
               ]);
               

        }

        $this->successMsg = "Saved";
        $this->currentStep = 3;

    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'monthly_support' => 'required',
        ]);

        if($this->monthly_support == 'yes')
        {
             $this->validate([
                 'monthly_amount' => 'required',
                'currency'=>'required',
             ]);
         }
        
        $this->validate
        ([ 
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

          User::where('id',3)->update([
             'password' =>\Hash::make($this->password),
        ]);

        // $this->user->assignRole('member');
        $this->successMsg = 'Thank you For filling the Form, You can now proceed to Sign in';
        $this->currentStep = 4;
        // $this->reset();

    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
     
        // session()->flash('success_message',$this->successMsg);
       
        
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
