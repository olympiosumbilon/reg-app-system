<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin | MSU-MSAT Registrar's Online Appointment System</title>

        <!-- bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
            crossorigin="anonymous"
        />
        <link rel="icon" type="image/png" href="images/msat-logo.png">
        <link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}"  />
        <link rel="stylesheet" href="{{ asset('css/admin/fonts.css') }}"  />
        <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/display.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/message.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/forms.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/announcement.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/modal.css') }}" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <!-- //TODO: NAVBAR -->
        <nav
            class="navbar navbar-expand navbar-dark d-flex flex-column align-item-start"
            id="sidebar"
        >
            <div class="navbar-brand d-flex flex-row m-0 align-items-center">
                <div class="logo">
                    <img
                        class="image-fluid"
                        src="{{ asset('images/msat-logo.png') }}"
                        alt=""
                    />
                </div>
                <p class="text-wrap fs-6 font-corm font-white ps-3 m-0">
                    MSU-MSAT Registrar
                </p>
            </div>
            <ul class="navbar-nav d-flex flex-column mt-3 w-100">
                <li class="nav-item w-100">
                    <a
                        href="dashboard"
                        class="nav-link active"
                        onclick="viewDashboard()"
                        >Dashboard</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="message" class="nav-link" onclick="viewMessage()"
                        >Message<span class="badge badge-custom">4</span></a
                    >
                </li>
                <hr />
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewRequests()"
                        >Appointment Requests<span class="badge badge-custom"
                            >11</span
                        ></a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="forms" class="nav-link" onclick="viewForms()"
                        >Forms Configuration</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewAnnouncement()"
                        >Announcement</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewFaqs()">FAQs</a>
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewSettings()"
                        >Settings</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- //TODO: CONTAINER -->
        <div class="content-container p-5">
            <div class="d-flex flex-row align-items-center mb-3">
                <a class="btn d-flex flex-row align-items-center" id="menu-btn">
                    <img src="/images/back-arrow.png" alt="" />
                    <p class="m-0 p-0 font-nun fs-6 ms-2" id="page-title">
                        Dashboard
                    </p>
                </a>
            </div>
            <div class="content-main">
                <!-- TODO: this is the  DASHBOARD MENU -->
                <div id="dashboard-content">
                    <div class="row d-flex flex-row">
                        <div class="col-md-4">
                            <div id="track-boxes" class="track-boxes p-4">
                                <h4>List of pending as of today!</h4>
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >

                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Transcript of Records (TOR)
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >20</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Certification Authentication
                                            Verification (CAV)
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >1</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            School ID
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >47</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Diploma
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >3</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Issuance of Honorable Dismissal or
                                            Transfer Credentials
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >6</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Issuance of Certification
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >0</span
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            
                            <div id="cal-box" class="cal-box p-4">
                                @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif 
                                <h4>Scheduling Calendar</h4>
                                <small>Set a day for appointment slot</small>
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space my-4"></div>
                    <div class="row d-flex flex-row m-2">
                        <div class="appointment-records p-4">
                            <div class="w-100 fs-2 font-bold font-nun mb-2">
                                Appointment Records
                            </div>
                            <div class="table-rounded">
                                <table
                                    class="table table-bordered table-sm font-nun table-striped"
                                >
                                    <thead class="table-head text-center">
                                        <tr>
                                            <th>Appointment Number</th>
                                            <th>School ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Document Requested</th>
                                            <th>Date Requested</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($bookings as $booking)
                                        <tr class="text-center">
                                            <td>{{ $booking->appointment->booking_number }}</td>
                                            <td>{{ $booking->user->school_id }}</td>
                                            <td>{{ $booking->user->firstName }}</td>
                                            <td>{{ $booking->user->lastName }}</td>
                                            <td>{{ $booking->appointment->form->name}}</td>
                                            <td>{{ $booking->created_at->format('M d, Y h:i A') }}</td>
                                            <td class="td-view">
                                                <a
                                                    type="button"
                                                    class="btn view-request p-0 view-btn"
                                                    id="{{ $booking->id }}"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#view-request-modal"
                                                    >View</a
                                                >
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="requests-content"></div>
                <div id="message-content"></div>
                <div id="forms-content"></div>
                <div id="announcement-content"></div>
                <div id="faqs-content"></div>
                <div id="settings-content"></div>
            </div>
        </div>
