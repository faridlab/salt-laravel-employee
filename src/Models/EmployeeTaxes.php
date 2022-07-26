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

class EmployeeTaxes extends Resources {

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
        'npwp_number',
        'ptkp_status',
        'tax_method',
        'tax_salary',
        'taxable_date',
        'tax_status',
        'beginning_netto',
        'pph21_paid',
    ];

    protected $rules = array(
        'employee_id' => 'required|string',
        'npwp_number' => 'required|string',
        'ptkp_status' => 'required|string',
        'tax_method' => 'required|string',
        'tax_salary' => 'required|string',
        'taxable_date' => 'required|date',
        'tax_status' => 'required|string',
        'beginning_netto' => 'nullable|integer',
        'pph21_paid' => 'nullable|integer',
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
        'npwp_number',
        'ptkp_status',
        'tax_method',
        'tax_salary',
        'taxable_date',
        'tax_status',
        'beginning_netto',
        'pph21_paid',
    );

}
