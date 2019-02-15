<?php

namespace App\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = "demand";
    public $timestamps = false;

    public function addOne(Request $request) {
        $this->company_name = $request->companyName;
        $this->send_name = $request->name;
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->service = implode('',$request->service);
        $this->follow  = implode('',$request->follow);
        $this->budget  = $request->budget;
        $this->description = $request->description;
        $this->created_at = date("Y-m-d H:i:s",time());
        $this->save();
        return $this->id;
    }
}
