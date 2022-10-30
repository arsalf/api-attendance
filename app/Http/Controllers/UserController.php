<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\User;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    /**
     * @SWG\Get(
     *   path="/",
     *   summary="Version",
     *   @SWG\Response(
     *     response=200,
     *     description="Working"
     *   ),
     *   @SWG\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */
    public function show($id)
    {
        return ModelsUser::findOrFail($id);
    }
}
