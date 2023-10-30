@php
use App\Models\AgentWallet;
$agentWallet = AgentWallet::where('user_id', auth()->user()->id)->first();
@endphp

<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <!-- -----------------------------------------Dashboard Cards--------------------------------- -->
            <div class="row">
                <div class="col-xl-3 col-sm-12">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-primary text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(136, 108, 192, 1);">
                                        <path d="M12 5C7.031 5 2 6.546 2 9.5S7.031 14 12 14c4.97 0 10-1.546 10-4.5S16.97 5 12 5zm-5 9.938v3c1.237.299 2.605.482 4 .541v-3a21.166 21.166 0 0 1-4-.541zm6 .54v3a20.994 20.994 0 0 0 4-.541v-3a20.994 20.994 0 0 1-4 .541zm6-1.181v3c1.801-.755 3-1.857 3-3.297v-3c0 1.44-1.199 2.542-3 3.297zm-14 3v-3C3.2 13.542 2 12.439 2 11v3c0 1.439 1.2 2.542 3 3.297z"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Day to day</p>
                                    <h4 class="mb-0">LKR 0.00</h4>
                                    <!-- <span class="badge badge-success">-3.5%</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-12">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-warning text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 207, 109, 1);">
                                        <path d="M12 6C7.03 6 2 7.546 2 10.5v4C2 17.454 7.03 19 12 19s10-1.546 10-4.5v-4C22 7.546 16.97 6 12 6zm-8 8.5v-1.197a9.989 9.989 0 0 0 2 .86v1.881c-1.312-.514-2-1.126-2-1.544zm12 .148v1.971c-.867.179-1.867.31-3 .358v-2a21.75 21.75 0 0 0 3-.329zm-5 2.33a18.788 18.788 0 0 1-3-.358v-1.971c.959.174 1.972.287 3 .33v1.999zm7-.934v-1.881a9.931 9.931 0 0 0 2-.86V14.5c0 .418-.687 1.03-2 1.544zM12 13c-5.177 0-8-1.651-8-2.5S6.823 8 12 8s8 1.651 8 2.5-2.823 2.5-8 2.5z"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Prepaid</p>
                                    <h4 class="mb-0">LKR 0.00</h4>
                                    <!-- <span class="badge badge-success">-3.5%</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-12">
                    <div class="widget-stat card">
                        <div class="card-body  p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-danger text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(252, 45, 83, 1);">
                                        <path d="M15.999 8.5h2c0-2.837-2.755-4.131-5-4.429V2h-2v2.071c-2.245.298-5 1.592-5 4.429 0 2.706 2.666 4.113 5 4.43v4.97c-1.448-.251-3-1.024-3-2.4h-2c0 2.589 2.425 4.119 5 4.436V22h2v-2.07c2.245-.298 5-1.593 5-4.43s-2.755-4.131-5-4.429V6.1c1.33.239 3 .941 3 2.4zm-8 0c0-1.459 1.67-2.161 3-2.4v4.799c-1.371-.253-3-1.002-3-2.399zm8 7c0 1.459-1.67 2.161-3 2.4v-4.8c1.33.239 3 .941 3 2.4z"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Revenue</p>
                                    <h4 class="mb-0">LKR 0.00</h4>
                                    <!-- <span class="badge badge-success">-3.5%</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-12">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-success text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(9, 189, 60, 1);">
                                        <path d="M3.414 13.778 2 15.192l4.949 2.121 2.122 4.95 1.414-1.414-.707-3.536L13.091 14l3.61 7.704 1.339-1.339-1.19-10.123 2.828-2.829a2 2 0 1 0-2.828-2.828l-2.903 2.903L3.824 6.297 2.559 7.563l7.644 3.67-3.253 3.253-3.536-.708z"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Tickets</p>
                                    <h4 class="mb-0">0</h4>
                                    <!-- <span class="badge badge-success">-3.5%</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!--Wallet Balance-->
                <div class="col-xl-3 col-sm-12">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-warning text-success">
                                    <i class="bi bi-wallet2"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Wallet Balance</p>
                                    <h4 class="mb-0">LKR {{ $agentWallet->credit_limit ?? 'N/A' }}</h4>
                                    <!-- <span class="badge badge-success">-3.5%</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- --------------------------------------Dashboard Table------------------------------------- -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Latest Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>PNG</th>
                                            <th>Ticket Number(s)</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                            <th>User Name</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>png</td>
                                            <td>212313232</td>
                                            <td>LKR</td>
                                            <td class="color-primary">LKR21.56</td>
                                            <td>account</td>
                                            <td>Jhon Doe</td>
                                            <td>12/12/2023</td>
                                        </tr>

                                        <tr>
                                            <th>2</th>
                                            <td>png</td>
                                            <td>212313232</td>
                                            <td>LKR</td>
                                            <td class="color-primary">LKR21.56</td>
                                            <td>account</td>
                                            <td>Jhon Doe</td>
                                            <td>12/12/2023</td>
                                        </tr>

                                        <tr>
                                            <th>3</th>
                                            <td>png</td>
                                            <td>212313232</td>
                                            <td>LKR</td>
                                            <td class="color-primary">LKR21.56</td>
                                            <td>account</td>
                                            <td>Jhon Doe</td>
                                            <td>12/12/2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
