<?php

use App\Livewire\SubAgent\Home;
use App\Livewire\SubAgent\Profile;
use App\Livewire\SuperAdmin\Queues;
use App\Livewire\SubAgent\QuoteList;
use App\Livewire\SubAgent\Statements;
use Illuminate\Support\Facades\Route;
use App\Livewire\SuperAdmin\AdminHome;
use App\Livewire\SuperAdmin\MarkUpFee;
use App\Livewire\SuperAdmin\ModifyPNR;
use App\Livewire\SuperAdmin\TdsMaster;
use App\Livewire\Auth\UserVerification;
use App\Livewire\SubAgent\FlightSearch;
use App\Livewire\SubAgent\TopupRequest;
use App\Livewire\SubAgent\Transactions;
use App\Livewire\SuperAdmin\ManageUser;
use App\Livewire\SuperAdmin\ServiceTax;
use App\Livewire\SubAgent\InsuranceList;
use App\Livewire\SuperAdmin\ClassMaster;
use App\Livewire\SuperAdmin\ManageAdmin;
use App\Livewire\SuperAdmin\ManageTopUp;
use App\Http\Controllers\AdminController;
use App\Livewire\SubAgent\ReissueReqvest;
use App\Livewire\SuperAdmin\AdminProfile;
use App\Livewire\SuperAdmin\AgencyStatus;
use App\Livewire\SuperAdmin\AgentIncentive;
use App\Livewire\SuperAdmin\DealCodeMaster;
use App\Livewire\SuperAdmin\GoodServiceTax;
use App\Livewire\SuperAdmin\ManageSubAgent;
use App\Livewire\SuperAdmin\OfflinePayment;
use App\Livewire\SuperAdmin\OfflineReqVoid;
use App\Livewire\SuperAdmin\TransactionFee;
use App\Livewire\SuperAdmin\CustomRuleCheck;
use App\Livewire\SuperAdmin\DiscountDetails;
use App\Http\Controllers\Auth\AuthController;
use App\Livewire\SuperAdmin\ManagePermission;
use App\Livewire\SubAgent\GetQuoteOrInsurance;
use App\Livewire\SubAgent\TransactionOverview;
use App\Livewire\SuperAdmin\AirlineCommission;
use App\Livewire\SuperAdmin\AirlinePreference;
use App\Livewire\SuperAdmin\OfflineReqPayment;
use App\Livewire\SuperAdmin\PrivateFareAccountCode;
use App\Http\Controllers\Auth\UserVerificationController;
use App\Livewire\SuperAdmin\ReIsssue;
use App\Livewire\SuperAdmin\UploadPackages;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('front.home');
});

// <======== Admin Routes ========>
// Route::get('/admin', AdminHome::class);
// Route::get('/manage-admin', ManageAdmin::class);
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

