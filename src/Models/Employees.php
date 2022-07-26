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

class Employees extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',

        // Fields table provinces
        'id',
        'employee_number',
        'first_name',
        'last_name',
        'email',
        'mobile_phone',
        'phone',
        'birth_place',
        'birth_date',
        'gender',
        'martial_status',
        'blood_type',
        'religion_id',
    ];


    protected $rules = array(
        'employee_number' => 'required|string',
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|string',
        'mobile_phone' => 'required|string',
        'phone' => 'nullable|string',
        'birth_place' => 'required|string',
        'birth_date' => 'required|date',
        'gender' => 'required|string',
        'martial_status' => 'required|string',
        'blood_type' => 'nullable|string',
        'religion_id' => 'nullable|string',
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
        'employee_number',
        'first_name',
        'last_name',
        'email',
        'mobile_phone',
        'phone',
        'birth_place',
        'birth_date',
        'gender',
        'martial_status',
        'blood_type',
        'religion_id',
    );

    // FIXME: this relationship should you pivot relations to employment
    // public function organization() {
    //     return $this->belongsTo('SaltOrganization\Models\Organizations', 'organization_id', 'id');
    // }

}
