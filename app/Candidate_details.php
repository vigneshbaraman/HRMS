<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_details extends Model
{
    protected $fillable = [
        'cdID',
        'rfh_no',
        'status',
        'hepl_recruitment_ref_number',
        'candidate_name',
        'candidate_cv',
        'red_flag_status',
        'created_on',
        'created_by',
        'candidate_source',
        'gender',
        'candidate_status',
        'candidate_email',
        'candidate_type',
        'candidate_mobile',

        'proof_of_identity',
        'poi_filename',
        'proof_of_address',
        'poa_filename',
        'tax_entity_proof',
        'proof_of_relieving',
        'proof_of_vaccination',
        'proof_of_dob',
        'proof_of_bg',
        'proof_of_bankacc',

        'doc_status',
        'offer_rel_status',
        'c_doc_status',
        'payroll_status',
        'leader_status',
        'po_finance_status',
        'payroll_verify_type',
        'welcome_buddy',
        'offer_letter_filename',
        'or_cc_mailid',
        'or_bc_mailid',
        'or_doj',
        'closed_salary_pa',
        'get_emp_mode',
        'or_department',
        'po_type',
        'po_file_status',
        'or_recruiter_name',
        'or_recruiter_email',
        'or_recruiter_mobile_no',
        'approver',
        'c_doc_upload_status',
    ];

}
