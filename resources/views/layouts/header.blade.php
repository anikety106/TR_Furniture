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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('category') }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}" tabindex="-1" aria-disabled="true">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="Name" id="Name" required>
                                </div>
                                <div class="col-6">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="Email" id="Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Contact Number</label>
                                    <input type="tel" class="form-control" name="Contact_No" id="Contact_No" required>
                                </div>
                                <div class="col-6">
                                    <label for="">City</label>
                                    <select name="City" id="City" class="form-control"></select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Address</label>
                                    <select name="City" id="City" class="form-control"></select>
                                </div>
                                <div class="col-6">
                                    <label for="">PIN Code</label>
                                    <select name="PIN" id="PIN" class="form-control"></select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Requirements</label>
                                    <textarea type="text" class="form-control" name="Requirements" id="Requirements" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
