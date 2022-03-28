<?php

namespace App\Repositories;


interface IPreOnboardingrepositories{
       public function Check_onBoard($table,$test);
       public function getonBoardingFields($table);
       public function insert_onboard($data);
       public function update_onboard($data,$id,$field);
       public function insert_buddy_feedback($data);
       public function get_buddy_info($id);





}

?>
