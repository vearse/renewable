@extends('public.account.layout')

@section('title', trans('storefront::account.pages.my_wishlist'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.pages.my_wishlist') }}</li>
@endsection

@section('panel')
    <my-wishlist inline-template>
        <div class="panel">
            <div class="panel-header">
                <h4>{{ trans('storefront::account.pages.my_rewards') }}</h4>
            </div>


            <div class="panel-body">
                @if ($rewards->isEmpty())
                    <div class="empty-message">
                        <h3>{{ trans('storefront::account.rewards.no_rewards') }}</h3>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-borderless my-rewards-table">
                            <thead>
                                <tr>
                                    <th>{{ trans('storefront::account.product_name') }}</th>
                                    <th>{{ trans('storefront::account.points') }}</th>
                                    <th>{{ trans('storefront::account.status') }}</th>
                                    <th>{{ trans('storefront::account.date') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($rewards as $reward)
                                    <tr>

                                    <td>
                                            <span class="product-name">
                                                {{ $reward->action }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="product-name">
                                                {{ $reward->points }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="badge {{ $reward->status ? 'badge-success' : 'badge-secondary' }}">
                                                {{ $reward->status }}
                                            </span>
                                        </td>

                                        <td>
                                            {{ $reward->created_at->toFormattedDateString() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <div class="panel-footer">
                {!! $rewards->links() !!}
            </div>
        </div>
    </my-wishlist>
@endsection
