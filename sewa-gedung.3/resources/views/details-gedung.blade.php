<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boeken</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($data->image)) }}" style="height: 100%; object-fit:cover" >
                    </div>
                    <div class="col">
                        <div class="row">
                            <h1 class="font-weight-bold">{{$data->name}}</h1>
                            <div class="col-2">Alamat    :</div>
                            <div class="col">
                                <p>{{$data->address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Kota    :</div>
                            <div class="col">
                                <p>{{$data->city}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Kapasitas    :</div>
                            <div class="col">
                                <p>{{$data->capacity}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Kontak    :</div>
                            <div class="col">
                                <p>{{$data->contact}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Harga    :</div>
                            <div class="col">
                                <p>{{$data->price}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <p class="mt-5">{{$data->description}}</p>

                <form method="POST" action="{{route('booked')}}">
                {{-- <form method="POST" action="{{route('booked',)}}"> --}}
                    <input id="id" name="id" value="{{$data->id}}">
                    @csrf
                    <div class="row form-group">
                        <label for="date" class="col-sm-1 col-form-label">Date start</label>
                        <div class="col-sm-4">
                            <div class="input-group date" id="datepicker">
                                <input id="dateStart" type="text" class="form-control" name=dateStart>
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group mt-2">
                        <label for="date" class="col-sm-1 col-form-label">Date end</label>
                        <div class="col-sm-4">
                            <div class="input-group date" id="datepicker">
                                <input id="dateEnd" type="text" class="form-control" name="dateEnd">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 10%">
                        Booking
                    </button>
                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                </form>
                

                <div id="demo"></div>
                
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                <script type="text/javascript">
                    // var date = $('#dateStart').datepicker({ dateFormat: 'dd-mm-yy' }).val();

                    // <?php
                    //     $js_array = json_encode($disableDatesArr);
                    //     echo "let dates[] = ". $js_array . ";\n";
                    // ?>

                    var dates = <?php echo json_encode($disableDatesArr); ?>;
                    console.log(dates);

                    

                    function disableDates(date) {
                        var string = $.datepicker.formatDate('yy-mm-dd', date);
                        return [dates.indexOf(string) == -1];
                    }

                    $("#dateStart").datepicker({beforeShowDay: disableDates, dateFormat: 'yy-mm-dd'});

                    $("#dateEnd").datepicker({beforeShowDay: disableDates, dateFormat: 'yy-mm-dd'});

                
                // var datesForDisable = obj;
                // // console.log(typeof datesForDisable);
                // // console.log(typeof obj);
                // function disableDates(date) {
                //     var string = $.datepicker.formatDate('dd-mm-yy', date);
                //     return [dates.indexOf(string) == -1];
                // }
                    
                //     $(function() {
                //         $('input[name="dateStart"]').daterangepicker({
                //             singleDatePicker: true,
                //             locale: {
                //                 format: 'YYYY-MM-DD',
                //                 autoclose: true,
                //                 todayHighlight: true,
                //                 dateDisabled: obj,
                //             }
                //         });
                //         $('input[name="dateEnd"]').daterangepicker({
                //             singleDatePicker: true,
                //             locale: {
                                
                //                 format: 'YYYY-MM-DD',
                //                 autoclose: true,
                //                 todayHighlight: true
                //             }
                //         });
                //     });

                </script>
            </div>

            
            
        </div>
    @endsection
</body>
</html>

<style>
    p{
        font-size: 16px
    }

    .row{
        font-size: 14px;
    }

    input[name="id"]{
        display: none;
    }
</style>

