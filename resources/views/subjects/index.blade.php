@extends('layouts.dashboardlayout')

@section('title', 'Subjects List')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav d-flex align-items-center  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li>
            <li class="mt-1">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
              </a>
            </li>
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-symbols-rounded">notifications</i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0 d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm rounded-circle" alt="user">
                    <div class="d-flex flex-column ms-2">
                        <span class="d-none d-md-inline-block">{{ Auth::user()->name }}</span>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                            <i class="material-symbols-rounded me-2">person</i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="material-symbols-rounded me-2">settings</i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <i class="material-symbols-rounded me-2">logout</i>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>

          </ul>
        </div>
      </div>
</nav>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="mb-3 pr-3 d-flex justify-content-between align-items-center">
                    <h3 class="welcome-text text-dark font-weight-bold m-0">Subject table</span></h3>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#triggerModalSubject"
                        data-id="" data-name="" data-code="" data-units="" data-instructor="" data-action="{{ route('subjects.store') }}" data-method="POST" data-mode="add">Add Subject</button>
                </div>
                <div style="height: calc(100vh - 210px); width: 100%; overflow-y: scroll; position:relative">
                    <table class="table table-hover position-relative text-center">
                        <colgroup>
                            <col width="10%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">
                            <col width="14%">
                            <col width="15%">
                        </colgroup>
                        <thead style="position: sticky; top: 0;" class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Subject code</th>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Units</th>
                                <th class="text-center" scope="col">Instructor</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjectList as $subjects)
                            <tr style="cursor: pointer;">
                                <td class="align-middle" scope="row">{{ $subjects->id }}</td>
                                <td class="align-middle">{{ $subjects->code }}</td>
                                <td class="align-middle">{{ $subjects->name }}</td>
                                <td class="align-middle">{{ $subjects->units }}</td>
                                <td class="align-middle">{{ $subjects->instructor }}</td> 

                                <td class="gap-2 d-flex justify-content-center align-items-center">
                                   
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#triggerModalSubject" data-id="{{ $subjects->id }}"
                                        data-name="{{ $subjects->name }}" data-code="{{ $subjects->code }}" data-units="{{ $subjects->units }}" data-instructor="{{ $subjects->instructor }}" data-mode="edit" data-action="{{ route('subjects.update', $subjects->id) }}" data-method="PUT" class="me-2" style="font-size: 1.5rem; color: #198754;">
                                        <span class="mdi mdi-file-edit"></span>
                                    </a>
                                    <a href="#" onclick="deleteStudent('{{ $subjects->id }}')" class="me-2" style="font-size: 1.5rem; color: #dc3545;">
                                        <span class="mdi mdi-delete"></span>
                                    </a>

                                    <form action="{{route('subjects.destroy', $subjects->id)}}" id="IdToDelete-{{$subjects->id}}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

<script>
    function deleteStudent(id) {
        if (confirm('Are you sure you want to delete this subject?')) {
            document.getElementById('IdToDelete-' + id).submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(\Session::has('success'))
<script>
    Swal.fire({
        title: "Success",
        text: "{{\Session::get('success')}}",
        icon: "success",

    });
</script>
@endif
@if ($errors->any())
<script>
    Swal.fire({
        title: "Validation Error",
        html: "{!! implode('<br>', $errors->all()) !!}",
        icon: "error",
        confirmButtonText: "OK"
    });
</script>
@endif

<script>
    function deleteStudent(id) {
        Swal.fire({
            title: "Delete",
            text: "Are you sure you want to delete this subject?",
            icon: "warning",
            showCancelButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("IdToDelete-" + id)
                form.submit();
            }
        });

    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/subjectModalHandler.js"></script>
@include('modals.subjectModal')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection