@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4 pb-4">
    <div class="row">
        <div class="col-md-12">


            <div class="card">
                <div class="card-header ida_header">
                    <h4 class="title_cmn">Content Admin</h4>
                    {{-- <h4><a href="{{ url('admin/adddocuments')}}" class="btn btn-primary btn-sm admin_cm_btn"><i class="fa fa-plus mr-2"></i> Add Documents</a></h4> --}}
                    {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}


                </div>
                <div class="card-body">
                    {{-- <form action="">
                        <div class="form-group search_bar">
                            <input type="search" name="search" id="" class="form-control" placeholder="Search here" aria-describedby="helpId" value="{{$search}}">
                            <button class="btn btn-primary admin_cm_btn">Search</button>
                            <a href="{{url('admin/documents')}}"><i class="fa fa-times"></i></a>

                        </div>
                    </form> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {{-- <th> Id</th> --}}

                                    <th> Page Name</th>
                                    <th> Last Updated</th>
                                    <th>Edit</th>
                                    <th>View</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pageContent as $content)
                                <tr>

                                    {{-- <a href="{{'download/'. $item->image }} ">Download Now</a> --}}
                                    {{-- <a href="{{ asset('/public/images/'. $item->image)}}" target="_blank"> view Pdf </a>; --}}
                                    {{-- <td> {{$item->id}}</td> --}}

                                    <td> {{$content->page_title}}</td>
                                    <td> {{date('Y-m-d h:i:s A', strtotime($content->updated_at))}} </td>
                                  


                                    {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                    {{-- <td><img src="{{ asset('images/'.$item->image) }}" width="60%" class="img-circle alt=" title=""></td> --}}



                                    <td>
                                        <a href={{url('admin/editcontent/'.$content->id)}} class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> </a>
                                    </td>
                                    <td>
                                        <a href={{url('coach/home')}} target="_blank" class="btn btn-success btn-sm" > <i class="fa fa-eye" aria-hidden="true"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- @if($document->count()== 0)
                    <div class="nodata_found">
                        <img src="{{asset('/public/4n61/images/no_data.svg')}}" alt="">
                    </div>

                    @endif
                    <span>{{ $document->links() }}</span>
                    <style>
                        .w-5 {
                            display: none;

                        }
                    </style> --}}



                </div>

            </div>

        </div>
    </div>


    @endsection