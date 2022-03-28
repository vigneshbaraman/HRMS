<?php
/*test krish*/
namespace App\Http\Controllers;

use App\Repositories\IAdminRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct(IAdminRepository $admrpy)
    {
        $this->admrpy = $admrpy;
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }
    public function permission()
    {
        return view('admin.permission');
    }
    public function business()
    {
        return view('admin.business');
    }
    public function grade()
    {
        return view('admin.grade');
    }
    public function location()
    {
        return view('admin.location');
    }
    public function blood()
    {
        return view('admin.blood');
    }
    public function roll()
    {
        return view('admin.roll');
    }
    public function department()
    {
        return view('admin.department');
    }
    public function state()
    {
        return view('admin.state');
    }
    public function personnel()
    {
        return view('admin.personnel');
    }
    public function user()
    {
        return view('admin.users');
    }
    public function roles()
    {
        return view('admin.add_roles');
    }

    public function add_business_unit(Request $req)
    {
        $bu_id = 'BU'.((DB::table( 'business_unit' )->max('id')) +1);

        $today_date = Carbon::now()->format('Y-m-d');
        $form_data = array(
            'bu_id' => $bu_id,
            'business_name' => $req->input('business_name'),
            'created_on' => $today_date,
            'created_by' => '900315'

        );
        // echo '<pre>';print_r($form_data);
        // die;
        $add_business_unit_process_result = $this->admrpy->add_business_unit_process( $form_data );

        $response = 'success';
        return response()->json( ['response' => $response] );
          echo json_encode($form_data);
    }
            public function add_roles_process(Request $req)
        {
        $bu_id = 'RO'.((DB::table( 'roles' )->max('id')) +1);



        $today_date = Carbon::now()->format('Y-m-d');
        $form_data = array(
        'role_id' => $bu_id,
        'name' => $req->input('business_name'),
        'status' => "active",
        'created_on' => $today_date,
        'created_by' => '900315'



        );
        // echo '<pre>';print_r($form_data); die;
        $add_business_unit_process_result = $this->admrpy->add_role_process( $form_data );



        $response = 'success';
        return response()->json( ['response' => $response] );
        echo json_encode($form_data);
        }

}
