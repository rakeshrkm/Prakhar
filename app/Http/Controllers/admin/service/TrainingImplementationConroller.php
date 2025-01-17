<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\TrainingImplementation;
use Illuminate\Http\Request;
use File;

class TrainingImplementationConroller extends Controller
{
    public function create(Request $request){
        $trainingImplemention = TrainingImplementation::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.training_implementation',compact('trainingImplemention'));
    }
    
     public function Update(Request $request){
        //  dd($request);
         
     $validated = $request->validate([
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required|max:255',
        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',

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
         'choose_us_heading_5' => 'required',
        'choose_us_content_5' => 'required',
        
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
        'faq_heading_6' => 'required',
        'faq_content_6' => 'required',
        'status' => 'required'
    ]);
    
    $trainingImplementation = $request->id ? TrainingImplementation::find($request->id) : new TrainingImplementation();
    if ($request->hasFile('training_implementation_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $trainingImplementation->training_implementation_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('training_implementation_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $trainingImplementation->training_implementation_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('training_implementation_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $trainingImplementation->training_implementation_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('training_implementation_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $trainingImplementation->training_implementation_faq_image;
        }
    
        $trainingImplementation->fill($request->all());
        $trainingImplementation->page_id = 3;
        $trainingImplementation->training_implementation_image = $imgName;
        $trainingImplementation->training_implementation_faq_image = $faqimgName;
        $trainingImplementation->save();
        return redirect()->route('admin.training-implementation.create')->with('success', 'Data updated Successfully !');
    }
}
