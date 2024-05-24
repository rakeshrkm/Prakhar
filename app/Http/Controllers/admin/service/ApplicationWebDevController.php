<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ApplicationWebDev;
use Illuminate\Http\Request;
use File;

class ApplicationWebDevController extends Controller
{
    public function create(Request $request){
        $applicationWeb = ApplicationWebDev::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.application_web_dev',compact('applicationWeb'));
    }
    
     public function Update(Request $request){
       
     $validated = $request->validate([
        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        
        'key_benefit_title' => 'required',
        'key_benefit_heading_1' => 'required',
        'key_benefit_content_1' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        'key_benefit_heading_4' => 'required',
        'key_benefit_content_4' => 'required',
        'key_benefit_heading_5' => 'required',
        'key_benefit_content_5' => 'required',
        'key_benefit_heading_6' => 'required',
        'key_benefit_content_6' => 'required',
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
         'choose_us_heading_5' => 'required',
        'choose_us_content_5' => 'required',
        'choose_us_heading_6' => 'required',
        'choose_us_content_6' => 'required',
        
        'faq_title' => 'required',
        'faq_heading_1' => 'required',
        'faq_content_1' => 'required',
        'faq_heading_2' => 'required',
        'faq_content_2' => 'required',
        'faq_heading_3' => 'required',
        'faq_content_3' => 'required',
        'faq_heading_4' => 'required',
        'faq_content_4' => 'required',
        'faq_heading_5' => 'required',
        'faq_content_5' => 'required',
        'status' => 'required'
    ]);
    
    $webAppDev = $request->id ? ApplicationWebDev::find($request->id) : new ApplicationWebDev();
    if ($request->hasFile('app_web_image')) {
        // Code for app_web_image
        $image_path = public_path("/uploads/services/" . $webAppDev->app_web_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('app_web_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $webAppDev->app_web_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('app_web_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $webAppDev->app_web_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('app_web_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $webAppDev->app_web_faq_image;
        }
    
        $webAppDev->fill($request->all());
        $webAppDev->page_id = 3;
        $webAppDev->app_web_image = $imgName;
        $webAppDev->app_web_faq_image = $faqimgName;
        $webAppDev->save();
        return redirect()->route('admin.application-web-development.create')->with('success', 'Data updated Successfully !');
    }
}
