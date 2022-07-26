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

class EmployeeBpjs extends Resources {

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
        'bpjs_ketenagakerjaan_number',
        'npp_bpjs_ketenagakerjaan',
        'bpjs_ketenagakerjaan_date',
        'bpjs_kesehatan_number',
        'bpjs_kesehatan_family',
        'bpjs_kesehatan_date',
        'bpjs_kesehatan_cost',
        'jht_cost',
        'jaminan_pensiun_cost',
        'jaminan_pensiun_date',
    ];

    protected $rules = array(
        'employee_id' => 'required|string',
        'bpjs_ketenagakerjaan_number' => 'required|string',
        'npp_bpjs_ketenagakerjaan' => 'required|string',
        'bpjs_ketenagakerjaan_date' => 'required|date',
        'bpjs_kesehatan_number' => 'required|string',
        'bpjs_kesehatan_family' => 'required|string',
        'bpjs_kesehatan_date' => 'required|date',
        'bpjs_kesehatan_cost' => 'required|string',
        'jht_cost' => 'required|string',
        'jaminan_pensiun_cost' => 'required|string',
        'jaminan_pensiun_date' => 'required|date',
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
        'bpjs_ketenagakerjaan_number',
        'npp_bpjs_ketenagakerjaan',
        'bpjs_ketenagakerjaan_date',
        'bpjs_kesehatan_number',
        'bpjs_kesehatan_family',
        'bpjs_kesehatan_date',
        'bpjs_kesehatan_cost',
        'jht_cost',
        'jaminan_pensiun_cost',
        'jaminan_pensiun_date',
    );

}
