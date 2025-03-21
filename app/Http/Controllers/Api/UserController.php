<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user()
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        return response()->json([
            'status' => true,
            'message' => 'User fetched successfully!',
            'user' => new UserResource($user),
        ], 200);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:20420',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->all()
            ], 400);
        }

        $user = Auth::user();
        /** @var \App\Models\User $user **/
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->hasFile('avatar')) {
            $user->clearMediaCollection('avatar');
            $user->addMedia($request->file('avatar'))
                ->usingFileName(time() . '_user_' . $user->id . '.' . $request->file('avatar')->getClientOriginalExtension())
                ->toMediaCollection('avatar');
        }

        return response()->json([
            'status' => true,
            'message' => 'User updated successfully!',
            'user' => new UserResource($user),
        ], 200);
    }

    public function updateChatbot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:20420',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->all()
            ], 400);
        }

        /** @var \App\Models\User $user **/
        $user = Auth::user();
        $user->update([
            'chatbot_name' => $request->name,
        ]);

        if ($request->hasFile('avatar')) {
            $user->clearMediaCollection('chatbot');
            $user->addMedia($request->file('avatar'))
                ->usingFileName(time() . '_user_' . $user->id . '_chatbot_' . $user->chatbot_name . '.' . $request->file('avatar')->getClientOriginalExtension())
                ->toMediaCollection('chatbot');
        }

        return response()->json([
            'status' => true,
            'message' => 'Chatbot updated successfully!',
            'user' => new UserResource($user),
        ], 200);
    }
}
