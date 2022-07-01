<?php


namespace App\Repository\MediaService;


use App\Models\mediaService;
use Illuminate\Support\Facades\Auth;

class MediaServiceEloquent implements MediaServiceInterface
{

    public function showByServiceUser()
    {
        return mediaService::orderBy('id', 'desc')
            ->limit(3)
            ->get();
    }

    public function create(array $data)
    {
        $demo = $data['short_review']->store('service/video', 'public');
        $video = $data['review']->store('service/video', 'public');

        $media = mediaService::create([
            'title' => $data['title'],
            'price' => $data['price'],
            'category' => $data['category'],
            'description' => $data['description'],
            'short_review' => $demo,
            'review' => $video   ,
            'user_id' => Auth::user()->id
        ]);

        return $media;
    }

    public function getById(int $id)
    {
        return mediaService::where('id', $id)->firstOrFail();
    }
}
