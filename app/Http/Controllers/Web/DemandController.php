<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Demand;

class DemandController extends Controller
{
    public function addOne(Request $request)
    {
        $demand = new Demand();
        $id = $demand->addOne($request);
        $message = $id ? '我们已经收到您的需求，我们将会在24小时内联系您' : '需求提交失败';
        $message = urlencode(urlencode($message));
        return redirect('/link?message=' . $message);
    }
}