// <======== Admin Routes ========>
// Route::get('/admin', AdminHome::class);
// Route::get('/manage-admin', ManageAdmin::class);

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('admin/dashboard', function () {
    //     return view('dashboard'); // for use same dashboard
    // })->name('dashboard.admin')->middleware('auth:admin');

    // <==== All Admin Routes ====>
    Route::get('admin/dashboard', AdminHome::class)->name('admin.dashboard')->middleware('auth:admin');
    Route::get('/manage-admin', ManageAdmin::class)->name('manage.admin')->middleware('auth:admin');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin-profile', AdminProfile::class)->name('admin.profile')->middleware('auth:admin');

    Route::get('/manage-sub-agent', ManageSubAgent::class)->middleware('auth:admin');
    Route::get('/manage-user', ManageUser::class)->middleware('auth:admin');
    Route::get('/manage-topup', ManageTopUp::class)->name('manage.topup')->middleware('auth:admin');

    // < === Sub Agency Network === >
    Route::get('/agency-status', AgencyStatus::class)->name('agency.status')->middleware('auth:admin');
    Route::get('/manage-permision', ManagePermission::class)->name('manage.permision')->middleware('auth:admin');
    Route::get('/agent-incentive', AgentIncentive::class)->name('agent.incentive')->middleware('auth:admin');
    Route::get('/markup-fee', MarkUpFee::class)->name('mark.up.fee')->middleware('auth:admin');

    //offline requests
    Route::get('admin/offline-requests/payment', OfflineReqPayment::class)->name('offline.payment')->middleware('auth:admin');
    Route::get('admin/offline-requests/void', OfflineReqVoid::class)->name('offline.void')->middleware('auth:admin');
    Route::get('admin/offline-requests/re-isssue', ReIsssue::class)->name('re-isssue')->middleware('auth:admin');

    //Manage agency new
    Route::get('/airline-commission', AirlineCommission::class)->name('manage.airline-commission');
    Route::get('/good-service-tax', GoodServiceTax::class)->name('manage.good-service-tax');
    Route::get('/tds-master', TdsMaster::class)->name('manage.tds-master');
    Route::get('/transaction-fee', TransactionFee::class)->name('manage.transaction-fee');
    Route::get('/custom-rule-check', CustomRuleCheck::class)->name('manage.custom-rule-check');
    Route::get('/deal-code-master', DealCodeMaster::class)->name('manage.deal-code-master');
    Route::get('/discount-details', DiscountDetails::class)->name('manage.discount-details')->middleware('auth:admin');
    Route::get('/offline-payment', OfflinePayment::class)->name('manage.offline-payment');
    Route::get('/private-fare-account-code', PrivateFareAccountCode::class)->name('manage.private-fare-account-code');
    Route::get('/service-tax', ServiceTax::class)->name('manage.service-tax');
    Route::get('/airline-preference', AirlinePreference::class)->name('manage.airline-preference');
    Route::get('/class-master', ClassMaster::class)->name('manage.class-master');

    //Modify PNR
    Route::get('/modify-pnr', ModifyPNR::class)->name('manage.modify-pnr');

    //Queues
    Route::get('/queues', Queues::class)->name('manage.queues');

    //uPLOAD pACKAGES
    Route::get('/upload-packages', UploadPackages::class)->name('upload-packages');

});

/*
|--------------------------------------------------------------------------
| Sub Agent:User Side Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'authenticate'])->name('index')->middleware(['mobileVerify', 'userVerify']);
    Route::get('/mobile-verification', [AuthController::class, 'mobileVerification'])->name('mobile-verification');
    Route::post('/verify/otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');

    //sub agent routes
    Route::group([
        'prefix' => 'sub-agent',
        'as' => 'sub-agent.',
        'middleware' => ['auth', 'role:3']
    ], function () {
        Route::get('/dashboard', Home::class)->name('home');
        Route::get('/quote-list', QuoteList::class)->name('quoteList');
        Route::get('/flight-search', FlightSearch::class)->name('flightSearch');
        Route::get('/get-quote-or-insurance', GetQuoteOrInsurance::class)->name('getQuoteOrInsurance');
        Route::get('/insurance-list', InsuranceList::class)->name('insuranceList');
        Route::get('/transactions', Transactions::class)->name('transactions');
        Route::get('/statements', Statements::class)->name('statements');
        Route::get('/transaction-overview', TransactionOverview::class)->name('transactionOverview');
        Route::get('/topup-request', TopupRequest::class)->name('topupRequests');
        Route::get('/profile', Profile::class)->name('profile');
        
        //offline request
        Route::get('/reissue', ReissueReqvest::class)->name('reissue');
    });

    Route::group([
        'middleware' => ['auth']
    ], function () {

        //User verification routes
        Route::get('/user-verification', [UserVerificationController::class, 'viewUserVerificationPage'])->name('user.verify');
    });

    Route::group([
        'middleware' => ['auth']
    ], function () {

        //User verification form submit routes
        Route::post('/user-verification/submit-nic-proof', [UserVerificationController::class, 'submitNicVerificationDetails'])->name('submitNicProof');
        Route::post('/user-verification/submit-photo-proof', [UserVerificationController::class, 'submitPhotoVerificationDetails'])->name('submitPhotoProof');
        Route::post('/user-verification/submit-address-proof', [UserVerificationController::class, 'submitAddressVerificationDetails'])->name('submitAddressProof');


        Route::put('/user-verification/re-submit-nic-proof', [UserVerificationController::class, 'reSubmitNicVerificationDetails'])->name('re-submitNicProof');
        Route::put('/user-verification/re-submit-photo-proof', [UserVerificationController::class, 'reSubmitPhotoVerificationDetails'])->name('re-submitPhotoProof');
        Route::put('/user-verification/re-submit-address-proof', [UserVerificationController::class, 'reSubmitAddressVerificationDetails'])->name('re-submitAddressProof');
    });

    //user routes
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
        'middleware' => ['auth', 'role:4']
    ], function () {
        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');
    });
});
