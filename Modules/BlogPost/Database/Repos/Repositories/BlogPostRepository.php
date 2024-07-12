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
            ->with(['creator' , 'category'])
            ->when($request->get('title') , function ($q,$value){
                $q->where("title" , "LIKE" , "%$value%");
            })
            ->when($request->get('creator_id') , function ($q,$value){
                $q->where('created_by' , $value);
            })
            ->when($request->get('category_id') , function ($q,$value){
                $q->where('category_id' , $value);
            })
            ->paginate(20);
    }

    public function create(array $inputs): BlogPost
    {
        $post = $this->model->create($inputs);

        $post->categories()->attach($inputs['categories']);

        $tags = [];

        foreach ($inputs['tags'] as $tag) {
            $tags[] = [
              'name' => $tag,
              'tagable_id' => $post->id,
              'tagable_type' => BlogPost::class,
            ];
        }

        Tag::insert($tags);

        return $post;
    }

    public function update(BlogPost $post, array $inputs): bool
    {
        return $post->update($inputs);
    }

    public function delete(BlogPost $post): bool
    {
        return $post->delete();
    }
}
