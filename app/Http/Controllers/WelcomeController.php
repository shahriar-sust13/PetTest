<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogImage;

class WelcomeController extends Controller
{
    //

    /**
    *   It will return the ImageId of Article blogId 
    */
    function getImageId($blogId){
        $image = BlogImage::where('blogId', $blogId)->first();
        if( $image == null )    return 0;
        $imageId = $image->id;
        return $imageId;
    }

    public function welcomePage(){
        $articles = Blog::orderBy('id', 'desc')->take(4)->get();

        foreach($articles as $article){
            $limit = 120;
            $content = $article->description;
            if( strlen($content)>$limit ){
                $content = substr($content, 0, $limit);
                $content = $content.'...';
            }
            $article->description = $content;
            $article->imageId = $this->getImageId($article->id);
        }

        return view('welcome', compact('articles'));
    }
}
