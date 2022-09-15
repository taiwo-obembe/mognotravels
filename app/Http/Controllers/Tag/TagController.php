<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag\TagModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function tags()
    {

        $tags = TagModel::where('user_id', Auth::id())->get();
        $data = [
            "page" => "tags",
            "tags" => $tags
        ];

        return view('App.tags', $data);
    }


    public  function createTag(Request $request)
    {
        try {
            if(!$request->name) {
                $message = "The Name field is required";
                return response()->json(["message" => $message], 400);
            }

            $tag = new TagModel();
            $tag->user_id = Auth::id();
            $tag->name = $request->name;
            $tag->save();
            $message = "Tag Added successfully";
            return response()->json(["message" => $message, "tag" => $tag], 200);

        } catch (Exception $error) {
            Log::info("Tag\TagController@createTag" .$error->getMessage());
            $message = "Unable to process request";
            return response()->json(["message" => $message], 500);

        }
    }

    public function updateTag(Request $request)
    {
        try {

            $tag = TagModel::where('id', $request)->first();
            if(!$tag) {
                $message = "Unknown data";
                return response()->json(["message" => $message], 400);
            }
            $tag->name = $request->name;
            $tag->save();
            $message = "Record updated successfully!";
            return response()->json(["message" => $message], 200);
        } catch (Exception $error) {
            Log::info("Tag\TagController@updateTag" .$error->getMessage());
            $message = "Unable to update request";
            return response()->json(["message" => $message], 500);

        }
    }
}
