<?php

namespace App\Filament\Pages;

use App\Models\Details;
use Filament\Pages\Page;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;

class UpdateProfile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.update-profile';

    public $course_of_study;
    public $professional_abilities;
    public $past_missions;
    public $area_of_interest;
    public $spiritual_gift;
    public $skills;
    public $occupation;
    public $degree;
    public $past_mission;

    public function mount(): void
    {
        $user = auth()->user()->id;
        $this->user_id = $user;
    }

    protected static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    protected function getFormSchema(): array
    {
        return [
            Card::make()->schema([

                TextInput::make('course_of_study')
                ->label('Course of study')
                ->required(),
                TextInput::make('degree')
                ->label('Enter your degree')
                ->required(),
                TextInput::make('occupation')
                ->label('Occupation')
                ->required(),
                TextInput::make('professional_abilities')
                ->label('Course of study')
                ->required(),
                Select::make('past_mission')
                ->multiple()
                    ->options([

                        'Ugbomoro_delta' => 'Ugbomoro - Delta',
                        'otulu_delta' => 'Otulu - Delta',
                        'kabba_benue' => 'Kabba - Benue',
                        'abuochichie_akwa_ibom' => 'Abuochichie - Akwa-Ibom',
                        'ekosin_ondo' => 'Ekosin - Ondo',
                        'iwuoachang_akwaibom' => 'Iwuo Achang - Akwa-Ibom',
                        'dukpa_abuja' => 'Dukpa - Abuja',
                        'eka_uruk_akwa_ibom' => 'Eka Uruk - Akwa-Ibom',
                        'Rofo_Lagos' => 'Rofo - Lagos',
                        'Unical_Cross_River' => 'Unical - Cross River',
                        'Otukpa_Benue' => 'Otukpa - Benue',
                        'Ugbolu_Delta' => 'Ugbolu - Delta',
                        'OAU' => 'OAU Campus Mission - Osun',
                        'Satellite_Town_Lagos' => 'Satellite Town - Lagos',
                        'Wuya_Jos' => 'Wuya - Jos',
                        'Miya_Bauchi' => 'Miya - Bauchi',
                        'Ribah_Kebbi' => 'Ribah - Kebbi',
                        'Okporo_ImoOkporo_Imo' => 'Okporo - Imo',
                        'Uso_Ondo' => 'Uso - Ondo',
                        'Onicha_Olona_Delta' => 'Onicha-Olona - Delta',
                        'Owode_Egba_Ogun' => 'Owode-Egba - Ogun',
                        'Uyanga_Cross_River' => 'Uyanga - Cross River',
                        'Egume_Kogi' => 'Egume - Kogi',
                        'Affa_Enugu' => 'Affa - Enugu',
                        'Eke_Enugu' => 'Eke - Enugu',
                        'Sheria_Kogi' => 'Sheria - Kogi',
                        'MkpatEnin_Akwa_Ibom' => 'Mkpat-Enin - Akwa-Ibom',
                        'Jere_Kaduna' => 'Jere - Kaduna',
                        'Kateri_Kaduna' => 'Kateri - Kaduna',
                        'IkotNtuen_AkwaIbom' => 'Ikot-Ntuen - Akwa Ibom',
                        'Ejesi_Osun' => 'Ejesi - Osun',
                        'Orerokpe_Delta' => 'Orerokpe- Delta',
                        'none' => 'None'

                    ]),
                Select::make('area_of_interest')
                ->label('AREA of INTEREST In MINISTRY (You can choose more than 1 option)')
                ->multiple()
                ->options([
                        'logistics' => 'Logistics',
                        'Reporting' => 'Reporting',
                        'Technical' => 'Technical',
                        'Platform' => 'Platform',
                        'Choir' => 'Choir',
                        'IT_Tasks' => 'IT Tasks',
                        'Website_development' => 'Website development and updating',
                        'Medical_Missionary_Assistant' => 'Medical Missionary Assistant',
                        'Prayer_Group' => 'Prayer Group',
                        'Administration' => 'Administration',
                        'literature_design_and_Printing' => 'Literature design and Printing',
                        'Promotion' => 'Promotion',
                        'Graphics_design' => 'Computer Graphics and design',
                        'Media_Digital_Evangelism' => 'Social Media/Digital Evangelism',
                        'Kitchen_Cooking' => 'Kitchen - Cooking',
                        'Other' => 'Other'
                    ]),
                Select::make('spiritual_gift')->label('What gifts have you noticed the Lord has endowed you with? Your top 3 ')
                ->multiple()
               ->options([
                        'Word_of_wisdom' => 'Word of wisdom',
                        'Word_of_knowledge' => 'Word of knowledge',
                        'Faith' => 'Faith',
                        'Healing' => 'Healing',
                        'Working_of_miracles' => 'Working of miracles',
                        'Prophecy' => 'Prophecy',
                        'Discerning_of_spirits' => 'Discerning of spirits',
                        'Divers kinds of tongues' => 'Divers_kinds_of_tongues',
                        'Interpretation_of_tongues' => 'Interpretation of tongues',
                        'Apostles' => 'Apostles',
                        'Teachers' => 'Teachers',
                        'Helps' => 'Helps',
                        'Governments' => 'Governments',
                        'Ministry/Service' => 'Ministry/Service',
                        'Exhortation' => 'Exhortation',
                        'Giving' => 'Giving',
                        'Administration' => 'Administration',
                        'Mercy' => 'Mercy',
                        'Evangelists' => 'Evangelists',
                        'Pastors' => 'Pastors'

                    ]),
                Select::make('skills')->label(' Select Your talents or special Skills the Lord has blessed you with')
               ->multiple()
                    ->options([
                        'Reading' => 'Reading',
                        'Researching' => 'Researching',
                        'Cooking' => 'Cooking',
                        'Driving' => 'Driving',
                        'Selling_Marketing' => 'Selling/Marketing',
                        'Programming' => 'Programming',
                        'Touring_Traveling' => 'Touring Traveling',
                        'Preaching' => 'Preaching',
                        'Gardening_Farming' => 'Gardening/Farming',
                        'Sewing' => 'Sewing',
                        'Sports' => 'Sports - Walking, Exercise, Running, Tennis, Bicycling, Swimming, etc',
                        'Animal_Care' => 'Animal Care',
                        'Socializing' => 'Socializing - Community work',
                        'Hand_Drawing' => 'Hand Drawing / Painting',
                    ]),
            ])->columns(2)

            // ...
        ];
    }

    public function submit()
    {
        // dd($this->form->getState());
        $data = $this->form->getState();

        Details::create([
            'user_id' => $this->user_id,
            'course_of_study' => $data['course_of_study'],
            'degree' => $data['degree'],
            'occupation' => $data['occupation'],
            'professional_abilities' => $data['professional_abilities'],
            'past_mission' => $data['past_mission'],
            'area_of_interest' => $data['area_of_interest'],
            'spiritual_gift' => $data['spiritual_gift'],
            'skills' => $data['skills'],

        ]);

        Notification::make()
        ->success()
        ->title('Successful')
        ->body('You have successfully updated your profile')
        ->send();

        return Redirect::to('admin/profile');

    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
