<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *  @OA\Info(
 *      title="Ousourcing Syste m",
 *      version="1.0.0",
 *      description="API documentation for Ousourcing System",
 *      @OA\Contact(
 *          email="khanamdev@gmail.com"
 *      )
 *  ),
 *  @OA\PathItem(
 *      path="/api/v1"
 *  )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
