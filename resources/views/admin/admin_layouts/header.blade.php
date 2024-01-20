<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link rel="stylesheet" href="{{ storage::url('css/style.css') }}"> --}}
    <title>TR Furniture</title>
    <style>
        /* Default font size */
        body {
            font-size: 16px;
        }

        #fb {
            width: 20px;
            height: 20px
        }

        #insta {
            width: 20px;
            height: 20px
        }

        #youtube {
            width: 20px;
            height: 20px
        }

        /* Responsive font sizes based on screen width */
        @media screen and (max-width: 768px) {
            body {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 480px) {
            body {
                font-size: 7px;
            }

            #fb {
                width: 10px;
                height: 10px
            }

            #insta {
                width: 10px;
                height: 10px
            }

            #youtube {
                width: 10px;
                height: 10px
            }
        }
    </style>

</head>




<body>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">TR FURNITURE</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" >Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}" tabindex="-1" aria-disabled="true">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
