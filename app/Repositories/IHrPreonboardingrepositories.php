<?php

namespace App\Repositories;

interface IHrPreonboardingrepositories{
   public function getonboardinginfo($userid,$status);
   public function get_candidate_info($id);

}


?>
