<?php

namespace Api\BlogPost\Database\Repos\Repositories;

use Api\BlogPost\Database\Repos\Contracts\BlogPostRepositoryInterface;
use Api\BlogPost\Models\BlogPost;
use Api\Tag\Models\Tag;
use Illuminate\Http\Request;

class BlogPostRepository implements BlogPostRepositoryInterface
{

    public function __construct(
        protected BlogPost $model,
    ){}

    public function getAllWithPagination(Request $request): mixed
    {
        return $this->model
            ->newQuery()
            ->with(['creator' , 'categories'])
            ->when($request->get('title') , function ($q,$value){
                $q->where("title" , "LIKE" , "%$value%");
            })
            ->when($request->get('creator_id') , function ($q,$value){
                $q->where('created_by' , $value);
            })
            ->when($request->get('category_id') , function ($q,$value){
                $q->where('category_id' , $value);
            })
            ->when(($request->get('type') == "justTrashed") , function ($q,$value){
                $q->onlyTrashed();
            })
            ->paginate(20);
    }

    public function create(array $inputs): BlogPost
    {
        $post = null;

        \DB::transaction(function () use ($inputs , &$post) {

            $post = $this->model->create($inputs);

            $post->categories()->attach($inputs['categories']);

            $post->addMedia($inputs['thumbnail'])->toMediaCollection('thumbnail');

            $tags = [];

            foreach ($inputs['tags'] as $tag) {
                $tags[] = [
                    'name' => $tag,
                    'tagable_id' => $post->id,
                    'tagable_type' => BlogPost::class,
                ];
            }

            if (!empty($tags))
                Tag::insert($tags);

        });


        return $post;
    }

    public function update(BlogPost $post, array $inputs): bool
    {
        \DB::transaction(function () use ($inputs , &$post) {

            $post->update($inputs);

            $post->categories()->sync($inputs['categories']);

            if ($inputs['thumbnail']) {
                $post->clearMediaCollection('thumbnail');
                $post->addMedia($inputs['thumbnail'])->toMediaCollection('thumbnail');
            }

            Tag::where('tagable_type' , BlogPost::class)
                ->where('tagable_id' , $post->id)
                ->delete();

            $tags = [];

            foreach ($inputs['tags'] as $tag) {
                $tags[] = [
                    'name' => $tag,
                    'tagable_id' => $post->id,
                    'tagable_type' => BlogPost::class,
                ];
            }

            if (!empty($tags))
                Tag::insert($tags);

        });

        return true;
    }

    public function delete(BlogPost $post): mixed
    {
        return $post->delete();
    }

    public function restore($id): mixed
    {
        return $this->model->where('id' , $id)->withTrashed()->restore();
    }
}
