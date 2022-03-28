<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\CandidatePreOnBoardingModel;
use App\userModel;
use App\Models\CustomUser;




class HrPreonboardingrepositories implements IHrPreonboardingrepositories {
    public function getonboardinginfo($userid,$status){
            $result=CandidatePreOnBoardingModel::join('customusers','customusers.empId','=','candidate_preonboarding.emp_id')
                     ->where('customusers.pre_onboarding',1)
                     ->where('candidate_preonboarding.emp_id',$userid)->get();

             return $result;


    }

    public function get_candidate_info($id)
    {
        $result=CustomUser::join('candidate_details','customusers.empId','=','candidate_details.cdID')
        ->where('candidate_details.created_by',$id["created_by"])
        ->where('customusers.pre_onboarding',$id["pre_onboarding_status"])->get();
         return $result;
    }

}


?>
