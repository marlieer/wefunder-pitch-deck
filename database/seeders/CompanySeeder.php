<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\PitchDeck;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'name'      => 'Galerie Au Chocolat',
            'location'  => 'Montreal, QC',
        ]);
        $company->pitchDeck()->save(new PitchDeck([
            'title'         => 'We use exquisite, gourmet ingredients so you can indulge in the experience of our chocolate, savouring each bite and each moment.',
            'company_id'    => $company->id,
            'file'          => 'public/pitchdecks/eFUiqcvtxE93MY443EglRZk5b9fdLK1sMFHpAoMn.pdf'
        ]));

        $company = Company::create([
            'name'      => 'Bodyweight Warrior',
            'location'  => 'Birmingham, EN',
        ]);
        $company->pitchDeck()->save(new PitchDeck([
            'title'         => 'Hi, my name is Tom Merrick and I\'m passionate about handstands, bodyweight movement and flexibility.',
            'company_id'    => $company->id,
            'file'          => 'public/pitchdecks/eFUiqcvtxE93MY443EglRZk5b9fdLK1sMFHpAoMn.pdf'
        ]));

        $company = Company::create([
            'name'      => 'Strong in the Arms Blacksmithing',
            'location'  => 'Vancouver, BC',
        ]);
        $company->pitchDeck()->save(new PitchDeck([
            'title'         => 'Blacksmithing with style, from beautiful British Columbia.',
            'company_id'    => $company->id,
            'file'          => 'public/pitchdecks/eFUiqcvtxE93MY443EglRZk5b9fdLK1sMFHpAoMn.pdf'
        ]));
    }
}
