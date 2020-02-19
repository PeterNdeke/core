<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Account;

class BankController extends Controller
{
    //
    public function index()
    {
        $page_title = "Account Details";
        $account = Account::where('user_id', auth()->id())->first();
        $banks = Bank::all();


        return view('bank.index', compact('account', 'page_title','banks'));
    }

    public function create()
    {
        $banks = Bank::all();

       // return view()

    }
    public function saveAccountDetails(Request $request)
    {
        $this->validate($request, [
            'accountName' => 'required',
            'accountNumber' => 'required',
            'account_type' => 'required',
            'bank' => 'required',
        ]);

        $bank = new Account();
        $bank->user_id = auth()->id();
        $bank->bank_name = $request->bank;
        $bank->account_number = $request->accountNumber;
        $bank->account_name = $request->accountName;
        $bank->account_type = $request->account_type;
        $bank->save();

        return back()->with([
            'flash_message' => 'Banking Details Added Successfully',
        ]);
    }

    public function edit($id)
    {
        $bank = Account::find($id);
        $banks = Bank::all();
        $page_title = "Account Details Edit";
      

        return view('bank.editbank', compact('bank', 'banks', 'page_title'));
    }

    public function update(Request $request, $id)
    {
        Account::where('id', $id)->update([
            'bank_name' => $request->bank,
            'account_number' => $request->accountNumber,
            'account_name' => $request->accountName,
            'account_type' => $request->accountType,
        ]);

        return redirect('/user/account-details')->with([
            'flash_message' => 'Account Details updated',
        ]);

    }

    public function destroy($id)
    {
        $model = Account::findOrFail($id);
        $model->delete();

        return redirect('/user/account-details')->with([
            'flash_message' => 'Account deleted',
        ]);
    }





}
