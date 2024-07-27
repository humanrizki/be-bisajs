<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create([
            'name'=>'user',
            'slug'=>'user'
        ]);
        Role::create([
            'name'=>'admin',
            'slug'=>'admin'
        ]);
        Role::create([
            'name'=>'teacher',
            'slug'=>'teacher'
        ]);
        User::factory()->count(10)->create();
        Category::create([
            'name'=>'UI/UX',
            'slug'=>'ui-ux'
        ]);
        Category::create([
            'name'=>'Back-End Developer',
            'slug'=>'back-end-developer'
        ]);
        Category::create([
            'name'=>'Front-End Developer',
            'slug'=>'front-end-developer'
        ]);
        Category::create([
            'name'=>'Api',
            'slug'=>'api'
        ]);
        $users_id = User::where('role_id', 3)->pluck('id')->toArray();
        Course::create([
            'name'=>'HTML',
            'image'=>'img/courses/html.png',
            'slug' => 'html',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 3,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'CSS',
            'image'=>'img/courses/css.png',
            'slug' => 'css',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 3,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'Javascript',
            'image'=>'img/courses/js.png',
            'slug' => 'javascript',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 3,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'Tailwind CSS',
            'image'=>'img/courses/tailwindcss.png',
            'slug' => 'tailwind-css',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 3,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'Node JS',
            'image'=>'img/courses/nodejs.png',
            'slug' => 'node-js',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 2,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'Express JS',
            'image'=>'img/courses/express.png',
            'slug' => 'express-js',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 2,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'React JS',
            'image'=>'img/courses/react.png',
            'slug' => 'react-js',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 3,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
        Course::create([
            'name'=>'Api',
            'image'=>'img/courses/api.png',
            'slug' => 'api',
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates suscipit libero cum magni, eum dolore deleniti odio, corporis quisquam similique aperiam voluptate, veritatis animi hic sint soluta dolorum nemo laboriosam.
            Vero possimus nulla dolorum ea, praesentium ipsum in inventore perferendis libero excepturi facere iste quisquam veritatis enim natus rerum tempora sapiente! Odio suscipit dolorem voluptas? Minima assumenda fugiat doloribus ab?
            Doloribus culpa mollitia quaerat tempore. Placeat reiciendis nesciunt provident minus temporibus fugiat velit atque nulla quidem aliquid, sequi distinctio, iusto quas. Voluptatibus repellendus odio, quidem nostrum facilis maxime ex consectetur.",
            'prices_point' => 0,
            'category_id' => 4,
            'user_id' => $users_id[rand(0, sizeof($users_id)-1)]
        ]);
    }
}
