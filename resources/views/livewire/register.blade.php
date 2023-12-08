
 <div>

	<div class="container">


		<div class="row justify-content-center">

    <div class="col-lg-7 col-md-10">
        <div class="content-wrap bg-light">
            <h4 class="center">ALIVE Nigeria Membership Registration Form</h4>
         
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="multi-wizard-step">
                    <a href="#step-1" type="button"
                        class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                    <p>BIO Date</p>
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-2" type="button"
                        class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                    <p>Eligibility Questions</p>
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-3" type="button"
                        class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                        disabled="disabled">3</a>
                    <p>Final submission</p>
                </div>
                
            </div>
            </div>

            @if(!empty($successMsg))
                <div class="alert alert-success">
                    {{ $successMsg }}
                </div>
                @endif
                @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
                @elseif (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
                @endif
            </div>
      
        <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
            <div class="col-md-12">
                <h3> Step 1</h3>
               <div class="form-group">
                    <label for="title">First Name:</label>
                    <input type="text" wire:model="firstname" class="form-control" id="firstName">
                    @error('firstname') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">Middle Name:</label>
                    <input type="text" wire:model="middlename" class="form-control" id="middleName">
                    @error('middlename') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">last Name:</label>
                    <input type="text" wire:model="lastname" class="form-control" id="lastName">
                    @error('lastname') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">Date of Birth:</label>
                    <input type="date" wire:model="dob" class="form-control" id="dob">
                    @error('dob') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Phone:</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone" />
                    @error('phone') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Email:</label>
                    <input type="email" wire:model="email" class="form-control" id="email" />
                    @error('email') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <p><label>Gender:</label></p>
                         <label class="radio-inline">
                        <input class="" type="radio" id="male" wire:model="gender" name="gender" value="male">
                        Male</label>
                        <label class="radio-inline">
                        <input class="" type="radio" id="female" wire:model="gender" name="gender" value="female">
                        Female</label>
                    @error('gender') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="detail">Select Your Chapter:</label>
                    <select name="chapter" class="form-control" wire:model="chapter">
                    <option value="">Select Your Chapter</option>
                      @foreach($chapters as $chapter)
                      <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                      @endforeach
                    </select>
                    @error('chapter') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>

              
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                    type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
            <div class="col-md-12">
                <h3> Eligibility Questions</h3>
                <div class="form-group">
                    <p>I personally do active outreach monthly (not just church work):</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="monthly_outreach" wire:model="monthly_outreach" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class=""  name="monthly_outreach" wire:model="monthly_outreach" value="No">No
                      </label>
                    @error('monthly_outreach') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I strive to live out our high Christian standard as taught by the Bible and SOP:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="christian_standard" wire:model="christian_standard" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="christian_standard" wire:model="christian_standard" value="No">No
                      </label>
                      @error('christian_standard') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I am a graduate or a Professional:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="professional" wire:model="professional" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="professional" wire:model="professional" value="No">No
                      </label>
                      @error('graduate') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>


                <div class="form-group">
                    <p>I have attended an ALIVE mission at least once:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="attended_mission" wire:model="attended_mission" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="attended_mission" wire:model="attended_mission" value="No">No
                      </label>
                      @error('attended_mission') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>


                <div class="form-group">
                    <p> I desire to support ALIVE-Nigeria ministry with at least monthly</p>
                    <select class="form-select" wire:model="will_support" id="will_support">
                        <option>1k - 5k</option>
                        <option>6k - 9k</option>
                         <option>10k above</option>
                        <option></option>
                    </select>
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group">
                    <p>Do you intend to support the ministry of ALIVE Nigeria on a monthly basis?:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" wire:click="$set('show_monthly_amount',true)" wire:model="monthly_support" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" wire:model="monthly_support" value="No">No
                      </label>
                      @error('monthly_support') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>
                @if($show_monthly_amount)
                <div class="form-group">
                <label for="">Specify Amount you intend to Support Alive Nigeria with</label>
                <input type="number" placeholder="Specify Amount in Naira" class="form-control" wire:model="monthly_amount" required></textarea>
                @error('monthly_amount') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="">Currency</label>
                    <select class="form-control" name="currency" wire:model="currency" required>
                        <option value="">Select Currency</option>
                        <option value="NGN">Naira</option>
                        <option value="USD">United States Dollars</option>
                    </select>
                @error('currency') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>
                @endif
                <br>
               
                  <div>
                    <label for="password">Create Password:</label>
                    <input type="password" id="password" wire:model="password" class="form-control" placeholder="Create a password">
                    @error('password') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div> <br>

                <div>
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirm" wire:model="confirm_password" class="form-control" placeholder="Confirm your password">
                    @error('confirm_password') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div> <br>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Submit!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>

            </div>
        </div>

                </div>
        </div>
    </div>
</div>
  


