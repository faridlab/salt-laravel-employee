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

class EmployeeEducations extends Resources {

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
        'instituion_name',
        'degree',
        'major',
        'field',
        'score',
        'start_year',
        'end_year',
    ];


    protected $rules = array(
        'employee_id' => 'required|string',
        'instituion_name' => 'required|string',
        'degree' => 'required|string',
        'major' => 'required|string',
        'field' => 'required|string',
        'score' => 'nullable|float',
        'start_year' => "required|digits:4|integer|min:1900|max:{(date('Y')+1)}",
        'end_year' => "nullable|digits:4|integer|min:1900|max:{(date('Y')+1)}",
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
        'instituion_name',
        'degree',
        'major',
        'field',
        'score',
        'start_year',
        'end_year',
    );

}
