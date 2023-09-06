<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateClimbersPassword extends Command
{
    protected $signature = 'climbers:update-password';

    protected $description = 'Update and hash passwords for climbers with null passwords';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $newPassword = 'Marloarpo27!'; // Palitan ang ito ayon sa gusto mo

        // I-update ang mga null na password
        DB::table('climbers')
            // ->whereNull('password')
            ->update(['password' => Hash::make($newPassword)]);

        $this->info('Climbers passwords updated and hashed successfully.');
    }
}