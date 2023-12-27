<x-filament::page class="filament-dashboard-page">
    @php
        $licence = App\Models\Details::where('user_id',auth()->user()->id)->first();
        $user = auth()->user();
    @endphp
    @if ($user->hasRole(['member','volunteer','financial']))

    {{$user->name}}

    @if(isset($licence))
    <!--If licence is yet to be submitted -->
        @if(is_null($licence->is_approved))
            <div>
           <div class="text-center p-4 rounded" style="background-color: rgb(236, 131, 131); color:white; font-size:22px">
                <a href="{{ url('admin/update-profile') }}">
                    Click here to update your Details
                    </a> 

                </div>
            </div>
            <!--If licence is declined -->
            @elseif ($licence->is_approved == 2)
            <div class="text-center p-4 rounded" style="background-color: rgb(255, 86, 86); color:white; font-size:22px">
                <a href="{{ url('admin/update-profile') }}">
                    Your submitted details is declined.. click here to resubmit
                    </a>

                </div>
            @elseif ($licence->is_approved == 0)
            <!--If licence is been submittedz -->
            {{-- <div class="text-center p-4 rounded" style="background-color: rgb(43, 98, 55); color:white; font-size:22px">
                <a>
                    Your details has been submitted...kindly wait for the approval
                </a>
            </div> --}}
        @endif
    @else
 <h5 style="font-size:22px; font-bold" class="center"> IMPORTANT!</h5> 
   <div >
<p> If you are unsure of your spiritual gifts, click below to complete the Spiritual Gifts test.
  Take note of your first 3 Spiritual gifts.
 </div>
<div class="text-center p-4 rounded" style="background-color:rgb(255, 0, 0); color:white; font-size:22px"><a href="http://spiritualgiftstest.com/spiritual-gifts/">Click here to take Your Spiritual Gift Test</a></div> </p>
<p>Return here to complete the registration  process.</p>
{{-- <p>4. Now Click below to update your details</p> --}}
        <div class="text-center p-4 rounded" style="background-color: rgb(236, 131, 131); color:white; font-size:22px;">
            <a href="{{ url('admin/update-profile') }}">
           Now you can click here to update your Details
            </a>

        </div>
    @endif
    @endif

@livewire('notifications')
<x-filament::widgets
    :widgets="$this->getWidgets()"
    :columns="$this->getColumns()"
/>

</x-filament::page>
