@extends('backend.master')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger">
                    </i>
                </div>
                <div>Followup Details
                </div>
            </div>
            <div class="page-title-actions">

                <div class="d-inline-block dropdown">

                </div>
            </div>
        </div>
    </div>

    @foreach ($followupDetails as $followupDetail )


           {{-- @dd($followupDetail->leadDetails[$key]->status); --}}

           <div class="card">
            <div class="card-header">
              {{ $followupDetail->fname }}  {{ $followupDetail->lname }} , Followup Details
            </div>
            @foreach ( $followupDetail->leadDetails as $key=>$dd)
            <?php
            $i=1;
            ?>
            <div class="card-body">
              <h5 class="card-title">{{ $key +1 }}st. FollowUp Date: {{ $followupDetail->leadDetails[$key]->follow_up_date }}</h5>
              <p class="card-text">{{ $key+2 }}2nd. FollowUp Details: {{ $followupDetail->leadDetails[$key]->follow_up_details }}</p>
            </div>
            @endforeach

          </div>

@endforeach

@endsection
