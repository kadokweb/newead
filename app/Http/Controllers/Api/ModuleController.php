<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResource;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected $repository;

    public function __construct(ModuleRepository $CourseRepository)
    {
        $this->repository = $CourseRepository;
    }

    public function index($courseId)
    {
        $modules = $this->repository->getModuleByCourseId($courseId);

        return ModuleResource::collection($modules);
    }
}
