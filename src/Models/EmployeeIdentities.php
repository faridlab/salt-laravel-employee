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

class EmployeeIdentities extends Resources {

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
        'identity_type',
        'identity_number',
        'identity_expiry_date',
        'is_permanent',
    ];


    protected $rules = array(
        'employee_id' => 'required|string',
        'identity_type' => 'required|string',
        'identity_number' => 'required|string',
        'identity_expiry_date' => 'nullable|date',
        'is_permanent' => 'nullable|boolean',
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
        'identity_type',
        'identity_number',
        'identity_expiry_date',
        'is_permanent',
    );

}
