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
        return view('public.account.rewards.index');
    }
}
