<?php

use App\Models\Employer;
use App\Models\Salaire;
use App\Models\Setting;

class SalaryService {
    public function generate(Employer $employer, $month, $year){
        $settings = Setting::first();

        $monthly = $employer->daily_rate * $settings->working_days;

        return Salaire::created([
            'employers_id' => $employer->id,
            'month' => $month,
            'year' => $year,
            'daily_rate' => $employer->daily_rate,
            'working_days' => $settings->working_days,
            'monthly_salary' => $monthly,
            'annual_salary' => $monthly * 12,
            'generated_at' => now(),


        ]);
    }
}


?>
