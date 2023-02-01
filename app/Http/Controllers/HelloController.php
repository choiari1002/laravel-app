<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function myTeam() {
        $title = '타이틀입니다.';
        // TODO: 밑 두가지 모두 array로 받아지나요? 답: YES
        // $members = [
        //     '최아리',
        //     '김철원',
        //     '강수빈',
        //     '류종학',
        //     '문영석',
        //     '강주희',
        // ];
        $members = array(
            '최아리',
            '김철원',
            '강수빈',
            '류종학',
            '문영석',
            '강주희',
        );

        // $movie = new MovieInfo([$mname='아바타', $rating=5, $review=['좋았어요','재밌어요','멋져요']]);
        // $movie = new MovieInfo();
        // $movie->mname='아바타';
        // $movie->rating=5;

        $movie = (object) ['mname' => '아바타', 'rating' => 5, 'reviews' => ['재밌어요', '멋져요', '인간이 무서워요', '나쁘지 않았어요', '가족영화로 좋아요']];
        // $movie = {'mname' => '아바타', 'rating' => 5, 'reviews' => ['재밌어요', '멋져요', '인간이 무서워요', '나쁘지 않았어요', '가족영화로 좋아요']};

        return view('hello', [
            'members'=>$members,
            'title'=>$title,
            'movie'=>$movie,
        ]);
    }
}

