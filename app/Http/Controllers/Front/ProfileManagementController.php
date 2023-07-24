<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\User_documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProfileManagementController extends Controller
{
    public function updateProfile(Request $request){
        // dd($request->all());
        $data = [];
        $msg = '';
        if($request->personal_informations =="personal_informations" && $request->profile_type == "instructor_profile"){
            array_push($data,[
                'name'=>$request->fname,
                'last_name'=>$request->lname,
                'email'=> $request->email,
                'phone' => $request->phone,
                'country_code' =>$request->phone_code,
                'country'=>$request->country
            ]);
            $msg = 'Your profile personal information updated successfully.';
        }

        if($request->personal_informations =="instructor_profile" && $request->profile_type == "instructor_profile"){
            $documentTypes = $request->document_name;

            array_push($data,[
                'qualification'=>$request->qualifications,
                'workplace'=>$request->profession_work,
                'teaching_experience'=> $request->teaching_mentorship,
                'summary' => $request->about_me
            ]);
            if(count($documentTypes) > 0){
                foreach($documentTypes as $key => $documentType){
                    
                    $document_id = $request->document_id[$key] ?? null;

                    $old_document = $request->old_document[$key];

                    $documentArray =[
                        'document_name' =>$documentType
                    ];
                    if($document_id != null){
                        if ($old_document != null && $document_id != null) {
                            // print_r($request->supporting_document[$key]);
                            if (isset($request->supporting_document[$key])) {
                                Storage::delete('public/documents/' . $old_document);
                                $documentFile = $request->supporting_document[$key];
    
                                $str=rand();
                                $string = md5($str);
                                $documentFileName = $string.'.'.$documentFile->getClientOriginalExtension();
                                $documentFile->storeAs('public/documents', $documentFileName);
                                $documentArray['user_document'] = $documentFileName;
                            }
                        }
                        User_documents::where('id','=',$document_id)->update($documentArray);
                    }else{
                        $supporting_document = $request->supporting_document[$key];
                        $documentSave = new User_documents();
                        $documentSave->document_name = $documentType;
                        $documentSave->user_id = $request->id;
                        if ($supporting_document) {
                            $documentFile = $supporting_document;

                            $str=rand();
                            $string = md5($str);
                            $documentFileName = $string.'.'.$documentFile->getClientOriginalExtension();
                            $documentFile->storeAs('public/documents', $documentFileName);
                            $documentSave->user_document = $documentFileName;
                        }
                        $documentSave->save();
                        
                    }
                }
                $msg = 'Your instructor profile updated successfully.';
            }
        }
        // exit;
        User::where('id','=',$request->id)->update($data[0]);
        return redirect()->back()->with('success', $msg);

    }

    public function updateProfileImage(Request $request){
        $request->validate([
            'avtar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Customize the rules based on your requirements
        ]);
        if ($request->file('avtar')) {
            Storage::delete('public/users/' . $request->old_avtar);
            $image = $request->file('avtar');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            // Store the image in the storage directory (you can specify a subdirectory if needed)
            $image->storeAs('public/users', $imageName);
            User::where('id','=',$request->id)->update(['avatar'=>$imageName]);
        }
        return redirect()->back()->with('success', 'Avatar uploaded successfully!');
    }

    public function deleteDocument(Request $request){
        $deleteDocument = User_documents::where('id','=',$request->id)->first();
        Storage::delete('public/documents/' . $deleteDocument->user_document);
        $deleteDocument->delete();
        return response()->json(["message"=>"Document deleted successfully...!","status"=>200],200);
    }
}
