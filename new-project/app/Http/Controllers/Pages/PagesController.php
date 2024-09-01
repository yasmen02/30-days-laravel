<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use App\Models\Item;

class PagesController extends Controller
{
    //

//return view('Items/index', compact('items'));
    public function home(){
        $items = Item::all();
        return view('Pages\home', compact('items'));
    }
    public function about(){
        return view('Pages\about', [
            'name' => 'learning and education blogging',
            'about' => 'we believe that learning is a lifelong journey, and education should be both accessible and engaging. Our mission is to provide high-quality, insightful, and practical content that empowers individuals to expand their knowledge, enhance their skills, and achieve their personal and professional goals.',
            'who_we_are' => 'We are a passionate team of educators, writers, and lifelong learners dedicated to sharing valuable resources and expert advice on a wide range of topics. From in-depth tutorials and how-to guides to thought-provoking articles and trend analysis, our blog is designed to inspire curiosity and facilitate growth.',
            'teachers' => [
                [
                    'id' => 1,
                    'name' => 'Yasmen',
                    'email' => 'yasmen@gmail.com',
                    'image' => 'yasmen.jpg'
                ],
                [
                    'id' => 2,
                    'name' => 'Qadi',
                    'email' => 'qadi@gmail.com',
                    'image' => 'qadi.jpg'
                ],
                [
                    'id' => 3,
                    'name' => 'Lena',
                    'email' => 'lena@gmail.com',
                    'image' => 'lena.jpg'
                ],
                [
                    'id' => 4,
                    'name' => 'Zain',
                    'email' => 'Zain@gmail.com',
                    'image' => 'zain.jpg'
                ]
            ]
        ]);
    }
    public function contact(){
        return view('Pages\contact', [
            'email' => 'learning@gmail.com',
            'phone' => '0123456789',
            'location' => 'London, UK',
            'operatingHours' => '9:00am - 9:00pm , saturday to tuesday',
        ]);
    }
}
