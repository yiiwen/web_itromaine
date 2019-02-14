<?php

namespace App\Library;

/**
 *  公共类
 */
class Common
{
    /**
     * 视图排序
     * @param array $result 数据集合
     * @return array 结果
     */
    public function viewSort($result)
    {
        if($result){
            foreach ($result as $key => $value){
                $result[$key]['sort'] = self::translateSort($value->sort);
            }
        }
        return $result;
    }

    /**
     * 翻译排序
     * @param int $sort 排序
     * @return string 排序名称
     * 1,自然排序，2，始终第一，3，始终最后，4，置顶
     */
    static public function translateSort($sort)
    {
        $result = "";
        if($sort == 1){
            $result = "自然排序";
        }

        if($sort == 2){
            $result = "始终第一";
        }

        if($sort == 3){
            $result = "始终最后";
        }

        if($sort == 4){
            $result = "置顶";
        }
        return $result;
    }

}
