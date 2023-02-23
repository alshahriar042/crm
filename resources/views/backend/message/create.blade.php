@extends('backend.master')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-picture text-danger">
                </i>
            </div>
            <div>Message
            </div>
        </div>
        <div class="page-title-actions">

            <div class="d-inline-block dropdown">

            </div>
        </div>
      </div>
         </div>
            <div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Message</h5>
        <form class="needs-validation" method="post" action="{{ route('message.send') }}" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Customer </label>
                 <select name="phone" id="" class="form-control">
                     <option disabled>Select Customer</option>
                    @foreach ($leadsUser as $user)
                    <option value="{{ $user->phone }}">{{ $user->fname}} - {{ $user->phone }}  </option>
                    @endforeach

                 </select>
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationCustom03">Message</label>
                    <textarea style="width: 100%;" class="summernote" class="form-control" rows="5" name="description"></textarea>

            </div>

            <button class="btn btn-primary" type="submit">Send</button>
        </form>
    </div>
</div>

@endsection
