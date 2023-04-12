<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class PostRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'post_image' => 'image'
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'post_image' => 'image'
        ];
    }
}
