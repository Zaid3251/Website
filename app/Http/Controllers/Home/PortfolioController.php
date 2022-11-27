<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Carbon;
use Image;
class PortfolioController extends Controller
{
    public function AllPortfolio(){
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('portfolio'));
    }
    public function AddPortfolio(){
        return view('admin.portfolio.portfolio_add');
    }


    public function StorePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',
        ],[
            
            'portfolio_name.required' => 'Portfolio Name is Required',
            'portfolio_title.required' => 'Portfolio Title is Required',
            // 'portfolio_image.required' => 'Portfolio Image is Required',
        ]);

        $image = $request->file('portfolio_image');
        if( $image ){
            $name_gen = hexdec(uniqid()) . '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1020, 519)->save('upload/portfolio/' . $name_gen);
            $save_url = 'upload/portfolio/' . $name_gen;
        }else{
            $save_url = '';

        }

        if($request->id){

            Portfolio::findOrFail($request->id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now(),
    
            ]);
            $notification = array(
                'message' => 'Portfolio Updated Successfully', 'alert-type' => 'success',
            );
        }else{
            Portfolio::Insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now(),
    
            ]);
            $notification = array(
                'message' => 'Portfolio Inserted Successfully', 'alert-type' => 'success',
            );
            
        }


        return redirect()->route('all.portfolio')->with($notification);
    }

    public function EditPortfolio($id)
    {
        $portfolio = PortFolio::findOrFail($id);
        return view('admin.portfolio.portfolio_edit', compact('portfolio'));
    }
    public function DeletePortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $img = $portfolio->portfolio_image;
        unlink($img);
        
        Portfolio::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Portfolio Deleted Successfully', 'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function PortfolioDetails($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio_details', compact('portfolio'));
    }
    public function HomePortfolio()
    {
        $portfolio = Portfolio::latest()->get();
        return view('frontend.portfolio', compact('portfolio'));
    }
}
