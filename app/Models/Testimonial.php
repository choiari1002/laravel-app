<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// 밑은 파일이 없는데 어떻게 생성가능한지? 써야하는지? -> 나중에 라이브러리 쓸 예정 지금은 넣지말기.
// use Cviebrock\EloquentSluggable\Sluggable;

class Testimonial extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $fillable = [
        'thumbnail',
        'name',
        'content',
        'slug',
        'is_active'
    ];

    // 위의 아이만 가져왔는데 아래도 필요한지? 혹시 웹/관리자 각각 가져오는 건지? -> edit 누르면 쓰는듯?
    // public function get_path()
    // {
    //     return "/mentors/{$this->slug}";
    // }

    // public function get_mentor_path()
    // {
    //     return "/dashboard/mentors/{$this->slug}";
    // }

    public function get_path()
    {
        return "/testimonials/{$this->slug}";
    }

    public function get_testimonial_path()
    {
        return "/dashboard/testimonials/{$this->slug}";
    }

    // 밑의 함수는 무슨 역할을 하는건지?
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeNotActive($query)
    {
        return $query->where('is_active', false);
    }
}


