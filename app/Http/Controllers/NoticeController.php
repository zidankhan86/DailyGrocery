<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function  notice_list(){

        return view('backend.pages.notice.noticeList');
    }
}
