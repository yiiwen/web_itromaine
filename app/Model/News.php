<?php

namespace App\Model;
use App\Library\Util;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function saveNews($title,$content,$firstImage,$sort,$newsStatus)
    {
        $this->news_title = $title;
        $this->news_content = $content;
        $this->author_id = 1;
        $this->author_name = '油麦菜';
        $this->first_image = $firstImage;
        $this->sort = $sort;
        $this->short_url = Util::createShortUrl();
        $this->news_status = $newsStatus;
        $this->save();
        return $this->id;
    }
}
