
<div>

<div class="container">


    <div class="row justify-content-center">

<div class="col-lg-7 col-md-10">
    <div class="content-wrap bg-light center">
        <h3 class="center">ALIVE Nigeria Membership Registration Form</h3>

      <h5> IMPORTANT!</h5> 
<p>Kindly note that this form is NOT for undergraduate students. ALIVE-Nigeria is made up of Adventist graduates and working professionals only. Before filling this form, you are required to know your top 3 spiritual gifts.</p>   
    
<p> 1. Go to  <a href="http://spiritualgiftstest.com/spiritual-gifts/">spiritualgiftstest</a> and complete the test and take note of your first 3 Spiritual gifts</p>
<p>2. Come here to register online</p>
<p>3. Await confirmation - you'll be notified within two weeks through an SMS.</p>
<p>4. If confirmed, your SMS will have your ALIVE-Nig Registration No</p>


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
                <p>Support</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-4" type="button"
                    class="btn {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">4</a>
                <p>Submission</p>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="col-md-12">
            <h3> Step 1</h3>
            <div class="form-group">
                <label for="title">First Name:</label>
                <input type="text" wire:model="firstname" class="form-control" id="firstName">
                @error('firstname') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="title">Middle Name:</label>
                <input type="text" wire:model="middlename" class="form-control" id="middleName">
                @error('middlename') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="title">last Name:</label>
                <input type="text" wire:model="lastname" class="form-control" id="lastName">
                @error('lastname') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="title">Date of Birth:</label>
                <input type="date" wire:model="dob" class="form-control" id="dob">
                @error('dob') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Phone:</label>
                <input type="text" wire:model="phone" class="form-control" id="phone" />
                @error('phone') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Email:</label>
                <input type="email" wire:model="email" class="form-control" id="email" />
                @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <p><label>Gender:</label></p>
                     <label class="radio-inline">
                    <input class="" type="radio" id="male" wire:model="gender" name="gender" value="male">
                    Male</label>
                    <label class="radio-inline">
                    <input class="" type="radio" id="female" wire:model="gender" name="gender" value="female">
                    Female</label>
                @error('gender') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

             <div class="form-group">
                    <label for="detail">Select Your Chapter:</label>
                    <select name="chapter" class="form-control" wire:model="chapter">
                    <option value="">Select Your Chapter</option>
                      @foreach($chapters as $chapter)
                      <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                      @endforeach
                    </select>
                    @error('chapter') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
					<label for="">State of Resisdence:</label>
					<textarea class="form-control" id="state" name="state" class="form-control" wire:model="state" placeholder="City/Town/State of Resisdence" rows="2" cols="3"></textarea required>
                    @error('state') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>
<br><br>
                <div class="form-group">
					<label for="">LOCAL CHURCH NAME AND LOCATION : </label>
					<textarea class="form-control" wire:model="local_church" class="form-control" name="local_church" placeholder="Example S.D.A Church Minna, Niger local_church" rows="2" cols="3" required></textarea>
                    @error('local_church') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>
                <br><br>

                <div class="form-group">
					<label for="other_ministries">MEMBERSHIP - OTHER MINISTRIES :</label>
					<textarea class="form-control"  name="other_ministries" class="form-control" wire:model="other_ministries" rows="2" cols="3" placeholder="Please mention other SDA Church Evangelistic driven ministries you are also a member of" required>
                     </textarea>
                     @error('local_church') <span class="error" style="color: red;">{{ $message }}</span> @enderror
				</div>
              <br><br>
              
                <div class="form-group">
                    <label for="detail">Select Your Chapter:</label>
                    <select name="chapter" class="form-control" wire:model="chapter">
                    <option value="">Select Your Chapter</option>
                    @if (!empty($chapter))
                      @foreach($chapters as $chapter)
                      <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                      @endforeach
                      @endif
                    </select>
                    @error('chapter') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>

            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
        </div>
   
    
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <h3> Eligibility Questions</h3>
        <div class="form-group">
            <label for="form-control">COURSE(S) OF STUDY:<small class="text-danger">*</small></label>
				<textarea class="form-control" wire:model="course_study" name="course_study" rows="2" cols="3" placeholder="Course(s) of study" required></textarea>
                @error('course_study') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </div>
