<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_category()
    {
        $params = [
            'name' => $this->faker->words(2, true),
            'is_publish' => $this->faker->boolean(),
        ];

        $category = Category::create($params);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertEquals($params['name'], $category->name);
        $this->assertEquals($params['is_publish'], $category->is_publish);
    }
}
