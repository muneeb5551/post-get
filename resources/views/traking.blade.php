@extends('layout.masterlayout')

@section('content')
    <div class="">

        <div class="container-fluid tracking-main">
            <div class="inp-posi">

                <div class="input-group input-main mb-3">
                    <input type="text" class=" bg-black text-white" placeholder="Enter Traking Id " aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn traking-button" type="button" id="button-addon2">Search</button>
                  </div>
                  
                <div class="tracking-number-display">
                    Parcel Tracking No: <span># BA0000000045</span>
                </div>
            </div>



        </div>


        <ul class="timeline">
            <li class="timeline-item">
                <div class="timeline-date">
                    2nd November 2024<br>12:36 pm
                </div>
                <div class="timeline-content">
                    <div class="timeline-title">RETURN_TO_SHIPPER</div>
                    <div class="timeline-remarks">Remarks: Operation Executive changed status to return to shipper</div>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-date">
                    1st November 2024<br>01:38 pm
                </div>
                <div class="timeline-content">
                    <div class="timeline-title">SHIPMENT_UNDER_VALIDATION</div>
                    <div class="timeline-remarks">Remarks: Operation Executive marked SHIPMENT_UNDER_VALIDATION due to 2
                        delivery attempts without success.</div>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-date">
                    1st November 2024<br>01:37 pm
                </div>
                <div class="timeline-content">
                    <div class="timeline-title">NOT_DELIVERED_OUT_OF_SERVICE_AREA</div>
                    <div class="timeline-remarks">Remarks: Driver change the status</div>
                </div>
            </li>
        </ul>

    </div>
@endsection
