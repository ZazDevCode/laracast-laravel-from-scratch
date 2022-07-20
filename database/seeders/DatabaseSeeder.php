<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        Post::factory(15)->create();

        // $user = \App\Models\User::factory()->create();

        // $personal = \App\Models\Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $family = \App\Models\Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = \App\Models\Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // \App\Models\Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nibh eu sem sodales, nec consequat ante ornare. Quisque non turpis non felis tempus lobortis at eu magna. Nam risus mi, rhoncus sed gravida eget, varius ac ante. Donec auctor nibh urna, id convallis tellus bibendum sed. Suspendisse orci quam, auctor tincidunt odio sed, hendrerit vestibulum enim. Praesent sit amet fringilla enim. Integer pellentesque sodales turpis elementum imperdiet. Proin vehicula enim posuere ornare dictum. Phasellus at nunc metus. Donec consequat massa eget velit lacinia, ac dignissim magna tincidunt. Morbi non magna ut purus euismod dapibus vel eget enim. Nunc sed libero varius, pulvinar lorem ut, dapibus tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris sed lacus at tortor ornare molestie nec ut magna.</p>',
        // ]);

        // \App\Models\Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Etiam nec mattis quam. Ut nec lobortis sapien, a accumsan urna.',
        //     'body' => '<p>Etiam nec mattis quam. Ut nec lobortis sapien, a accumsan urna. Nam mattis vehicula tempor. Aliquam condimentum erat lacus, nec volutpat nisi scelerisque eget. Sed pellentesque orci turpis, in pretium diam imperdiet vel. In lacinia faucibus posuere. Cras tempus risus id lobortis pharetra.</p>',
        // ]);
        
        // \App\Models\Post::create([
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Proin non mollis nulla, eu pulvinar felis.',
        //     'body' => '<p>Proin non mollis nulla, eu pulvinar felis. Nunc non magna neque. Pellentesque ornare elementum erat. Mauris tempus, lectus et malesuada auctor, est nisi fermentum magna, et molestie dolor purus ut nisl. Nulla sed enim nisl. Maecenas hendrerit tempus dolor, ac mattis enim commodo ut. Vivamus venenatis condimentum ante, vitae vehicula velit pulvinar sit amet. Donec elit enim, varius dignissim tellus sit amet, lacinia congue nisl. Suspendisse pharetra arcu lacinia, tincidunt est id, tempus sem. Sed consectetur pretium sapien, eleifend lobortis nibh dapibus eu. Nunc sed porta magna, quis tristique enim. Duis fringilla bibendum leo sit amet accumsan. Fusce hendrerit molestie dapibus. Aenean accumsan, tortor quis ultrices gravida, nibh ligula rhoncus ante, ut facilisis est neque non quam. Vivamus luctus sit amet lorem sit amet fermentum.</p>',
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Praesent facilisis elit id mauris pulvinar, eu faucibus quam iaculis.',
        //     'body' => '<p>Praesent facilisis elit id mauris pulvinar, eu faucibus quam iaculis. Maecenas rutrum vestibulum nulla sed mattis. Duis varius bibendum odio, vitae dapibus ligula tincidunt vel. Curabitur interdum pellentesque orci, pulvinar aliquet nisl lobortis at. Donec at eleifend sapien, a fringilla diam. Nunc eu enim neque. Duis vestibulum eleifend lacus in fringilla. Curabitur id nisl tempus, accumsan enim in, laoreet magna.</p>',
        // ]);

    }
}
