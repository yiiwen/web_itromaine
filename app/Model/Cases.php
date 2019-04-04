<?php

namespace App\Model;
use App\Library\Util;
use App\Library\ShortUrl;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    public function saveCases($title,$content,$firstImage,$sort,$caseStatus)
    {
        $shortUrl = Util::createShortUrl();
        $this->cases_title = $title;
        $this->cases_content = $content;
        $this->author_id = 1;
        $this->author_name = '油麦菜';
        $this->first_image = $firstImage;
        $this->sort = $sort;
        $this->short_url = env('APP_URL') .'/'. $shortUrl;
        $this->cases_status = $caseStatus;
        $this->save();
        ShortUrl::pushUrl($shortUrl,env('APP_URL') .'/cases/id='. $this->id);
        return $this->id;
    }
}