<!--//TODO: this is displaying in the calendar-->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="cal-box" class="cal-box p-4">
                        <h4>Scheduling Calendar</h4>
                        <small>Set a day for appointment slot</small>
                        <div id="calendar">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header font-karma">Appointment Slots</div>
                        <div class="card-body">
                            <form id="create_slot_form" method="POST" action="{{ route('appointment_slots.store') }}">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="slot_date" class="font-karma">Slot Date:</label>
                                    <input type="date" class="form-control" id="slot_date" name="slot_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="available_slots" class="font-karma">Available Slots:</label>
                                    <input type="number" class="form-control" id="available_slots" name="available_slots" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label font-karma" for="">
                                            Disable
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-custom">Create Slot</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- //TODO: this is modalization -->
        <div
            class="modal fade"
            id="appointment_slot_modal"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="deleteCourseModal"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
            > 
                <div class="modal-content">
                    <form id="create_slot_form" method="POST" action="{{ route('appointment_slots.store') }}">
                        @csrf
                    <div class="modal-header">
                        <h1
                            class="modal-title fs-5 font-white font-nun"
                            id="appointment_slot_modal"
                        >
                            Set Appointment Slot
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body font-nun px-5 text-center">
                            <div class="w-auto d-flex flex-row justify-content-end mb-3">
                                <b class="me-4 ">LEGEND:</b>
                                <input class="form-check-input" type="checkbox" value="" id="" disabled>
                                <label class="form-check-label" for="">Not Disabled</label>
                                <input class="form-check-input ms-2" type="checkbox" value="" id="" checked disabled>
                                <label class="form-check-label" for="">Disabled</label>
                            </div>
                            <div class="w-auto d-flex flex-row justify-content-end">
                                <input type="checkbox" class="btn-check" id="is_disabled" name="is_disabled" autocomplete="off">
                                <label class="btn btn-disable" for="is_disabled">Disable</label>
                            </div>
                         
                                <label
                                    class="p-0 font-karma text-center"
                                    for="input_slot"
                                    >Set a number of slots available<br />for
                                    <span id="slot_date" name="slot_date" ></span
                                ></label>
                                <input
                                    class="form-control"
                                    type="number"
                                    id="available_slots"
                                    name="available_slots"
                                    placeholder=""
                                    aria-label="default input example"
                                />                           
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-custom"
                            data-bs-dismiss="modal"
                        >
                            Dissmis
                        </button>
                        <button type="submit" class="btn btn-custom ms-3">
                            Create Slot
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!-- fix this is the mdoal VIEW INFORMATiON -->
        <div
            class="modal fade"
            id="view-request-modal"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-fullscreen modal-dialog-scrollable modal-dialog-centered"
            >
                <div class="modal-content">
                    <div class="modal-body view-request-modal">
                        <div class="d-flex flex-row align-items-center">
                            <div class="profile-pic">
                                <img src="/images/user.png" alt="" />
                            </div>
                            <div
                                class="d-flex flex-column w-100 font-13 px-3 font-nun"
                            >
                                <p class="p-0 m-0 fs-5 font-bold" id="viewFullName">
                                    
                                </p>
                                <p class="p-0 m-0 font-small" id="viewEmail">
                                    {{-- mgonoy13@gmail.com --}}
                                </p>
                                <p class="p-0 m-0 font-small" id="viewCpNo"></p>
                            </div>
                        </div>

                        <div
                            class="p-info d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/person.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Personal Information
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-6">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">SCHOOL ID</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewSchoolID"></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                STUDENT STATUS
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewStudentStatus">
                                              
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">COURSE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewCourse">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                ACADEMIC YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewAcadYear">
                                              
                                            
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                GRADUATED YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewGradYear"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">GENDER</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewGender"></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                CIVIL STATUS
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewCivilStats"></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">BIRTHDATE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewBirthdate">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">ADDRESS</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewAddress">
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-info d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/appointment.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Appointment Information
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-6">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                APPOINTMENT ID
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewAppID"></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                APPOINTMENT DATE
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewAppDate">
                                               
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DATE REQUESTED
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewDocDateReq">
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DOCUMENT REQUESTED
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewDocReq">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                ACADEMIC YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewDocReqYear">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">PURPOSE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewPurpose">
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-info-pay d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/payment.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Payment Method
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-8">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DOCUMENT FEE
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewDocFee">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">METHOD</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content" id="viewMethod"></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <!-- ichange sab ang image pareha sa payment proof of payment para anytime madownload nila if gamay ra kaau para maview -->
                                        <a
                                            href="/images/g-cash-temp.png"
                                            class="btn btn-slot"
                                            download
                                            >Download image</a
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="payment-method">
                                            <img
                                                src="/images/g-cash-temp.png"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-row justify-content-end m-0 mt-5"
                        >
                            <button
                                class="btn btn-dark"
                                type="button"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button id="back-to-top-btn" class="btn btn-custom">Back to top</button>

        <!-- FIX footer -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"
        ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('js/admin/navbar.js') }}"></script>
        <script src="{{ asset('js/admin/divheight.js') }}"></script>
        <script src="{{ asset('js/admin/admin.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

        <script>
            $(document).ready(function () {
                        $("#calendar").fullCalendar({
                            header: {
                                defaultView: "month",
                            },
                            viewRender: function (view, element) {
                                var cal_box_height = $("#calendar").height();
                                var track_box = $("#track-boxes");
                                track_box.height(cal_box_height);
                            },
                            aspectRatio: 1.5,
                            selectable: true,
                            selectHelper: true,
                            editable: true,
                            eventLimit: true,
                            businessHours: {
                                //0 and 6 mao ang sat ug sun
                                daysOfWeek: [1, 2, 3, 4, 5], // mon-fri
                                startTime: "8:00",
                                endTime: "17:00",
                            },
                            minDate: moment().add(1, "day"),
                            dayClick: function (date, jsEvent, view) {
                                var today = moment().format("YYYY-MM-DD");
                                var clickedDate = moment(date).format("YYYY-MM-DD");
                                var formattedDate = moment(date).format("MMMM, DD YYYY");

                                if (clickedDate > today && date.day() !== 0 && date.day() !== 6) {
                                    // Check if the date is already occupied by an event
                                    var isOccupied =
                                        $("#calendar").fullCalendar(
                                            "clientEvents",
                                            function (event) {
                                                return (
                                                    moment(event.start).format("YYYY-MM-DD") ===
                                                    clickedDate
                                                );
                                            }
                                        ).length > 0;
                                    // pass the formatted date value to the modal
                                    $("#appointment_slot_modal")
                                        .find("#slot_date")
                                        .text(formattedDate);
                                    $("#appointment_slot_modal").modal("show");

                                    // Add event listener to remove clicked class and message when modal is dismissed
                                    $("#appointment_slot_modal").on("hidden.bs.modal", function () {
                                        $(".fc-day.clicked")
                                            .removeClass("clicked")
                                            .find(".click-message")
                                            .remove();
                                    });
                                    if (!isOccupied) {
                                        $("#calendar").fullCalendar("renderEvent", {
                                            title: "Clicked",
                                            start: date,
                                            allDay: true,
                                        });

                                        $(".fc-day.clicked")
                                            .removeClass("clicked")
                                            .find(".click-message")
                                            .remove();

                                        $('.fc-day[data-date="' + clickedDate + '"]')
                                            .addClass("clicked")
                                            .find(".fc-day-number")
                                            .append(
                                                '<span class="click-message">Clicked</span>'
                                            );
                                    } else {
                                        // The date is already occupied, show an error message or do nothing
                                        alert("This date is already occupied.");
                                    }
                                }
                            },
                        });

                        $("#submit_slot").on("click", function (event) {
                                var slot_date = $("#slot_date").text();
                                var input_slot = $("#input_slot").val();
                                var is_disabled = $("#disable").is(":checked");

                                // Make the AJAX call to the server
                                $.ajax({
                                        type: "POST",
                                        url: "/appointment_slots",
                                        data: {
                                            slot_date: clickedDate, // pass the clicked date as a parameter
                                            available_slots: input_slot,
                                            is_disabled: is_disabled,
                                            appointment_id: appointment_id // Provide a valid appointment_id value here
                                        },
                                        success: function (response) {
                                            console.log(response);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.error(jqXHR, textStatus, errorThrown);
                                        }
                                    });


                                $("#appointment_slot_modal").modal("hide");
                            });
                    });

        </script>      
        
        <script>
            var menu_btn = document.querySelector("#menu-btn");
            var sidebar = document.querySelector("#sidebar");
            var container = document.querySelector(".content-container");
            menu_btn.addEventListener("click", () => {
                sidebar.classList.toggle("active-nav");
                container.classList.toggle("active-cont");
            });

            const backToTopBtn = document.querySelector("#back-to-top-btn");

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 100) {
                    backToTopBtn.classList.add("show");
                    backToTopBtn.classList.remove("hide");
                } else {
                    backToTopBtn.classList.add("hide");
                    backToTopBtn.classList.remove("show");
                }
            });

            backToTopBtn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        </script>

