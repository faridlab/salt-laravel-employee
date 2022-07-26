<?php

namespace SaltEmployee\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use SaltLaravel\Models\Resources;
use SaltLaravel\Services\ResponseService;
use SaltLaravel\Controllers\ApiResourcesController;

class ApiEmployeeResourcesController extends ApiResourcesController
{
    protected $modelNamespace = 'SaltEmployee';
}
