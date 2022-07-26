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

class EmployeeBankAccounts extends Resources {

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
        'bank_id',
        'account_number',
        'account_name',
    ];


    protected $rules = array(
        'employee_id' => 'required|string',
        'bank_id' => 'required|string',
        'account_number' => 'required|string',
        'account_name' => 'required|string',
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
        'bank_id',
        'account_number',
        'account_name',
    );

    public function employee() {
        return $this->belongsTo('SaltEmployee\Models\Employees', 'employee_id', 'id')->withTrashed();
    }

    public function bank() {
        return $this->belongsTo('SaltEmployee\Models\Banks', 'bank_id', 'id')->withTrashed();
    }
}
