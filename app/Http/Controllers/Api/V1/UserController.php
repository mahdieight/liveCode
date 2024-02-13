<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Controller\Api\V1\UserControllerInterface;
use App\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="UserController", version="0.1")
 */
class UserController extends Controller implements UserControllerInterface
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(config('pagination.per_page'));

        return Response::message('user.messages.users_successfully_found')->data(new UserCollection($users))->send();
    }
}
