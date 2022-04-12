<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Services\UploadFile;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        for ($i = 0; $i < count($posts) ; $i++) {
            $posts[$i]['description'] = mb_substr(strip_tags($posts[$i]['description']), 0, 20).'...';
        }
        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => ['string', 'nullable'],
            'language' => ['string', 'nullable'],
            'client' => ['string', 'nullable'],
            'date' => ['nullable', 'date_format:d-m-Y'],
            'type' => ['string', 'nullable'],
            'industry' => ['string', 'nullable'],
            'website' => ['string', 'nullable'],
            'increase_traffic' => ['string', 'nullable'],
            'problem' => ['string', 'nullable'],
            'solution' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],
            'image' => ['nullable'],
        ]);

        $image_id = null;
        if (isset($validated['image'])) {
            $uploader = new UploadFile();
            $path = $uploader->uploadFile($validated['image']);
            $image_id = $path->id;
        }

        $post = Post::create([
            'image_id' => $image_id,
            'title' => $validated['title'],
            'language' => $validated['language'],
            'client' => $validated['client'],
            'date' => Carbon::parse($validated['date'])->format('Y-m-d'),
            'type' => $validated['type'],
            'industry' => $validated['industry'],
            'website' => $validated['website'],
            'increase_traffic' => $validated['increase_traffic'],
            'problem' => $validated['problem'],
            'solution' => $validated['solution'],
            'description' => $validated['description'],
        ]);

        return PostResource::make($post);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        info(123);
        return PostResource::make($post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $this->validate($request, [
            'title' => ['string', 'nullable'],
            'language' => ['string', 'nullable'],
            'client' => ['string', 'nullable'],
            'date' => ['nullable', 'date_format:d-m-Y'],
            'type' => ['string', 'nullable'],
            'industry' => ['string', 'nullable'],
            'website' => ['string', 'nullable'],
            'increase_traffic' => ['string', 'nullable'],
            'problem' => ['string', 'nullable'],
            'solution' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],
            'image' => ['nullable'],
        ]);

        $image_id = null;
        if (isset($validated['image'])) {
            $uploader = new UploadFile();
            $path = $uploader->uploadFile($validated['image']);
            $image_id = $path->id;
        }

        $post->update([
            'image_id' => $image_id ?? $post->image_id,
            'title' => $validated['title'] ?? $post->title,
            'language' => $validated['language'] ?? $post->language,
            'client' => $validated['client'] ?? $post->client,
            'date' => Carbon::parse($validated['date'])->format('Y-m-d') ?? $post->date,
            'type' => $validated['type'] ?? $post->type,
            'industry' => $validated['industry'] ?? $post->industry,
            'website' => $validated['website'],
            'increase_traffic' => $validated['increase_traffic'] ?? $post->increase_traffic,
            'problem' => $validated['problem'] ?? $post->problem,
            'solution' => $validated['solution'] ?? $post->solution,
            'description' => $validated['description'] ?? $post->description,
        ]);

        return PostResource::make($post);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        $coins = Post::all();

        return PostResource::collection($coins);
    }
}
