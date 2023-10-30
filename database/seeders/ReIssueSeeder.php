<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReIssue;

class ReIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReIssue::create([
            'pnr' => 'PNR1',
            'airline' => 'Mihin Lanka',
            'total_fare' => '35000.00',
            'airline_pnr' => '545',
            'pax_name' => 'Pax 1',
            'sector' => 'Sector 4',
            'agency_email' => 'agency2@travelport.lk',
            'admin_email' => 'admin1@travelport.lk',
            'remarks' => 'Remarks New',
            'no_show' => '1',
            'purged_pnr' => '0'
        ]);

        ReIssue::create([
            'pnr' => 'PNR2',
            'airline' => 'Sri Lankan',
            'total_fare' => '35000.00',
            'airline_pnr' => '545',
            'pax_name' => 'Pax 2',
            'sector' => 'Sector 3',
            'agency_email' => 'agency2@travelport.lk',
            'admin_email' => 'admin1@travelport.lk',
            'remarks' => 'Remarks New',
            'no_show' => '0',
            'purged_pnr' => '1'
        ]);
    }
}
