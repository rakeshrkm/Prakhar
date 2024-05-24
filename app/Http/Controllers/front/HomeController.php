<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\HomeAboutSection;
use App\Models\HomeFirstSection;
use App\Models\HomeServiceSection;
use App\Models\HomeProfessionalSkillSection;
use App\Models\HomeSectionFive;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\AboutUs;
use App\Models\AboutFaq;
use App\Models\ChooseUs;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['service'] = HomeServiceSection::where('page_id',1)->first();
        $data['professionalSkill'] = HomeProfessionalSkillSection::where('page_id', 1)->first();
        $data['professionalExperience'] = HomeSectionFive::where('page_id', 1)->first();
        $data['blogs'] = Blog::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->take(3)->get();
    
        return view('front.index', compact('data'));
    }

    public function about(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = AboutUs::where('page_id',2)->first();
        $data['mission_vission'] = HomeAboutSection::where('page_id',1)->first();
        $data['homeSectionFive'] = HomeSectionFive::where('page_id',1)->first();
        $data['chooseUs']  = ChooseUs::where('page_id',2)->first();
        $data['professionalExperience'] = HomeSectionFive::where('page_id', 1)->first();
        $data['faqs'] = AboutFaq::orderBy('id', 'desc')->get();
        return view('front.about', compact('data'));
    }

    public function services(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.services', compact('data'));
    }
    public function contact(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.contact', compact('data'));
    }
    
    public function store(Request $request){
        
        try {
     $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'mobile' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ]);
        
        $contact = new Contact();
        $contact->fill($request->all());
        $contact->save();  
        
        $to = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Mail::raw($message, function (Message $mail) use ($to, $subject) {
        $mail->to($to)
             ->subject($subject);
        });

        
        return response()->json([
            'status' => 200,
            'message' =>  'Thanks for contact with us, Team will contact you soon'
            ]);
        } catch (ValidationException $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
    
     public function career(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.career', compact('data'));
    }
     public function blog(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['blogs'] =  Blog::orderBy('id',  'desc')->paginate(9);
        return view('front.blog', compact('data'));
    }
    
       public function sitdrone(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

     //   print_r($data);die;
        return view('front.services.sit_drone', compact('data'));
    }
    
      public function antidrone(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

     //   print_r($data);die;
        return view('front.services.anti_drone', compact('data'));
    }
    public function callCentreSolution(){
        return view('front.services.call_centre_solutions');
    }
    
    
    public function skillDevelopment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.skill_development', compact('data'));
    }
    
     public function corporateTraining(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.corporate_training', compact('data'));
    }
    
    public function skillItRecruitment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.skill_it_recruitment', compact('data'));
    }
    
      public function nonItRecruitment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.non_it_recruitment', compact('data'));
    }
    
     public function itHardwaresAccessories(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.it_hardwares_accessories', compact('data'));
    }
    
    public function licensedSoftwaresSolutions(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.licensed_softwares_solutions', compact('data'));
    }
    
    public function applicationWebDevelopment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.application_web_development', compact('data'));
    }
    
    public function webBasedSoftwares(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.web_based_softwares', compact('data'));
    }
    
    public function systemIntegrationDataService(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.system_integration_data_service', compact('data'));
    }
    
     public function trainingImplementation(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.training_implementation', compact('data'));
    }
    
    public function securitySurvillanceProjectCctv(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.security_survillance_project_cctv', compact('data'));
    }
    
    public function scanningDigitizationDocManagementSystem(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.scanning_digitization_document_management_system', compact('data'));
    }
    
    public function gisRemoteSensingProjects(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.gis_remote_sensing_projects', compact('data'));
    }
    
    public function hrConsultingServices(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.hr_consulting_services', compact('data'));
    }

    public function eventsGallery(){
        $data['gallery_events'] = Gallery::where('status','active')->where('category', 'events')->get();
        return view('front.events-gallery', compact('data'));
    }
    
    
    
    
    
}
