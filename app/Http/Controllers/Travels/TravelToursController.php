<?php

namespace App\Http\Controllers\Travels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Travels\TravelToursModel;
use Exception;
use Validator;

class TravelToursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        $travels = TravelToursModel::where('user_id', Auth::id())->get()->count();
        $data = [
            "page" => "dashboard",
            "travels" => $travels
        ];

        return view('App.user-dashboard', $data);
    }


    public function travels()
    {
        $travels = TravelToursModel::where('user_id', Auth::id())->get();
        $data = [
            "page" => "travels",
            "travels" => $travels
        ];

        return view('App.travels', $data);
    }



    public function createTravelGuides(Request $request)
    {
        try {


            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }
            $travels = new TravelToursModel();
            $travels->user_id = Auth::id();
            $travels->name = $request->name;
            $travels->web_url = $request->web_url;
            $travels->description = $request->description;
            $travels->category = $request->category;
            $travels->save();
            $message = "Request completed";
            return response()->json(["message" => $message, "travel" => $travels], 200);
        } catch (Exception $error) {
            Log::info("Travels\TravelToursController@createTravelGuides" . $error->getMessage());
            $message = "Unable to process data";
            return response()->json(["message" => $message], 500);
        }
    }


    public function updateTravelGuides(Request $request)
    {
        try {
            $travels = TravelToursModel::where("id", $request->id)->first();
            if(!$travels) {
                $message = "Unknown data!";
                return response()->json(["message" => $message], 404);
            }

            $travels->name = ($request->name) ? $request->name : $travels->name;
            $travels->web_url = ($request->web_url) ? $request->web_url : $travels->web_url;
            $travels->description = ($request->description) ? $request->description : $travels->description;
            $travels->category = ($request->category) ? $request->category : $travels->category;
            $travels->save();
            $message = "Update completed!";
            return response()->json(["message" => $message], 200);
        } catch (Exception $error) {
            Log::info("Travels\TravelToursController@createTravelGuides" . $error->getMessage());
            $message = "Unable to update required data. Try again";
            return response()->json(["message" => $message], 500);
        }
    }


    public function deleteTravelGuides(Request $request)
    {
        try {
            $travels = TravelToursModel::where("id", $request->id)->first();
            if(!$travels) {
                $message = "Unknown data!";
                return response()->json(["message" => $message], 404);
            }

            $travels->delete();
            $message = "Delete completed!";
            return response()->json(["message" => $message], 200);
        } catch (Exception $error) {
            Log::info("Travels\TravelToursController@deleteTravelGuides" . $error->getMessage());
            $message = "Unable to update required data. Try again";
            return response()->json(["message" => $message], 500);
        }
    }



    protected function validator(array $data)
    {
        return Validator::make(
            $data, [
            'name' => 'required|string',
            'web_url' => 'required|url',
            'category' => 'required',
                ]
        );
    }
}
