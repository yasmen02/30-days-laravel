<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Blog
{
    public static function all(): array
    {
        return
            [
               [
                    'id' => 1,
                    'title' => 'Mastering the Art of Online Learning',
                    'description' => 'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
                    'image' => 'blog1.jpeg',
                    'Author' => 'Yasmen'
                ]
                , [
                'id' => 2,
                'title' => 'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
                'description' => 'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
                'image' => 'blog2.webp',
                'Author' => 'Qadi'
            ],
                [
                    'id' => 3,
                    'title' => 'From Classroom to Career: Bridging the Gap with Real-World Skills',
                    'description' => 'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
                    'image' => 'blog3.webp',
                    'Author' => 'Lena'
                ],
                [
                    'id' => 4,
                    'title' => '"Gamification in Education: How Game Mechanics Are Enhancing Learning',
                    'description' => 'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
                    'image' => 'blog4.webp',
                    'Author' => 'Zain'
                ],
                [
                    'id' => 5,
                    'title' => 'The Future of AI in Education: Opportunities and Challenges',
                    'description' => 'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
                    'image' => 'blog5.webp',
                    'Author' => 'Yasmen'
                ],
                [
                    'id' => 6,
                    'title' => 'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
                    'description' => 'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
                    'image' => 'blog6.jpeg',
                    'Author' => 'Lena'
                ],
                [
                    'id' => 7,
                    'title' => 'Mastering the Art of Online Learning',
                    'description' => 'Discover strategies to enhance your online learning experience, from effective time management to leveraging digital tools. Whether youre a student or a lifelong learner, these tips will help you thrive in the virtual classroom',
                    'image' => 'blog1.jpeg',
                    'Author' => 'Yasmen'
                ]
                , [
                'id' => 8,
                'title' => 'The Rise of Microlearning: How Bite-Sized Learning is Changing Education',
                'description' => 'Explore the benefits of microlearning, an innovative approach that delivers content in small, manageable chunks. Learn how this method improves retention and engagement for both students and professionals.',
                'image' => 'blog2.webp',
                'Author' => 'Qadi'
            ],
                [
                    'id' => 9,
                    'title' => 'From Classroom to Career: Bridging the Gap with Real-World Skills',
                    'description' => 'Learn how educational institutions and learners can better prepare for the workforce by focusing on practical skills and real-world applications. This post covers essential skills that are often overlooked in traditional education',
                    'image' => 'blog3.webp',
                    'Author' => 'Lena'
                ],
                [
                    'id' => 10,
                    'title' => '"Gamification in Education: How Game Mechanics Are Enhancing Learning',
                    'description' => 'Dive into the concept of gamification and how incorporating game-like elements into educational environments can boost motivation and make learning more engaging. Discover examples of successful gamified learning experiences.',
                    'image' => 'blog4.webp',
                    'Author' => 'Zain'
                ],
                [
                    'id' => 11,
                    'title' => 'The Future of AI in Education: Opportunities and Challenges',
                    'description' => 'Examine the potential impact of artificial intelligence on education. This blog explores how AI can personalize learning, automate administrative tasks, and the challenges that come with integrating AI into educational systems.',
                    'image' => 'blog5.webp',
                    'Author' => 'Yasmen'
                ],
                [
                    'id' => 12,
                    'title' => 'Cultivating a Growth Mindset: Strategies for Lifelong Learning',
                    'description' => 'Understand the importance of a growth mindset and how adopting this attitude can foster continuous learning and personal development. This post provides practical strategies for developing and maintaining a growth mindset.',
                    'image' => 'blog6.jpeg',
                    'Author' => 'Lena'
                ]];
    }

    public static function find(int $id): array
    {
        $blogs = Arr::first(static::all(), fn($blog) => $blog['id'] === $id);
        if (!$blogs) {
            abort(404);
        }
        return $blogs;
    }
}
