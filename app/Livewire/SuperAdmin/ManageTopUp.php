<?php

namespace App\Livewire\SuperAdmin;

use App\Models\AgentWallet;
use App\Models\Topup;
use App\Models\TransactionRecord;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
#[Title('Manage Top Up')]
class ManageTopUp extends Component
{

    // public $creditLimit;

    // <=== summery popup modal ===>
    public $summeryCompany;
    public $summeryEmail;
    public $summeryPhone;
    public $summeryPayment;
    public $summeryComment;
    public $summeryAmount;
    public $summeryTopupId;
    public $summeryTopupDate;
    public $summeryTopupStatus;
    public $summeryRefNo;

    // <==== Search ====>
    public $search = '';

    //  <==== image view modal ====>
    public $imagePaymentProof;

    public function makeNotPaid($id)
    {
        $notPaid = Topup::where('id', $id)
            ->update(['topup_status' => 0]);
    }
    public function makePaid($id)
    {
        $topup = Topup::where('id', $id)->with('user')->first();
        // dd([
        //     'user_id' => $topup->user->id,
        //     'topup_req_id' => $id,
        //     'payment_proof_status' => 1,
        //     'amount_transfer' => $topup->amount,
        //     'transfer_status' => 1

        // ]);



        $Paid = Topup::where('id', $id)
            ->update(['topup_status' => 1]);
        if ($Paid) {

            $ExistTransactionRecord = TransactionRecord::where('topup_req_id', $topup->id)->first();
            if ($ExistTransactionRecord) {
                $this->dispatch('alreadyAddedTransactionRecord');
                return;
            }
            $transactionRecord = TransactionRecord::create([
                'user_id' => $topup->user->id,
                'topup_req_id' => $id,
                // 'payment_proof_status' => 1,
                'amount_transfer' => $topup->amount,
                // 'transfer_status' => 1

            ]);

            if ($transactionRecord) {
                $this->dispatch('addedTransaction');
            }


        }
    }

    public function viewSummery($id)
    {

        $topupSummery = Topup::where('id', $id)->with('user')->first();
        $this->summeryCompany = $topupSummery->user->company_name;
        $this->summeryEmail = $topupSummery->user->email;
        $this->summeryPhone = $topupSummery->user->phone;
        $this->summeryPayment = $topupSummery->payment_proof;
        $this->summeryComment = $topupSummery->comment;
        $this->summeryAmount = $topupSummery->amount;
        $this->summeryTopupId = $topupSummery->id;
        $this->summeryTopupDate = $topupSummery->created_at;
        $this->summeryTopupStatus = $topupSummery->topup_status;
        $this->summeryRefNo = $topupSummery->reference_no;


    }

    public function viewImage($imgId)
    {
        // dd($imgId);
        $topup = Topup::where('id', $imgId)->first();

        $this->imagePaymentProof = $topup->payment_proof;
    }

    // <=== set Credit Modal ===>
    public $type; // credit limit
    public $setCreditAgency;
    public $setCreditAmount;
    public $setCreditUserId;
    public function setCreditModal(int $topupId)
    {


        $setCredit = Topup::find($topupId);
        if ($setCredit) {
            $this->setCreditAgency = $setCredit->user->company_name;
            $this->setCreditAmount = $setCredit->amount;
            $this->setCreditUserId = $topupId;
        } else {
            return redirect()->to('manage.topup');
        }

        // dd([
        //     'amount' => $this->setCreditAmount
        // ]);


    }





    public function transferWallet(int $user_id)
    {
        // dd([
        //     'user id ' => $user_id,
        //     'agency' => $this->setCreditAgency,
        //     'amount' => $this->setCreditAmount,
        //     'type' => $this->type,
        //     // 'credit limit' => $this->creditLimit
        // ]);
        // $this->walletUser = $user_id;
        // Check if a wallet already exists for the user

        $existingWallet = AgentWallet::where('user_id', $user_id)->first();
        if ($existingWallet) {
            $this->dispatch('walletError');
            return;
        }
        $this->validate(['setCreditAmount' => 'required']);
        $createdWallet = AgentWallet::create([
            'type' => $this->type,
            'user_id' => $user_id,
            'credit_limit' => $this->setCreditAmount,
            'exist_credit_limit' => 0
        ]);

        // session()->flash('message', ' Successfully Transfered');
        // return back('manage.topup')->with('message', 'Successfully Transfered.');
        // $this->js("alert(' transfered')");
        if ($createdWallet) {
            $this->dispatch('close-modal');

        }

    }

    public function render()
    {
        $toupupData = Topup::with('user')->where('reference_no', 'like', '%' . $this->search . '%')->orWhere('amount', 'like', '%' . $this->search . '%')->orWhereHas('user', function ($query) {
            $query->where('company_name', 'like', '%' . $this->search . '%');
        })->get();
        return view('livewire.super-admin.manage-top-up', ['toupupData' => $toupupData]);
    }
}