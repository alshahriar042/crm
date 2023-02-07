@extends('backend.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>Lead List

                </div>
            </div>

        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Table bordered</h5>
                    <table class="mb-0 table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($leads as $lead)
                            {{-- dd($loop); --}}
                                <tr>
                                    <th scope="row">{{ $loop->iteration	}}</th>
                                    <td>{{ $lead->fname }}</td>
                                    <td>{{ $lead->lname }}</td>
                                    <td>{{ $lead->phone }}</td>
                                    <td> <a href="{{ route('lead.edit',$lead->id) }}" class="btn  btn-success rounded-0"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('lead.delete',[$lead->id]) }}" onclick="return confirm('Do you want to delete lead ?')" class="btn btn-danger text-light rounded-0"><i class="fa fa-trash"></i></a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal__{{$lead->id}}">
                                            FllowUp
                                        </button>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
@endsection
@foreach ($leads as $lead)

<div class="modal fade" id="exampleModal__{{$lead->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Follow Up Details__{{$lead->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form class="needs-validation" method="post" action="{{ route('leadDetails.store') }}" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Date</label>
                        <input type="date" class="form-control" id="validationCustom01" name="date" placeholder="Date" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>
                <input type="hidden" id="custId" name="leadId" value="{{ $lead->id}}">

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom03">Details</label>
                        <textarea style="width: 100%;" class="summernote" class="form-control" rows="5" name="description"></textarea>

                        <div class="invalid-feedback">
                            Please provide a valid details.
                        </div>
                    </div>

                </div>



                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom03">Status</label>
                          <select class="form-control" name="status">
                            <option disabled>Select Status</option>
                            <option value="prospect">Prospect</option>
                            <option value="sold">Sold</option>
                          </select>

                    </div>

                </div>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
          </div>
    </div>
  </div>
  @endforeach
