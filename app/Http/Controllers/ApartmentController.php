<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApartmentRequest;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function handleForm()
    {
        return view('admin.apartment.form');
    }

    public function processForm(StoreApartmentRequest $request)
    {
        $apartmentName = $request->get('apartmentName');
        $address = $request->get('address');
        $price = $request->get('price');
        $description = $request->get('description');
        $detail = $request->get('detail');
        $thumbnail = $request->get('thumbnail');
        $status = $request->get('status');
        $apartment = new Apartment();
        $apartment->name = $apartmentName;
        $apartment->address = $address;
        $apartment->price = $price;
        $apartment->description = $description;
        $apartment->detail = $detail;
        $apartment->thumbnail = $thumbnail;
        $apartment->status = $status;
        $apartment->save();
        return redirect('admin/event/list')->with('success', 'Event edited successfully!');
    }

    public function getList()
    {
        $list = Apartment::paginate(6);
        return view('admin.apartment.list', ['list' => $list]);
    }
}