<br><br>
            <div class="form-group">
            <label for="">DEGREE(S) RECEIVED:<small class="text-danger">*</small></label>
					<textarea class="form-control"  wire:model="degrees" name="degrees" rows="2" cols="3" placeholder="Degree(s) received" required></textarea>
                    @error('degrees') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <br><br>
            
            <div class="form-group">
            <label for="occupation">OCCUPATION<small class="text-danger">*</small></label>
					<textarea class="form-control"  wire:model="occupation" name="occupation" rows="2" cols="3" placeholder="What do you do for a living?" required></textarea>
          @error('occupation') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <br><br>
            
            <div class="form-group">
            <label for="professional_abilities">PROFESSIONAL ABILITIES<small class="text-danger">*</small></label>
					<textarea class="form-control"  wire:model="professional_abilities"  name="professional_abilities" rows="2" cols="3" placeholder="What are some skills you use to make a living?" required></textarea>
                    @error('professional_abilities') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <br><br>

            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
    

    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
  
 

        <div class="col-md-12">
           
            <h3> Step 3</h3>
            
            
            
            
            <div>
            <p>Which of the past ALIVE-Nigeria missions have you attended? </p>
          <div class="form-group">
                <label for="">Ugbomoro - Delta</label>
                <input type="checkbox" wire:model="past_mission"  value="Ugbomoro_delta">
            </div>
            <div class="form-group">
                <label for="">Otulu - Delta</label>
                <input type="checkbox" wire:model="past_mission" name="otulu_delta" value="otulu_delta">
            </div>

            <div class="form-group">
                <label for="">Kabba - Benue</label>
                <input type="checkbox" wire:model="past_mission" name="kabba_benue" value="kabba_benue">
            </div>

        <div class="form-group">      
            <label for="">Abuochichie - Akwa-Ibom</label>
         <input type="checkbox" wire:model="past_mission" name="abuochichie_akwa_ibom" value="abuochichie_akwa_ibom">
      </div>

      <div class="form-group">
                <label for="">Ekosin - Ondo</label>
                <input type="checkbox" wire:model="past_mission" name="ekosin_ondo" value="ekosin_ondo">
      </div>

      <div class="form-group">
                <label for="">Iwuo Achang - Akwa-Ibom</label>
                <input type="checkbox" wire:model="past_mission" name="iwuoachang_akwaibom" value="iwuoachang_akwaibom">
      </div>
      <div class="form-group">
                <label for="">Dukpa - Abuja</label>
                <input type="checkbox" wire:model="past_mission" name="dukpa_abuja" value="dukpa_abuja">
      </div>

      <div class="form-group">
                <label for="">Eka Uruk - Akwa-Ibom</label>
                <input type="checkbox" wire:model="past_mission" name="eka_uruk_akwa_ibom" value="eka_uruk_akwa_ibom">
      </div>

      <div class="form-group">
                <label for="">Rofo - Lagos</label>
                <input type="checkbox" wire:model="past_mission" name="Rofo_Lagos" value="Rofo_Lagos">
      </div>
      <div class="form-group">
                <label for="">Unical - Cross Rivers</label>
                <input type="checkbox" wire:model="past_mission" name="Unical_Cross_Rivers" value="Unical_Cross_Rivers">
      </div>
      <div class="form-group">
                <label for="">Otukpa - Benue</label>
                <input type="checkbox" wire:model="past_mission" name="Otukpa_Benue" value="Otukpa_Benue">
      </div>
      <div class="form-group">
                <label for="">Ugbolu - Delta</label>
                <input type="checkbox" wire:model="past_mission" name="Ugbolu_Delta" value="Ugbolu_Delta">
      </div>
      <div class="form-group">
                <label for="">OAU Campus Mission - Osun</label>
                <input type="checkbox" wire:model="past_mission" name="OAU" value="OAU">
      </div>
      <div class="form-group">
                <label for="">Satellite Town - Lagos</label>
                <input type="checkbox" wire:model="past_mission" name="Satellite_Town_Lagos" value="Satellite_Town_Lagos">
      </div>
      <div class="form-group">
                <label for="">Wuya - Jos</label>
                <input type="checkbox" wire:model="past_mission" name="Wuya_Jos" value="Wuya_Jos">
      </div>
      <div class="form-group">
                <label for="">Miya - Bauchi</label>
                <input type="checkbox" wire:model="past_mission" name="Miya_Bauchi" value="Miya_Bauchi">
      </div>
      <div class="form-group">
                <label for="">Ribah - Kebbi</label>
                <input type="checkbox" wire:model="past_mission" name="Ribah_Kebbi" value="Ribah_Kebbi">
      </div>
      <div class="form-group">
                <label for="">Okporo - Imo</label>
                <input type="checkbox" wire:model="past_mission" name="Okporo_Imo" value="Okporo_Imo">
      </div>
      <div class="form-group">
                <label for="">Uso - Ondo</label>
                <input type="checkbox" wire:model="past_mission" name="Uso_Ondo" value="Uso_Ondo">
      </div>

      <div class="form-group">
                <label for="">Onicha-Olona - Delta</label>
                <input type="checkbox" wire:model="past_mission" name="Onicha_Olona_Delta" value="Onicha_Olona_Delta">
      </div>
      <div class="form-group">
                <label for="">Owode-Egba - Ogun</label>
                <input type="checkbox" wire:model="past_mission" name="Owode_Egba_Ogun" value="Owode_Egba_Ogun">
      </div>
      <div class="form-group">
            <label for= "">Uyanga - Cross River</label>
                <input type="checkbox" wire:model="past_mission" name="Uyanga_Cross_River" value="Uyanga_Cross_River">
      </div>
      <div class="form-group">
                <label for="">Egume - Kogi</label>
                <input type="checkbox" wire:model="past_mission" name="Egume_Kogi" value="Egume_Kogi">
      </div>
       <div class="form-group">
                <label for="">Affa - Enugu</label>
                <input type="checkbox" wire:model="past_mission" name="Affa_Enugu" value="Affa_Enugu">
      </div>
      <div class="form-group">
                <label for="">Eke - Enugu</label>
                <input type="checkbox" wire:model="past_mission" name="Eke_Enugu" value="Eke_Enugu">
      </div>
      <div class="form-group">
                <label for="">Sheria - Kogi</label>
                <input type="checkbox" wire:model="past_mission" name="Sheria_Kogi" value="Sheria_Kogi">
      </div>
      <div class="form-group">
                <label for="">Mkpat-Enin - Akwa-Ibomf</label>
                <input type="checkbox" wire:model="past_mission" name="MkpatEnin_Akwa_Ibom" value="MkpatEnin_Akwa_Ibom">
      </div>
      <div class="form-group">
                <label for="">Jere - Kaduna</label>
                <input type="checkbox" wire:model="past_mission" name="Jere_Kaduna" value="Jere_Kaduna">
      </div>
      <div class="form-group">
                <label for="">Kateri - Kaduna</label>
                <input type="checkbox" wire:model="past_mission" name="Kateri_Kaduna" value="Kateri_Kaduna">
      </div>
      <div class="form-group">
                <label for="">Ikot-Ntuen - Akwa Ibom</label>
                <input type="checkbox" wire:model="past_mission" name="IkotNtuen_AkwaIbom" value="IkotNtuen_AkwaIbom">
      </div>
      <div class="form-group">
                <label for="">Ejesi - Osun</label>
                <input type="checkbox" wire:model="past_mission" name="Ejesi_Osun" value="Ejesi_Osun">
      </div>
      <div class="form-group">
                <label for="Orerokpe_Delta">Orerokpe- Delta</label>
                <input type="checkbox" wire:model="past_mission" name="Orerokpe_Delta" value="Orerokpe_Delta">
      </div>

      <div class="form-group">
                <label for="">NONE</label>
                <input type="checkbox" wire:model="past_mission" name="NONE" value="NONE">
      </div>

   
