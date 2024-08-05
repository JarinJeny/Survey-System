<!-- Index.html  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <!-- Linking css file  -->
    <link rel="stylesheet" href="style.css">
    <title>Survey Form</title>
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-10 mx-auto">
            <div class="mx-0 mx-sm-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white mt-2" id="exampleModalLabel">Feedback request</h5>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <p><strong>Your opinion matters</strong></p>
                            <p>Have some ideas how to improve our product?
                                <strong>Give us your feedback.</strong></p>
                        </div>

                        <hr />

                        <form class="px-4" action="">

                            <!-- end question-->
                            <p class="text"><strong>How likely are you to recommend our GP practice to a friend or family member?</strong></p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
                                <label class="form-check-label" for="radio3Example1">
                                    Very good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
                                <label class="form-check-label" for="radio3Example2">
                                    Good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
                                <label class="form-check-label" for="radio3Example3">
                                    Medicore
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
                                <label class="form-check-label" for="radio3Example4">
                                    Bad
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
                                <label class="form-check-label" for="radio3Example5">
                                    Very bad
                                </label>
                            </div>
                            <!-- end question-->

                            <!-- end question-->
                            <p class="text"><strong>Please state your level of satisfaction with our appointment-booking system</strong></p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
                                <label class="form-check-label" for="radio3Example1">
                                    Very good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
                                <label class="form-check-label" for="radio3Example2">
                                    Good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
                                <label class="form-check-label" for="radio3Example3">
                                    Medicore
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
                                <label class="form-check-label" for="radio3Example4">
                                    Bad
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
                                <label class="form-check-label" for="radio3Example5">
                                    Very bad
                                </label>
                            </div>
                            <!-- end question-->

                            <!-- end question-->
                            <p class="text"><strong>How likely are you to recommend our restaurant to a friend or family member?</strong></p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
                                <label class="form-check-label" for="radio3Example1">
                                    Very good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
                                <label class="form-check-label" for="radio3Example2">
                                    Good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
                                <label class="form-check-label" for="radio3Example3">
                                    Medicore
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
                                <label class="form-check-label" for="radio3Example4">
                                    Bad
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
                                <label class="form-check-label" for="radio3Example5">
                                    Very bad
                                </label>
                            </div>
                            <!-- end question-->


                            <!-- end question-->
{{--                            <p class="text"><strong>Your rating:</strong></p>--}}
{{--                            <div class="form-check mb-2">--}}
{{--                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />--}}
{{--                                <label class="form-check-label" for="radio3Example1">--}}
{{--                                    Very good--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check mb-2">--}}
{{--                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />--}}
{{--                                <label class="form-check-label" for="radio3Example2">--}}
{{--                                    Good--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check mb-2">--}}
{{--                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />--}}
{{--                                <label class="form-check-label" for="radio3Example3">--}}
{{--                                    Medicore--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check mb-2">--}}
{{--                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />--}}
{{--                                <label class="form-check-label" for="radio3Example4">--}}
{{--                                    Bad--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check mb-2">--}}
{{--                                <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />--}}
{{--                                <label class="form-check-label" for="radio3Example5">--}}
{{--                                    Very bad--}}
{{--                                </label>--}}
{{--                            </div>--}}
                            <!-- end question-->




                            <p class="text-center"><strong>What could we improve?</strong></p>

                            <!-- Message input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Your feedback</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
