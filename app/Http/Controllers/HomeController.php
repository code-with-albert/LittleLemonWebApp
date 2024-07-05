<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\SpecialsMenu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Homepage
    public function index()
    {
        $reviewsPage = Review::with('user')->where('rating', '>=', 3)->where('deleted', false)->orderByDesc('created_at')->paginate(5);
        $specialsMenu = SpecialsMenu::with('menu')->whereHas('menu', function (Builder $query) {
            $query->where('available', true);
        })->get();
        return view('pages/home/index', ['specialsMenu' => $specialsMenu, 'reviewsPage' => $reviewsPage]);
    }
}
