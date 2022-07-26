<?php

namespace SaltEmployee\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class EmployeeWorkExperiences extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',

        // Fields table
        'id',
        'employee_id',
        'company_name',
        'job_position',
        'start_date',
        'end_date',
    ];


    protected $rules = array(
        'employee_id' => 'required|string',
        'company_name' => 'required|string',
        'job_position' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date',

    );

    protected $auths = array (
        'index',
        'store',
        'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $structures = array();
    protected $forms = array();

    protected $searchable = array(
        'employee_id',
        'company_name',
        'job_position',
        'start_date',
        'end_date',
    );

}
