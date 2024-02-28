<x-filament::page>
    @php
        $user_id = auth()->user()->id;
        $details = App\Models\Details::where('user_id',$user_id)->first();
    @endphp
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex flex-col sm:flex-row items-center mb-8">
            <div class="relative">
                {{-- @if (isset($details->photo))
                    <img src="{{ url('my-profile-icon-png-24.jpg') }}" alt="Profile Picture"
                        class="rounded-full w-32 h-32 object-cover mr-4 sm:mr-8">
                @else
                    <img src="" alt="Profile Picture"
                        class="rounded-full w-32 h-32 object-cover mr-4 sm:mr-8">
                @endif --}}
            

            </div>
            @if (isset($details))
            <dl class="grid grid-cols-1 sm:grid-cols-3 gap-x-8 gap-y-8">
<style>
.input-field {
    width: 100%;
    padding: 10px;
    border: 6px solid #ccc;
    border-radius: 10px;
    
    font-size: 14px;
    box-sizing: border-box;
    margin-top: 5px;
   margin-right:10px;
     margin: 10px auto;
}
     @media only screen and (max-width: 600px) {
    .input-field{
        max-width: 100%;
         font-size: 5vw;
    }
}
</style>
            <div class= "input-field">
                <div>
                    <dt class="text-gray-500 font-medium ">Fullname</dt>
                    <dd class="text-gray-900 font-semibold, input-field">{{ $details->user->name }}</dd>
                </div> 
              
                <div>
                    <dt class="text-gray-500 font-medium">Course of study</dt>
                    <dd class="text-gray-900 font-semibold , input-field">{{ $details->course_of_study }}</dd>
                </div>
                 </div>
             <div class= "input-field">
                <div>
                    <dt class="text-gray-500 font-medium">Degree</dt>
                    <dd class="text-gray-900 font-semibold , input-field">{{ $details->degree }}</dd>
                </div>
               
                  <div>
                    <dt class="text-gray-500 font-medium">Occupation</dt>
                    <dd class="text-gray-900 font-semibold , input-field">{{ $details->occupation }}</dd>
                </div>
                </div>
            
             <div class="input-field">
                <div>
                    <dt class="text-gray-500 font-medium">Professional Abilities</dt>
                    <dd class="text-gray-900 font-semibold , input-field">{{ $details->professional_abilities }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 font-medium">Email address</dt>
                    <dd class="text-gray-900 font-semibold , input-field">{{ $details->user->email }}</dd>
                </div>

                </div>
                {{-- <div>
                    <dt class="text-gray-500 font-medium">Phone Number</dt>
                    <dd class="text-gray-900 font-semibold">{{ $user->phone }}</dd>
                </div> --}}
                {{-- <div>
                    <dt class="text-gray-500 font-medium">Driver's details issue date</dt>
                    <dd class="text-gray-900 font-semibold">
                        @if (isset($details))
                            {{ $details->driver_details_issue_date->format('jS F Y') }}
                        @else
                            Not Available
                        @endif
                    </dd>
                </div> --}}
                {{-- <div>
                    <dt class="text-gray-500 font-medium">Driver's details expire date</dt>
                    <dd class="text-gray-900 font-semibold">
                        @if (isset($details))
                            {{ $details->driver_details_expiry_date->format('jS F Y') }}
                        @else
                            Not Available
                        @endif
                    </dd>
                </div>
                <div>
                    <dt class="text-gray-500 font-medium">Driver's details Picture</dt>
                    <dd class="text-gray-900 font-semibold">
                        @if (isset($details))
                            <img src="{{ url('storage/' . $details->driver_details_picture) }}"
                                alt="Driver's details Picture" style="width: 300px; height:150px; border-radius:9px"
                                class="object-cover mr-4 sm:mr-8">
                        @else
                            Not uploaded yet
                        @endif
                    </dd>
                </div> --}}
            </dl>
            @else
            <div style="color:black">
                You are yet to update your Profile
            </div>
            @endif
        </div>
    </div>




</x-filament::page>
