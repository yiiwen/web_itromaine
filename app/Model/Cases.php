<?php
namespace App\Model;

use App\Library\Util;
use App\Library\ShortUrl;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    public function publish($title, $content, $firstImage, $sort, $caseStatus, $id = 0)
    {
        $case = $id ? self::find($id) : $this;
        $case->cases_title = $title;
        $case->cases_content = $content;
        $case->first_image = $firstImage;
        $case->sort = $sort;
        $case->cases_status = $caseStatus;
        if (!$id) {
            $shortUrl = Util::createShortUrl();
            $case->author_id = 1;
            $case->author_name = '油麦菜';
            $case->short_url = env('APP_URL') . '/' . $shortUrl;
            $case->save();
            ShortUrl::pushUrl($shortUrl, env('APP_URL') . '/cases//' . $case->id);
            return $case->id;
        }
        return $case->save();
    }
}
