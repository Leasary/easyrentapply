<?php

namespace App\Http\Controllers;

use App\Application;
use App\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{

    public function index()
    {
        return redirect(route('create'));
    }

    public function create()
    {
        return view('create');
    }

    public function postCreate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
        ]);

        $rental = new \App\Rental();
        $rental->email = $request->get('email');
        $rental->password = \Illuminate\Support\Str::random(64);

        $rental->name = $request->get('name');
        $rental->address = $request->get('address');
        $rental->city = $request->get('city');
        $rental->state = $request->get('state');
        $rental->zipcode = $request->get('zipcode');
        $rental->save();

        Mail::to($rental->email)->send(new \App\Mail\LandlordRentalConfirmation($rental));

        return redirect(route('manage', [$rental, $rental->password]));
    }

    public function manage(Rental $rental, $password)
    {
        if ($password !== $rental->password) {
            return response()->isNotFound();
        }

        return view('manage')->with('rental', $rental);
    }

    public function view(Rental $rental, Application $application, $password)
    {
        if ($password !== $rental->password) {
            return response()->isNotFound();
        }

        return view('view')->with([
            'rental' => $rental,
            'application' => $application
        ]);
    }

    public function apply(Rental $rental)
    {
        return view('apply')->with('rental', $rental);
    }

    public function postApply(Rental $rental, Request $request)
    {
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'social_security_number' => 'required',
            'drivers_license_number' => 'required',
            'drivers_license_state' => 'required',
            'rh1_address' => 'required',
            'rh1_city' => 'required',
            'rh1_state' => 'required',
            'rh1_zipcode' => 'required',
            'rh1_rent' => 'required',
            'rh1_rent_or_own' => 'required',
            'rh1_landlord_name' => 'required',
            'rh1_landlord_phone' => 'required',
            'rh1_reason' => 'required',
            'rh2_address' => '',
            'rh2_city' => '',
            'rh2_state' => '',
            'rh2_zipcode' => '',
            'rh2_rent' => '',
            'rh2_rent_or_own' => '',
            'rh2_landlord_name' => '',
            'rh2_landlord_phone' => '',
            'rh2_reason' => '',
            'eh1_name' => 'required',
            'eh1_position' => 'required',
            'eh1_supervisor' => 'required',
            'eh1_supervisor_phone' => 'required',
            'eh1_income' => 'required',
            'eh1_tenure' => 'required',
            'eh2_name' => '',
            'eh2_position' => '',
            'eh2_supervisor' => '',
            'eh2_supervisor_phone' => '',
            'eh2_income' => '',
            'eh2_tenure' => '',
            'ref1_name' => 'required',
            'ref1_phone' => 'required',
            'ref1_relationship' => 'required',
            'ref2_name' => '',
            'ref2_phone' => '',
            'ref2_relationship' => '',
            'ref3_name' => '',
            'ref3_phone' => '',
            'ref3_relationship' => '',
        ]);

        $application = new \App\Application();
        $application->email = $request->get('email');
        $application->first_name = $request->get('first_name');
        $application->middle_name = $request->get('middle_name');
        $application->last_name = $request->get('last_name');
        $application->date_of_birth = $request->get('date_of_birth');
        $application->phone = $request->get('phone');
        $application->social_security_number = $request->get('social_security_number');
        $application->drivers_license_number = $request->get('drivers_license_number');
        $application->drivers_license_state = $request->get('drivers_license_state');
        $application->rh1_address = $request->get('rh1_address');
        $application->rh1_city = $request->get('rh1_city');
        $application->rh1_state = $request->get('rh1_state');
        $application->rh1_zipcode = $request->get('rh1_zipcode');
        $application->rh1_rent = $request->get('rh1_rent');
        $application->rh1_rent_or_own = $request->get('rh1_rent_or_own');
        $application->rh1_landlord_name = $request->get('rh1_landlord_name');
        $application->rh1_landlord_phone = $request->get('rh1_landlord_phone');
        $application->rh1_reason = $request->get('rh1_reason');
        $application->rh2_address = $request->get('rh2_address');
        $application->rh2_city = $request->get('rh2_city');
        $application->rh2_state = $request->get('rh2_state');
        $application->rh2_zipcode = $request->get('rh2_zipcode');
        $application->rh2_rent = $request->get('rh2_rent');
        $application->rh2_rent_or_own = $request->get('rh2_rent_or_own');
        $application->rh2_landlord_name = $request->get('rh2_landlord_name');
        $application->rh2_landlord_phone = $request->get('rh2_landlord_phone');
        $application->rh2_reason = $request->get('rh2_reason');
        $application->eh1_name = $request->get('eh1_name');
        $application->eh1_position = $request->get('eh1_position');
        $application->eh1_supervisor = $request->get('eh1_supervisor');
        $application->eh1_supervisor_phone = $request->get('eh1_supervisor_phone');
        $application->eh1_income = $request->get('eh1_income');
        $application->eh1_tenure = $request->get('eh1_tenure');
        $application->eh2_name = $request->get('eh2_name');
        $application->eh2_position = $request->get('eh2_position');
        $application->eh2_supervisor = $request->get('eh2_supervisor');
        $application->eh2_supervisor_phone = $request->get('eh2_supervisor_phone');
        $application->eh2_income = $request->get('eh2_income');
        $application->eh2_tenure = $request->get('eh2_tenure');
        $application->ref1_name = $request->get('ref1_name');
        $application->ref1_phone = $request->get('ref1_phone');
        $application->ref1_relationship = $request->get('ref1_relationship');
        $application->ref2_name = $request->get('ref2_name');
        $application->ref2_phone = $request->get('ref2_phone');
        $application->ref2_relationship = $request->get('ref2_relationship');
        $application->ref3_name = $request->get('ref3_name');
        $application->ref3_phone = $request->get('ref3_phone');
        $application->ref3_relationship = $request->get('ref3_relationship');
        $application->password = \Illuminate\Support\Str::random(64);

        $rental->applications()->save($application);

        Mail::to($rental->email)->send(new \App\Mail\LandlordApplicationNotice($rental));
        Mail::to($application->email)->send(new \App\Mail\TenantApplicationConfirmation($rental));

        return redirect(route('thanks'));
    }

    public function thanks()
    {
        return view('thanks');
    }

}
