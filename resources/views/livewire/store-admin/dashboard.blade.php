<div class="app-main flex-column flex-row-fluid">
    <link href="{{ asset('assets/cssfile/dashBrd.css') }}" rel="stylesheet">

    <div class="app-container">
        <div class="page-title pageHead pb-6 d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard
            </h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            {{-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted"><a href="{{ route('storedashboard') }}"> Dashboard</a></li>
                <!--end::Item-->
            </ul> --}}
            <!--end::Breadcrumb-->
        </div>
        {{-- <div class="storeSec">
            <div class="container">
                <div class="storeInnerSec">
                    @if (count($stores) < 1) <a
                            href="{{ route('create-store') }}" class="storeBox">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>
                            <h3 class="storeBoxItemText">Create Store</h3>
                        </a>
                    @else
                        <div class="storeInnerbox">
                            @foreach ($stores as $store)
                                <div class="storeBoxItem">
                                    <div class="storeBoxItemImg">
                                        <img src="{{ $store->logo }}" alt="" />
                                    </div>
                                    <h3 class="storeBoxItemText">{{ $store->name }}</h3>
                                </div>
                            @endforeach
                            <div class="storeBoxItem">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span>
                                <h3 class="storeBoxItemText">Create Store</h3>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div> --}}

        <div class="dashbrdSec">
            <div class="dashbrdInnerSec">
                <div class="dashSummeryCard">
                    <div class="card">
                        <div class="cardInner">
                            <div class="cardTextBox">
                                <h4 class="cardText">Total Stores</h4>
                            </div>
                            <h2 class="userEarn">
                                50</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardInner">
                            <div class="cardTextBox">
                                <h4 class="cardText">Recent Sales</h4>
                                <h5 class="cardTextDate">Last 30 days</h5>
                            </div>
                            <h2 class="totalEarn">
                                2,240</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardInner">
                            <div class="cardTextBox">
                                <h4 class="cardText">Total Earnings</h4>
                            </div>
                            <h2 class="pendEarn">
                                $50,240</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardInner">
                            <div class="cardTextBox">
                                <h4 class="cardText">Pending Orders</h4>
                                <h5 class="cardTextPrs">In processing</h5>
                            </div>
                            <h2 class="recentEarn">
                                10</h2>
                        </div>
                    </div>
                </div>
                <div class="dashContent">
                    <div class="leftContent py-7 sm:py-0">
                        <div class="card graphSec">
                            <div class="graphTitle w-full d-flex justify-content-between align-items-center">
                                <div class="card-title m-0">
                                    <h3 class="fs-2 font-semibold">Sales and Performance </h3>
                                </div>
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bold"
                                        id="kt_security_summary_tabs">
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary py-4active"
                                                data-kt-countup-tabs="true" data-bs-toggle="tab"
                                                href="#dailyGraph">Daily</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary py-4" data-kt-countup-tabs="true"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_day"
                                                href="#weeklyGraph">Weekly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary py-4" data-kt-countup-tabs="true"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_week"
                                                href="#mothlyGraph">Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="dailyGraph" role="tabpanel">
                                        <div class="graphInnerSec py-8">

                                            <div class="lineGraph">
                                                <canvas id="myChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                            <div class="barGraph">
                                                <canvas id="myBarChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="weeklyGraph" role="tabpanel">
                                        <div class="graphSec py-8">
                                            <div class="lineGraph">
                                                <canvas id="myChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                            <div class="barGraph">
                                                <canvas id="myBarChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mothlyGraph" role="tabpanel">
                                        <div class="graphSec py-8">
                                            <div class="lineGraph">
                                                <canvas id="myChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                            <div class="barGraph">
                                                <canvas id="myBarChart"
                                                    style="width:100%;max-width:600px; height:100%"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card orderSec">
                            <div class="orderTable">
                                <table class="w-100">
                                    <tr class="text-center">
                                        <th class="p-3">Order Number</th>
                                        <th class="p-3">Customer Name</th>
                                        <th class="p-3">Product</th>
                                        <th class="p-3">Date</th>
                                        <th class="p-3">Status</th>
                                    </tr>

                                    <tbody class="w-100">
                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="orderName p-3 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus font-semibold px-1">Error</a>
                                            </td>
                                        </tr>

                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="orderName p-3 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus bg-red-200 text-red-600 font-semibold px-1 hover:text-red-600">Error</a>
                                            </td>
                                        </tr>
                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="orderName p-3 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus bg-red-200 text-red-600 font-semibold px-1 hover:text-red-600">Error</a>
                                            </td>
                                        </tr>
                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="p-3 text-amber-600 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus bg-red-200 text-red-600 font-semibold px-1 hover:text-red-600">Error</a>
                                            </td>
                                        </tr>
                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="orderName p-3 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus bg-red-200 text-red-600 font-semibold px-1 hover:text-red-600">Error</a>
                                            </td>
                                        </tr>
                                        <tr class="orderRow text-center">
                                            <td class="p-3 text-gray-900 font-semibold">01</td>
                                            <td class="orderName p-3 font-semibold">John Raw</td>
                                            <td class="orderPr p-3 font-semibold"><a href="">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                            <td class="p-3">Apr 2, 2023</td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="orderStatus bg-red-200 text-red-600 font-semibold px-1 hover:text-red-600">Error</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="accordion inventoryAcc mb-7" id="accordionExampleInventry">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fs-2 font-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Inventory Status
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-blue-950 p-0">
                                        <table class="w-100">
                                            <tr class="tableHead text-center text-white">
                                                <th class="text-white">Order Number</th>
                                                <th class="text-white">Customer Name</th>
                                                <th class="text-white">Product</th>
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Status</th>
                                            </tr>

                                            <tbody class="w-100">
                                                <tr class="acTbodyOne text-center bg-sky-600 border-slate-200">
                                                    <td class="text-white p-3">01</td>
                                                    <td class="text-white p-3">John Raw</td>
                                                    <td class="text-white p-3">Grand Court Cloudfoam</td>
                                                    <td class="text-white p-3">Apr 2, 2023</td>
                                                    <td class="text-white p-3"><a href="javascript:void(0)"
                                                            class="">Low Stock</a></td>
                                                </tr>

                                                <tr class="acTbodyTwo text-center bg-green-500 border-slate-200">
                                                    <td class="text-white p-3">01</td>
                                                    <td class="text-white p-3">John Raw</td>
                                                    <td class="text-white p-3">Grand Court Cloudfoam</td>
                                                    <td class="text-white p-3">Apr 2, 2023</td>
                                                    <td class="text-white p-3"><a href="javascript:void(0)"
                                                            class="">Populer
                                                            Products</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="librarySec w-full d-flex justify-content-between, align-items-start gap-6">
                            <div class="card w-100 libraryLeft">
                                <h2 class="librayTitle fs-2 font-semibold pb-8">Recent Uploads</h2>
                                <table class="w-100">
                                    <tr class="libraryRow text-center">
                                        <th class="p-3">Logo</th>
                                        <th class="p-3">Title</th>
                                    </tr>

                                    <tbody class="w-100">
                                        <tr class="libraryRowOne text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href="javascript:void(0)"
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3 font-semibold"><a href="javascript:void(0)">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                        </tr>
                                        <tr class="libraryRowOne text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href="javascript:void(0)"
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3 font-semibold"><a href="javascript:void(0)">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                        </tr>
                                        <tr class="libraryRowOne text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href="javascript:void(0)"
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3 font-semibold"><a href="javascript:void(0)">Grand
                                                    Court
                                                    Cloudfoam</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card w-100 libraryRight">
                                <h2 class="librayTitle fs-2 font-semibold pb-8">Digitization Status</h2>
                                <table class="">
                                    <tr class="libraryRowTwo text-center">
                                        <th class="p-3">Logo</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                    <tbody class="w-100">
                                        <tr class="libraryRowTwo text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href=""
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3"><a href=""
                                                    class="libraryPr font-semibold px-1">In-progress</a>
                                            </td>
                                        </tr>
                                        <tr class="libraryRowTwo text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href=""
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="libraryCmp font-semibold px-1">Completed</a>
                                            </td>
                                        </tr>
                                        <tr class="libraryRowTwo text-center">
                                            <td class="p-3 d-flex justify-content-center"><a href="javascript:void(0)"
                                                    class="libraryLogoImg"><img src="assets/images/digiImage1.png"
                                                        alt="image1"></a></td>
                                            <td class="p-3"><a href="javascript:void(0)"
                                                    class="libraryCmp bg-green-100 text-green-500 font-semibold px-1">Completed</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="rightContent py-7 sm:py-0" id="asideAddClass">
                        <div class="card feedSec">
                            <div class="rightContentFeed">
                                <h3 class="feedTitle">New store creation</h3>
                                <ul class="d-flex flex-col gap-3 py-4">
                                    <li class="bg-amber-500 p-2 rounded-md text-white font-medium text-md">Dave
                                        created
                                        a
                                        new
                                        store..
                                    </li>
                                    <li class="bg-amber-500 p-2 rounded-md text-white font-medium text-md">Wills
                                        created
                                        a
                                        new
                                        store..
                                    </li>
                                    <li class="bg-amber-500 p-2 rounded-md text-white font-medium text-md">Mark
                                        created
                                        a
                                        new
                                        store..
                                    </li>
                                </ul>
                            </div>
                            <div class="rightContentFeed ">
                                <h3 class="feedTitle">Recent upload</h3>
                                <ul class="d-flex flex-col gap-3 py-4">
                                    <li class="bg-sky-500 p-2 rounded-md text-white font-medium text-md">Riot Logo
                                        Updated 2 days ago
                                    </li>
                                    <li class="bg-sky-500 p-2 rounded-md text-white font-medium text-md">Fossil
                                        Logo Updated 5 days ago...
                                    </li>
                                    <li class="bg-sky-500 p-2 rounded-md text-white font-medium text-md">RegenX
                                        Logo Updated A month ago...
                                    </li>
                                </ul>
                            </div>
                            <div class="rightContentFeed">
                                <h3 class="feedTitle">Active Feed</h3>
                                <ul class="d-flex flex-col gap-4 py-4">
                                    <li class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/icon/user.svg"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-md">Recent comment..</p>
                                    </li>
                                    <li class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/icon/user.svg"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-md">Recent comment..</p>
                                    </li>
                                    <li class="newsFeed d-flex align-items-center justify-content-start">

                                        <div class="newsFeedImg"> <img src="assets/images/icon/user.svg"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-md">Recent comment..</p>

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="card pieChartBox">
                            <canvas id="myPieChart" style="width:100%;max-width:600px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx1 = document.getElementById('myChart');
            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                        'Oct', 'Nov', 'Dec'
                    ],
                    datasets: [{
                        label: '# of Votes',
                        data: [1, 10, 3, 5, 2, 3, 7, 8, 2, 5, 4],
                        borderWidth: 1,
                        // borderColor: "#1d3557",
                        backgroundColor: "#457b9d",
                        // pointBackgroundColor: "black",
                        // pointBorderColor: "#55bae7",
                        // pointHoverBackgroundColor: "#55bae7",
                        // pointHoverBorderColor: "#55bae7",


                    }],

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                        // plugins: {
                        //     legend: {
                        //         labels: {
                        //             color: "black",
                        //             font: {
                        //                 size:25
                        //             }
                        //         }
                        //     }
                        // },
                    }
                }
            });
            const ctx2 = document.getElementById('myBarChart');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                        'Oct', 'Nov', 'Dec'
                    ],
                    datasets: [{
                        label: 'Top Sells',
                        data: [100, 52, 33, 45, 64, 30, 17, 84],
                        borderWidth: 2,
                        borderColor: "#fff",
                        backgroundColor: "#a8dadc",
                        // pointBackgroundColor: "black",
                        // pointBorderColor: "#55bae7",
                        // pointHoverBackgroundColor: "#55bae7",
                        // pointHoverBorderColor: "#55bae7",
                        backgroundColor: ["#1d3557", "#243d61", "#375784", "#457b9d", "#7FDBFF", "#375784",
                            "#243d61", "#457b9d"
                        ],


                    }],

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                        // plugins: {
                        //     legend: {
                        //         labels: {
                        //             color: "black",
                        //             font: {
                        //                 size:25
                        //             }
                        //         }
                        //     }
                        // },
                    }
                }
            });

            const ctx3 = document.getElementById('myPieChart');
            new Chart(ctx3, {
                type: 'pie',
                data: {
                    labels: ['Most visited stores', 'Popular categories', 'User demographics'],
                    datasets: [{
                        label: 'Engagement Metrics',
                        data: [8, 10, 6],
                        borderWidth: 2,
                        borderColor: "#fff",
                        backgroundColor: "#FFF",
                        backgroundColor: ["#1d3557", "#457b9d", "#7FDBFF"],
                        hoverOffset: 15

                    }],

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }

                    }
                }
            });
        </script>

        <script>
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#asideAddClass').addClass('newClass');
                } else {
                    $('#asideAddClass').removeClass('newClass');
                }
            });
        </script>
        </body>

        </html>
