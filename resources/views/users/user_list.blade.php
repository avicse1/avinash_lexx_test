@extends('layout.header')
@section('section')
<section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0-bottom">
                        <div class="row mb-2">
                            <div class="col-6">
                                <h5 class="card-title"><b>All User's Profile <small>( Total User's: 2000 )</small></b></h5>
                            </div>
                            <div class="col-6 text-right">
                                <div class="user-btn">
                                    <a href="{{route('add_user')}}">Add a user</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-bordered zero-configuration min-width-auto" id="user_list">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>User Name</th>
                                            <th>Email ID</th>
                                            <th>Reg. Date</th>
                                            <th>Post code</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr class="{{$user->is_blocked == 'yes' ? 'blocked_user' : 'unblocked_user'}}">
                                            <td>
                                                <div class="user-tab-img">{{$user->profile_photo}}</div>
                                            </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->is_blocked}}</td>
                                            <td>{{$user->postal_code}}</td>                                            
                                            <td>
                                                <div class="action-buttons new_acbtn">
                                                    <ul class="d-flex">
                                                        <li><a href="#" title="Edit" class="edit_btn" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="{{route('delete_user', $user->id)}}" title="Delete" class="del_btn"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                        <li><a href="{{route('block_user', $user->id)}}" title="{{$user->is_blocked == 'yes' ? 'Unblock' : 'Bblock'}}" class="edit_btn" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-ban"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#user_list').DataTable( {
            } );
        } );
    </script>
@endsection