<?php

namespace App\Repositories;

use App\Interfaces\MainTitleInterface;
use App\Models\MainTitle;

class MainTitleRepository implements MainTitleInterface
{
    public function addMainTitle($data)
    {
        $addMainTitle=MainTitle::create([
            'user_id'=>"1",
            'title'=>$data->title,
        ]);

        if($addMainTitle)
        {
            return response()->json('1');
        }
    }
}