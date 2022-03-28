<?php

namespace App\Repositories;

interface IAdminRepository {
    public function add_business_unit_process( $form_data );
    /*roles*/
    public function add_role_process( $form_data );
}
