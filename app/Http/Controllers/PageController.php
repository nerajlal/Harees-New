<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function stores()
    {
        return view('pages.stores');
    }

    public function goldRate()
    {
        // Fetch current rate
        $currentRate = DB::table('goldrate')
            ->select('18k_1gm', '22k_1gm', 'updated_on')
            ->orderBy('updated_on', 'desc')
            ->first();

        // Initialize variables
        $data = [
            'rate_18k' => $currentRate ? $currentRate->{'18k_1gm'} : 0,
            'rate_22k' => $currentRate ? $currentRate->{'22k_1gm'} : 0,
            'date' => $currentRate ? $currentRate->updated_on : now(),
            
            // Default values
            'change_18k' => 0, 'change_22k' => 0,
            'change_percent_18k' => 0, 'change_percent_22k' => 0,
            'trend_18k' => 'Neutral', 'trend_22k' => 'Neutral',
            'month_change_18k' => 0, 'month_change_22k' => 0,
            'month_percent_18k' => 0, 'month_percent_22k' => 0,
            'prev' => null, 'month_ago' => null
        ];

        // Fetch history for calculations
        $currentHistory = DB::table('goldrate_history')
            ->select('18k_1gm', '22k_1gm')
            ->orderBy('updated_on', 'desc')
            ->first();

        $prev = DB::table('goldrate_history')
            ->select('18k_1gm', '22k_1gm')
            ->whereDate('updated_on', '<', now()->toDateString())
            ->orderBy('updated_on', 'desc')
            ->first();
            
        $monthAgo = DB::table('goldrate_history')
            ->select('18k_1gm', '22k_1gm')
            ->whereDate('updated_on', '<=', now()->subDays(30)->toDateString())
            ->orderBy('updated_on', 'desc')
            ->first();

        $data['prev'] = $prev;
        $data['month_ago'] = $monthAgo;

        if ($currentHistory) {
            // Calculate 24h changes
            if ($prev && $prev->{'18k_1gm'} > 0) {
                $change = $currentHistory->{'18k_1gm'} - $prev->{'18k_1gm'};
                $data['change_18k'] = number_format($change, 2);
                $data['change_percent_18k'] = number_format(($change / $prev->{'18k_1gm'}) * 100, 2);
                $data['trend_18k'] = $change > 0 ? 'Bullish' : ($change < 0 ? 'Bearish' : 'Neutral');
            }

            if ($prev && $prev->{'22k_1gm'} > 0) {
                $change = $currentHistory->{'22k_1gm'} - $prev->{'22k_1gm'};
                $data['change_22k'] = number_format($change, 2);
                $data['change_percent_22k'] = number_format(($change / $prev->{'22k_1gm'}) * 100, 2);
                $data['trend_22k'] = $change > 0 ? 'Bullish' : ($change < 0 ? 'Bearish' : 'Neutral');
            }

            // Calculate 30d performance
            if ($monthAgo && $monthAgo->{'18k_1gm'} > 0) {
                $change = $currentHistory->{'18k_1gm'} - $monthAgo->{'18k_1gm'};
                $data['month_change_18k'] = number_format($change, 2);
                $data['month_percent_18k'] = number_format(($change / $monthAgo->{'18k_1gm'}) * 100, 2);
            }

            if ($monthAgo && $monthAgo->{'22k_1gm'} > 0) {
                $change = $currentHistory->{'22k_1gm'} - $monthAgo->{'22k_1gm'};
                $data['month_change_22k'] = number_format($change, 2);
                $data['month_percent_22k'] = number_format(($change / $monthAgo->{'22k_1gm'}) * 100, 2);
            }
        }

        return view('pages.gold-rate', $data);
    }

    public function ourBrands()
    {
        return view('pages.our-brands');
    }

    public function career()
    {
        $positions = DB::table('job_positions')
            ->where('status', 'Active')
            ->orderBy('date_posted', 'desc')
            ->get();
            
        $groupedPositions = $positions->groupBy(function($item) {
            $key = str_replace(['Junior ', 'Representative', 'Executive'], '', $item->position_name);
            return trim($key);
        });

        return view('pages.careers', compact('groupedPositions'));
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function trackOrder()
    {
        return view('pages.track-order');
    }

    public function shippingPolicy()
    {
        return view('pages.shipping-policy');
    }

    public function termsConditions()
    {
        return view('pages.terms-conditions');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function returnExchange()
    {
        return view('pages.return-exchange');
    }

    public function cancellationPolicy()
    {
        return view('pages.cancellation-policy');
    }

    public function goldScheme()
    {
        // This maps to gold-scheme-booking route
        return view('pages.gold-scheme');
    }

    public function advanceBooking()
    {
        $rate = DB::table('goldrate')->select('18k_1gm')->first();
        $goldRate18k = $rate ? $rate->{'18k_1gm'} : 0;
        
        return view('pages.advance-gold-booking', compact('goldRate18k'));
    }

    public function customJewellery()
    {
        return view('pages.custom-jewellery');
    }

    public function support()
    {
        return view('pages.support');
    }
}
