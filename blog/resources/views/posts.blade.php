@section('title') 
Posts
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-7 col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">                
                <!-- My Notifications Start -->
                <div class="tab-pane fade show active" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                    <div class="card m-b-30">
                        <!-- <div class="card-header">                                
                            <h5 class="card-title mb-0">Posts</h5>
                        </div> -->
                        <div class="card-body">
                            <div class="ecom-notification-box">
                            @if(session('succes'))
                                    {{session('success')}}
                            @endif
                            @if(session('error'))
                                    {{session('error')}}
                            @endif
                                <div>
                                <form action="{{route('post')}}" method="post">
                                        @csrf
                                                                            
                                        <div class="form-group">
                                        <textarea class="form-control" name="body" id="body" cols="30" rows="3"></textarea>
                                        </div>                                     
                                      <button type="submit" class="btn btn-success btn-xs font-18">Submit</button>
                                    </form>
                                </div>
                                <ul class="list-unstyled">
                                    @auth
                                    @if($posts->count())
                                    @foreach($posts as $post)
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-award"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">{{$post->user->name}}</h5>
                                            <p class="my-3">{{$post->body}}</p>
                                            <p><span><small>{{$post->likes->count()}}  {{Str::plural('Like', $post->likes->count())}} </small></span> <br>        
                                            @if(!$post->likedBy(auth()->user()))
                                            <span class="badge badge-danger-inverse">
                                                <form action="{{route('post.like', $post)}}" method='post'>
                                                @csrf
                                                <input type="submit" class='link' value='Like'>
                                                </form>
                                            </span>
                                            @endif
                                            @if($post->likedBy(auth()->user()))
                                            <span class="badge badge-info-inverse">
                                            <form action="{{route('post.unlike', $post)}}" method='post'>
                                            @csrf
                                            <input type="submit" class='text' value='Unlike'>
                                            </form>
                                            </span>
                                            @endif
                                            <span class="timing">{{$post->created_at->diffForHumans()}}</span></p>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    <div>No posts</div>
                                    @endif
                                    @endauth
                                    @guest
                                    <div>
                                        Guest user
                                    </div>

                                    @endguest
                                    <!-- <li class="media">
                                        <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-calendar"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Nobita Applied for Leave.</h5>
                                            <p class="my-3">Nobita applied for leave due to personal reasons on 22nd Feb.</p>
                                            <p><span class="badge badge-success">APPROVE</span><span class="badge badge-danger">REJECT</span><span class="timing">Yesterday, 05:25 PM</span></p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-alert-triangle"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Alert</h5>
                                            <p class="my-3">There has been new Log in fron your account at Melbourne. Mark it safe or report.</p>
                                            <p><i class="feather icon-check text-success mr-3"></i><a href="#" class="mr-2">Report Now</a><span class="timing">5 Jan 2019, 02:13 PM</span></p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-award"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Congratulations !!!</h5>
                                            <p class="my-3">Your role in the organization has been changed from Editor to Chief Strategist.</p>
                                            <p><span class="badge badge-danger-inverse">ACTIVITY</span><span class="timing">10 Jan 2019, 08:49 PM</span></p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Notifications End -->
            </div>                        
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->                  
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- eCommerce My Account Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
@endsection 