</div>
<br><br>


<div>
    <h4>AREA of INTEREST In MINISTRY</h4>
    <p>Where do you prefer to volunteer for service?  (You can choose more than 1 option)</p>
    

   
       <div class="form-group">
                <label for="Logistics">Logistics</label>
                <input type="checkbox" wire:model="area_interest" name="Logistics" value="Logistics">
      </div>
      <div class="form-group">
                <label for="Reporting">Reporting</label>
                <input type="checkbox" wire:model="area_interest" name="Reporting" value="Reporting">
      </div>
      <div class="form-group">
                <label for="Technical">Technical</label>
                <input type="checkbox" wire:model="area_interest" name="Technical" value="Technical">
      </div>
      <div class="form-group">
                <label for="Platform">Platform</label>
                <input type="checkbox" wire:model="area_interest" name="Platform" value="Platform">
      </div>

      <div class="form-group">
                <label for="Choir">Choir</label>
                <input type="checkbox" wire:model="area_interest" name="Choir" value="Choir">
      </div>
      <div class="form-group">
                <label for="IT_Tasks">IT Tasks</label>
                <input type="checkbox" wire:model="area_interest" name="IT_Tasks" value="IT_Tasks">
      </div>
      <div class="form-group">
                <label for="Website_development">Website development and updating</label>
                <input type="checkbox" wire:model="area_interest" name="Website_development" value="Website_development">
      </div>
      <div class="form-group">
                <label for="Medical_Missionary_Assistant">Medical Missionary Assistant</label>
                <input type="checkbox" wire:model="area_interest" name="Medical_Missionary_Assistant" value="Medical_Missionary_Assistant">
      </div>
      <div class="form-group">
                <label for="Prayer_Group">Prayer Group</label>
                <input type="checkbox" wire:model="area_interest" name="Prayer_Group" value="Prayer_Group">
      </div>

      <div class="form-group">
                <label for="Administration">Administration</label>
                <input type="checkbox" wire:model="area_interest" name="Administration" value="Administration">
      </div>
      <div class="form-group">
                <label for="design_and_Printing">literature design_and_Printing</label>
                <input type="checkbox" wire:model="area_interest" name="design_and_Printing" value="design_and_Printing">
      </div>
      <div class="form-group">
                <label for="Promotion">Promotion</label>
                <input type="checkbox" wire:model="area_interest" name="Promotion" value="Promotion">
      </div>
      <div class="form-group">
                <label for="Graphics_design"> Computer Graphics and design</label>
                <input type="checkbox" wire:model="area_interest" name="Graphics_design" value="Graphics_design">
      </div>
      <div class="form-group">
        <label for="Media/Digital_Evangelism">Social Media/ Digital Evangelism</label>
        <input type="checkbox" wire:model="area_interest" name="Media/Digital_Evangelism" value="Media/Digital_Evangelism">
      </div>
      <div class="form-group">
        <label for="Kitchen_Cooking">Kitchen - Cooking</label>
        <input type="checkbox" wire:model="area_interest" name="Kitchen_Cooking" value="Kitchen_Cooking">
      </div>
      <div class="form-group">
        <label for="other">Other :</label>
        <input type="checkbox" wire:model="area_interest" name="other" value="other">
      </div>
    
    </div>
    <br><br>
    
    <div>
    <h5>TOP 3 SPIRITUAL GIFTS</h5>
    <p>What gifts have you noticed the Lord has endowed you with?  (You can do the exercise  by clicking <a href="http://spiritualgiftstest.com/spiritual-gifts">here</a> and know your top 3 gifts)</p>
        
   
            
      
        <div class="form-group">
        <label for="">Word of wisdom</label>
        <input type="checkbox" wire:model="spiritual_gift" name="Word_of_wisdom" value="Word_of_wisdom">
      </div>
    <div class="form-group">
      <label for="">Word of knowledge</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Word_of_knowledge" value="Word_of_knowledge">
    </div>
   
    <div class="form-group">
      <label for="">Faith</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Faith" value="Faith">
    </div>
    <div class="form-group">
      <label for="">Healing</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Healing" value="Healing">
    </div>

    <div class="form-group">
      <label for="Working_of_miracles">Working of miracles</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Working_of_miracles" value="Working_of_miracles">
    </div>
    <div class="form-group">
      <label for="Prophecy">Prophecy</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Prophecy" value="Prophecy">
    </div>
    <div class="form-group">
      <label for="Discerning_of_spirits">Discerning of spirits</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Discerning_of_spirits" value="Discerning_of_spirits">
    </div>
    <div class="form-group">
      <label for="Word_of_wisdom">Word of wisdom</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Word_of_wisdom" value="Word_of_wisdom">
    </div>
    <div class="form-group">
      <label for="Word_of_wisdom">Word of wisdom</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Word_of_wisdom" value="Word_of_wisdom">
    </div>
    <div class="form-group">
      <label for="Divers_kinds_of_tongues">Divers kinds of tongues</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Divers_kinds_of_tongues" value="Divers_kinds_of_tongues">
    </div>
    <div class="form-group">
      <label for="Interpretation_of_tongues">Interpretation of tongues</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Interpretation_of_tongues" value="Interpretation_of_tongues">
    </div>
    <div class="form-group">
      <label for="Apostles">Apostles</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Apostles" value="Apostles">
    </div>
    <div class="form-group">
      <label for="Teachersm">Teachers</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Teachersm" value="Teachersm">
    </div>
    <div class="form-group">
      <label for="Helps">Helps</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Helps" value="Helps">
    </div>
    <div class="form-group">
      <label for="Governments">Governments</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Governments" value="Governments">
    </div>
    <div class="form-group">
      <label for="Ministry_Service">Ministry/Service</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Ministry_Service" value="Ministry_Service">
    </div>
    <div class="form-group">
      <label for="Exhortation">Exhortation</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Exhortation" value="Exhortation">
    </div>
    <div class="form-group">
      <label for="Giving">Giving</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Giving" value="Giving">
    </div>
    <div class="form-group">
      <label for="Administration">Administration</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Administration" value="Administration">
    </div>
    <div class="form-group">
      <label for="Mercy">Mercy</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Mercy" value="Mercy">
    </div>
    <div class="form-group">
      <label for="Evangelists">Evangelists</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Evangelists" value="Evangelists">
    </div>
    <div class="form-group">
      <label for="Pastors">Pastors</label>
    <input type="checkbox" wire:model="spiritual_gift" name="Pastors" value="Pastors">
    </div>
   
