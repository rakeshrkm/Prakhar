<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ItHardwaresAccessories;
use Illuminate\Http\Request;
use File;

class ItHardwaresAccessoriesController extends Controller
{
    public function create(Request $request){
        $nonItRecruitment = ItHardwaresAccessories::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.it_hardware_accessories',compact('nonItRecruitment'));
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
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
        
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
    
    $skilDevlopment = $request->id ? ItHardwaresAccessories::find($request->id) : new ItHardwaresAccessories();
    if ($request->hasFile('it_hardware_ass_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $skilDevlopment->it_hardware_ass_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('it_hardware_ass_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $skilDevlopment->it_hardware_ass_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('it_hardware_ass_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $skilDevlopment->it_hardware_ass_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('it_hardware_ass_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $skilDevlopment->it_hardware_ass_faq_image;
        }
    
        $skilDevlopment->fill($request->all());
        $skilDevlopment->page_id = 3;
        $skilDevlopment->it_hardware_ass_image = $imgName;
        $skilDevlopment->it_hardware_ass_faq_image = $faqimgName;
        $skilDevlopment->save();
        return redirect()->route('admin.it-hardwares-accessories.create')->with('success', 'Data updated Successfully !');
    }
}