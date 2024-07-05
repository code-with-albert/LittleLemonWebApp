<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    //Show comments
    public function index()
    {
        function removeQueryWhere(Builder $query)
        {
            $query->getQuery()->bindings['where'] = [];
            $query->getQuery()->wheres = [];
            return $query;
        }

        $reviews = Review::with('user')->where('deleted', false);
        $reviewsPage = Review::with('user')->where('deleted', false)->latest()->paginate(5);
        $starCounts = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($starCounts, $reviews->where('rating', '>=', 1 + $i)->where('rating', '<', 2 + $i)->count());
            removeQueryWhere($reviews)->where('deleted', false);
        }
        return view('pages.review.index', ['reviewsPage' => $reviewsPage, 'reviews' => $reviews->latest(), 'starCounts' => $starCounts]);
    }

    //Post new comment
    public function store()
    {
        request()->validate(
            [
                'review-user-id' => ['required'],
                'review-comment' => ['required', 'min:3']
            ],
            [
                'review-user-id.required' => 'User ID is required',
                'review-comment.required' => 'A comment is required',
                'review-comment.min' => 'Comment needs atleast 3 characters',
            ]
        );
        Review::create([
            'rating' => request('review-star-count'),
            'user_id' => request('review-user-id'),
            'comment' => request('review-comment'),
        ]);
        return redirect()->back();
    }

    //Report comment
    public function report()
    {
        $review = Review::where('deleted', false)->findOrFail(request('review-id'));
        $review->update([
            'reported' => true,
        ]);
        return redirect()->back();
    }

    //Show single comment
    public function show($id)
    {
        $review = Review::where('deleted', false)->find($id);
        echo '<script>console.log("' . dirname(request()->path()) . '")</script>';
        return view('pages.review-edit.index', [
            'review' => $review,
            'reviewMethod' => 'view'
        ]);
    }

    //Edit page single comment
    public function edit(Review $review)
    {
        echo '<script>console.log("' . dirname(request()->path()) . '")</script>';
        return view('pages.review-edit.index', [
            'review' => $review->deleted ? [] : $review,
            'reviewMethod' => 'edit'
        ]);
    }

    //Update Edited comment
    public function update(Review $review)
    {
        request()->validate(
            [
                'review-comment' => ['required', 'min:3']
            ],
            [
                'review-comment.required' => 'A comment is required',
                'review-comment.min' => 'Comment needs atleast 3 characters',
            ]
        );
        $review->update([
            'rating' => request('review-star-count'),
            'comment' => request('review-comment')
        ]);
        $message = 'Success! Done update!';
        return redirect('reviews/' . $review->id)->with(['status' => $message]);
    }

    //Delete page single comment
    public function delete(Review $review)
    {
        return view('pages.review-edit.index', [
            'review' => $review->deleted ? [] : $review,
            'reviewMethod' => 'delete'
        ]);
    }

    //Delete comment
    public function destroy(Review $review)
    {
        $review->update([
            'deleted' => true,
        ]);
        $message = 'Success! Post is deleted!';
        return redirect('reviews/' . $review->id)->with(['status' => $message]);
    }
}

