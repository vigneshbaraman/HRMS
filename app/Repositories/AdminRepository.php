<?php

namespace App\Repositories;

use App\business_unit;
use Illuminate\Support\Facades\DB;
use App\Models\Role;


class AdminRepository implements IAdminRepository
{
    public function add_business_unit_process( $form_data ){

      $response=business_unit::insert($form_data);
      return $response;
    }
    public function add_role_process( $form_data ){
$response=Role::insert($form_data);
// echo '<pre>';print_r($form_data); die;
return $response;
}
}
