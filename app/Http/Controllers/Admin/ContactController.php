<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Validator;
use Carbon\Carbon;
use Image as ImageUpload;

class ContactController extends Controller
{
    /**
     * Auth guard before calling controller functions.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$contacts = Contact::all();

    	return view('admin.contacts', compact('contacts'));
    }

    public function edit($contactId) 
    {
        $contact = Contact::find($contactId);

        return view('admin.contactsEdit', compact('contact'));
    }

    public function update(Request $request, $contactId)
    {
        try{
            if($contactId == 1) {

                $rule = [
                    'name' => 'required',
                    'position' => 'required',
                    'personalPhone' => 'required',
                    'email' => 'required',
                    'fax' => 'required',
                    'address' => 'required',
                    'workplacePhone' => 'required'
                ];

                $messages = [
                    'name.required' => 'Tên chủ thể là trường bắt buộc',
                    'position.required' => 'Chức vụ là trường bắt buộc',
                    'personalPhone.required' => 'Số điện thoại cá nhân là trường bắt buộc',
                    'email.required' => 'Email là trường bắt buộc',
                    'fax.required' => 'Fax là trường bắt buộc',
                    'address.required' => 'Địa chỉ là trường bắt buộc',
                    'workplacePhone.required' => 'Số điện thoại cơ quan là trường bắt buộc'
                ];
            } else {
                $rule = [
                    'name' => 'required',
                    'email' => 'required',
                    'fax' => 'required',
                    'address' => 'required',
                    'workplacePhone' => 'required',
                    'website' => 'required',
                    'introductionMessage' => 'required'
                ];

                $messages = [
                    'name.required' => 'Tên chủ thể là trường bắt buộc',
                    'email.required' => 'Email là trường bắt buộc',
                    'fax.required' => 'Fax cá nhân là trường bắt buộc',
                    'address.required' => 'Địa chỉ là trường bắt buộc',
                    'workplacePhone.required' => 'Số điện thoại cơ quan là trường bắt buộc',
                    'website.required' => 'Website là trường bắt buộc',
                    'introductionMessage.required' => 'Lời giới thiệu là trường bắt buộc'
                ];
            }
                $validator = Validator::make($request->all(), $rule, $messages);
                
                if ($validator->fails()) {
                    return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
                }
                if($request->image){
                    $file = $request->image;
                    $fileExtension = $file->getClientOriginalExtension();

                    if(!in_array($fileExtension, array('jpeg', 'jpg','png'))){
                            return redirect()
                                    ->back()
                                    ->withInput()
                                    ->with('error', 'Chỉ hỗ trợ định dạng ảnh jpg, jpeg, png');
                    }
                }

                $contact = Contact::find($contactId);
                if ($request->image)
                {
                    $time = Carbon::now()->micro;
                    ImageUpload::make($file)
                        ->resize(1100,800)
                        ->save('images/'.$time.'-'.$file->getClientOriginalName());

                    $imagePath = 'images/'.$time.'-'.$file->getClientOriginalName();
                    $contact->image = $imagePath;
                }

                if ($contactId == 1) {
                    $contact->name = $request->name;
                    $contact->position = $request->position;
                    $contact->personalPhone = $request->personalPhone;
                    $contact->email = $request->email;
                    $contact->fax = $request->fax;
                    $contact->address = $request->address;
                    $contact->workplacePhone = $request->workplacePhone;
                } else {
                    $contact->name = $request->name;
                    $contact->email = $request->email;
                    $contact->fax = $request->fax;
                    $contact->address = $request->address;
                    $contact->workplacePhone = $request->workplacePhone;
                    $contact->website = $request->website;
                    $contact->introductionMessage = $request->introductionMessage;
                }
                    $contact->updated_at = Carbon::now();
                    $contact->save();

            return redirect()->back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e){
            Log::error($e->getMessage());
        }
    }
}
