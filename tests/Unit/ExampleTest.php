<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Library\Util;
use App\Library\ShortUrl;
use App\Model\News;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $news = new News;
        $news->saveNews(1,1,1,1,1);
    }
}
