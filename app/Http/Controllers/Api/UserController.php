<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
   /**
     * @OA\Get(
     *   path="/api/users",
     *   tags={"users"},
     *   summary="get all users",
     *       description="get all users",
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function index()
    {
        return UserResource::collection(User::orderBy('id','desc')->paginate());
    }
/**
     * @OA\Post(
     *   path="/api/users",
     *   tags={"users"},
     *   summary="create user",
     *       description="create user",
     *
     *
     *      @OA\RequestBody(
    *     required=true,
    *     @OA\MediaType(
    *       mediaType="application/json",
    *       @OA\Schema(
    *          @OA\Property(
    *           property="panel_code",
    *           type="integer",
    *         ),
    *          @OA\Property(
    *           property="name",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="last_name",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="username",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="national_code",
    *           type="string",
    *         ),
    *
    *           @OA\Property(
    *           property="password",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="username_maha",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="password_maha",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="personal_code",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="address",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="phone",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="moblie",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="permissions",
    *           type="string",
    *         ),
    *       ),
    *     ),
    *   ),

     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/

    public function store(Request $request)
    {
        $inputs = $request->all()+['panel_code'=>'123456789'];

        $password = $request->exists('password') ? $request->password : $request->national_code;

        $inputs['password']=Hash::make($password);

        $password_maha = $request->exists('password_maha') ? Hash::make($request->password_maha) : null;

        $inputs['password_maha'] = $password_maha;

        $user = User::create($inputs);
        return response()->json(new UserResource($user),Response::HTTP_CREATED);
    }

      /**
     * @OA\Get(
     *   path="/api/users/{user}",
     *   tags={"users"},
     *   summary="get user by id",
     *       description="get user by id",
     *   @OA\Parameter(
     *      name="user",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *   @OA\Response(
     *      response=202,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function show(User $user)
    {
        return response()->json(new UserResource($user) , Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/users/{user}",
     *   tags={"users"},
     *   summary="update user",
     *       description="update user",
     *
     *      @OA\Parameter(
     *      name="user",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *
     *
     *
     *      @OA\RequestBody(
    *     required=true,
    *     @OA\MediaType(
    *       mediaType="application/json",
    *       @OA\Schema(
    *          @OA\Property(
    *           property="panel_code",
    *           type="integer",
    *         ),
    *          @OA\Property(
    *           property="name",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="last_name",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="username",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="national_code",
    *           type="string",
    *         ),
    *
    *           @OA\Property(
    *           property="password",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="username_maha",
    *           type="string",
    *         ),
    *           @OA\Property(
    *           property="password_maha",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="personal_code",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="address",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="phone",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="moblie",
    *           type="string",
    *         ),
    *          @OA\Property(
    *           property="permission",
    *           type="string",
    *         ),
    *       ),
    *     ),
    *   ),

     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function update(Request $request,User $user)
    {
        $inputs = $request->all();

        $password = $request->exists('password') ? $request->password : $request->national_code;

        $inputs['password']=Hash::make($password);

        $password_maha = $request->exists('password_maha') ? Hash::make($request->password_maha) : null;

        $inputs['password_maha'] = $password_maha;

        $user->update($inputs);
        return response()->json(new UserResource($user), Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/users/{user}",
     *   tags={"users"},
     *   summary="delete user by id",
     *       description="delete user by id",
     *   @OA\Parameter(
     *      name="user",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *   @OA\Response(
     *      response=204,
     *       description="Success (without content)",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}

