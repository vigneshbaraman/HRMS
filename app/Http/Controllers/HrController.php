<?php
namespace App\Http\Controllers;
use App\Repositories\IHrPreonboardingrepositories;
use App\Repositories\IPreOnboardingrepositories;
use Illuminate\Http\Request;
use Session;

class HrController extends Controller
{


    public $preon;

    public function __construct(IHrPreonboardingrepositories $hpreon,IPreOnboardingrepositories $preon)
    {
        $this->hpreon = $hpreon;
        $this->preon = $preon;
        // $this->middleware('backend_coordinator');
    }



    public function index()
     {
        return view('HRSS.dashboard');
     }

     public function preOnboarding()
     {
          $sess_info=Session::get("session_info");
        //   $id=array('pre_onboarding_status'=>'1','created_by'=>'900057');
          $id=array('pre_onboarding_status'=>$sess_info["pre_onboarding"],'created_by'=>$sess_info["empID"]);
          $user_info=$this->hpreon->get_candidate_info($id);
          $data['user_info']=$user_info;
          return view('HRSS.preOnboarding')->with('info',$data);
     }

        public function Show_preOnBoarding(Request $request)
        {
           $user_id=$request->id;
           $status=1;
           $onboarding_info=$this->hpreon->getonboardinginfo($user_id,$status);
           echo json_encode($onboarding_info);

        }


     public function Candidate()
     {
         return view('HRSS.candidate');
     }

    public function profile()
    {
    return view('HRSS.profile');

    }

    public function userdocuments()
    {
    return view('HRSS.userdocuments');

    }
    public function CandidateProfile()
    {
    return view('HRSS.candidate_profile_add');

    }
}
