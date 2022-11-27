<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;
use Image;
class BlogController extends Controller
{
    public function AllBlog(){
        $blogs = Blog::latest()->get();
        return view('admin.blog.blogs_all', compact('blogs'));
    }

    public function AddBlog(){
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('admin.blog.blogs_add', compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        $request->validate([
            'blog_category_id' => 'required',
            'blog_title' => 'required',
        ],[
            
            'blog_category_id.required' => 'Blog Category is Required',
            'blog_title.required' => 'Blog Title is Required',
        ]);

        $image = $request->file('blog_image');
        print( $image);
        if($image){
            $name_gen = hexdec(uniqid()) . '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);
            $save_url = 'upload/blog/' . $name_gen;
        }else{
            
            $save_url ='';
        }


        if($request->id){

            Blog::findOrFail($request->id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
    
            ]);
            $notification = array(
                'message' => 'Blog Updated Successfully', 'alert-type' => 'success',
            );
        }else{
            Blog::Insert([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
                'created_at' => Carbon::now(),
    
            ]);
            $notification = array(
                'message' => 'Blog Inserted Successfully', 'alert-type' => 'success',
            );
            
        }


        return redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id)
    {
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $blogs = Blog::findOrFail($id);
        return view('admin.blog.blogs_edit', compact('blogs','categories'));
    }

    public function DeleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $img = $blog->blog_image;
        unlink($img);
        
        Blog::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Blog Deleted Successfully', 'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function BlogDetails($id)
    {
        $allblogs = Blog::latest()->limit(5)->get();
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('frontend.blog_details', compact('blogs','allblogs','categories'));
    }
    public function CategoryBlog($id)
    {   $allblogs = Blog::latest()->limit(5)->get();
        $blogpost = Blog::where('blog_category_id',$id)->orderBy('id','DESC')->get();
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $categoryname = BlogCategory::findOrFail($id);
        return view('frontend.cat_blog_details', compact('blogpost','allblogs','categories','categoryname'));
    }
    public function HomeBlog()
    {   
        $allblogs = Blog::latest()->paginate(3);
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('frontend.blog', compact('allblogs','categories'));
    }
}
