<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['category', 'user', 'tags'];

    protected $appends = ['view_count', 'cover_small', 'rectangle_cover_image', 'square_cover_image', 'square_cover_image_high'];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function incrementReadCount()
    {
        $this->reads++;
        return $this->save();
    }

    public function view()
    {
        return $this->hasMany(PostView::class);
    }

    public function getViewCountAttribute()
    {
        return $this->view()->count();
    }

    public function showPost()
    {
        if (auth()->id() == null) {
            return $this->view()
                ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->view()
            ->where(function ($postViewsQuery) {
                $postViewsQuery
                    ->where('session_id', '=', request()->getSession()->getId())
                    ->orWhere('user_id', '=', (auth()->check()));
            })->exists();
    }

    public function getCoverSmallAttribute()
    {
        if ($this->attributes['cover']) {
            $separator = '/upload/';
            $exp = explode($separator, $this->attributes['cover']);

            return $exp[0] . '/upload/c_fill,ar_16:9,q_5,f_avif/' . $exp[1];
        } else {
            return '';
        }
    }

    public function getRectangleCoverImageAttribute()
    {
        $separator = '/upload/';

        if ($this->attributes['cover']) {
            $exp = explode($separator, $this->attributes['cover']);


            return $exp[0] . '/upload/c_fill,ar_16:9,q_50/' . $exp[1];
        } else {
            return '';
        }
    }

    public function getSquareCoverImageAttribute()
    {
        $separator = '/upload/';

        if ($this->attributes['cover']) {

            $exp = explode($separator, $this->attributes['cover']);

            return $exp[0] . '/upload/c_fill,h_200,w_200,f_avif,q_50/' . $exp[1];
        } else {
            return '';
        }
        // return $exp[0] . '/upload/c_fill,ar_4:3,q_50/' . $exp[1];

    }

    public function getSquareCoverImageHighAttribute()
    {
        $separator = '/upload/';

        if ($this->attributes['cover']) {

            $exp = explode($separator, $this->attributes['cover']);

            return $exp[0] . '/upload/c_fill,h_200,w_200/' . $exp[1];
        } else {
            return '';
        }
        // return $exp[0] . '/upload/c_fill,ar_4:3,q_50/' . $exp[1];

    }
}
