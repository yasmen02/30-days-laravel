<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'name' => 'learning and education blogging',
        'description' => 'learning and education blogging',
        'blogs'=>[
            [
                'id'=>1,
                'title'=>'Mastering the Art of Online Learning',
                'description'=>'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
                'image'=>'blog1.jpeg',
                'Author'=>'Yasmen'
            ]
            ,[
                'id'=>2,
                'title'=>'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
                'description'=>'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
                'image'=>'blog2.webp',
                'Author'=>'Qadi'
            ],
            [
                'id'=>3,
                'title'=>'From Classroom to Career: Bridging the Gap with Real-World Skills',
                'description'=>'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
                'image'=>'blog3.webp',
                'Author'=>'Lena'
            ] ,
            [
                'id'=>4,
                'title'=>'"Gamification in Education: How Game Mechanics Are Enhancing Learning',
                'description'=>'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
                'image'=>'blog4.webp',
                'Author'=>'Zain'
            ] ,
            [
                'id'=>5,
                'title'=>'The Future of AI in Education: Opportunities and Challenges',
                'description'=>'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
                'image'=>'blog5.webp',
                'Author'=>'Yasmen'
            ] ,
            [
                'id'=>6,
                'title'=>'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
                'description'=>'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
                'image'=>'blog6.jpeg',
                'Author'=>'Lena'
            ]
        ]
        ]);
});
Route::get('/blogs',function(){
    return view('blogs',[
        'blogs'=>[
            [
                'id'=>1,
                'title'=>'Mastering the Art of Online Learning',
                'description'=>'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
                'image'=>'blog1.jpeg',
                'Author'=>'Yasmen'
            ]
            ,[
                'id'=>2,
                'title'=>'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
                'description'=>'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
                'image'=>'blog2.webp',
                'Author'=>'Qadi'
            ],
            [
                'id'=>3,
                'title'=>'From Classroom to Career: Bridging the Gap with Real-World Skills',
                'description'=>'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
                'image'=>'blog3.webp',
                'Author'=>'Lena'
            ] ,
            [
                'id'=>4,
                'title'=>'"Gamification in Education: How Game Mechanics Are Enhancing Learning',
                'description'=>'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
                'image'=>'blog4.webp',
                'Author'=>'Zain'
            ] ,
            [
                'id'=>5,
                'title'=>'The Future of AI in Education: Opportunities and Challenges',
                'description'=>'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
                'image'=>'blog5.webp',
                'Author'=>'Yasmen'
            ] ,
            [
                'id'=>6,
                'title'=>'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
                'description'=>'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
                'image'=>'blog6.jpeg',
                'Author'=>'Lena'
            ],
            [
                'id'=>7,
                'title'=>'Mastering the Art of Online Learning',
                'description'=>'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
                'image'=>'blog1.jpeg',
                'Author'=>'Yasmen'
            ]
            ,[
                'id'=>8,
                'title'=>'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
                'description'=>'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
                'image'=>'blog2.webp',
                'Author'=>'Qadi'
            ],
            [
                'id'=>9,
                'title'=>'From Classroom to Career: Bridging the Gap with Real-World Skills',
                'description'=>'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
                'image'=>'blog3.webp',
                'Author'=>'Lena'
            ] ,
            [
                'id'=>10,
                'title'=>'"Gamification in Education: How Game Mechanics Are Enhancing Learning',
                'description'=>'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
                'image'=>'blog4.webp',
                'Author'=>'Zain'
            ] ,
            [
                'id'=>11,
                'title'=>'The Future of AI in Education: Opportunities and Challenges',
                'description'=>'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
                'image'=>'blog5.webp',
                'Author'=>'Yasmen'
            ] ,
            [
                'id'=>12,
                'title'=>'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
                'description'=>'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
                'image'=>'blog6.jpeg',
                'Author'=>'Lena'
            ]
        ]
    ]);
});
Route::get('/blogs/{id}' ,function($id){
    $blogs =[
        [
            'id'=>1,
            'title'=>'Mastering the Art of Online Learning',
            'description'=>'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
            'image'=>'blog1.jpeg',
            'Author'=>'Yasmen'
        ]
        ,[
            'id'=>2,
            'title'=>'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
            'description'=>'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
            'image'=>'blog2.webp',
            'Author'=>'Qadi'
        ],
        [
            'id'=>3,
            'title'=>'From Classroom to Career: Bridging the Gap with Real-World Skills',
            'description'=>'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
            'image'=>'blog3.webp',
            'Author'=>'Lena'
        ] ,
        [
            'id'=>4,
            'title'=>'"Gamification in Education: How Game Mechanics Are Enhancing Learning',
            'description'=>'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
            'image'=>'blog4.webp',
            'Author'=>'Zain'
        ] ,
        [
            'id'=>5,
            'title'=>'The Future of AI in Education: Opportunities and Challenges',
            'description'=>'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
            'image'=>'blog5.webp',
            'Author'=>'Yasmen'
        ] ,
        [
            'id'=>6,
            'title'=>'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
            'description'=>'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
            'image'=>'blog6.jpeg',
            'Author'=>'Lena'
        ],
        [
            'id'=>7,
            'title'=>'Mastering the Art of Online Learning',
            'description'=>'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
            'image'=>'blog1.jpeg',
            'Author'=>'Yasmen'
        ]
        ,[
            'id'=>8,
            'title'=>'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
            'description'=>'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
            'image'=>'blog2.webp',
            'Author'=>'Qadi'
        ],
        [
            'id'=>9,
            'title'=>'From Classroom to Career: Bridging the Gap with Real-World Skills',
            'description'=>'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
            'image'=>'blog3.webp',
            'Author'=>'Lena'
        ] ,
        [
            'id'=>10,
            'title'=>'"Gamification in Education: How Game Mechanics Are Enhancing Learning',
            'description'=>'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
            'image'=>'blog4.webp',
            'Author'=>'Zain'
        ] ,
        [
            'id'=>11,
            'title'=>'The Future of AI in Education: Opportunities and Challenges',
            'description'=>'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
            'image'=>'blog5.webp',
            'Author'=>'Yasmen'
        ] ,
        [
            'id'=>12,
            'title'=>'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
            'description'=>'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
            'image'=>'blog6.jpeg',
            'Author'=>'Lena'
        ]
    ];
   $blogs= \Illuminate\Support\Arr::first($blogs, function ($blogs) use ($id) {
        return $blogs['id'] == $id;
    });

    return view('blog-id',['blogs'=>$blogs]);
});
Route::get('/about', function () {
    return view('about', [
        'name' => 'learning and education blogging',
       'about'=>'we believe that learning is a lifelong journey, and education should be both accessible and engaging. Our mission is to provide high-quality, insightful, and practical content that empowers individuals to expand their knowledge, enhance their skills, and achieve their personal and professional goals.',
        'who_we_are'=>'We are a passionate team of educators, writers, and lifelong learners dedicated to sharing valuable resources and expert advice on a wide range of topics. From in-depth tutorials and how-to guides to thought-provoking articles and trend analysis, our blog is designed to inspire curiosity and facilitate growth.',

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
});

Route::get('/contact', function () {
    return view('contact',[
        'email'=>'learning@gmail.com',
        'phone'=>'0123456789',
        'location'=>'London, UK',
        'operatingHours'=>'9:00am - 9:00pm , saturday to tuesday',
    ]);
});
Route::get('/user{id}',[UserController::class,'show'] );
