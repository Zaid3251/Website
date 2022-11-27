<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;

class FooterController extends Controller
{
    public function FooterSetup(){
        $allfooter = Footer::find(1);
        return view('admin.footer.footer_all', compact('allfooter'));
    }
    public function UpdateFooter(Request $request)
    {
        $footer = $request->id;
        Footer::findOrFail($footer)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'adress' => $request->adress,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
        ]);
        $notification = array(
            'message' => 'Footer Updated Successfully', 'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

    }


}