<script>
    var viewBtns = document.querySelectorAll('.view-btn');
    for (var i = 0; i < viewBtns.length; i++) {
        viewBtns[i].addEventListener('click', function() {
            var bookingId = this.id;

            fetch('/bookings/' + bookingId)
                .then(response => response.json())
                .then(data => {
                    console.log(data.email);
                    document.getElementById("viewFullName").innerHTML = data.fullName;
                    document.getElementById("viewEmail").innerHTML = data.email;
                    document.getElementById("viewCpNo").innerHTML = data.cell_no;
                    document.getElementById("viewSchoolID").innerHTML = data.school_id;
                    document.getElementById("viewStudentStatus").innerHTML = data.status;
                    document.getElementById("viewCourse").innerHTML = data.course;
                    document.getElementById("viewAcadYear").innerHTML = data.acadYear;
                    document.getElementById("viewGradYear").innerHTML = data.gradYear;
                    document.getElementById("viewGender").innerHTML = data.gender;
                    document.getElementById("viewCivilStats").innerHTML = data.civil_status;
                    document.getElementById("viewBirthdate").innerHTML = data.birthdate;
                    document.getElementById("viewAddress").innerHTML = data.address;

                    document.getElementById("viewAppID").innerHTML = data.booking_number;
                    document.getElementById("viewAppDate").innerHTML = data.appointment_date;
                    document.getElementById("viewDocDateReq").innerHTML = data.doc_created;
                    document.getElementById("viewDocReq").innerHTML = data.doc_name;
                    document.getElementById("viewDocReqYear").innerHTML = data.doc_req_year;
                    document.getElementById("viewPurpose").innerHTML = data.app_purpose;

                    document.getElementById("viewDocFee").innerHTML = data.doc_fee;
                    document.getElementById("viewMethod").innerHTML = data.payment_method;
                    // ...
                    });
        });
    }
</script>
    </body>
</html>
