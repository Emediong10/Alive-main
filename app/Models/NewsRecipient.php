<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsRecipient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function applications()
    {
        return $this->hasMany(Application::class, 'applications_id');
    }

    public function news()
    {
        return $this->hasManyThrough(News::class, Application::class, 'news_recipient_id', 'application_id');
    }

}