</div>
<br><br>


<div>

<h5>TALENTS/ SPECIAL SKILLS/ HOBBIESS</h5>
 <p>Kindly enter your talents or special skills the Lord has blessed you with</p>


    
  <div class="form-group">
     <label for="">Reading</label>
    <input type="checkbox" wire:model="special_talent" name="Reading" value="Reading" >
    </div>
 <div class="form-group">
      <label for="">Researching</label>
    <input type="checkbox" wire:model="special_talent" name="Researching" value="Researching" >
    </div>
    <div class="form-group">
      <label for="">Cooking</label>
    <input type="checkbox" wire:model="special_talent" name="Cooking" value="Cooking" >
    </div>
    <div class="form-group">
      <label for="">Driving</label>
    <input type="checkbox" wire:model="special_talent" name="Driving" value="Driving" >
    </div>
    <div class="form-group">
      <label for="">Selling/Marketing</label>
    <input type="checkbox" wire:model="special_talent" name="Selling_Marketing" value="Selling_Marketing" >
    </div>
    <div class="form-group">
      <label for="">Programming</label>
    <input type="checkbox" wire:model="special_talent" name="Programming" value="Programming" >
    </div>
    <div class="form-group">
      <label for="">Touring/Traveling</label>
    <input type="checkbox" wire:model="special_talent" name="Touring_Traveling" value="Touring_Traveling" >
    </div>
    <div class="form-group">
      <label for="">Preaching</label>
    <input type="checkbox" wire:model="special_talent" name="Preaching" value="Preaching" >
    </div>
    <div class="form-group">
      <label for="">Gardening/Farming</label>
    <input type="checkbox" wire:model="special_talent" name="Gardening_Farming" value="Gardening_Farming" >
    </div>
    <div class="form-group">
      <label for="">Sewing</label>
    <input type="checkbox" wire:model="special_talent" name="Sewing" value="Sewing" >
    </div>
    <div class="form-group">
      <label for="">Sports - Walking, Exercise, Running, Tennis, Bicycling, Swimming, etc</label>
    <input type="checkbox" wire:model="special_talent" name="Sports" value="Sports" >
    </div>
    <div class="form-group">
      <label for="">Animal Care</label>
    <input type="checkbox" wire:model="special_talent" name="Animal_Care" value="Animal_Care" >
    </div>
    <div class="form-group">
      <label for="">Socializing - Community work</label>
    <input type="checkbox" wire:model="special_talent" name="Socializing" value="Socializing" >
    </div>
    <div class="form-group">
      <label for="">Hand Drawing / Painting</label>
    <input type="checkbox" wire:model="special_talent" name="Hand_Drawing" value="Hand_Drawing" >
    </div>
    <div class="form-group">
      <label for="">Reading</label>
    <input type="checkbox" wire:model="special_talent" name="Reading" value="Reading" >
    </div>

