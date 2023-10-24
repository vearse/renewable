<?php

namespace Modules\Account\Http\Controllers;

class AccountRewardsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewards = auth()->user()
                    ->rewards()
                    ->paginate(20);

        return view('public.account.rewards.index', compact('rewards'));
    }
}
