@extends('public.layout')

@section('title', setting('store_tagline'))

@section('style')
<style>
    .household-item{
        display: flex;
        flex-direction: column;
        width: 330px;/
        /* padding: 10px 0px; */
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .household-item .content{
        display: flex;
        gap: 10px;
    }

    .household-item .content img {
        height: 130px;
    }

    .household-item .detail{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn-remove{
        margin-top: -15px;
        margin-right: -15px;
        border-radius: 50%;
        border: 2px solid gray;
        font-size: 11px;
        padding: 8px;
    }

</style>
@endsection

@section('content')
    <section class="custom-page-wrap clearfix">
        <div class="container">
            <div class="row row justify-content-center">
                <div class="col-6-12 col-md-12 col-lg-14  text-center mt-3 mb-2 ">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3  px-2">
                        <h2 id="heading">Sign Up Your User Account</h2>
                        <p>Fill all form field to go to next step</p>
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong> Email</strong></li>
                                <li id="personal"><strong>Calculate</strong></li>
                                <li id="payment"><strong>Questions</strong></li>
                                <li id="confirm"><strong>Summary</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="fs-title">Renewable Energy Calculator:</h2>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <img src="{{ asset('/storage/household/welcome_renewable.jpeg') }}" alt="" width="450">
                                        </div>
                                        <div class="col-8">
                                            <p class="pb-4">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolore dicta voluptatibus adipisci, quisquam nam!
                                            </p>
                                             <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" />
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="fs-title">Personal Appliances:</h2>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @for($item = 0; $item < 2; $item++)
                                            <div class="household-item product-card">
                                                <div class="header">
                                                    <label for="">Bulb</label>

                                                    <button type="button" class="btn-remove float-right">
                                                        <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                                        X
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <img src="{{ asset('/storage/household/bulb.jpeg') }}" alt="">
                                                    <div class="detail">
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Quantity</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Rating</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="household-item product-card">
                                                <div class="header">
                                                    <label for="">TV</label>

                                                    <button type="button" class="btn-remove float-right">
                                                        <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                                        X
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <img src="{{ asset('/storage/household/tv.jpeg') }}" alt="">
                                                    <div class="detail">
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Quantity</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Rating</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="household-item product-card">
                                                <div class="header">
                                                    <label for="">Laptop</label>

                                                    <button type="button" class="btn-remove float-right">
                                                        <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                                        X
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <img src="{{ asset('/storage/household/laptop.jpeg') }}" alt="">
                                                    <div class="detail">
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Quantity</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                        <select class="form-control" value="1" name="" id="">
                                                            <option value="">Rating</option>
                                                            @for($i = 0; $i < 5; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="household-item product-card">
                                                <div class="header">
                                                    <label for="">Fan</label>

                                                    <button type="button" class="btn-remove float-right">
                                                        <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                                        X
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <img src="{{ asset('/storage/household/fan.jpeg') }}" alt="">
                                                    <div class="detail">
                                                        <select class="form-control" value="1" name="" id="">
                                                                <option value="">Quantity</option>
                                                                @for($i = 0; $i < 5; $i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                        </select>
                                                        <select class="form-control" value="1" name="" id="">
                                                                <option value="">Rating</option>
                                                                @for($i = 0; $i < 5; $i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                        <div class="household-item ">
                                            <div class="text-center">
                                                <h4 for="">Add new appliance</h4>
                                            </div>
                                            <div class="detail">
                                                <select class="form-control" value="1" name="" id="">
                                                    <option value="">Quantity</option>
                                                    @for($i = 0; $i < 5; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                                <select class="form-control" value="1" name="" id="">
                                                    <option value="">Quantity</option>
                                                    @for($i = 0; $i < 5; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                                <select class="form-control" value="1" name="" id="">
                                                    <option value="">Rating</option>
                                                    @for($i = 0; $i < 5; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" name="next" class="">+</button>
                                            </div>
                                        </div>
                                   </div>

                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="fs-title">Questions:</h2>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fieldlabels">
                                            How long do you want your inverter to last on full charge? i.e inverter system won’t be charge during this period
                                        </label>
                                         <input type="range" name="pic">
                                    </div>
                                    <div class="form-group">
                                        <label class="fieldlabels">How do you want to charge your batteries?:</label>
                                        <div>
                                            <label for="">
                                                A. Grid Only
                                                <input type="checkbox" name="grid" id="" class="form-control">
                                            </label>
                                            <label for="">
                                                A. Grid and Solar
                                                <input type="checkbox" name="grid_solar" id="" class="form-control">
                                            </label>
                                            <label for="">
                                                A. Solar Only
                                                <input type="checkbox" name="solar" id="" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>


                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-6-3">

                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-6 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>

                                <input type="button" name="next" class="next action-button" value="Save" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




