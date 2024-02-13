<?php

namespace App\Contracts\Controller\Api\V1;


interface UserControllerInterface
{
    /**
     * @OA\Get(
     *      path="/api/v1/users",
     *      operationId="getUserList",
     *      tags={"Users"},
     *      summary="Get User List",
     *      description="Returns User list",
     *      @OA\Response(response=200,description="Successful operation"),
     *      @OA\Response(response=404, description="Payment List Not Found"),
     * )
     */
    public function index();
}
