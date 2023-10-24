<?php

namespace Modules\Review\Http\Controllers;


use Modules\Media\Entities\File;
use Illuminate\Support\Facades\Storage;
use Modules\User\Entities\User;
use Modules\Review\Entities\Review;
use Modules\Review\Entities\Rewards;
use Modules\Product\Entities\Product;
use Modules\Review\Http\Requests\StoreReviewRequest;

class ProductReviewController
{
    /**
     * Display a listing of the resource.
     *
     * @param int $productId
     * @return \Illuminate\Http\Response
     */
    public function index($productId)
    {
        return Review::where('product_id', $productId)->latest()->paginate(4);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param int $productId
     * @param \Modules\Review\Http\Requests\StoreReviewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store($productId, StoreReviewRequest $request)
    {
        if (! setting('reviews_enabled')) {
            return;
        }

        if($request->hasFile('reviewer_attachment')){
            $file = $request->file('reviewer_attachment');
            $path = Storage::putFile('reviews', $file);
            info([$path]);
        }


        $review = Product::findOrFail($productId)
            ->reviews()
            ->create([
                'reviewer_id' => auth()->id(),
                'rating' => $request->rating,
                'reviewer_name' => $request->reviewer_name,
                'comment' => $request->comment,
                'is_approved' => setting('auto_approve_reviews', 0),
            ]);

        $point = 2;

        Rewards::create([
            'user_id' => auth()->id(),
            'action' => 'Product Review',
            'action_id' =>  $review->id,
            'points' => $point,
        ]);

        $user = User::find(auth()->id());
        $user->reward_balance =   $user->reward_balance + $point;
        $user->save();

        return $review;
    }
}
