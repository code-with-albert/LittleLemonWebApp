<div class="container d-flex justify-content-center flex-column py-5">
    <form method="POST" class="align-self-center">
        @csrf
        @if ($reviewMethod == 'edit')
            @method('PATCH')
        @elseif ($reviewMethod == 'delete')
            @method('DELETE')
        @endif

        <div class=" card" style="width: 20rem;">
            @if($review)
                <h5 class="card-header">Your comment</h5>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <h2 class="card-title m-0 p-0 font-dark-green fs-2">{{$review->user['username']}}</h2>

                        @for($i = 1; $i <= $review['rating']; $i++)
                            <div class="star star-full justify-content-center mx-1" id="star-{{$i}}">
                            </div>
                        @endfor
                        @for($j = $review['rating'] + 1; $j <= 5; $j++)
                            <div class="star star-outline justify-content-center mx-1" id="star-{{$j}}">
                            </div>
                        @endfor
                        <input type="number" id="star-count" name="review-star-count"
                            class="col m-0 mx-3 p-0 fs-1 align-content-center font-dark-green" value="{{$review['rating']}}"
                            readonly>
                        <h2 class="card-title m-0 p-0 font-dark-green fs-5">Comment:</h2>
                        @if ($reviewMethod == 'edit')
                            <textarea class="card-text" name="review-comment" rows="3">{{$review['comment']}}</textarea>
                            @error('review-comment')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        @else
                            <x-card-text>{{$review['comment']}}</x-card-text>
                        @endif

                    </div>
                    <div class="row d-flex justify-content-between mt-2 pt-2 gap-3 border-top">
                        @if ($reviewMethod == 'edit')
                            <a href="{{asset('reviews')}}/{{$review['id']}}" class="col btn btn-secondary text-center fs-5 p-0">
                                Cancel
                            </a>
                            <button type="submit" class="col btn btn-success text-center fs-5 p-0">
                                Update
                            </button>
                        @elseif ($reviewMethod == 'delete')
                            <p class="card-text py-0 my-0">Are you sure you want to delete?</p>
                            <a href="{{asset('reviews')}}/{{$review['id']}}" class="col btn btn-secondary text-center fs-5 p-0">
                                No
                            </a>
                            <button type="submit" class="col btn btn-success text-center fs-5 p-0">
                                Yes
                            </button>
                        @else
                            <a href="{{$review['id']}}/edit" class="col btn btn-secondary text-center fs-5 p-0">
                                Edit
                            </a>
                            <a href="{{$review['id']}}/delete" class="col btn btn-danger text-center fs-5 p-0">
                                Delete
                            </a>
                        @endif
                    </div>
                </div>
            @else
                <h5 class="card-header">Notice</h5>
                <div class="card-body">
                    <p class="card-text">
                        Post doesn't exist or no longer available. <a href="{{asset('reviews')}}" class="text-danger">Go
                            back?</a>
                    </p>
                </div>
            @endif
        </div>
    </form>
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show  align-self-center" role="alert" style="width: 20rem;">
            <strong>{{session('status')}}</strong>
            <button type=" button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>