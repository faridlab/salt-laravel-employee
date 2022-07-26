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

class Employments extends Resources {

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
        'employment_status',
        'join_date',
        'end_join_date',
        'organization_id',
        'department_id',
        'level_id',
        'position_id',
        'direct_manager_id',
        'status',
    ];


    protected $rules = array(
        'employee_id' => 'required|string',
        'employment_status' => 'required|string',
        'join_date' => 'required|date',
        'end_join_date' => 'nullable|date',
        'organization_id' => 'required|string',
        'department_id' => 'required|string',
        'level_id' => 'required|string',
        'position_id' => 'required|string',
        'direct_manager_id' => 'nullable|string',
        'status' => 'required|string',
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
        'employment_status',
        'join_date',
        'end_join_date',
        'organization_id',
        'department_id',
        'level_id',
        'position_id',
        'direct_manager_id',
        'status',
    );

    public function organization() {
        return $this->belongsTo('SaltOrganization\Models\Organizations', 'organization_id', 'id')->withTrashed();
    }

    public function department() {
        return $this->belongsTo('SaltOrganization\Models\OrganizationStructures', 'department_id', 'id')->where('type', 'department')->withTrashed();
    }

    public function level() {
        return $this->belongsTo('SaltOrganization\Models\OrganizationStructures', 'level_id', 'id')->where('type', 'level')->withTrashed();
    }

    public function position() {
        return $this->belongsTo('SaltOrganization\Models\OrganizationStructures', 'position_id', 'id')->where('type', 'position')->withTrashed();
    }

    public function manager() {
        return $this->belongsTo('SaltEmployee\Models\Employees', 'direct_manager_id', 'id')->withTrashed();
    }
}
