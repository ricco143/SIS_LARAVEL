<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  @yield('title', 'Student Information System')
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="landing-page bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
          <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <a class="navbar-brand font-weight-bolder ms-sm-3 d-none d-md-block" href="" rel="tooltip" data-placement="bottom" target="_blank">
              Student Information System
            </a>
            <a class="navbar-brand font-weight-bolder ms-sm-3 d-block d-md-none" href="https://www.creative-tim.com/material-dashboard" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              Material Dashboard
            </a>
            <a href="https://www.creative-tim.com/product/material-dashboard#pricingCard" class="btn btn-sm  bg-gradient-dark  mb-0 ms-auto d-lg-none d-block">Buy Now</a>
            <button class="navbar-toggler shadow-none ms-2 ms-md-0" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item d-flex align-items-center mx-2">
                  <a href="#components" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Components
                  </a>
                </li>
                <li class="nav-item d-flex align-items-center mx-2">
                  <a href="#blocks" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Blocks
                  </a>
                </li>
                <li class="nav-item d-flex align-items-center mx-2">
                  <a href="#docs" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Docs
                  </a>
                </li>
                <li class="nav-item d-flex align-items-center mx-2">
                  <a href="#pricing" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Pricing & FAQ
                  </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                  <a href="https://github.com/creativetimofficial/material-dashboard" target="_blank" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on GitHub!" data-container="body" data-animation="true">
                    <svg class="me-2" width="56" height="19" viewBox="0 0 56 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_31_708)">
                        <rect width="56" height="19" rx="4" fill="#344767" />
                        <path d="M27.916 5.87598V13H26.5098V7.49707L24.8203 8.03418V6.92578L27.7646 5.87598H27.916ZM35.0156 8.82031V10.0508C35.0156 10.5846 34.9587 11.0452 34.8447 11.4326C34.7308 11.8167 34.5664 12.1325 34.3516 12.3799C34.14 12.624 33.8877 12.8047 33.5947 12.9219C33.3018 13.0391 32.9762 13.0977 32.6182 13.0977C32.3317 13.0977 32.0648 13.0618 31.8174 12.9902C31.57 12.9154 31.347 12.7998 31.1484 12.6436C30.9531 12.4873 30.7839 12.2904 30.6406 12.0527C30.5007 11.8118 30.3932 11.5254 30.3184 11.1934C30.2435 10.8613 30.2061 10.4805 30.2061 10.0508V8.82031C30.2061 8.28646 30.263 7.8291 30.377 7.44824C30.4941 7.06413 30.6585 6.75 30.8701 6.50586C31.085 6.26172 31.3389 6.08268 31.6318 5.96875C31.9248 5.85156 32.2503 5.79297 32.6084 5.79297C32.8949 5.79297 33.1602 5.8304 33.4043 5.90527C33.6517 5.97689 33.8747 6.08919 34.0732 6.24219C34.2718 6.39518 34.4411 6.59212 34.5811 6.83301C34.721 7.07064 34.8285 7.35547 34.9033 7.6875C34.9782 8.01628 35.0156 8.39388 35.0156 8.82031ZM33.6045 10.2363V8.62988C33.6045 8.37272 33.5898 8.14811 33.5605 7.95605C33.5345 7.764 33.4938 7.60124 33.4385 7.46777C33.3831 7.33105 33.3148 7.22038 33.2334 7.13574C33.152 7.05111 33.0592 6.98926 32.9551 6.9502C32.8509 6.91113 32.7354 6.8916 32.6084 6.8916C32.4489 6.8916 32.3073 6.92253 32.1836 6.98438C32.0632 7.04622 31.9606 7.14551 31.876 7.28223C31.7913 7.41569 31.7262 7.59473 31.6807 7.81934C31.6383 8.04069 31.6172 8.31087 31.6172 8.62988V10.2363C31.6172 10.4935 31.6302 10.7197 31.6562 10.915C31.6855 11.1104 31.7279 11.278 31.7832 11.418C31.8418 11.5547 31.9102 11.667 31.9883 11.7549C32.0697 11.8395 32.1624 11.9014 32.2666 11.9404C32.374 11.9795 32.4912 11.999 32.6182 11.999C32.7744 11.999 32.9128 11.9681 33.0332 11.9062C33.1569 11.8411 33.2611 11.7402 33.3457 11.6035C33.4336 11.4635 33.4987 11.2812 33.541 11.0566C33.5833 10.832 33.6045 10.5586 33.6045 10.2363ZM37.4375 5.49512V13H36.0312V5.49512H37.4375ZM40.7676 7.7168L38.4727 10.334L37.2422 11.5791L36.7295 10.5635L37.7061 9.32324L39.0781 7.7168H40.7676ZM39.3076 13L37.7451 10.5586L38.7168 9.70898L40.9287 13H39.3076ZM45.9727 9.04004V10.2656H41.0996V9.04004H45.9727ZM44.2051 7.11133V12.2871H42.8721V7.11133H44.2051Z" fill="white" />
                        <path d="M20.2857 8.03906C20.2857 8.12091 20.2374 8.21019 20.1406 8.30692L18.115 10.2824L18.5949 13.0725C18.5986 13.0986 18.6004 13.1358 18.6004 13.1842C18.6004 13.2623 18.58 13.3274 18.5391 13.3795C18.5019 13.4353 18.4461 13.4632 18.3717 13.4632C18.301 13.4632 18.2266 13.4408 18.1484 13.3962L15.6429 12.0792L13.1373 13.3962C13.0554 13.4408 12.981 13.4632 12.9141 13.4632C12.8359 13.4632 12.7764 13.4353 12.7355 13.3795C12.6983 13.3274 12.6797 13.2623 12.6797 13.1842C12.6797 13.1618 12.6834 13.1246 12.6908 13.0725L13.1708 10.2824L11.1395 8.30692C11.0465 8.20647 11 8.11719 11 8.03906C11 7.90141 11.1042 7.81585 11.3125 7.78237L14.1138 7.375L15.3694 4.83594C15.4401 4.68341 15.5313 4.60714 15.6429 4.60714C15.7545 4.60714 15.8456 4.68341 15.9163 4.83594L17.1719 7.375L19.9732 7.78237C20.1815 7.81585 20.2857 7.90141 20.2857 8.03906Z" fill="white" />
                      </g>
                      <defs>
                        <clipPath id="clip0_31_708">
                          <rect width="56" height="19" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <svg width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.496275" d="M5.83594 14.207C5.83594 14.207 5.80078 14.1719 5.76562 14.1367C5.73047 14.1367 5.69531 14.1016 5.625 14.1016C5.48438 14.1016 5.44922 14.1719 5.44922 14.2422C5.44922 14.3477 5.48438 14.3828 5.625 14.3828C5.76562 14.3828 5.83594 14.3125 5.83594 14.207ZM4.74609 14.0664C4.74609 13.9961 4.81641 13.9609 4.95703 13.9961C5.0625 14.0312 5.09766 14.0664 5.09766 14.1367C5.09766 14.207 5.0625 14.2422 5.02734 14.2422C4.95703 14.2773 4.92188 14.2773 4.88672 14.2422C4.81641 14.2422 4.78125 14.207 4.74609 14.1719C4.71094 14.1367 4.71094 14.1016 4.74609 14.0664ZM6.29297 13.9961C6.39844 13.9961 6.46875 14.0312 6.46875 14.1016C6.46875 14.1719 6.43359 14.2422 6.32812 14.2773C6.25781 14.2773 6.22266 14.2773 6.1875 14.2773C6.15234 14.2773 6.11719 14.207 6.11719 14.1367C6.11719 14.0664 6.15234 14.0312 6.29297 13.9961ZM8.61328 0.53125C10.1953 0.53125 11.6719 0.917969 13.043 1.65625C14.3789 2.42969 15.4688 3.44922 16.2422 4.71484C17.0156 6.05078 17.4375 7.52734 17.4375 9.10938C17.4375 11.0781 16.875 12.8008 15.7852 14.3477C14.6953 15.8945 13.2891 16.9492 11.5312 17.5117C11.3203 17.582 11.1797 17.5469 11.0742 17.4414C10.9688 17.3711 10.9336 17.2305 10.9336 17.0898V14.1367C10.9336 13.3984 10.7227 12.8711 10.3359 12.5195C11.1797 12.4492 11.8477 12.3086 12.2695 12.168C12.9023 11.957 13.4297 11.6055 13.7812 11.1133C14.168 10.5156 14.3789 9.67188 14.3789 8.61719C14.3789 8.19531 14.2734 7.80859 14.1328 7.45703C13.9922 7.24609 13.7812 6.92969 13.4648 6.57812C13.5352 6.36719 13.6055 6.08594 13.6406 5.73438C13.6406 5.24219 13.5703 4.71484 13.3945 4.1875C13.1484 4.11719 12.832 4.1875 12.4102 4.32812C12.1289 4.46875 11.7773 4.60938 11.4258 4.82031L10.9688 5.13672C10.2305 4.92578 9.49219 4.82031 8.71875 4.82031C7.94531 4.82031 7.24219 4.92578 6.53906 5.13672L6.08203 4.82031C5.69531 4.60938 5.34375 4.46875 5.0625 4.32812C4.64062 4.1875 4.32422 4.11719 4.11328 4.1875C3.90234 4.71484 3.79688 5.24219 3.86719 5.73438C3.86719 6.08594 3.90234 6.33203 4.00781 6.54297C3.72656 6.89453 3.51562 7.24609 3.375 7.52734C3.23438 7.80859 3.19922 8.19531 3.19922 8.61719C3.19922 9.67188 3.375 10.5156 3.76172 11.0781C4.07812 11.5703 4.57031 11.957 5.23828 12.168C5.66016 12.3086 6.29297 12.4492 7.13672 12.5195C6.82031 12.8008 6.64453 13.2227 6.57422 13.7148C6.15234 13.9258 5.76562 13.9961 5.41406 13.9258C4.78125 13.8906 4.32422 13.5742 4.00781 12.9766C3.86719 12.7305 3.65625 12.5195 3.44531 12.3438C3.26953 12.2734 3.09375 12.168 2.91797 12.0977L2.67188 12.0625C2.39062 12.0625 2.25 12.1328 2.25 12.2031C2.25 12.2734 2.28516 12.3789 2.42578 12.4492L2.60156 12.5898C2.74219 12.6953 2.91797 12.8359 3.09375 13.0469C3.23438 13.2227 3.33984 13.3984 3.44531 13.6094L3.58594 13.8906C3.69141 14.2422 3.90234 14.5234 4.25391 14.6992C4.53516 14.875 4.85156 14.9805 5.27344 15.0156C5.55469 15.0508 5.83594 15.0508 6.15234 14.9805L6.53906 14.9453L6.57422 17.0898C6.57422 17.2305 6.50391 17.3711 6.39844 17.4414C6.29297 17.5469 6.15234 17.582 5.97656 17.5117C4.18359 16.9492 2.74219 15.8945 1.65234 14.3477C0.527344 12.8008 0 11.0781 0 9.10938C0 7.52734 0.351562 6.08594 1.125 4.75C1.86328 3.44922 2.88281 2.42969 4.21875 1.65625C5.51953 0.917969 6.99609 0.53125 8.61328 0.53125ZM3.41016 12.6602C3.44531 12.625 3.51562 12.625 3.58594 12.6953C3.65625 12.7656 3.65625 12.8359 3.62109 12.8711C3.55078 12.9414 3.51562 12.9062 3.44531 12.8359C3.375 12.7656 3.33984 12.7305 3.41016 12.6602ZM3.02344 12.3789C3.05859 12.3438 3.12891 12.3438 3.19922 12.3789C3.26953 12.4141 3.26953 12.4492 3.26953 12.5195C3.23438 12.5898 3.16406 12.5898 3.09375 12.5195C3.02344 12.4844 2.98828 12.4492 3.02344 12.3789ZM4.18359 13.6094C4.18359 13.6094 4.21875 13.6094 4.28906 13.6094C4.32422 13.6094 4.35938 13.6445 4.39453 13.6797C4.42969 13.7148 4.46484 13.75 4.46484 13.7852C4.46484 13.8555 4.46484 13.8906 4.46484 13.8906C4.39453 13.9609 4.28906 13.9609 4.21875 13.8555C4.14844 13.8203 4.14844 13.7852 4.14844 13.7148C4.14844 13.6797 4.14844 13.6445 4.18359 13.6094ZM3.76172 13.1172C3.79688 13.1172 3.83203 13.1172 3.86719 13.1172C3.90234 13.1172 3.9375 13.1523 3.97266 13.1875C4.04297 13.293 4.04297 13.3633 3.97266 13.3984C3.9375 13.4336 3.90234 13.4336 3.86719 13.3984C3.83203 13.3984 3.79688 13.3633 3.76172 13.3281C3.69141 13.2227 3.69141 13.1523 3.76172 13.1172Z" fill="#344767" />
                    </svg>
                  </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                  <a href="https://demos.creative-tim.com/material-dashboard/pages/dashboard.html" target="_blank" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Live Preview
                  </a>
                </li>
                </li>
              <li class="d-flex flex-column mt-3 mx-3">
                <a href="{{ route('login') }}" class="btn w-100 w-md-auto btn-dark px-4  py-2">
                  Login
                </a>
              </li>
              <li class="d-flex flex-column mt-3 mx-3">
                <a href="{{ route('register') }}" class="btn w-100 w-md-auto btn-primary px-4 py-2">
                  Register
                </a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <header>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mt-8 position-relative z-index-1">
            <div class="d-flex align-items-center">
              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5714 7.07812C18.5714 7.24182 18.4747 7.42039 18.2813 7.61384L14.2299 11.5647L15.1897 17.1451C15.1972 17.1972 15.2009 17.2716 15.2009 17.3683C15.2009 17.5246 15.16 17.6548 15.0781 17.7589C15.0037 17.8705 14.8921 17.9263 14.7433 17.9263C14.6019 17.9263 14.4531 17.8817 14.2969 17.7924L9.28571 15.1585L4.27455 17.7924C4.11086 17.8817 3.96205 17.9263 3.82813 17.9263C3.67188 17.9263 3.55283 17.8705 3.47098 17.7589C3.39658 17.6548 3.35938 17.5246 3.35938 17.3683C3.35938 17.3237 3.36682 17.2493 3.3817 17.1451L4.34152 11.5647L0.279018 7.61384C0.093006 7.41295 0 7.23437 0 7.07812C0 6.80283 0.208333 6.6317 0.625 6.56473L6.22768 5.75L8.73884 0.671874C8.88021 0.366815 9.0625 0.214285 9.28571 0.214285C9.50893 0.214285 9.69122 0.366815 9.83259 0.671874L12.3438 5.75L17.9464 6.56473C18.3631 6.6317 18.5714 6.80283 18.5714 7.07812Z" fill="#EC407A" />
              </svg>
              <p class="text-primary font-weight-bold mb-0 ms-2">
              10,000+ Students Enrolled
              </p>
            </div>
            <h1>Student Information System</h1>
            <p class="text-lg mt-3">
          Manage student records, track grades, and monitor attendance with ease. Download and integrate our Student Information System into your school’s web platform for efficient student management.
        </p>
            <div class="d-flex align-items-center mb-4">
              <div class="avatar-group">
                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Martin Doe" data-bs-original-title="Martin Doe">
                  <img alt="Image placeholder" src="assets/img/bruce-mars.jpg">
                </a>
                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid">
                  <img alt="Image placeholder" src="assets/img/team-5.jpg">
                </a>
                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Alexa Tompson" data-bs-original-title="Alexa Tompson">
                  <img alt="Image placeholder" src="assets/img/team-3.jpg">
                </a>
              </div>
              <p class="mb-0 ms-2">Join 1,300,000+ Users</p>
            </div>
            <div class="d-block d-md-flex">
              <a href="https://github.com/creativetimofficial/material-dashboard" target="_blank" class="btn w-100 w-md-auto btn-primary">Download</a>
              <button class="btn bg-white ms-md-3 text-lowercase w-100 w-md-auto">
                npm i material-dashboard
                <span id="copy-code" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy code" data-container="body" data-animation="true">
                  <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8672 2.55469C12.1133 2.82812 12.25 3.12891 12.25 3.48438V10.8125C12.25 11.1953 12.1133 11.4961 11.8672 11.7422C11.5938 12.0156 11.293 12.125 10.9375 12.125H8.75V13.4375C8.75 13.8203 8.61328 14.1211 8.36719 14.3672C8.09375 14.6406 7.79297 14.75 7.4375 14.75H1.3125C0.929688 14.75 0.628906 14.6406 0.382812 14.3672C0.109375 14.1211 0 13.8203 0 13.4375V4.6875C0 4.33203 0.109375 4.03125 0.382812 3.75781C0.628906 3.51172 0.929688 3.375 1.3125 3.375H3.5V2.0625C3.5 1.70703 3.60938 1.40625 3.88281 1.13281C4.12891 0.886719 4.42969 0.75 4.8125 0.75H9.51562C9.87109 0.75 10.1719 0.886719 10.4453 1.13281L11.8672 2.55469ZM7.27344 13.4375C7.30078 13.4375 7.32812 13.4375 7.38281 13.3828C7.41016 13.3555 7.4375 13.3281 7.4375 13.2734V12.125H4.8125C4.42969 12.125 4.12891 12.0156 3.88281 11.7422C3.60938 11.4961 3.5 11.1953 3.5 10.8125V4.6875H1.47656C1.42188 4.6875 1.39453 4.71484 1.36719 4.74219C1.3125 4.79688 1.3125 4.82422 1.3125 4.85156V13.2734C1.3125 13.3281 1.3125 13.3555 1.36719 13.3828C1.39453 13.4375 1.42188 13.4375 1.47656 13.4375H7.27344ZM10.7734 10.8125C10.8008 10.8125 10.8281 10.8125 10.8828 10.7578C10.9102 10.7305 10.9375 10.7031 10.9375 10.6484V5.125H8.53125C8.33984 5.125 8.17578 5.07031 8.06641 4.93359C7.92969 4.82422 7.875 4.66016 7.875 4.46875V2.0625H4.97656C4.92188 2.0625 4.89453 2.08984 4.86719 2.11719C4.8125 2.17188 4.8125 2.19922 4.8125 2.22656V10.6484C4.8125 10.7031 4.8125 10.7305 4.86719 10.7578C4.89453 10.8125 4.92188 10.8125 4.97656 10.8125H10.7734ZM10.9375 3.8125V3.53906C10.9375 3.51172 10.9102 3.48438 10.8828 3.42969L9.57031 2.11719C9.51562 2.08984 9.48828 2.0625 9.46094 2.0625H9.1875V3.8125H10.9375Z" fill="#64748B" />
                  </svg>
                </span>
              </button>
            </div>
          </div>
          <svg class="position-absolute top-0" width="1231" height="1421" viewBox="0 0 1231 1421" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.12786" filter="url(#filter0_f_31_15)">
              <ellipse cx="811.5" cy="602.5" rx="675.5" ry="682.5" fill="url(#paint0_linear_31_15)" />
            </g>
            <defs>
              <filter id="filter0_f_31_15" x="0.085907" y="-215.914" width="1622.83" height="1636.83" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="67.957" result="effect1_foregroundBlur_31_15" />
              </filter>
              <linearGradient id="paint0_linear_31_15" x1="804.405" y1="-136.203" x2="160.281" y2="643.776" gradientUnits="userSpaceOnUse">
                <stop stop-color="#7B4CFF" />
                <stop offset="0.469471" stop-color="#EC407A" />
                <stop offset="1" stop-color="white" />
              </linearGradient>
            </defs>
          </svg>
          <img class="position-absolute top-0 mt-n7 me-n12 end-0 w-70 z-index-3" src="../assets/img/perspective.png" alt="header-image">
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body mx-3 mx-md-4 mt-n6 z-index-1 position-relative">
    <div class="bullets d-none d-md-block">
      <ul>
        <li>
          <a class="indicator" href="#stats" data-bs-toggle="tooltip" data-bs-placement="left" title="Stats Section"></a>
        </li>
        <li>
          <a class="indicator" href="#technologies" data-bs-toggle="tooltip" data-bs-placement="left" title="Technologies Section"></a>
        </li>
        <li>
          <a class="indicator" href="#components" data-bs-toggle="tooltip" data-bs-placement="left" title="Components Section"></a>
        </li>
        <li>
          <a class="indicator" href="#docs" data-bs-toggle="tooltip" data-bs-placement="left" title="Documentation Section"></a>
        </li>
        <li>
          <a class="indicator" href="#pricing" data-bs-toggle="tooltip" data-bs-placement="left" title="Pricing Section"></a>
        </li>
        <li>
          <a class="indicator" href="#figma" data-bs-toggle="tooltip" data-bs-placement="left" title="Figma Section"></a>
        </li>
        <li>
          <a class="indicator" href="#products" data-bs-toggle="tooltip" data-bs-placement="left" title="Products Section"></a>
        </li>
        <li>
          <a class="indicator" href="#testimonials" data-bs-toggle="tooltip" data-bs-placement="left" title="Testimonials Section"></a>
        </li>
        <li>
          <a class="indicator" href="#faq" data-bs-toggle="tooltip" data-bs-placement="left" title="FAQ Section"></a>
        </li>
        <li>
          <a class="indicator" href="#join" data-bs-toggle="tooltip" data-bs-placement="left" title="Community Section"></a>
        </li>
        <li>
          <a class="indicator" href="#share" data-bs-toggle="tooltip" data-bs-placement="left" title="Share Section"></a>
        </li>
      </ul>
    </div>
    <section class="pt-3 pb-4" id="stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-11 z-index-2 border-radius-xl mx-auto py-3">
            <div class="row">
              <div class="col-md-6 col-lg-3 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="stats1" countTo="10000">0</span>+</h1>
                  <h5 class="mt-3">Student</h5>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-6 col-lg-3 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"> <span id="stats2" countTo="1300000">0</span>+</h1>
                  <h5 class="mt-3">Student Enrolled</h5>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-6 col-lg-3 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"> <span id="stats3" countTo="3800">0</span>+</h1>
                  <h5 class="mt-3">Subject</h5>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary">4.9/5</h1>
                  <h5 class="mt-3">1,200+ Reviews</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="mt-5 pb-4" id="technologies">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-3">Student Information System in Other Technologies</h2>
        <p>
          Our versatile admin template comes with many versions based on the most popular frontend and backend technologies to suit a wide range of web development needs
        </p>
        </div>
      </div>
<div class="row mb-5">
  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-bootstrap fa-5x"></i> <!-- Bootstrap Icon -->
        </div>
        <h5 class="py-2 text-lg">Bootstrap 5</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://www.figma.com/community/file/1068529518839608496/Material-Dashboard-2---Free-Admin-Template" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-figma fa-5x"></i> <!-- Figma Icon -->
        </div>
        <h5 class="py-2 text-lg">Figma</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-tailwind-dashboard-react" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-tailwind fa-5x"></i> <!-- Tailwind Icon -->
        </div>
        <h5 class="py-2 text-lg">Tailwind</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard-react" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-react fa-5x"></i> <!-- React Icon -->
        </div>
        <h5 class="py-2 text-lg">React</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard-angular2" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-angular fa-5x"></i> <!-- Angular Icon -->
        </div>
        <h5 class="py-2 text-lg">Angular</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/vue-material-dashboard" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-vuejs fa-5x"></i> <!-- Vue.js Icon -->
        </div>
        <h5 class="py-2 text-lg">Vue.js</h5>
      </div>
    </a>
  </div>
</div>

<div class="row mb-5">
  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard-laravel" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-laravel fa-5x"></i> <!-- Laravel Icon -->
        </div>
        <h5 class="py-2 text-lg">Laravel</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/nextjs-material-dashboard" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-js fa-5x"></i> <!-- Next.js Icon -->
        </div>
        <h5 class="py-2 text-lg">Next.js</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-kit-react-native" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-react fa-5x"></i> <!-- React Native Icon -->
        </div>
        <h5 class="py-2 text-lg">React Native</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard-django" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-python fa-5x"></i> <!-- Django Icon -->
        </div>
        <h5 class="py-2 text-lg">Django</h5>
      </div>
    </a>
  </div>

  <div class="col-md-4 col-lg-2 mb-5">
    <a class="h-100 w-100" href="https://github.com/creativetimofficial/material-dashboard-react-nodejs" target="_blank">
      <div class="border border-radius-lg mx-auto text-center">
        <div class="avatar rounded-circle bg-white shadow mx-auto mt-n4">
          <i class="fab fa-node-js fa-5x"></i> <!-- Node.js Icon -->
        </div>
        <h5 class="py-2 text-lg">Node.js</h5>
      </div>
    </a>
  </div>
</div>

    </section>
    <section class="my-5 py-5" id="components">
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-5">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h5 class="text-primary fw-bold text-uppercase text-lg">Get Started</h5>
              <h3>Material Dashboard Components</h3>
              <h6 class="text-secondary font-weight-normal pe-3">
                This popular template includes pre-built components such as tables, charts, maps, notifications, and more. These components are fully customizable and can be easily integrated into any project.
              </h6>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/alert-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Alert</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/button-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Button</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/cards/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/card-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Card</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard#checkboxes" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/checkbox-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Checkbox</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/badge/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/chip-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Chip</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/modal/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/dialog-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Dialog</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard#examples" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/icon-button-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Icon Button</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/input-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Input</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/menu-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Menu</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/navbar-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Navbar</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/pagination-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Pagination</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/popover-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Popover</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/progress/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/progress-bar-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Progress Bar</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard#radios" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/radio-button-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Radio Button</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/choices/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/select-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Select</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard#toggles" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/switch-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Switch</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/navs/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/tabs-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Tabs</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard#form-controls" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/text-area-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Textarea</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/tooltip-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Tooltip</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/typography/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/components/typography-thumbnail.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Typography</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6" id="blocks">
          <div class="col-lg-5">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h5 class="text-primary fw-bold text-uppercase text-lg">Ready to use</h5>
              <h3>Material Dashboard Blocks</h3>
              <h6 class="text-secondary font-weight-normal pe-3">
                A selection of page sections that fit perfectly in any combination. Play with the sections and create the best design for your project!
              </h6>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-md-4 mt-md-0">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/automotive.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/automotive.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Automotive</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/billing.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/billing.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Billing Information</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/charts.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/charts.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Cards with Chart</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/messages.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/conversation.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Conversation History</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/invoice.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/invoice.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Invoice History</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/general.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/project.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Project List</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/timeline.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/project-list.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Project Tables</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/pricing-page.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/pricing.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Pricing</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/sales.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/sales.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Sales</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/discover.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/user-settings.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Story Header</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/orders/list.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/stats.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Transaction History</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/users/new-user.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/user-settings.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">User Profile</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/products/products-list.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/blocks/user-tables.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">User Tables</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-5">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h5 class="text-primary fw-bold text-uppercase text-lg">Get Inspired</h5>
              <h3>Material Dashboard Pages</h3>
              <h6 class="text-secondary font-weight-normal pe-3">
                Material Dashboard's fully coded pages are perfect if you want to get inspired or have something to show to your client. Choose an example page and customize it for your project's needs.
              </h6>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/automotive.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/automotive.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Automotive Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/billing.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/billing.png" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Billing Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/charts.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/cart.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Cart Product Page</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/analytics.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Analytics Dashboard Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/invoice.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/invoice.jpg" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Invoice Template</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/timeline.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/projects.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Project List</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/general.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/tables.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Project Tables</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/pricing-page.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/pricing.jpg" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Pricing Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/sales.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/sales.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Sales Page</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/referral.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/referral.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Referral Program Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/orders/list.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/projects.jpg" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Transaction Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/users/reports.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/user-account.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">User Account Page</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/overview.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/pages/user-profile.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Users Page</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/discover.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/discover.jpg" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Discover</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/messages.html" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 m-auto" src="../assets/img/campaign/pages/messages.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Chat Page</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-5">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h5 class="text-primary fw-bold text-uppercase text-lg">More Features</h5>
              <h3>Material Dashboard Plugins</h3>
              <h6 class="text-secondary font-weight-normal pe-3">
                See what plugins we prepared for you, that simplify the process of adding advanced functionality and interactivity to your web project.
              </h6>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/countup-js/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/count-up-thumbnail.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Count Up.js</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/charts/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/chart-thumbnail.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Chart.js</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/choices/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/choices-thumbnail.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Choices</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/datatables/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/datatables-thumbnail.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Datatables</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/datepicker-thumbnail.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Datepicker</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/dropzone/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/dropzone-thumbnail.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Dropzone</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/fullcalendar/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/fullcalendar-thumbnail.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Fullcalendar</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/kanban/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/kanban-thumbnail.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Kanban</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/analytics-tool/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/nepcha-thumbnail.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Nepcha</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/photo-swipe/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/photoswipe-thumbnail.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Photo Swipe</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/quill/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/quill-thumbnail.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Quill</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/sliders/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/sliders-thumbnail.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Sliders</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/sweet-alerts/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/sweet-alert-thumbnail.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Sweet alert</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/timepicker-thumbnail.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Timepicker</h6>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/wizard/material-dashboard" target="_blank">
                  <div class="card shadow-lg move-on-hover min-height-140 max-height-140">
                    <img class="w-100 my-auto" src="../assets/img/campaign/plugins/wizard-thumbnail.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Wizard</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="docs">
      <div class="container mt-sm-5">
        <div class="page-header py-6 py-md-6 my-sm-3 mb-3 border-radius-xl" style="background-image: url('../assets/img/docs-section.png');" loading="lazy">
          <span class="mask bg-gradient-dark"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 ms-lg-5">
                <h4 class="text-white">Built by developers</h4>
                <h1 class="text-white">Complex Documentation</h1>
                <p class="lead text-white opacity-8 mb-4">
                  Material Dashboard's documentation is written in a concise way that users of all levels of experience can understand. Explanation and examples of each component or page in the template are included.
                </p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" class="text-white icon-move-right font-weight-bold">
                  Read docs
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="info-horizontal bg-gradient-dark border-radius-xl d-block p-4">
              <svg class="mb-4" width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.1667 0.333374L15.3334 5.58337V18.4167L21.1667 13.1667V0.333374ZM6.58341 3.83337C4.30841 3.83337 1.85841 4.30004 0.166748 5.58337V22.6867C0.166748 22.9784 0.458415 23.27 0.750081 23.27C0.866748 23.27 0.925081 23.1884 1.04175 23.1884C2.61675 22.43 4.89175 21.9167 6.58341 21.9167C8.85841 21.9167 11.3084 22.3834 13.0001 23.6667C14.5751 22.675 17.4334 21.9167 19.4167 21.9167C21.3417 21.9167 23.3251 22.2784 24.9584 23.1534C25.0751 23.2117 25.1334 23.1884 25.2501 23.1884C25.5417 23.1884 25.8334 22.8967 25.8334 22.605V5.58337C25.1334 5.05837 24.3751 4.70837 23.5001 4.41671V20.1667C22.2167 19.7584 20.8167 19.5834 19.4167 19.5834C17.4334 19.5834 14.5751 20.3417 13.0001 21.3334V5.58337C11.3084 4.30004 8.85841 3.83337 6.58341 3.83337Z" fill="white" />
              </svg>
              <div class="mt-3 mt-md-0">
                <h5 class="text-white">Getting Started</h5>
                <p class="text-white">See all the possible ways of working with our product and the necessary files for building your own project.</p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" class="text-white">
                  Let's start
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
            <div class="info-horizontal bg-gray-100 border-radius-xl d-block p-4 h-100">
              <svg class="mb-4" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.351 0.251477C11.2073 0.0934414 12.0947 0 12.9999 0C13.9054 0 14.7925 0.0934414 15.6491 0.251477L16.4263 2.98886C17.9371 3.45042 19.3053 4.21125 20.4564 5.19417L23.3508 4.45916C23.9239 5.08162 24.4528 5.75841 24.9055 6.50009C25.3583 7.24151 25.7165 8.01201 26 8.79245L23.8829 10.7946C24.0435 11.5066 24.1283 12.2426 24.1283 12.9999C24.1283 13.7574 24.0435 14.4934 23.8829 15.2052L26 17.2075C25.7165 17.988 25.3583 18.7585 24.9055 19.4999C24.4528 20.2413 23.9239 20.9184 23.3508 21.5408L20.4564 20.8058C19.3053 21.7887 17.9371 22.5495 16.4263 23.0111L15.6491 25.7485C14.7925 25.9066 13.9054 26 12.9999 26C12.0947 26 11.2073 25.9066 10.351 25.7485L9.57344 23.0111C8.06292 22.5496 6.69471 21.7887 5.54357 20.8058L2.64894 21.5408C2.07607 20.9184 1.54694 20.2413 1.09446 19.4999C0.641723 18.7585 0.283471 17.988 0 17.2075L2.11712 15.2052C1.95649 14.4934 1.87172 13.7574 1.87172 12.9999C1.87172 12.2426 1.95649 11.5066 2.11712 10.7946L0 8.79245C0.283499 8.01201 0.641723 7.24151 1.09446 6.50009C1.54694 5.75841 2.07606 5.08159 2.64894 4.45916L5.54357 5.19417C6.69478 4.21125 8.06299 3.45045 9.57344 2.98886L10.351 0.251477ZM13 17.875C15.6924 17.875 17.875 15.6924 17.875 13C17.875 10.3076 15.6924 8.125 13 8.125C10.3076 8.125 8.125 10.3076 8.125 13C8.125 15.6924 10.3076 17.875 13 17.875Z" fill="#7B809A" />
              </svg>
              <div class="mt-3 mt-md-0">
                <h5>Plugins</h5>
                <p>Get inspiration and have an overview about the plugins that we used to create Material Dashboard.</p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-dashboard" class="text-dark">
                  Read more
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-lg-0 mt-4">
            <div class="info-horizontal bg-gray-100 border-radius-xl d-block p-4">
              <svg class="mb-4" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5833 9.20833V13.2175L11.8008 17L15.5833 20.7825V24.7917L7.79167 17L15.5833 9.20833ZM18.4167 9.10917L26.3075 17L18.4167 24.8908V20.8817L22.2983 17L18.4167 13.1183V9.10917ZM7.08333 4.25C5.51083 4.25 4.25 5.525 4.25 7.08333V26.9167C4.25 27.6681 4.54851 28.3888 5.07986 28.9201C5.61122 29.4515 6.33189 29.75 7.08333 29.75H26.9167C27.6681 29.75 28.3888 29.4515 28.9201 28.9201C29.4515 28.3888 29.75 27.6681 29.75 26.9167V7.08333C29.75 6.33189 29.4515 5.61122 28.9201 5.07986C28.3888 4.54851 27.6681 4.25 26.9167 4.25H7.08333Z" fill="#7B809A" />
              </svg>
              <div class="mt-3 mt-md-0">
                <h5>Utility Classes</h5>
                <p>Material Dashboard is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-dashboard" class="text-dark">
                  Read more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="pricing">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <h5 class="text-primary fw-bold text-uppercase text-lg">Pricing</h5>
            <h2>Choose your favorite plan</h2>
            <p class="text-secondary lead font-weight-normal pe-3">Buy one and get lifetime access for each plan mentioned below.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <span class="badge border-radius-xl bg-light text-dark w-30 mt-n2 mx-auto">Free</span>
              <div class="card-header text-center pt-4 pb-3">
                <h5 class="mb-2">Free Version</h5>
                <p class="text-start">Download it now for free to create professional-looking and functional admin dashboards for your web projects.</p>
              </div>
              <div class="card-body text-lg-start text-center pt-0">
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Documentation</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">MIT License</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">10,000+ Github Stars</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Open Source</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Free Version in Figma</span>
                </div>
                <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                  Get Started
                  <i class="fas fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card bg-gradient-dark shadow-lg">
              <span class="badge bg-primary border-radius-xl w-30 mt-n2 mx-auto">Premium</span>
              <div class="card-header text-center pt-4 pb-3 bg-transparent d-flex align-items-center justify-content-center">
                <h3 class="text-white text-decoration-line-through mb-0">$249</h3>
                <h1 class="font-weight-bold ms-2 text-white mb-0">$99</h1>
              </div>
              <p class="lead text-white text-center">Voucher: <b>md-may-exclusive</b></p>
              <div class="card-body text-lg-start text-center pt-0">
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Access to Material Dashboard Pro</span>
                </div>
                <a class="text-white" href="https://www.creative-tim.com/license" target="_blank">
                  <div class="d-flex justify-content-lg-start justify-content-center p-2">
                    <i class="material-symbols-rounded my-auto text-white">done</i>
                    <span class="ps-3 text-white">Company License</span>
                  </div>
                </a>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Documentation</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Full Code</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Use in Saas</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">PRO Version in Figma</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Unlimited Projects</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Up to 20 team size</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">Tech support</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto text-white">done</i>
                  <span class="ps-3 text-white">12 months free updates</span>
                </div>
                <a href="https://secure.avangate.com/order/checkout.php?PRODS=36908422&OPTIONS36908422=COMPANY&CART=2&CARD=2&CLEAN_CART=2&SHORT_FORM=1&DESIGN_TYPE=2" target="_blank" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                  Buy Premium
                  <i class="fas fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <span class="badge bg-light border-radius-xl text-dark w-30 mt-n2 mx-auto">Bundle</span>
              <div class="card-header text-center pt-4 pb-3">
                <h5 class="mb-2">Material Design Bundle</h5>
                <div class="d-flex align-items-center justify-content-center">
                  <h3 class="text-decoration-line-through mb-0">$7,370</h3>
                  <h1 class="font-weight-bold ms-2 mb-0">$199</h1>
                </div>
              </div>
              <div class="card-body text-lg-start text-center pt-0">
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Access to <b>30 Premium Products</b></span>
                </div>
                <a class="text-body" href="https://www.creative-tim.com/license" target="_blank">
                  <div class="d-flex justify-content-lg-start justify-content-center p-2">
                    <i class="material-symbols-rounded my-auto">done</i>
                    <span class="ps-3">Company License</span>
                  </div>
                </a>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Documentation</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Full Code</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Use in Saas</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">PRO Version in Figma</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Unlimited Projects</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Up to 20 team size</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">Tech support</span>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                  <i class="material-symbols-rounded my-auto">done</i>
                  <span class="ps-3">12 months free updates</span>
                </div>
                <a href="https://secure.avangate.com/order/checkout.php?PRODS=19665215&OPTIONS19665215=COMPANY&CART=2&CLEAN_CART=2&CURRENCY=USD&DCURRENCY=USD&LANG=en&CARD=2&PAY_TYPE=CCVISAMC&SHORT_FORM=1&DESIGN_TYPE=2" target="_blank" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                  Buy Bundle
                  <i class="fas fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="horizontal dark my-6">
    <section class="mt-4" id="figma">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 d-flex align-items-center">
            <div class="mt-lg-0 mt-5">
              <h5 class="text-primary fw-bold text-uppercase text-lg">For Designers</h5>
              <h3>Design with
                <svg width="28" height="43" viewBox="0 0 28 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.5757 21.6364C13.5757 17.6624 16.7974 14.4243 20.7878 14.4243C24.7618 14.4243 27.9999 17.6461 27.9999 21.6364C27.9999 25.6105 24.7782 28.8486 20.7878 28.8486C16.8138 28.8486 13.5757 25.6105 13.5757 21.6364Z" fill="#1ABCFE" />
                  <path d="M0 35.2121C0 31.2381 3.22174 28 7.21212 28H14.4242V35.2121C14.4242 39.1861 11.2025 42.4242 7.21212 42.4242C3.22174 42.4242 0 39.2025 0 35.2121V35.2121Z" fill="#0ACF83" />
                  <path d="M13.5757 0.016354V14.4242H20.7878C24.7618 14.4242 27.9999 11.2025 27.9999 7.21212C27.9999 3.2381 24.7782 0 20.7878 0H13.5757V0.016354Z" fill="#FF7262" />
                  <path d="M0 7.21212C0 11.1861 3.22174 14.4242 7.21212 14.4242H14.4242V0H7.21212C3.22174 0 0 3.22174 0 7.21212Z" fill="#F24E1E" />
                  <path d="M0 21.6364C0 25.6105 3.22174 28.8486 7.21212 28.8486H14.4242V14.4243H7.21212C3.22174 14.4243 0 17.6624 0 21.6364Z" fill="#A259FF" />
                </svg>
                Figma
              </h3>
              <h6 class="text-secondary font-weight-normal pe-3">Interested in working with the designer files? No worries, we've prepared a special Figma version of the product!</h6>
              <div class="justify-content-start d-flex px-2 py-1">
                <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                <div class="ps-2">
                  <span class="text-sm">3,800+ Duplicates</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                <div class="ps-2">
                  <span class="text-sm">100+ Components</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                <div class="ps-2">
                  <span class="text-sm">Autolayout</span>
                </div>
              </div>
              <div class="flex mt-4">
                <a href="https://www.figma.com/community/file/1068529518839608496/Material-Dashboard-2---Free-Admin-Template" target="_blank" class="btn btn-outline-primary me-2 mb-md-0">Free Version in Figma</a>
                <a href="https://www.figma.com/community/file/1235214057440838071/Material-Dashboard-2-Pro" target="_blank" class="btn bg-gradient-dark mb-0">Pro Version in Figma</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0">
            <img class="border-radius-xl shadow w-100" alt="Image Figma" src="../assets/img/material-dashboard-figma.jpg">
          </div>
        </div>
      </div>
    </section>
    <section id="products">
      <div class="container mt-8">
        <div class="row mb-5">
          <div class="col-lg-6 mx-auto text-center">
            <h5 class="text-primary fw-bold text-uppercase text-lg">Want more?</h5>
            <h2>Check more products</h2>
            <p class="text-secondary lead font-weight-normal pe-3">Buy one and get lifetime access for each plan mentioned below.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <a href="https://www.material-tailwind.com/?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 img-material-tw border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/material-tailwind.png" alt="product2" />
                <h5>Material Tailwind Framework</h5>
                <p class="text-body">Easy to use components library for Tailwind CSS and Material Design.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="https://www.creative-tim.com/design-system/material?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/design-system.png" alt="product1" />
                <h5>Design Systems</h5>
                <p class="text-body">Awesome design systems to create beautiful web projects.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="https://www.creative-tim.com/builder?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/builder.png" alt="product3" />
                <h5>Drag & Drop Builder</h5>
                <p class="text-body">Create website pages or admins for your business in minutes.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6 col-lg-3">
            <a href="https://code-mentor.ai/?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/code-ai.png" alt="product1" />
                <h5>Code Mentor AI</h5>
                <p class="text-body">Virtual teacher that uses AI to explain code.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="https://www.creative-tim.com/product/headless-cms-with-laravel-json-api-pro?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/cms-laravel.jpg" alt="product2" />
                <h5>Headless CMS Laravel</h5>
                <p class="text-body">Build APIs for all devices using JSON:API Standard</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="https://course-ui-ux.creative-tim.com/course/ux-design-fundamentals?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/courses.png" alt="product3" />
                <h5>Courses</h5>
                <p class="text-body">Access the UI/UX course by Creative Tim.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="https://nepcha.com/?ref=md-campaign" target="_blank">
              <div class="card card-plain">
                <img class="min-height-200 max-height-200 border-radius-xl shadow-lg w-100 mb-3" src="../assets/img/campaign/nepcha.png" alt="product4" />
                <h5>Nepcha Analytics</h5>
                <p class="text-body">Buy one and get lifetime access for each plan mentioned below.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="card bg-gradient-dark h-100">
              <div class="card-body d-flex">
                <div>
                  <h3 class="text-white">UI/UX Book</h3>
                  <p class="text-white font-weight-normal">Fundamentals of Creating a Great UI/UX by Creative Tim</p>
                  <p class="text-white opacity-8">Learn to design & use all the UI/UX design components for your web projects</p>
                  <a class="position-absolute bottom-0 mb-4 text-white" href="https://www.creative-tim.com/courses/fundamentals-ui-ux?ref=md-campaign">
                    View details
                    <i class="fas fa-chevron-right text-xs ms-1"></i>
                  </a>
                </div>
                <img class="w-50" src="../assets/img/campaign/book.png" alt="book">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card bg-gradient-dark h-100">
              <div class="card-body">
                <h3 class="text-white">Blog</h3>
                <p class="mb-0">
                  <a class="text-white" href="https://www.creative-tim.com/blog/educational-tech/awesome-chatgpt-prompts-for-web-developers/" target="_blank">50+ Awesome ChatGPT Prompts for Web Developers</a>
                </p>
                <hr class="bg-white my-2">
                <p class="mb-0">
                  <a class="text-white" href="https://www.creative-tim.com/blog/educational-tech/top-7-reasons-why-use-node-js-in-your-next-web-development-project/" target="_blank">Top 7 Reasons Why Use Node.js in Your Next Web Development Project</a>
                </p>
                <hr class="bg-white my-2">
                <p>
                  <a class="text-white" href="https://www.creative-tim.com/blog/educational-ui-ux/the-ultimate-guide-to-ux-writing/" target="_blank">The Ultimate Guide to UX Writing</a>
                </p>
                <a class="text-white" href="https://www.creative-tim.com/blog?ref=md-campaign" target="_blank">
                  Explore more articles
                  <i class="fas fa-chevron-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials">
      <div class="container mt-8">
        <div class="row mb-5">
          <div class="col-lg-6 mx-auto text-center">
            <h5 class="text-primary fw-bold text-uppercase text-lg">Trusted by over</h5>
            <h2>1.3M+ Web Developers</h2>
            <p class="text-secondary lead font-weight-normal pe-3">Many Fortune 500 companies, startups, universities and governmental institutions love Material Dashboard.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex justify-content-center flex-column ms-auto">
            <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
              <ol class="justify-content-start ps-0">
                <button class="btn bg-white border rounded-circle py-2 px-3" data-bs-target="#carouselTestimonials" data-bs-slide-to="0">
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn bg-white border rounded-circle py-2 px-3" data-bs-target="#carouselTestimonials" data-bs-slide-to="1">
                  <i class="fas fa-chevron-right"></i>
                </button>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h6 class="opacity-8 pe-5">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</h6>
                  <svg width="101" height="18" viewBox="0 0 101 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_951)">
                      <path d="M16.7143 8.07031C16.7143 8.21763 16.6272 8.37835 16.4531 8.55246L12.8069 12.1083L13.6708 17.1306C13.6775 17.1775 13.6808 17.2444 13.6808 17.3315C13.6808 17.4721 13.644 17.5893 13.5703 17.683C13.5033 17.7835 13.4029 17.8337 13.269 17.8337C13.1417 17.8337 13.0078 17.7935 12.8672 17.7132L8.35714 15.3426L3.8471 17.7132C3.69978 17.7935 3.56585 17.8337 3.44531 17.8337C3.30469 17.8337 3.19754 17.7835 3.12388 17.683C3.05692 17.5893 3.02344 17.4721 3.02344 17.3315C3.02344 17.2913 3.03013 17.2243 3.04353 17.1306L3.90737 12.1083L0.251116 8.55246C0.0837054 8.37165 0 8.21094 0 8.07031C0 7.82254 0.1875 7.66853 0.5625 7.60826L5.60491 6.875L7.86496 2.30469C7.99219 2.03013 8.15625 1.89286 8.35714 1.89286C8.55804 1.89286 8.7221 2.03013 8.84933 2.30469L11.1094 6.875L16.1518 7.60826C16.5268 7.66853 16.7143 7.82254 16.7143 8.07031Z" fill="#344767" />
                      <path d="M37.7143 8.07031C37.7143 8.21763 37.6272 8.37835 37.4531 8.55246L33.8069 12.1083L34.6708 17.1306C34.6775 17.1775 34.6808 17.2444 34.6808 17.3315C34.6808 17.4721 34.644 17.5893 34.5703 17.683C34.5033 17.7835 34.4029 17.8337 34.269 17.8337C34.1417 17.8337 34.0078 17.7935 33.8672 17.7132L29.3571 15.3426L24.8471 17.7132C24.6998 17.7935 24.5658 17.8337 24.4453 17.8337C24.3047 17.8337 24.1975 17.7835 24.1239 17.683C24.0569 17.5893 24.0234 17.4721 24.0234 17.3315C24.0234 17.2913 24.0301 17.2243 24.0435 17.1306L24.9074 12.1083L21.2511 8.55246C21.0837 8.37165 21 8.21094 21 8.07031C21 7.82254 21.1875 7.66853 21.5625 7.60826L26.6049 6.875L28.865 2.30469C28.9922 2.03013 29.1563 1.89286 29.3571 1.89286C29.558 1.89286 29.7221 2.03013 29.8493 2.30469L32.1094 6.875L37.1518 7.60826C37.5268 7.66853 37.7143 7.82254 37.7143 8.07031Z" fill="#344767" />
                      <path d="M58.7143 8.07031C58.7143 8.21763 58.6272 8.37835 58.4531 8.55246L54.8069 12.1083L55.6708 17.1306C55.6775 17.1775 55.6808 17.2444 55.6808 17.3315C55.6808 17.4721 55.644 17.5893 55.5703 17.683C55.5033 17.7835 55.4029 17.8337 55.269 17.8337C55.1417 17.8337 55.0078 17.7935 54.8672 17.7132L50.3571 15.3426L45.8471 17.7132C45.6998 17.7935 45.5658 17.8337 45.4453 17.8337C45.3047 17.8337 45.1975 17.7835 45.1239 17.683C45.0569 17.5893 45.0234 17.4721 45.0234 17.3315C45.0234 17.2913 45.0301 17.2243 45.0435 17.1306L45.9074 12.1083L42.2511 8.55246C42.0837 8.37165 42 8.21094 42 8.07031C42 7.82254 42.1875 7.66853 42.5625 7.60826L47.6049 6.875L49.865 2.30469C49.9922 2.03013 50.1563 1.89286 50.3571 1.89286C50.558 1.89286 50.7221 2.03013 50.8493 2.30469L53.1094 6.875L58.1518 7.60826C58.5268 7.66853 58.7143 7.82254 58.7143 8.07031Z" fill="#344767" />
                      <path d="M79.7143 8.07031C79.7143 8.21763 79.6272 8.37835 79.4531 8.55246L75.8069 12.1083L76.6708 17.1306C76.6775 17.1775 76.6808 17.2444 76.6808 17.3315C76.6808 17.4721 76.644 17.5893 76.5703 17.683C76.5033 17.7835 76.4029 17.8337 76.269 17.8337C76.1417 17.8337 76.0078 17.7935 75.8672 17.7132L71.3571 15.3426L66.8471 17.7132C66.6998 17.7935 66.5658 17.8337 66.4453 17.8337C66.3047 17.8337 66.1975 17.7835 66.1239 17.683C66.0569 17.5893 66.0234 17.4721 66.0234 17.3315C66.0234 17.2913 66.0301 17.2243 66.0435 17.1306L66.9074 12.1083L63.2511 8.55246C63.0837 8.37165 63 8.21094 63 8.07031C63 7.82254 63.1875 7.66853 63.5625 7.60826L68.6049 6.875L70.865 2.30469C70.9922 2.03013 71.1563 1.89286 71.3571 1.89286C71.558 1.89286 71.7221 2.03013 71.8493 2.30469L74.1094 6.875L79.1518 7.60826C79.5268 7.66853 79.7143 7.82254 79.7143 8.07031Z" fill="#344767" />
                      <path d="M100.714 8.07031C100.714 8.21763 100.627 8.37835 100.453 8.55246L96.8069 12.1083L97.6708 17.1306C97.6775 17.1775 97.6808 17.2444 97.6808 17.3315C97.6808 17.4721 97.644 17.5893 97.5703 17.683C97.5033 17.7835 97.4029 17.8337 97.269 17.8337C97.1417 17.8337 97.0078 17.7935 96.8672 17.7132L92.3571 15.3426L87.8471 17.7132C87.6998 17.7935 87.5658 17.8337 87.4453 17.8337C87.3047 17.8337 87.1975 17.7835 87.1239 17.683C87.0569 17.5893 87.0234 17.4721 87.0234 17.3315C87.0234 17.2913 87.0301 17.2243 87.0435 17.1306L87.9074 12.1083L84.2511 8.55246C84.0837 8.37165 84 8.21094 84 8.07031C84 7.82254 84.1875 7.66853 84.5625 7.60826L89.6049 6.875L91.865 2.30469C91.9922 2.03013 92.1563 1.89286 92.3571 1.89286C92.558 1.89286 92.7221 2.03013 92.8493 2.30469L95.1094 6.875L100.152 7.60826C100.527 7.66853 100.714 7.82254 100.714 8.07031Z" fill="#344767" />
                    </g>
                    <defs>
                      <clipPath id="clip0_31_951">
                        <rect width="101" height="18" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  <div class="author mt-4">
                    <img src="../assets/img/ivana-square.jpg" alt="..." class="avatar rounded-circle shadow-lg">
                    <div class="ms-2">
                      <span>Shailesh Kushwaha</span>
                      <div class="stats">
                        <small class=" opacity-6">React Web Developer</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <h6 class="opacity-8 pe-5">"Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea.
                    Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea."
                  </h6>
                  <svg width="101" height="18" viewBox="0 0 101 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_951)">
                      <path d="M16.7143 8.07031C16.7143 8.21763 16.6272 8.37835 16.4531 8.55246L12.8069 12.1083L13.6708 17.1306C13.6775 17.1775 13.6808 17.2444 13.6808 17.3315C13.6808 17.4721 13.644 17.5893 13.5703 17.683C13.5033 17.7835 13.4029 17.8337 13.269 17.8337C13.1417 17.8337 13.0078 17.7935 12.8672 17.7132L8.35714 15.3426L3.8471 17.7132C3.69978 17.7935 3.56585 17.8337 3.44531 17.8337C3.30469 17.8337 3.19754 17.7835 3.12388 17.683C3.05692 17.5893 3.02344 17.4721 3.02344 17.3315C3.02344 17.2913 3.03013 17.2243 3.04353 17.1306L3.90737 12.1083L0.251116 8.55246C0.0837054 8.37165 0 8.21094 0 8.07031C0 7.82254 0.1875 7.66853 0.5625 7.60826L5.60491 6.875L7.86496 2.30469C7.99219 2.03013 8.15625 1.89286 8.35714 1.89286C8.55804 1.89286 8.7221 2.03013 8.84933 2.30469L11.1094 6.875L16.1518 7.60826C16.5268 7.66853 16.7143 7.82254 16.7143 8.07031Z" fill="#344767" />
                      <path d="M37.7143 8.07031C37.7143 8.21763 37.6272 8.37835 37.4531 8.55246L33.8069 12.1083L34.6708 17.1306C34.6775 17.1775 34.6808 17.2444 34.6808 17.3315C34.6808 17.4721 34.644 17.5893 34.5703 17.683C34.5033 17.7835 34.4029 17.8337 34.269 17.8337C34.1417 17.8337 34.0078 17.7935 33.8672 17.7132L29.3571 15.3426L24.8471 17.7132C24.6998 17.7935 24.5658 17.8337 24.4453 17.8337C24.3047 17.8337 24.1975 17.7835 24.1239 17.683C24.0569 17.5893 24.0234 17.4721 24.0234 17.3315C24.0234 17.2913 24.0301 17.2243 24.0435 17.1306L24.9074 12.1083L21.2511 8.55246C21.0837 8.37165 21 8.21094 21 8.07031C21 7.82254 21.1875 7.66853 21.5625 7.60826L26.6049 6.875L28.865 2.30469C28.9922 2.03013 29.1563 1.89286 29.3571 1.89286C29.558 1.89286 29.7221 2.03013 29.8493 2.30469L32.1094 6.875L37.1518 7.60826C37.5268 7.66853 37.7143 7.82254 37.7143 8.07031Z" fill="#344767" />
                      <path d="M58.7143 8.07031C58.7143 8.21763 58.6272 8.37835 58.4531 8.55246L54.8069 12.1083L55.6708 17.1306C55.6775 17.1775 55.6808 17.2444 55.6808 17.3315C55.6808 17.4721 55.644 17.5893 55.5703 17.683C55.5033 17.7835 55.4029 17.8337 55.269 17.8337C55.1417 17.8337 55.0078 17.7935 54.8672 17.7132L50.3571 15.3426L45.8471 17.7132C45.6998 17.7935 45.5658 17.8337 45.4453 17.8337C45.3047 17.8337 45.1975 17.7835 45.1239 17.683C45.0569 17.5893 45.0234 17.4721 45.0234 17.3315C45.0234 17.2913 45.0301 17.2243 45.0435 17.1306L45.9074 12.1083L42.2511 8.55246C42.0837 8.37165 42 8.21094 42 8.07031C42 7.82254 42.1875 7.66853 42.5625 7.60826L47.6049 6.875L49.865 2.30469C49.9922 2.03013 50.1563 1.89286 50.3571 1.89286C50.558 1.89286 50.7221 2.03013 50.8493 2.30469L53.1094 6.875L58.1518 7.60826C58.5268 7.66853 58.7143 7.82254 58.7143 8.07031Z" fill="#344767" />
                      <path d="M79.7143 8.07031C79.7143 8.21763 79.6272 8.37835 79.4531 8.55246L75.8069 12.1083L76.6708 17.1306C76.6775 17.1775 76.6808 17.2444 76.6808 17.3315C76.6808 17.4721 76.644 17.5893 76.5703 17.683C76.5033 17.7835 76.4029 17.8337 76.269 17.8337C76.1417 17.8337 76.0078 17.7935 75.8672 17.7132L71.3571 15.3426L66.8471 17.7132C66.6998 17.7935 66.5658 17.8337 66.4453 17.8337C66.3047 17.8337 66.1975 17.7835 66.1239 17.683C66.0569 17.5893 66.0234 17.4721 66.0234 17.3315C66.0234 17.2913 66.0301 17.2243 66.0435 17.1306L66.9074 12.1083L63.2511 8.55246C63.0837 8.37165 63 8.21094 63 8.07031C63 7.82254 63.1875 7.66853 63.5625 7.60826L68.6049 6.875L70.865 2.30469C70.9922 2.03013 71.1563 1.89286 71.3571 1.89286C71.558 1.89286 71.7221 2.03013 71.8493 2.30469L74.1094 6.875L79.1518 7.60826C79.5268 7.66853 79.7143 7.82254 79.7143 8.07031Z" fill="#344767" />
                      <path d="M100.714 8.07031C100.714 8.21763 100.627 8.37835 100.453 8.55246L96.8069 12.1083L97.6708 17.1306C97.6775 17.1775 97.6808 17.2444 97.6808 17.3315C97.6808 17.4721 97.644 17.5893 97.5703 17.683C97.5033 17.7835 97.4029 17.8337 97.269 17.8337C97.1417 17.8337 97.0078 17.7935 96.8672 17.7132L92.3571 15.3426L87.8471 17.7132C87.6998 17.7935 87.5658 17.8337 87.4453 17.8337C87.3047 17.8337 87.1975 17.7835 87.1239 17.683C87.0569 17.5893 87.0234 17.4721 87.0234 17.3315C87.0234 17.2913 87.0301 17.2243 87.0435 17.1306L87.9074 12.1083L84.2511 8.55246C84.0837 8.37165 84 8.21094 84 8.07031C84 7.82254 84.1875 7.66853 84.5625 7.60826L89.6049 6.875L91.865 2.30469C91.9922 2.03013 92.1563 1.89286 92.3571 1.89286C92.558 1.89286 92.7221 2.03013 92.8493 2.30469L95.1094 6.875L100.152 7.60826C100.527 7.66853 100.714 7.82254 100.714 8.07031Z" fill="#344767" />
                    </g>
                    <defs>
                      <clipPath id="clip0_31_951">
                        <rect width="101" height="18" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  <div class="author mt-4">
                    <img src="../assets/img/team-5.jpg" alt="..." class="avatar rounded-circle shadow-lg">
                    <div class="ms-2">
                      <span>Shailesh Kushwaha</span>
                      <div class="stats">
                        <small class=" opacity-6">React Web Developer</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 ms-auto mt-5 mt-lg-0">
            <div class="d-flex">
              <div class="px-3 text-center border-start">
                <h1 class="text-gradient text-primary">1.3M+</h1>
                <h5 class="mt-3">Intern Downloads</h5>
              </div>
              <div class="px-3 text-center border-start ms-5">
                <h1 class="text-gradient text-primary">10k+</h1>
                <h5 class="mt-3">Github Stars</h5>
              </div>
            </div>
            <div class="d-flex mt-5">
              <div class="px-3 text-center border-start">
                <h1 class="text-gradient text-primary">3.8k+</h1>
                <h5 class="mt-3">Figma Duplicates</h5>
              </div>
              <div class="px-3 text-center border-start ms-5">
                <h1 class="text-gradient text-primary">2.7k+</h1>
                <h5 class="mt-3">Github Forks</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="faq">
      <div class="container mt-8" id="faq-section">
        <div class="row mb-5">
          <div class="col-lg-10 mx-auto text-center">
            <h5 class="text-primary fw-bold text-uppercase text-lg">Faq</h5>
            <h2>Everything you need to know about Material Dashboard</h2>
            <p class="text-secondary lead font-weight-normal pe-3">Buy one and get lifetime access for each plan mentioned below.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="accordion" id="accordionFaq">
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingOne">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is Material Dashboard?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"></i>
                  </button>
                </h5>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                  <div class="accordion-body text-sm opacity-8">
                    From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingTwo">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Is Material Dashboard free?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"></i>
                  </button>
                </h5>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
                  <div class="accordion-body text-sm opacity-8">
                    Material Dashboard is free. It also has a premium version, Material Dashboard PRO.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingThree">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can I get Material Dashboard on other technologies than Bootstrap?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"></i>
                  </button>
                </h5>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                  <div class="accordion-body text-sm opacity-8">
                    Yes, Material Dashboard is available on different technologies, like React, Vue.js, and more. Go to the first section of this page.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFour">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I get Material Dashboard Figma Files for free?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"></i>
                  </button>
                </h5>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
                  <div class="accordion-body text-sm opacity-8">
                    Yes, you can download the free Figma version. But if you are looking for more components and pages, you should check the pro version.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFive">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What is the difference between Material Dashboard PRO and Material Design Bundle?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"></i>
                  </button>
                </h5>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFaq">
                  <div class="accordion-body text-sm opacity-8">
                    Material Design PRO is the premium version of the product Material Dashboard which means it contains more components and features (than the free version).
                    <br />
                    Material Design Bundle is a bundle of 30 premium products based on Material Design, including Material Dashboard PRO.
                    <br /><br />
                    So if you get the Bundle, you will get access to 30 products, whereas if you get Material Dashboard PRO, you will get only one product.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="join">
      <div class="container my-8">
        <div class="row mb-5">
          <div class="col-lg-6 mx-auto text-center">
            <h2>Join Our Community</h2>
            <p class="text-secondary lead font-weight-normal pe-3">Find the creators and the people who are also using Material Dashboard below.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 ms-auto">
            <div class="p-3">
              <a href="https://github.com/creativetimofficial/material-dashboard" target="_blank" class="icon icon-shape icon-md text-center bg-gradient-dark shadow-dark">
                <i class="fab fa-github opacity-10"></i>
              </a>
              <h5 class="mt-4">GitHub</h5>
              <p>Get it free on Github and please help us spread the news with a Star.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="p-3">
              <a href="https://discord.gg/pSfSDAmU" target="_blank" class="icon icon-shape icon-md text-center bg-gradient-dark shadow-dark">
                <i class="fab fa-discord opacity-10"></i>
              </a>
              <h5 class="mt-4">Discord</h5>
              <p>For issues, feature requests and contribute.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 me-auto">
            <div class="p-3">
              <a href="https://twitter.com/CreativeTim" target="_blank" class="icon icon-shape icon-md text-center bg-gradient-dark shadow-dark">
                <i class="fab fa-twitter opacity-10"></i>
              </a>
              <h5 class="mt-4">Twitter</h5>
              <p>For announcements, articles, and other resources.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-10" id="share">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5 ms-auto">
            <h4 class="mb-1">Thank you for your support!</h4>
            <p class="lead mb-0">We deliver the best web products</p>
          </div>
          <div class="col-md-6 col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
            <a href="https://twitter.com/intent/tweet?text=Check%20Material%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-dashboard" class="btn btn-twitter mb-0 me-2" target="_blank">
              <i class="fab fa-twitter me-1"></i> Tweet
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-facebook mb-0 me-2" target="_blank">
              <i class="fab fa-facebook-square me-1"></i> Share
            </a>
            <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-dashboard" class="btn btn-pinterest mb-0 me-2" target="_blank">
              <i class="fab fa-pinterest me-1"></i> Pin it
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container mt-n7">
    <section class="py-5 bg-dark-blue border-radius-xl position-relative overflow-hidden z-index-1">
      <img src="../assets/img/campaign/wave.png" alt="pattern-lines" class="position-absolute start-0 top-0 w-100 opacity-1">
      <div class="container position-relative z-index-2">
        <div class="row">
          <div class="col-lg-5 col-md-8 m-auto text-start">
            <h2 class="text-white">Sign up for our newsletter</h2>
            <p class="text-white mb-lg-0 mb-5">
              Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
            </p>
          </div>
          <div class="col-lg-6 m-auto">
            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="https://creative-tim.us3.list-manage.com/subscribe/post?u=ff98cdcf2e6a63f872c65dbfb&amp;id=3ad01d6373&amp;f_id=0092c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                <div class="row">
                  <div class="col-sm-4 col-6 ps-sm-0 ms-auto">
                    <div id="mc_embed_signup_scroll">
                      <div class="mc-field-group">
                        <div class="input-group input-group-outline">
                          <label class="form-label">Enter your email</label>
                          <input class="form-control text-white" name="EMAIL" type="email" id="mce-EMAIL" required />
                          <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                        </div>
                      </div>
                      <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                      </div>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_ff98cdcf2e6a63f872c65dbfb_3ad01d6373" tabindex="-1" value="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6 ps-sm-0 me-lg-0 me-auto">
                    <input type="submit" class="btn btn-info mb-0 ms-lg-2 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block" id="mc-embedded-subscribe" name="subscribe" />
                  </div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-dashboard">
              <img src="../assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Material Dashboard 3</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-md2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <script type="text/javascript">
    if (document.getElementById('stats1')) {
      const countUp = new CountUp('stats1', document.getElementById("stats1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('stats2')) {
      const countUp1 = new CountUp('stats2', document.getElementById("stats2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('stats3')) {
      const countUp2 = new CountUp('stats3', document.getElementById("stats3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
    if (document.getElementById('stats4')) {
      const countUp3 = new CountUp('stats4', document.getElementById("stats4").getAttribute("countTo"));
      if (!countUp3.error) {
        countUp3.start();
      } else {
        console.error(countUp3.error);
      };
    }

    const copyButton = document.getElementById("copy-code");

    copyButton.addEventListener("click", function() {
      const textToCopy = copyButton.parentElement.textContent;
      navigator.clipboard.writeText(textToCopy)
        .then
        .catch(err => console.error("Error copying text: ", err));
    });
  </script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0" type="text/javascript"></script>
</body>

</html>