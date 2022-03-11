<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showAllContacts()
    {
        $contacts = DB::table('contacts')->get();
        return view('Admin.contacts')->with('contacts', $contacts);
    }
    public function showContactByID($id)
    {

        $infoDetail = DB::table('contacts')
            ->where('id', $id)
            ->first();
        return view('Admin.contact_info')->with('infoDetail', $infoDetail);
    }
    public function deleteContactByID($id)
    {
        DB::table('contacts')
            ->where('id', $id)
            ->delete();
        return redirect('admin/contacts');
    }
}
