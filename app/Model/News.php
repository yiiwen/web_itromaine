<?php
namespace App\Model;

use App\Library\Util;
use App\Library\ShortUrl;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function publish($title, $content, $firstImage, $sort, $newsStatus, $id = 0)
    {
        $news = $id ? self::find($id) : $this;
        $news->news_title = $title;
        $news->news_content = $content;
        $news->first_image = $firstImage;
        $news->sort = $sort;
        $news->news_status = $newsStatus;
        if (!$id) {
            $shortUrl = Util::createShortUrl();
            $news->author_id = 1;
            $news->author_name = '油麦菜';
            $news->short_url = env('APP_URL') . '/' . $shortUrl;
            $news->save();
            ShortUrl::pushUrl($shortUrl, env('APP_URL') . '/news/id=' . $news->id);
            return $news->id;
        }
        return $news->save();
    }
}
