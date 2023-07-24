<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\ValidUrl;
use App\User_documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
            if($request->facebook != null || $request->instagram || $request->youtube || $request->linkedin || $request->twitter){
                
                 $rules = [
                    'facebook' => ['required', new ValidUrl],
                    'instagram' => ['required', new ValidUrl],
                    'youtube' => ['required', new ValidUrl],
                    'linkedin' => ['required', new ValidUrl],
                    'twitter' => ['required', new ValidUrl],
                ];
            
                $customMessages = [
                    'required' => 'The :attribute field is required.'
                ];
            
                $this->validate($request, $rules, $customMessages);
            }
            array_push($data,[
                'qualification'=>$request->qualifications,
                'workplace'=>$request->profession_work,
                'teaching_experience'=> $request->teaching_mentorship,
                'summary' => $request->about_me,
                'Facebook' => $request->facebook,
                'Instagram' => $request->instagram,
                'YouTube' => $request->youtube,
                'LinkedIn' => $request->linkedin,
                'Twitter' => $request->twitter,
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

    public function changePassword(Request $request){
        // dd(Hash::make('12345678'));
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        $user = Auth::guard('user_new')->user();
        // Check if the current password matches the one in the database
        if (Hash::check($request->old_password, $user->password)) {
            // Update the user's password with the new one
            $user->password = Hash::make($request->new_password);
            $user->save();

            // Redirect back with success message
            return redirect()->back()->with('success', 'Password changed successfully.');
        } else {
            // Current password doesn't match
            return back()->with("error", "Old Password Doesn't match!");
        }
    }
}