</div>






            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                wire:click="thirdStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>

        </div>
      
    </div>


    <div class="row setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">

        <div class="col-md-12">
            <h3> Final Submission</h3>


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


            <div class="col-12 bottommargin-sm">
                <h5>MONTHLY DUES:</h5>
                <label><p>To support the work of the ministry, monthly dues for Financial Partners are N10,000 and above. Do you
                pledge to give your faithful support for the continuity of the work of the ministry
                </p></label>
                <div class="form-check">
                    <input class="yes" type="radio" id="yes" name="monthly_dues" value="yes">
                    <label class="yes" for="yes">YES</label>
                </div>
                <div class="form-check">
                    <input class="no" type="radio" id="no" name="monthly_dues" value="no">
                    <label class="no" for="no">NO</label>
                </div>
            </div>

            <h5>BANKS - For Dues: </h5><br>
            <h4><p>You can pay:<br>
            ALIVE-NG <br>
            GT Bank Account No: 0239650736</p></h4>
            <h4>DECLARATION </h4> <br>
            <p>By clicking the submit button, I declare that if recognized as a member, I will be committed to the duties to
            which I am assigned. I will be of good behavior and abide by the rules of ALIVE Nigeria</p>

            <button class="btn btn-danger nextBtn btn-lg" type="button" wire:click="back(3)">Back</button>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Submit!</button>
        </div>
    </div>
</div>
</div>
</div>
</div>

