<?php

use App\Console\Commands\AbandonedCart;
use Illuminate\Support\Facades\Schedule;

Schedule::command(AbandonedCart::class)->dailyAt('13:00');
