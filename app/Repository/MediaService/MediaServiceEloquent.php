<?php


namespace App\Repository\MediaService;


use App\Models\mediaService;
use Illuminate\Support\Facades\Auth;

class MediaServiceEloquent implements MediaServiceInterface
{

    public function showByServiceUser(int $id)
    {
        return mediaService::where('user_id', $id)
            ->orderBy('id', 'desc')
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
            'description' => $data['description'],
            'short_review' => $demo,
            'review' => $video,
            'user_id' => Auth::user()->id
        ]);

        return $media;
    }
}
