<?php

namespace App\Http\Controllers;

use App\Repositories\IPreOnboardingrepositories;
use Illuminate\Http\Request;
use App\CandidatePreOnBoardingModel;
use Illuminate\Support\Facades\DB;

use Session;

class CandidateController extends Controller
{
    public $preon;
    // public $sess_info;


    public function __construct(IPreOnboardingrepositories $preon)
    {
            $this->preon = $preon;


    }
    public function profile(){
        return view('candidate.profile');
        }
        public function candidate_dashboard(){


            return view('candidate.dashboard');
        }
        public function buddy()
        {
            $sess_info=Session::get("session_info");
            $table1="candidate_details";
            $cid=array("cdID"=>$sess_info["empID"]);
            $id=array("empId"=>$sess_info["empID"]);
            $table="buddyfeedbackfields";
            $fields=$this->preon->getonBoardingFields($table);
            $feedback_info=$this->preon->get_buddy_info($id);
            $user_info=$this->preon->Check_onBoard($table1,$cid);
            $data['fields']=$fields;
            $data['feedback_info']=$feedback_info;
            $data['user_info']=$user_info;

            //  echo json_encode($data);


            return view('candidate.buddy_feedback')->with('buddy_fields',$data);
        }
    public function preOnboarding()
    {
           $sess_info=Session::get("session_info");
           $empId=$sess_info["empID"];
           $data=array('emp_id'=>$empId);
           $table="candidate_preonboarding";
           $table1="candidatepreonboardingfields";
           $fields=$this->preon->getonBoardingFields($table1);
           $user_info=$this->preon->Check_onBoard($table,$data);
        //    if($user_info)
        if($user_info)
        {
            $data['user_info']=$user_info;

        }
        else{
            $data['user_info']="";
        }

           $data['fields']=$fields;

//  echo json_encode($data['user_info']);
//
          return view('candidate.preOnboarding')->with('userdata',$data);
        // return view('candidate.preOnboarding')->with('userdata',$data);
    }
    public function insertPreOnboarding(Request $request)
    {
           $sess_info=Session::get("session_info");
           $empId=$sess_info["empID"];
           $data=array('emp_id'=>$empId);
           $recruiter_id="900042";
           $table="candidate_preonboarding";
           $usercheck=$this->preon->Check_onBoard($table,$data);

           if(count($usercheck) > 0)
           {
            foreach($_POST['onboard'] as $onboard)
            {
                      if($onboard['date']=="")
                      {
                           $date=NULL;
                      }
                      else{
                          $date=$onboard['date'];
                      }

                $main_data[]=array(
                                   'type'=>$onboard['verified'],
                                    'date'=>$date);
            }
            // $test="1";
                $response=$this->preon->update_onboard($main_data,$empId,$usercheck);
           }
           else{
            foreach($_POST['onboard'] as $onboard)
            {
                      if($onboard['date']=="")
                      {
                           $date=NULL;
                      }
                      else{
                          $date=$onboard['date'];
                      }

                $main_data[]=array('preonboarding_process'=>$onboard['Process'],
                                   'type'=>$onboard['verified'],
                                    'date'=>$date,
                                    'emp_id'=>$empId,
                                    'recruiter_id'=>$recruiter_id);
            }
            $test="2";
                 $response=$this->preon->insert_onboard($main_data);
           }


           if($response)
           {
                $result=array('type'=>1,"message"=>"Data Updated Successfully");
           }
           else{
            $result=array('type'=>2,"message"=>"Problem in Updating Data");

           }

           echo json_encode($result);
    }


          public function InsertBuddyFeedback(Request $request)
          {
                 $data=$request->buddy_data;
                 foreach($data as $data1){
                      $res[]=array("empId"=>$data1["empId"],
                                  "fieldid"=>$data1["fieldid"],
                                  "response"=>$data1["response"],
                                  "comments1"=>$data1["comments1"],
                                  "comments2"=>$data1["comments2"],
                                  "comments3"=>$data1["comments3"],
                                  "remarks"=>$data1["remarks"]);
                 }
                 $response=$this->preon->insert_buddy_feedback($res);
                 if($response){
                      $result=array('status'=>1,"message"=>"Data Added Successfully");
                 }
                 else{
                      $result=array('status'=>0,"message"=>"Problem in Adding Data");
                 }

                 echo json_encode($result);
          }





}
