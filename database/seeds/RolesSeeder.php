<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => [
                'create-post' => true
            ]
        ]);

        $editor = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => [
                'edit-post' => true,
                'publish' => true
            ]
        ]);

    }
}
