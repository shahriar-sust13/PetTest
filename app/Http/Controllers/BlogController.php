<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogImage;
use App\User;
use App\Comment;
use App\UserImage;

class BlogController extends Controller
{
    //

    public function __construct()
    {
        
    }

    /**
    *	Add new Article in blogs table
    */
    public function addArticle(Request $request){

    	$this->middleware('auth');

    	$blog = new Blog;
    	$userid = \Auth::user()->id;
    	$blog->title = $request->input('article-title');
    	$blog->description = $request->input('article-content');
    	$blog->userId = $userid;
    	$blog->save();

    	if( $request->hasFile('article-img') ){
    		$blogImage = new BlogImage;
	    	$blogImage->blogId = $blog->id;
	    	$blogImage->save();

	    	$image = $request->file('article-img');
	    	$imageName = $blogImage->id . '.' . $image->getClientOriginalExtension();
	    	$image->move('images/blog', $imageName);
    	}

    	$articlePath = 'blog/view/' . $blog->id;
    	return redirect($articlePath);
    }

    /**
    *	It will return the ImageId of Article blogId 
    */
    function getImageId($blogId){
    	$image = BlogImage::where('blogId', $blogId)->first();
    	if( $image == null )	return 0;
    	$imageId = $image->id;
    	return $imageId;
    }

    /**
    *
    */
    public function showArticle(Request $request, $id){
    	$blog = Blog::find($id);
    	$blogId = $blog->id;
    	$imageId = $this->getImageId($blogId);
    	$authorId = $blog->userId;
    	$authorName = User::find($authorId)->name;
        $comments = Comment::where('blogId', $id)->orderBy('id', 'desc')->get();
        foreach($comments as $comment){
            $comment->imageId = UserImage::where('userId', $comment->userId)->first()->imageId;
            $comment->authorName = User::find($comment->userId)->name;
        }
    	return view('article', ['id'=> $id, 'title'=>$blog->title, 'authorName'=>$authorName, 'authorId'=>$authorId, 'imageId'=>$imageId, 'content'=>$blog->description, 'comments'=>$comments]);
    }

    /**
	*
	*/
	public function renderBlog(Request $request){
		$articles = Blog::orderBy('id', 'desc')->paginate(8);

		foreach($articles as $article){
			$limit = 55;
			$content = $article->description;
			if( strlen($content)>$limit ){
				$content = substr($content, 0, $limit);
				$content = $content.'...';
			}
			$article->description = $content;
			$article->imageId = $this->getImageId($article->id);
		}
		return view('blog', ['articles'=>$articles]);
	}

    public function postComment(Request $request, $id){
        $comment = new Comment;
        $userId = \Auth::user()->id;
        $comment->blogId = $id;
        $comment->userId = $userId;
        $comment->description = $request->input('comment');
        $comment->save();
        return redirect('blog/view/'.$id);
    }


}
